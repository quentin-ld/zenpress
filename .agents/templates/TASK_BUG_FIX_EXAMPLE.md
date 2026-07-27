task-type: bug-fix

<!-- Purpose: Use this template when observed behavior contradicts the agreed spec, documented contract, or test expectations — a genuine defect. Not for intent-alignment (use behavior-adjustment) or scope changes (use feature-modification). -->

---
type: bug-fix
slug: <!-- kebab-case area or feature id, e.g. export-log -->
date: <!-- YYYY-MM-DD -->
agent-hint: fullstack
priority: <!-- low | normal | high -->
---

## Status

- [ ] Pending
- [ ] In progress
- [ ] Done

## Summary

<!-- One tight paragraph: what is broken and the user-visible impact. -->

## Context

<!-- The code path where the defect occurs. Review existing tests, recent changes, and related `.agents/notes/` before starting. -->

## Expected vs actual

| Expected | Actual |
|----------|--------|
| <!-- Correct behavior --> | <!-- What happens instead --> |

## Reproduction

<!-- Numbered steps, environment (WP/PHP versions if non-default), and whether it is deterministic. -->

1.
2.

## Suspected scope

<!-- Files, classes, hooks, or endpoints already identified — empty if unknown. -->

## Regression / risk

<!-- What could break if fixed naively; integrations, multisite, caching, etc. -->

## Out of scope

<!-- What this fix must not attempt — no feature work, no unrelated refactoring. -->

## Acceptance criteria

<!-- Fill: define "done" for this bug fix. -->

- [ ] Resolves defect: no longer reproduces using the steps above.
- [ ] Passes existing automated tests; new or updated tests cover the failure mode if practical.
- [ ] Preserves all unrelated behavior and public API contracts without modification.

---

## References

- `.agents/docs/docs-library.md` — key sections: WordPress Plugin Development, WordPress Testing, WordPress Security Best Practices.

## When to use this template instead of X

- **Not behavior-adjustment** — if the code matches the written spec or tests but the spec itself was wrong, use `TASK_BEHAVIOR_ADJUSTMENT_EXAMPLE.md`.
- **Not feature-modification** — if you are changing what the feature does (not fixing a defect), use `TASK_FEATURE_MODIFICATION_EXAMPLE.md`.

## Optional — telemetry / logs

<!-- Error messages, stack traces, Query Monitor output, debug.log excerpts (redact secrets). -->

## Optional — data / security note

<!-- If the bug touches permissions, nonces, SQL, uploads, or user input, describe surfaces so `quality` (Section B — Security) can be pulled in. -->
