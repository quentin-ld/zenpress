---
name: architect
description: >-
  Full dev cycle. Planning tier for clarify and plan; worker tier after
  approval for autonomous execution, tiered lint, thread rotation, and
  feedback fixes. Start every change here.
---

# Architect

Single skill, two model tiers:

- **Planning tier** (Phases 1–3): clarify the requirements, research the codebase, create the plan and task file
- **Worker tier** (Phases 4–5): execute the task file, run lint checks, fix feedback issues

Reply in US English. Follow the WordPress Documentation Style Guide for all user-facing prose.

## Phase 1 — Clarify

If requirements are unclear, ask **one grouped message**. Skip if already clear.

## Phase 2 — Research

Read only what you need:

1. Relevant `inc/` and `assets/src/` files
2. `.agents/notes/` for the same slug
3. `workflow.md` for commands

**Reference docs** (`.agents/docs/`): never load whole files. Grep one section at a time. The WordPress Documentation Style Guide is at `.agents/docs/wordpress-documentation-style-guide-consolidated.md`.

## Phase 3 — Plan (planning tier)

Create `.agents/tasks/YYYY-MM-DD-<type>-<slug>.md`. Generate `uid` from the current time if known (YYYYMMDD-HHMMSS); otherwise use the date plus a random suffix (YYYYMMDD-<random>).

```markdown
---
type: <type>
slug: <kebab-case>
date: YYYY-MM-DD
uid: YYYYMMDD-<random>
status: planning
review_required: yes | no
risk: []
---

## Goal
## Context
## Tasks
- [ ] 1. ...

## Edge cases
- [ ] 1. ...

## Session checkpoint
## Log
## Feedback
```

Enumerate **3–5 edge cases** relevant to the change; ensure the task plan covers each. REST/SQL/auth/user-input surfaces must cover at minimum: missing/invalid input, capability/nonce failure, and the empty/oversize boundary.

Set `review_required: yes` and `risk:` per `AGENTS.md` when REST, SQL, auth, export, multisite, user input, or new admin UI is involved.

Show a **~10-line summary** of the plan. End with: "Ready to start, or would you like to adjust anything?"

**Ambiguous SQL/auth/REST design:** Tell the user to re-run the planning phase on **audit** tier before any coding begins.

## Phase 4 — Execute (worker tier)

On approval, run all tasks in order.

### Lint tiers

| Task touches | Lint |
|--------------|------|
| REST, SQL, auth, sanitization, PHP logic, JS/React | **Immediate** after task: run `composer run verify:php` and `npm run lint` + `npm run lint:css` |
| Comments, docs, pure CSS, no new surface | **Batch** every **5** tasks |
| All tasks done | Run `npm run test:all` |

When lint is skipped, say: "Lint skipped — no PHP/JS surface changed."

### Re-evaluate review_required after implementation

After all tasks are done, compare the actual code against the task file's `review_required` and `risk` frontmatter. If the implementation touches a surface (REST, SQL, auth, user input, export, multisite, new admin UI) that the plan did not flag, update the frontmatter. This ensures the review gate matches what was actually shipped.

### Thread rotation

After **3 tasks** or **~20 turns**, update `## Session checkpoint` and tell the user: start a new **worker** tier thread with `/resume` and this task file.

### Retry ceiling

After **3 failed attempts** on the same task (any failure type — lint fail, failing test, reviewer blocker, or any error that prevents task completion), **STOP and re-plan** — update `## Tasks` and `## Log`, tell the user what's wrong. Do not grind past three iterations. Different error types on the same task accumulate toward the same ceiling.

### Self-review before "done"

Before reporting completion: silently argue against your own solution (redundancy, unused code, simpler alternative, missed edge case). Fix or note anything surfaced. Then report with a one-line self-review note: "Self-review: checked [redundancy/unused code/edge cases/alternatives] — nothing surfaced" or "Self-review: noted [issue] — see Log."

### Stop conditions

Stop only for uncovered design decisions, frozen documentation, version bumps, or major scope creep.

### Completion message

On completion: `status: done`, full test gate, one-line summary of what was done and what files changed. Ask user to test.

## Phase 5 — Feedback (worker tier)

Fix reported issues; append to `## Feedback`.

When stable:

- `review_required: yes` → "Open `/reviewer` on **audit** tier (planning tier OK only for low-risk optional review)."
- Else → "Review optional; ship when satisfied."

## Implementation reflexes

ABSPATH guard · `zenpress_` hooks · REST `current_user_can()` · `$wpdb->prepare()` · sanitize in / escape out · docblocks on public surfaces · never reword existing i18n strings.