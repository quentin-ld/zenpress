> **Routing note:** The `task-type:` header on line 1 of each template is informational. Routing is manual: invoke `/architect` for dev work, `/resume` to continue, `/reviewer` for integration review, `/security` for audits, and `/release` for releases.

# Task prompt templates

Files named `TASK_*.md` in this folder are **read-only reference patterns**. They are never edited directly — the `/architect` skill creates dated task files in `.agents/tasks/` from scratch.

## Workflow

1. **Start** a dev thread with `/architect` and describe the change.
2. The agent **creates** `.agents/tasks/YYYY-MM-DD-<type>-<slug>.md` (with `Session checkpoint` for long sessions) using these templates only as structural reference.
3. You **review** the plan, then approve execution.
4. To resume or review later, **attach** the task file in a new thread (e.g. `@.agents/tasks/2026-04-02-bug-fix-nonce-missing.md`).

The `TASK_*.md` files in this folder stay unchanged so they remain available as reference patterns.

## Which pattern matches your change

| File | Use when |
|------|----------|
| `TASK_NEW_FEATURE_EXAMPLE.md` | Net-new capability |
| `TASK_FEATURE_MODIFICATION_EXAMPLE.md` | An existing feature changes in scope or behavior |
| `TASK_BUG_FIX_EXAMPLE.md` | Observed behavior contradicts agreed spec or tests |
| `TASK_CODE_REVIEW_EXAMPLE.md` | Multi-dimensional code quality audit without changing product behavior |
| `TASK_BEHAVIOR_ADJUSTMENT_EXAMPLE.md` | Code matches spec; you want alignment with intent (defaults, copy, order) |
| `TASK_REFACTORING_EXAMPLE.md` | Structural code improvement with no behavior change |
| `TASK_PERFORMANCE_AUDIT_EXAMPLE.md` | Profile and optimize: query count, asset weight, caching strategy |
| `TASK_SECURITY_AUDIT_EXAMPLE.md` | Focused security review: escaping, sanitization, nonces, capability checks |
| `TASK_ACCESSIBILITY_AUDIT_EXAMPLE.md` | WCAG 2.1/2.2 AA review: keyboard nav, ARIA, contrast, focus management |
| `TASK_I18N_EXAMPLE.md` | Internationalization: translatable strings, JS translations, POT generation |
| `TASK_TESTING_EXAMPLE.md` | Write or fix automated tests: PHPUnit, Jest, Playwright E2E |
| `TASK_DOCUMENTATION_EXAMPLE.md` | PHPDoc, JSDoc, comments, `readme.txt`, in-admin help — style rules in `.agents/docs/wordpress-documentation-style-guide-consolidated.md` and `AGENTS.md` |

The **first line** of each template (`task-type: ...`) documents the task type for human readers and historical task files.

**Note:** Release work (version bump, changelog promotion, `Stable tag:` synchronisation, packaging) is owned by the `/release` skill. There is no dedicated template — invoke `/release` once every cycle task is signed off; see `.agents/skills/release/SKILL.md`.

## Template structure

Every template follows a consistent section order:

1. **Task type header** (line 1) — `task-type: <type>` for readers and historical task files.
2. **Purpose comment** (HTML) — when to use this template.
3. **YAML frontmatter** — `type`, `slug`, `date`, `agent-hint`, `priority`.
4. **Status** — Pending / In progress / Done.
5. **Summary** — one-paragraph task description.
6. **Context** — what the agent needs to know before starting.
7. **Task-specific sections** — domain-appropriate detail (varies by type).
8. **Out of scope** — explicit guard against scope creep.
9. **Acceptance criteria** — observable, testable "done" conditions.
10. **Rollback** (structural/destructive templates only) — how to revert safely.
11. **References** — links to relevant `.agents/docs/docs-library.md` sections.
12. **When to use this template instead of X** — disambiguation against overlapping templates.
13. **Optional sections** — additional context that speeds up agent work.
