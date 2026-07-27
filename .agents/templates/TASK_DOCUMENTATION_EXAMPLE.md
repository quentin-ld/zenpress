task-type: documentation

<!-- Purpose: Use this template for documentation work in the codebase — PHPDoc, JSDoc, inline comments, `readme.txt` prose (Description, FAQ, Screenshots, Upgrade Notice), or in-admin help text. The `interface-content` agent owns writing-style and code-documentation rules; `release` co-owns the parts of `readme.txt` tied to versioning. -->

---
type: documentation
slug: <!-- kebab-case scope id, e.g. logger-phpdoc, readme-faq-update, hooks-docblocks -->
date: <!-- YYYY-MM-DD -->
agent-hint: interface-content
priority: <!-- low | normal | high -->
---

## Status

- [ ] Pending
- [ ] In progress
- [ ] Done

## Summary

<!-- One paragraph: what documentation work is needed and why. -->

## Trigger

<!-- What change made this documentation task necessary? Reference the commit, task file, or event. Examples: "New REST endpoint added in task 2026-04-01-new-feature-export-log", "Public hook `updatronix_after_log` lacks a docblock", "readme.txt FAQ outdated after settings rework". -->

## Target surface

<!-- Check all that apply. -->

- [ ] PHPDoc blocks on functions, classes, hooks, filters, REST handlers
- [ ] JSDoc blocks on exported JS/TS symbols and React component props
- [ ] Inline code comments (only where intent or trade-off is non-obvious)
- [ ] `readme.txt` Description, FAQ, Screenshots, Installation, Upgrade Notice
- [ ] In-admin help text or tooltip copy
- [ ] Other (specify)

## Scope

<!-- Files, classes, functions, hooks, or `readme.txt` sections to update. Bound the work — avoid whole-codebase. -->

## Style requirements

Follow `.agents/docs/wordpress-documentation-style-guide-consolidated.md` and `.agents/docs/docs-library.md` (WordPress Documentation Standards) for writing rules. In short:

- **User-facing prose** (readme, help, comments that address the reader): HelpHub rules in `.agents/docs/wordpress-documentation-style-guide-consolidated.md` — large file; search or use its Table of contents; each section has a **`Source:`** URL.
- **PHPDoc / JSDoc structure** (tags, hook examples, file headers): [Inline Documentation Standards](https://developer.wordpress.org/coding-standards/inline-documentation-standards/) — also linked from `.agents/docs/docs-library.md` → WordPress Coding Standards.

Reminder bullets (details and edge cases live in the agent profile and docs above):

- American English. Active voice. Second person for user-facing prose.
- Always capitalise WordPress; capitalise specific UI element names.
- Oxford comma always.
- Functions/hooks/files/constants in backticks — never quotation marks.
- No "click here", "read more", or "here" as link text.
- PHPDoc includes `@since`, typed `@param`, typed `@return`, one-sentence description (shape per Inline Documentation Standards).
- JSDoc includes description, `@param`, `@return`, and React component props.
- Comments explain *why*, not *what*. Never narrate edits in comments.

## Out of scope

<!-- This template covers in-codebase documentation only. Project-state markdown (notes, tasks) is not edited under this template. No functional code changes. No translatable string modifications. -->

## Constraints

- Do not modify, add, or remove any string wrapped in an i18n function.
- Do not change the meaning of public hook signatures while documenting them — flag any signature mismatch instead.
- For `readme.txt` headers (`Stable tag:`, `Tested up to:`, `Requires at least:`, `Requires PHP:`) and the `== Changelog ==` block, hand off to `release`.

## Acceptance criteria

- [ ] Every targeted public function, class, hook, action, filter, and REST handler has a complete PHPDoc block (`@since`, typed `@param`, typed `@return`, description).
- [ ] Every targeted exported JS/TS symbol has a JSDoc block; React components document their props.
- [ ] Inline comments removed where they only narrate the code; remaining comments explain intent or trade-offs.
- [ ] `readme.txt` prose (where in scope) follows the HelpHub style guide (consolidated mirror); docblocks follow Inline Documentation Standards.
- [ ] No translatable strings were modified as a side effect.
- [ ] Lint passes: `composer run lint:php` and `npm run lint`.

---

## References

- `.agents/docs/wordpress-documentation-style-guide-consolidated.md` — HelpHub prose mirror; hard constraints and checklist.
- `.agents/docs/docs-library.md` — WordPress Documentation Standards; DevHub docblock structure.
- `.agents/docs/wordpress-documentation-style-guide-consolidated.md` — HelpHub Documentation Style Guide (generated; regenerate with `python3 .agents/scripts/build_style_guide_consolidated.py` when the URL manifest in `.agents/tasks/2026-05-05-documentation-wordpress-style-guide-consolidated.md` changes).
- `.agents/docs/docs-library.md` — WordPress Documentation Standards, WordPress Coding Standards (Inline Documentation Standards), Internationalization & Localization, **WordPress native updates (core)** (includes generated handbook appendix — refresh with `python3 .agents/scripts/build_docs_library_consolidated.py` when Key Resources change).
- `.agents/docs/wordpress-native-updates-reference.md` — when a docblock documents behaviour tied to the core update lifecycle (`automatic_updates_complete`, auto-update filters, etc.); cite the frozen reference only.

## When to use this template instead of X

- **Not refactoring** — if the primary goal is restructuring code and documentation is incidental, use `TASK_REFACTORING_EXAMPLE.md`.
- **Not new-feature** — if documentation is part of building a new feature, it happens inside `TASK_NEW_FEATURE_EXAMPLE.md`.
- **Not i18n** — if the goal is wrapping strings or regenerating POT, use `TASK_I18N_EXAMPLE.md`.
- **Not release** — if the goal is bumping version anchors, promoting `[Unreleased]`, or rewriting the `== Changelog ==` block, hand off to `/release` directly (no template needed; see `.agents/skills/release/SKILL.md`).

## Optional — affected files

<!-- Paths or symbols to start from — speeds up navigation. -->
