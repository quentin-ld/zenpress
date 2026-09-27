# ZenPress — workflow

The workflow is the harness's, and the block at the end of this file is its
authoritative description. That block is generated, so it cannot drift from the
tooling it describes.

Everything that used to be written above it described a toolchain this project
no longer has: **PHP-CS-Fixer**, **esbuild**, a private **ESLint** and
**Prettier** config, a `local-wp-cli.sh` shim reaching into Local's `sites.json`,
and a hand-written zip step. All of it was replaced by **WordPress Coding
Standards**, **`@wordpress/scripts`** and **`wp dist-archive`**, and it was
removed rather than updated because a stale instruction is worse than none.

For the commands themselves, run `bin/harness help`, or read `AGENTS.md`.

<!-- harness:start -->
## Harness commands (0.1.0)

The canonical entry point is `bin/harness`. It resolves DDEV, then LocalWP,
then the host, so the same command works in every environment:

```bash
bin/harness doctor     # backend, tools, graft, manifest
bin/harness verify     # the pre-push gate
bin/harness pot        # pot + mo + json + php
bin/harness zip        # distributable archive
bin/harness package    # build + pot + zip
bin/harness help       # everything else
```

**Tests.** This project carries the full test layer: `bin/harness test` (unit), `bin/harness integration` (real WordPress), `bin/harness coverage`, `bin/harness test:js` (Vitest) and `bin/harness e2e` (Playwright).

**Anti-tautology.** A test that cannot fail is worse than no test, because it still reports coverage. This is machine-enforced:

- `bin/harness mutation` runs Infection **on the diff only** (`--git-diff-lines`) and fails below **MSI 70**.
- `bin/harness counterfactual` substitutes one token on one changed line, runs the fastest suite that has tests, and reverts -- for the lines Infection cannot reach.
- `bin/check-test-antipatterns.php` runs on every commit. It is a tokenizer scan, not a style opinion, and it **blocks**: `assertTrue(true)` and friends on literals, `markTestSkipped()` with no reason, `expectException()` with no message, and any assertion inside a `try {} catch {}`.

A test that survives a mutation is a finding to fix, not a warning to note.

Enable the hooks once per clone:

```bash
git config core.hooksPath .githooks
```

The tables in this file describe what each gate runs; `bin/harness` is what
actually runs it. When the two disagree, `bin/harness` wins and this file is
wrong.
<!-- harness:end -->
