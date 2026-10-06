---
name: updater
description: >-
  Give a harness project its own GitHub-releases update checker: the Composer
  dependency, the name of the release archive, the per-project credential, the
  release workflow, and the five checks that catch an updater which is silently
  doing nothing. Use when a project should install its own releases, when a
  release is published and never offered, or when a hand-copied update checker
  should move to vendor/.
---

# Updater — a project that installs its own releases

What this produces: the project carries `yahnis-elsts/plugin-update-checker` as a
Composer dependency, an authenticated check against its own private repository,
and a release archive that the checker can actually see. What it costs: one
credential per site, and a release workflow that has to be right in three places
at once.

**Proven on a theme** (`holdmywp-theme`, 2026-10). The **plugin** branch is the
same mechanism with two substitutions, marked `PLUGIN:` below; it has been
reasoned rather than walked, so check it first when you use it. Everything else
here happened.

Read `~/_DDEV/_harness/harness/docs/adr/0028` and `0029` for the evidence behind
§1 and §2 if a step looks arbitrary — it is not.

## 0 · Three facts, before anything

| fact | how to get it | what it decides |
|---|---|---|
| Is the repository private? | `curl -s -o /dev/null -w '%{http_code}' https://api.github.com/repos/<owner>/<repo>` — `404` means private *or* renamed; confirm which | A **public** repository needs no credential at all: drop all of §3's token chain and register the checker unconditionally |
| Does it publish to WordPress.org? | a `.wordpress-org/` directory in the project root | `.org` ships its own updates. A GitHub checker on top of one means deciding which wins, so **do not add one without the owner saying so** (`zenpress` and `updatronix` are in this position) |
| What directory is it **deployed** as? | the site's `wp-content/{themes,plugins}/` — not the checkout's name | This is §2, and it is the step that fails silently. `holdmywp-theme` deploys as `holdmywp` |

Also: one **fine-grained, read-only token per project**, scoped to that project's
repository (`Contents: Read`, `Metadata: Read`). Never a token shared across
projects — a leak then costs read access to one repository instead of all of them.

## 1 · The library is a dependency, not a copy

```bash
bin/harness composer require yahnis-elsts/plugin-update-checker:^5.7
bin/harness composer show yahnis-elsts/plugin-update-checker   # confirm v5.7
```

The harness reads `composer.json`'s `require` and derives
`PROJECT_SHIPS_VENDOR` — no declaration, no flag. From that moment `bin/harness
zip` keeps `vendor/`, installs a `--no-dev` tree into it for the duration of the
archive, and refuses an archive that is not a `--no-dev` install. Nothing else in
the fleet changes, because nothing else requires a package.

**If a hand copy exists** (`inc/plugin-update-checker/`, `lib/`, anywhere):

- Do not assume Composer gives you what the copy has. A copy is often a
  *cosmetically modified* tag — `holdmywp-theme`'s was the v5.7 tag run through
  `php-cs-fixer`, and `composer.json` alone cannot tell you that. Normalise both
  sides before deleting anything: strip comments and whitespace, map
  `array(…)`/`[…]` to one form, and compare. Then check the other direction —
  `master` may carry lines the copy lacks, which is how you know the copy is the
  release and not a revision ahead of it.
- `git rm -r <the copy>`, and delete any `.distignore` line that named it.

## 2 · The archive's name — the step that fails silently

The checker filters release **assets** by *file name*. `bin/harness zip` writes
`${PROJECT_ARCHIVE_NAME}.zip` and roots the archive at the same name, where
`PROJECT_ARCHIVE_NAME` is the project directory unless `.harness/archive` says
otherwise (one line, the project's name, nothing else).

Three things must agree, and **nothing compares them**:

1. `enableReleaseAssets()`'s regex in the wiring file (§3);
2. `files:` in `.github/workflows/build-release.yml`;
3. `bin/harness zip`'s output name, which is `.harness/archive` or the directory.

If the deployed directory differs from the checkout directory, write
`.harness/archive` — that is the whole mechanism (`wp dist-archive` roots an
archive at `basename(realpath($path))` and has no flag for it, so the runtime
stages a hardlink farm under the declared name to build it).

A mismatch is **not** an error anywhere. `REQUIRE_RELEASE_ASSETS` makes the
checker discard the release, and the Themes/Plugins screen renders that as "you
have the latest version". This has already cost one project three releases.

## 3 · The wiring file

One file, included from `functions.php` (`theme`) or the main plugin file
(`plugin`). Keep it small and keep the reasoning in comments — it is the file
that decides which code the site installs.

```php
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
use YahnisElsts\PluginUpdateChecker\v5p7\Vcs\Api;
use YahnisElsts\PluginUpdateChecker\v5p7\Vcs\GitHubApi;
use YahnisElsts\PluginUpdateChecker\v5p7\Vcs\ThemeUpdateChecker;   // PLUGIN: PluginUpdateChecker

defined( 'ABSPATH' ) || exit;

// A checkout before its first `composer install` has no autoloader. No updater is
// correct then; a blank front end never is.
$autoloader = __DIR__ . '/../vendor/autoload.php';
if ( is_readable( $autoloader ) ) {
	require_once $autoloader;
}
```

**The credential** — the constant is named after the project's prefix
(`hmwp_` → `HMWP_GITHUB_TOKEN`; `updatronix_pro_` → `UPDATRONIX_PRO_GITHUB_TOKEN`).
The architect skill's rule applies: confirm the prefix with the owner rather than
trusting the text-domain derivation.

```php
$token = '';
if ( defined( 'PREFIX_GITHUB_TOKEN' ) ) {
	$token = (string) PREFIX_GITHUB_TOKEN;
} elseif ( false !== getenv( 'PREFIX_GITHUB_TOKEN' ) ) {
	$token = (string) getenv( 'PREFIX_GITHUB_TOKEN' );
}
$token = (string) apply_filters( 'prefix_update_token', $token );

if ( '' === $token ) {
	// Do NOT register a checker without one: a private repository answers 404,
	// PUC reads a 404 as "no release", and the screen then says the site is up to
	// date. Say so instead, or the failure is invisible.
	add_action( 'admin_notices', /* escaped, manage_options-only, one string */ );
	return;
}
```

Then:

```php
$checker = PucFactory::buildUpdateChecker(
	'https://github.com/<owner>/<repo>/',
	get_stylesheet_directory() . '/style.css',        // PLUGIN: __FILE__, or the main plugin file
	'<slug>'
);
$checker->setAuthentication( $token );
$checker->getVcsApi()->enableReleaseAssets( '/<archive-name>\.zip$/i', Api::REQUIRE_RELEASE_ASSETS );
```

Four things about that block, each learned the hard way:

- **`PLUGIN:`** a plugin passes the *plugin file*, not `style.css`: PUC reads the
  plugin headers from it. `bin/harness env` does not print it, but the generator
  names it — `<slug>.php` in the project root, e.g. `updatronix-pro.php`.
- **Type the values instead of suppressing the findings.** `buildUpdateChecker()`
  returns a three-way union and only one member declares `setAuthentication()` and
  `getVcsApi()`, so PHPStan reports both; and `getVcsApi()` is annotated as
  returning `Api`, which does not declare `enableReleaseAssets()`. Two docblocks —
  `@var ThemeUpdateChecker $checker` and `@var GitHubApi $vcs` — clear all three
  and keep `.config/phpstan-project.neon` free of `ignoreErrors` entries, which is
  the rule that file states.
- **WPCS**: every docblock needs a short description, so a one-line
  `/** @var X $y */` fails as *"Missing short description in doc comment"* — write
  it as a real docblock. Two block comments with no blank line between them fail
  as *"Empty line required before block comment"*.
- The pattern above uses a plain `$` anchor; `make-pot`-style `($|[?&#])` also
  works and was the historical form. What matters is that it matches the **file
  name** the workflow uploads, exactly.

## 4 · Take the old exclusions out

A hand copy was excluded from the linters by hand. Those entries are now wrong,
and leaving them hides the wiring file:

- `.config/phpcs-project.xml` — drop the `exclude-pattern` for the copy **and**
  for the wiring file. The generated `.config/phpcs.xml` already excludes
  `*/vendor/*`.
- `.config/phpstan-project.neon` — drop the `scanDirectories`, the `analyse`
  exclusions, and any `ignoreErrors` entry about a PUC method. Composer's
  autoloader resolves the library; nothing replaces them.

Then `bin/harness lint` and fix what surfaces. Do not re-add an exclusion for the
wiring file: it is the file that decides which release the site installs.

## 5 · The release workflow

`.github/workflows/build-release.yml` is **hand-written** — the generator owns no
part of `.github/`. Its job: build the archive on a published release and attach
it under the name from §2.

- `on: release: types: [published]` **plus** `workflow_dispatch` with a `tag`
  input. A bare `git push origin <tag>` triggers **nothing**, and a release with
  no matching asset is indistinguishable from "up to date".
- `actions/checkout` with its `ref` set to the release's tag name, falling back to
  the `tag` input for a manual run. (Write it as an expression in the workflow —
  a skill body may not contain one, because a skill is rendered through the same
  token pipeline the harness uses, and a literal double brace is an unresolved
  token.)
- `HARNESS_BACKEND: host` — no `.ddev/` on a runner, stated rather than detected.
- `files:` must be the §2 name, and say so in a comment: it is half of a coupled
  pair that fails silently.
- **The credential gotcha, which will bite every project that uses `setup-php`
  with a `github-token`.** That action writes the token into Composer's
  `auth.json` as a `github-oauth` credential; Composer wants the 40-character
  classic form, and an Actions installation token is a `ghs_` string, so any
  Composer operation that *uses* it dies with

  ```
  Failed to get composer instance: Your github oauth token for github.com
  contains invalid characters
  ```

  `bin/harness zip` is such an operation on its first step: it installs
  `wp dist-archive` as a WP-CLI package, and a package install registers its
  GitHub repository. Fix it with a step before the build — Composer's own remedy,
  which `composer diagnose` prints when it finds the token:

  ```yaml
  - name: Remove the github-oauth token Composer will not accept
    run: composer config --global --unset github-oauth.github.com || true
  ```

- To re-run a release whose workflow was broken: use **`workflow_dispatch` from
  the default branch**. The workflow *definition* comes from the ref you dispatch
  from, while `actions/checkout` still builds the tag — so a fixed workflow can
  build an already-tagged release. Re-publishing the release, or re-running failed
  jobs, reuses the tag's own copy of the workflow.

## 6 · Verify — the five checks that catch a silent updater

1. **The archive, by inspection.** `bin/harness zip`, then assert on the file:
   the root directory is the §2 name and nothing else; `vendor/autoload.php` is
   present; no development package path (`phpstan|phpunit|squizlabs|infection`)
   appears. `bin/harness zip` does the last two itself and prints what it checked.
2. **Against a baseline.** `git worktree add --detach ../.baseline/<name> HEAD`
   before you start, build the archive there too, and compare the two entry lists
   with their root prefixes stripped. This is the only thing that shows a file
   quietly leaving the archive. Remove the worktree afterwards.
3. **`bin/harness lint` clean with the §4 exclusions deleted.**
4. **The runtime, on a site that runs the project.** Activate it, then a
   `wp eval-file` probe that asserts: the autoloader is readable, PUC's classes
   exist, the notice branch fired with no token, and — with a token defined — the
   checker is an instance of the class your `@var` claims and its
   `assetFilterRegex` **matches the archive's actual file name** and does not
   match the old one.
5. **The release, after publishing.** `gh release view <tag> --json assets` must
   list the asset, and the update screen must then offer it. Refresh the cached
   answer first (`wp transient delete update_themes`), because a stale "up to
   date" reads exactly like a broken filter.

## 7 · The checklist

- [ ] §0 answered: private or public; `.wordpress-org/` or not; deployed directory name
- [ ] one fine-grained read-only token created, scoped to this repository
- [ ] `bin/harness composer require yahnis-elsts/plugin-update-checker:^5.7`
- [ ] any hand copy deleted, its `.distignore` line removed, its provenance checked
- [ ] `.harness/archive` written if the deployed name is not the checkout name
- [ ] the wiring file written: guarded autoloader, token chain, empty-token signal, `enableReleaseAssets`
- [ ] the code's asset pattern, the workflow's `files:`, and the archive name agree
- [ ] §4 exclusions deleted; `bin/harness lint` clean; no new `ignoreErrors`
- [ ] `bin/harness zip` verified (§6.1) and diffed against a baseline (§6.2)
- [ ] `.github/workflows/build-release.yml`: release + dispatch triggers, `host` backend, the `github-oauth` step
- [ ] the constant in each site's `wp-config.php`, **before** the first release
- [ ] the release published, the asset listed, the site offered the update
- [ ] the old credential revoked — **after** the site runs code that reads the constant
- [ ] `PROJECT_PREFIX` confirmed with the owner, and the name recorded in `AGENTS.md`

## 8 · What has already gone wrong here

| symptom | cause |
|---|---|
| Every release published, none ever offered | the packager named the archive after the checkout while the checker filtered for the deployed name. `REQUIRE_RELEASE_ASSETS` turns that into "up to date" |
| A vendored library present in one archive and absent from the next | `.distignore`'s `vendor` compiled to `*/vendor/*` only while a root `vendor/` existed, and the prune moved that root aside *before* the pattern was read: the exclusion and the prune were each hiding the other's absence |
| The release job fails before it builds anything | `GITHUB_TOKEN` written into Composer's `auth.json` as a `github-oauth` credential Composer rejects (§5) |
| A site cannot reach a private repository at all | the token was revoked before the site ran code that reads the constant. Revoke after, never before |
| Three `ignoreErrors` entries in `.config/phpstan-project.neon` for a library that is not analysed | the vendored copy needed them; the Composer dependency does not. Type the values instead |
| `Report-Msgid-Bugs-To` naming a slug that does not exist | `make-pot` defaults `--slug` to the *directory* name. The runtime passes `PROJECT_ARCHIVE_NAME`, so a project with `.harness/archive` gets the right one for free |
| A version bump that also rewrote `package.json`'s version, or added a `Stable tag` nobody reads | the release skill's lockstep list is the fleet's baseline, not a description of the project. Check each place the version is written against the project's history before following it |
