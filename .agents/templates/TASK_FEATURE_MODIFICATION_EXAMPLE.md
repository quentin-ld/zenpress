task-type: feature-modification

<!-- Purpose: Use this template when an existing capability changes in scope or behavior — new parameters, different UI, altered API surface, additional storage. Not for net-new capabilities (use new-feature) or intent-alignment tweaks (use behavior-adjustment). -->

---
type: feature-modification
slug: <!-- kebab-case feature id, e.g. update-summary-block -->
date: <!-- YYYY-MM-DD -->
agent-hint: fullstack
priority: <!-- low | normal | high -->
---

## Status

- [ ] Pending
- [ ] In progress
- [ ] Done

## Summary

<!-- What existing capability changes, and why (product/technical reason). Not a brand-new capability — that is `TASK_NEW_FEATURE_EXAMPLE.md`. -->

## Context

<!-- Current state of the feature being changed. Review relevant code, prior `.agents/notes/`, and the plugin's public API surface before starting. -->

## Current behavior (baseline)

<!-- What the feature does today, at a level sufficient to implement the delta. -->

## Desired change

<!-- Concrete deltas: scope, UX copy, API, storage, hooks, admin UI, block attributes — be specific. -->

## Out of scope

<!-- Explicitly what must not change to avoid scope creep. -->

## Migration / compatibility

<!-- Backward compatibility, deprecations, data migration, third-party hooks — state N/A if none. -->

## Acceptance criteria

<!-- Fill: define "done" for this modification. -->

- [ ] Preserves baseline behaviors listed under "Out of scope" unless explicitly revised above.
- [ ] Implements desired change, verifiable (manual or automated) in the listed surfaces.
- [ ] Updates or creates notes in `.agents/notes/` for this `slug` if decisions affect future work.

---

## Rollback

<!-- How to revert this change safely: revert commit, restore option values, run down-migration — state "Git revert sufficient" if no data changes are involved. -->

## References

- `.agents/docs/docs-library.md` — key sections: WordPress Plugin Development, WordPress REST API, WordPress Coding Standards.
- `AGENTS.md § Workflow` — follow if the modification is large enough to warrant UX/security/architecture notes.

## When to use this template instead of X

- **Not new-feature** — if the capability does not exist yet, use `TASK_NEW_FEATURE_EXAMPLE.md`.
- **Not behavior-adjustment** — if scope and surfaces stay the same and only semantics/defaults/copy change, use `TASK_BEHAVIOR_ADJUSTMENT_EXAMPLE.md`.
- **Not bug-fix** — if the current behavior contradicts the agreed spec or tests, use `TASK_BUG_FIX_EXAMPLE.md`.

## Optional — affected files / components

<!-- Paths or symbols to start from — speeds up navigation. -->

## Optional — specialist agents

<!-- e.g. pull `quality` for auth/data or test coverage; `interface-content` for admin/block UI or microcopy; `release` if the change touches version anchors or `readme.txt`. -->
