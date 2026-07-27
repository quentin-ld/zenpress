task-type: behavior-adjustment

<!-- Purpose: Use this template when the code works as documented but needs alignment to the developer's stated intent — defaults, copy, ordering, guard conditions. The implementation matches the written spec or tests, but the spec was wrong or incomplete. -->

---
type: behavior-adjustment
slug: <!-- kebab-case area, e.g. settings-import -->
date: <!-- YYYY-MM-DD -->
agent-hint: fullstack
priority: <!-- low | normal | high -->
---

## Status

- [ ] Pending
- [ ] In progress
- [ ] Done

## Summary

<!-- One paragraph: what behavior is being adjusted and why it is not a bug, feature modification, or new feature. -->

## Context

<!-- The code's current behavior and the spec or intent it should match. Review `.agents/notes/` for prior decisions that may conflict. -->

## Classification (required)

<!-- Answer in one line each — keeps routing unambiguous. -->

- **Intent:** <!-- What you meant the code to do for users/admins. -->
- **What the code does today:** <!-- Observable behavior; cite spec, task file, or comment if the "spec" is informal. -->
- **Why this is not a bug:** <!-- e.g. "Matches written docblock / shipped REST schema / tests assert current behavior." -->
- **Why this is not a feature modification:** <!-- e.g. "Scope and surfaces unchanged — only semantics/naming/defaults/copy/order differ." -->

## Desired adjustment

<!-- Precise change: defaults, ordering, labels, which branch runs, guard conditions — no new endpoints or major scope. -->

## Spec / intent source of truth

<!-- What should govern after adjustment: product note, issue, Figma, prior message — so agents do not guess. -->

## Risk of breaking dependents

<!-- Themes, other plugins, documented REST — state "none known" if true. -->

## Out of scope

<!-- Explicitly what this adjustment must not touch — no new endpoints, screens, or major scope expansion. -->

## Acceptance criteria

<!-- Fill: define "done" for this adjustment. -->

- [ ] Matches behavior to **Intent** above; updates automated expectations if they encoded the old intent.
- [ ] Introduces no new user-facing capabilities beyond re-alignment (no extra endpoints, screens, or major scope expansion).
- [ ] Maintains Classification validity: change is not a defect against the *updated* agreed spec.

---

## References

- `.agents/docs/docs-library.md` — key sections: WordPress Plugin Development, WordPress Coding Standards.

## When to use this template instead of X

- **Not bug-fix** — if behavior contradicts an agreed spec or test expectation, use `TASK_BUG_FIX_EXAMPLE.md`.
- **Not feature-modification** — if the change adds scope, surfaces, or endpoints, use `TASK_FEATURE_MODIFICATION_EXAMPLE.md`.
- Use this template when the code works as documented but the documentation (or defaults/copy/order) needs alignment to stated intent.

## Optional — affected files

<!-- If already known. -->

## Optional — specialist agents

<!-- e.g. `interface-content` for copy/focus; `quality` if permission semantics shift. -->
