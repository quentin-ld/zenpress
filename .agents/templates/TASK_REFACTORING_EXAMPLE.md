task-type: refactoring

<!-- Purpose: Use this template for structural code improvements that do not alter externally observable behavior — extracting classes, splitting files, reducing coupling, consolidating duplicated logic, improving testability or readability. -->

---
type: refactoring
slug: <!-- kebab-case scope id, e.g. extract-logger-class -->
date: <!-- YYYY-MM-DD -->
agent-hint: fullstack
priority: <!-- low | normal | high -->
---

## Status
- [ ] Pending
- [ ] In progress
- [ ] Done

## Summary
<!-- What structural improvement you are making and why (reduced coupling, single-responsibility, testability, readability). No user-facing behavior should change. -->

## Context
<!-- The code's current structure and its consumers. Review `.agents/notes/` for architectural decisions that constrain this refactoring. -->

## Scope
<!-- Files, classes, functions, or modules targeted for refactoring. Bound the scope to avoid creep. -->

## Refactoring goals
<!-- Check all that apply. -->
- [ ] Extract class / split file
- [ ] Reduce coupling between modules
- [ ] Improve naming / readability
- [ ] Remove dead code
- [ ] Consolidate duplicated logic
- [ ] Improve testability (dependency injection, seams)
- [ ] Align with WordPress coding standards

## Current structure
<!-- Brief description of the code's current organization and why it is problematic. -->

## Proposed structure
<!-- What the code should look like after refactoring: new files, renamed classes, moved responsibilities. -->

## Behavioral contract (must not change)
<!-- Observable behavior, public API, hook signatures, REST response shapes, stored option keys — anything downstream that must remain identical. -->

## Out of scope
<!-- What this refactoring must not attempt — no feature work, no API changes, no storage schema changes. -->

## Risk assessment
<!-- What could break: third-party dependents, multisite, caching, hook consumers. -->

## Acceptance criteria
<!-- Fill: define "done" for this refactoring. -->
- [ ] Passes all automated tests without modification (or test changes limited to internal implementation details, not behavioral expectations).
- [ ] Preserves externally observable behavior, public API, and stored data schema.
- [ ] Passes `composer run lint:php` and `npm run lint` without new violations.
- [ ] Creates notes in `.agents/notes/` if architectural decisions affect future work.

---

## Rollback
<!-- How to revert safely: revert commit, restore class/file layout — state "Git revert sufficient" if no data or schema changes are involved. -->

## References
- `.agents/docs/docs-library.md` — key sections: WordPress Coding Standards, WordPress Plugin Development, WordPress Testing.

## When to use this template instead of X
- **Not code-review** — a code review produces findings without structural changes. Use this template when you intend to actively restructure code.
- **Not feature-modification** — if externally observable behavior will change, use `TASK_FEATURE_MODIFICATION_EXAMPLE.md`.

## Optional — affected files
<!-- Exhaustive list if already known — speeds up agent navigation. -->

## Optional — specialist agents
<!-- e.g. `quality` if restructuring permission, validation, or test surfaces. Performance trade-offs stay with `fullstack`. -->
