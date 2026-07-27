# Tasks — active and completed task execution files

This folder stores **date-stamped task files** for the current project. It is **NOT committed to git** — it lives alongside `notes/` as project-local state.

## Workflow

The `/architect` skill creates and maintains task files automatically. You do not copy templates manually.

1. Start a dev thread with `/architect` and describe the change.
2. The agent researches the codebase, creates `.agents/tasks/YYYY-MM-DD-<type>-<slug>.md`, and waits for your approval.
3. After you confirm, the agent executes tasks, runs lint, and logs progress in the same file.
4. Keep completed task files here as an immutable execution record — do not delete them.

Templates in `.agents/templates/` are reference patterns only. The agent writes task files from scratch using the format in `skills/architect/SKILL.md`.

## Naming convention

`YYYY-MM-DD-{type}-{slug}.md`

Examples:
- `2026-04-02-bug-fix-nonce-missing-on-settings-form.md`
- `2026-04-02-feature-locale-aware-plugin-description.md`
- `2026-04-02-behavior-adjustment-auto-update-toggle-default.md`
- `2026-04-02-code-review-rest-api-handlers.md`
- `2026-04-02-new-feature-export-log.md`

## Status tracking

Each task file includes frontmatter with a `status` field (`planning`, `in-progress`, `complete`) and checklists the agent updates as work progresses.

Use `cancelled` with a brief reason in the log if the task is abandoned.

## Retention

Completed task files are **never deleted**. They serve as an audit trail of what was executed, when, and with what outcome. Agents may append to `## Log` and `## Feedback` but must not modify the original goal or task list without owner approval.
