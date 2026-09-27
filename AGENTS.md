# ZenPress — Agent Instructions

## Communication

Messages may arrive in French or English. **Always reply in US English.** WordPress prose style: the fleet's `wordpress-documentation-style-guide-consolidated.md` mirror (look a section up with `./bin/harness docs find "<query>"` — never load the full file).

**Reply verbosity:** Conclusion first, then evidence. No preamble ("Here's what I'll do…"), no recap ("I did X. Done with X."), no closing remarks ("Let me know if…"). Action over explanation. Scale detail to complexity — 1–4 lines unless the task needs more. **Stop when done**; do not offer follow-ups.

## Project Facts

| | |
|---|---|
| Slug & text domain | `zenpress` |
| Bootstrap | `zenpress.php` → direct `require_once` calls (no class-based bootstrap) |
| Version | `ZENPRESS_VERSION` in `zenpress.php` |
| PHP / WP | 8.1+ (target 8.1–8.4) · 6.0+ |
| REST | `zenpress/v1` |
| Public hooks | `do_action('zenpress_caches_clear')` · `apply_filters('zenpress_disable_wp_rest_api_*')` |
| Code | `inc/core/` · `inc/classes/` · `inc/admin/` · `inc/settings/` · `inc/snippets/` · `assets/src/` → `assets/build/` · `languages/` |
| Storage | `zenpress_settings` (option, autoloaded) · `zenpress_{snippet}_active` options |
| Build & test | `workflow.md` |

## Workflow — Delegate, Don't Micromanage

You describe the outcome. The agent plans, implements, lints, logs, and fixes from your test feedback. **You approve the plan once, then test.**

**Knowledge boundary:** Never guess paths, APIs, or commands. If uncertain, verify with a tool before claiming or acting. State clearly when a request exceeds available context (KBT).

| Step | You | Agent |
|------|-----|-------|
| 1 | `/architect` + describe change | Clarify → plan → create task file |
| 2 | "go" / adjust plan | Execute all tasks autonomously |
| 3 | Test in Local | Fix issues from your notes |
| 4 | Done testing | `/reviewer` if required (see below) |
| 5 | Release ready | `/release` after explicit version authorization |

## Model Tiers

Skills define **what** to do. **Model tier** defines **which capability level** to use per thread. Tier names are abstract — you pick the model that matches the tier.

| Tier | Use when | Typical skills / phase |
|------|----------|-------------------------|
| **Planning** | Answer not yet in the task file — clarify, design, trade-offs, ambiguous scope | `/architect` Phase 1–3 (plan) · low-risk `/reviewer` |
| **Worker** | Task file is the contract — implement, lint, fix, rotate threads | `/architect` Phase 4–5 (execute) · `/resume` · `/release` |
| **Audit** | Judge only — no implementation; security and integration gates | `/reviewer` when required · `/security` always · `/qa` always |

**Rules**

- **Planning** before the plan is approved; switch to **worker** after you say `go`.
- **Worker** for all `/resume` rotation threads.
- **Audit** for `/security` always. For `/reviewer`: **audit** when `review_required: yes` or `risk` includes `rest`, `sql`, `auth`, `export`, or `multisite`; otherwise planning tier is enough.
- Ambiguous SQL/auth/REST **design** during planning: stop and re-run planning on **audit** tier before coding.

Record the tier used in review/security note frontmatter (`model_tier: planning | worker | audit`), not vendor SKUs.

## Token Optimization

Every token costs. These rules keep context lean and runs fast.

**Read strategy:** grep first → read only needed sections → never re-read a file you just wrote. **Parallelize independent reads and searches** in a single response — do not serialize file reads that have no dependency on each other.

**Lint economy:**

| Task touches | Lint |
|--------------|------|
| REST, SQL, auth, sanitization, PHP logic, JS/React | **Immediate** after task |
| Comments, docs, pure CSS, no new surface | **Batch** every up to **5** tasks |
| All tasks done | `npm run test:all` |

**Skip irrelevant commands:**

- No `composer run make:pot` unless i18n strings changed
- No `npm run build` unless `assets/src/` changed
- No `npm run lint:css` unless SCSS changed
- No `composer run verify:php` unless PHP changed

When lint is skipped, say so: "Lint skipped per economy rules (no PHP/JS surface changed)."

**Reference docs:** grep one `## Section` only — never load whole `.agents/docs/` mirrors.

## Thread Rotation

Chat history is not memory. The **task file** is.

Rotate to a **new thread + `/resume`** when any trigger fires:

- **3 tasks** completed in one thread (worker tier)
- **~20 agent turns** in one thread
- End of your work day or before a long break
- Context feels stale (agent repeats questions or forgets decisions)

Before rotating, update `## Session checkpoint` (last task done, files touched, open decisions, review required).

In the new thread: `/resume` + `@.agents/tasks/YYYY-MM-DD-<type>-<slug>.md` on a **worker** tier.

## Reference Docs — Available, Not Mandatory

Large mirrors live in `.agents/docs/`. **Never read an entire mirror file.**

| File | Size | How to use |
|------|------|------------|
| `docs-library.md` | ~1.2k lines | Read **one** `## Section`. It is the curated half; the fetched page text is the fleet mirror. |
| the fleet's `wordpress-documentation-style-guide-consolidated.md` mirror | ~35k lines | Look a section up (`./bin/harness docs find "<query>"`) when writing user-facing prose; it is not in this repository. |

Default: read **`inc/` source** and **`workflow.md`** first. Open docs only when the API or style rule is unclear.

## Task File — External Memory

Path: `.agents/tasks/YYYY-MM-DD-<type>-<slug>.md`

Sections: `Goal` · `Context` · `Tasks` · `Session checkpoint` · `Log` · `Feedback`

Frontmatter may include `review_required`, `risk`, and `model_tier` hints for hand-off.

The agent creates and maintains this file. Templates in `.agents/templates/` are reference only.

Deliverables per feature: **one task file** + **one review note** (when required) at `.agents/notes/YYYY-MM-DD-review-<slug>.md`.

## Review — Required vs Optional

**`/reviewer` required** when the change touches any of:

- REST routes, Ajax handlers, or export/download flows
- SQL, custom tables, transients, or option schema
- Capabilities, auth, multisite, or role checks
- User input (forms, email, file paths, redirects)
- Admin UI with new interactive controls (a11y surface)

**Optional** (agent may skip if you agree): comments/PHPDoc only, pure SCSS cosmetics, typo/copy wrapped in i18n with no logic change.

When required, the architect sets `review_required: yes` in task frontmatter and re-evaluates after implementation — if the actual code touches a high-risk surface that the plan didn't anticipate, the frontmatter must be updated.

## Build & Lint Reference

| Command | When |
|---------|------|
| `composer run verify:php` | PHP changes (CS Fixer + PHPStan + unit tests) |
| `npm run lint` / `npm run lint:css` | JS / SCSS |
| `npm run test:all` | End of dev cycle |
| `composer run lint:pcp` | Pre-release |
| `composer run make:pot` | i18n strings added/changed/removed |
| `npm run build` | Production assets |

## Hard Rules

**i18n** — Never reword strings inside `__()`, `_e()`, `_n()`, `_x()`, `esc_html__()`, `esc_attr__()`. Text domain stays `zenpress`. Intentional string change: flag in chat + changelog entry + wait for confirmation.

**Version** — Never bump `ZENPRESS_VERSION`, headers, `Stable tag:`, or package versions without explicit owner authorization in the current conversation.

**Files** — Never delete `.agents/tasks/` or `.agents/notes/` without owner confirmation. Stay in task scope.

## Maintenance — Monthly Rule Review

Review `AGENTS.md` and skills monthly. Short checklist:

- Are rules still relevant to the current `inc/` structure?
- Any repeated agent mistakes that need a new one-line rule?
- Any redundant or dead rules to prune?
- Token size creeping? Trim explanatory text, keep imperative directives.

Do **not** rewrite for style. Only change rules to fix observed agent behavior.

Human playbook: `.agents/HOW_TO_USE.md`.

<!-- harness:start -->
## Harness runtime (0.1.0)

Every tool goes through `bin/harness`. It resolves the execution backend for
you, in this order: **DDEV**, then **LocalWP**, then the host.

```bash
bin/harness doctor          # backend, tools, graft, manifest — run this first
bin/harness env             # resolved paths
bin/harness help            # every command
```

**Never call `php`, `composer`, `node`, `npm` or `wp` directly.** The host has
neither Node nor PHP installed; a direct call fails in a way that looks like a
broken project rather than a broken environment.

| need | command |
|---|---|
| standards + static analysis | `bin/harness lint` |
| autofix | `bin/harness lint:fix` |
| code graph | `bin/harness graft ask "<question>" --source` |
| translations | `bin/harness pot` |
| distributable | `bin/harness zip` / `bin/harness package` |

**Tests.** This project carries the full test layer: `bin/harness test` (unit), `bin/harness integration` (real WordPress), `bin/harness coverage`, `bin/harness test:js` (Vitest) and `bin/harness e2e` (Playwright).

**Anti-tautology.** A test that cannot fail is worse than no test, because it still reports coverage. This is machine-enforced:

- `bin/harness mutation` runs Infection **on the diff only** (`--git-diff-lines`) and fails below **MSI 70**.
- `bin/harness counterfactual` substitutes one token on one changed line, runs the fastest suite that has tests, and reverts -- for the lines Infection cannot reach.
- `bin/check-test-antipatterns.php` runs on every commit. It is a tokenizer scan, not a style opinion, and it **blocks**: `assertTrue(true)` and friends on literals, `markTestSkipped()` with no reason, `expectException()` with no message, and any assertion inside a `try {} catch {}`.

A test that survives a mutation is a finding to fix, not a warning to note.

`bin/harness graft` is the one exception to the container rule: graft is an
nvm-installed Node binary, so it runs on the host. The runner resolves the nvm
toolchain explicitly, because an agent shell that never sourced nvm cannot see
`graft` on `PATH` at all.

## Git hooks

Enable once per clone:

```bash
git config core.hooksPath .githooks
```

| stage | budget | contents |
|---|---|---|
| `pre-commit` | target < 10 s | staged-file lint, anti-pattern scan, unit tests when PHP changed |
| `pre-push` | target < 90 s | full lint, the suite, Infection and counterfactual on the diff |
| `pre-release` | unbounded | integration suite, Plugin Check, i18n, packaging |

The budgets are targets, not guarantees, and the hook prints what it actually
took. A suite that isolates every test in its own process costs roughly PHP
startup times the number of tests — `updatronix-pro` measures 38 s that way —
and the honest response is to move that suite to `pre-push`, never to lower the
number the gate claims.

Bypassing a hook with `--no-verify` is a hard rule violation, not a
convenience. If a gate is wrong, fix the gate and say so.

## Generated files

`bin/harness`, `bin/check-test-antipatterns.php`, `.githooks/*` and this section
are **generated** and carry a manifest in `.harness/manifest.json`. Edits are
overwritten by the next sync. Everything else in this repository is
hand-written and never touched by the generator.
<!-- harness:end -->
