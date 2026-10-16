# ZenPress

ZenPress is the maintenance plugin for a WordPress site you actually have to look
after. It turns off the features a default install leaves on and nobody uses,
closes the gaps that default install leaves open, and puts the cache and security
settings usually spread across half a dozen plugins on one page.

It is for the site owner who wants fewer plugins rather than more: one screen
where the decisions live, each one explained, nothing buried behind a preset.

## Compatibility

### Requirements

<!-- harness:compat:start -->
- WordPress **6.0+** (tested up to **7.1**)
- PHP **8.1+**
- Version **2.3.0**
<!-- harness:compat:end -->

## Installation

1. Install it from the WordPress dashboard, or copy the directory into a
   WordPress install.
2. Activate it.
3. Open its settings page and work through the sections. The defaults are the
   safe ones and every switch says what it changes, so nothing here needs an
   audit before it is turned on.

ZenPress ships through WordPress.org, so updates arrive in the dashboard. The
toolchain in the Development section below is for working *on* the plugin, not
for using it.

<!-- harness:start -->
## Development

### Requirements

- PHP **8.1+** · WordPress **6.0+** · Composer · Node.js LTS + npm
- Docker. Every command runs through `bin/harness`, which resolves the backend
  for you — DDEV first, then LocalWP, then the host. Nothing needs installing.

### Setup

```bash
composer install
npm install
bin/harness setup   # one-time: dependencies and this project's toolchain
```

### Key commands

| Command | What it does |
|---------|--------------|
| `npm run test:all` | every linter, and the suites the project has |
| `npm run build:all` | `test:all`, then the `.pot`, then the bundle |
| `composer run verify:php` | the pre-push gate: standards and static analysis |
| `composer run verify:all` | the same, plus the integration suite where the project has one |
| `composer run lint:wpcs` / `npm run lint` / `npm run lint:css` | WPCS, ESLint, Stylelint — the `:fix` variants rewrite |
| `composer run lint:pcp` | Plugin Check, where the project ships through WordPress.org |
| `composer run make:pot` | regenerate `languages/zenpress.pot` |
| `npm run zip` | the distributable archive |

**Tests.** This project carries the harness's test layer: `bin/harness test` (unit), `bin/harness integration` (real WordPress, where the project has an integration suite), `bin/harness coverage`, `bin/harness test:js` (Vitest, where `tests/js/` exists), and `bin/harness e2e` (Playwright, where a config exists).

**Anti-tautology.** A test that cannot fail is worse than no test, because it still reports coverage. This is machine-enforced:

- `bin/harness mutation` runs Infection **on the diff only** (`--git-diff-lines`) and fails below **MSI 70**.
- `bin/harness counterfactual` substitutes one token on one changed line, runs the fastest suite that has tests, and reverts -- for the lines Infection cannot reach.
- `bin/check-test-antipatterns.php` runs on every commit. It is a tokenizer scan, not a style opinion, and it **blocks**: `assertTrue(true)` and friends on literals, `markTestSkipped()` with no reason, `expectException()` with no message, and any assertion inside a `try {} catch {}`.

A test that survives a mutation is a finding to fix, not a warning to note.

Assets: `npm start` to watch, `npm run build` for a one-shot bundle.

Anything without a script above goes through the runtime directly:

```bash
bin/harness doctor          # backend, tools, graft, manifest — run this first
bin/harness help            # every command
```

**Never call `php`, `composer`, `node`, `npm` or `wp` directly.** The backend is
resolved per project, and a direct call fails in a way that looks like a broken
project rather than a missing environment.
<!-- harness:end -->

## Support & Contribution

Questions, bug reports and feature requests belong in the WordPress.org support
forum, or in this repository's issues. Pull requests are welcome; read
`AGENTS.md` first, because it carries the conventions this plugin is held to and
the gates a change has to pass.
