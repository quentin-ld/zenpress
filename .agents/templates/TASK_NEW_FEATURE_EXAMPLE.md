task-type: new-feature

<!-- Purpose: Use this template for a net-new capability — something that does not exist in the plugin yet. -->

---
type: new-feature
slug: <!-- kebab-case feature id; used for `.agents/notes/*-{FEATURE_SLUG}.md` -->
date: <!-- YYYY-MM-DD -->
agent-hint: fullstack
priority: <!-- low | normal | high -->
---

## Status

- [ ] Pending
- [ ] In progress
- [ ] Done

## Summary

<!-- One paragraph: net-new capability — something that does not exist in this plugin yet. -->

## Context

<!-- Project facts (directory layout, build, lint order) live in `AGENTS.md`. Scan `.agents/notes/` for prior decisions relevant to this feature slug. Sections 1–12 below provide the full feature brief. -->

## Feature slug

<!-- Must match `slug` in frontmatter and note filenames. kebab-case. -->

---

<!-- Sections 1–12 below are the full feature brief. Agents (UX, Security, Fullstack) use them to design and validate before implementation. Fill every section; write "N/A" where a section genuinely does not apply. -->

## 1. Feature name

<!-- One line so everyone refers to it the same way (e.g. "Update log export", "Block: Update summary"). -->

## 2. Problem it solves

<!-- Why this feature exists: the user or business need (e.g. "Admins cannot export update history for audits" or "No way to show recent updates on the front end"). -->

## 3. Target users

<!-- Who uses it: role or capability (e.g. Administrators / `manage_options`, or all visitors for a public block). -->

## 4. User workflow

<!-- Step-by-step: what the user does from start to finish. Include the happy path and important alternatives (empty state, errors). -->

## 5. Admin UI

<!-- Where it lives in WP admin (menu, submenu, tab). Screens, forms, tables, buttons, and when things are visible or hidden. -->

## 6. Gutenberg block (if any)

<!-- Block name, what it does, editable attributes, and how it renders (dynamic/server or static). If none, write "N/A". -->

## 7. Data storage

<!-- What is stored and where: options, post meta, custom tables, transients. Fields, types, and lifecycle (retention, cleanup). If it only reads existing data, say so. -->

## 8. REST API

<!-- Routes needed: namespace, methods, request/response shape, and who uses them (admin UI, block, external). If none, write "N/A". -->

## 9. Security

<!-- Risks you know about: sensitive data, who can trigger the feature, file generation/download, external services. Any compliance or hardening needs. -->

## 10. Accessibility

<!-- Needs for keyboard, screen readers, contrast/motion, labels, errors, focus (e.g. visible labels, `aria-describedby`, success/error announcements). -->

## 11. Performance

<!-- Scale and limits: log size, concurrent users, timeouts, memory, N+1. Caching or background work if relevant. -->

## 12. Backward compatibility

<!-- Effect on existing data, options, or APIs. Deprecations, migrations, or behavior changes. PHP and WP version range (e.g. PHP 8.0–8.4, WP 6.0+). -->

---

## Out of scope

<!-- Explicitly what this feature does not include — prevents scope creep. -->

## Dependencies / assumptions

<!-- Other plugins, services, WP minimum version, PHP extensions — state N/A if none. -->

## Acceptance criteria

<!-- Testable "done" conditions: functional, security, and accessibility (e.g. "Admin can export CSV for date range", "Non-admins get 403", "Form is keyboard-only and WCAG AA", "Export works for 10 k rows"). -->

- [ ] Produces outputs under `.agents/notes/` for this `slug` as required by the workflow.
- [ ] Passes verification against feature spec; security and accessibility notes are satisfied or explicitly deferred with rationale.

---

## References

- `.agents/docs/docs-library.md` — key sections: WordPress Plugin Development, WordPress REST API, Gutenberg Block Development, WordPress Security Best Practices, Accessibility (WCAG 2.1+).
- `AGENTS.md § Workflow` — the 5-step workflow this template feeds.

## When to use this template instead of X

- **Not feature-modification** — use `TASK_FEATURE_MODIFICATION_EXAMPLE.md` when an existing capability changes in scope. This template is only for capabilities that do not exist yet.
- **Not behavior-adjustment** — use `TASK_BEHAVIOR_ADJUSTMENT_EXAMPLE.md` when the code works as written but needs alignment to intent (no new capability).

## Optional — design / mockups

<!-- Links or brief description. -->

## Optional — rollout

<!-- Feature flags, phased release — if applicable. -->
