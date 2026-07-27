task-type: code-review

<!-- Purpose: Use this template for a multi-dimensional code quality review — maintainability, security, performance, accessibility, test coverage. For a deep single-domain audit (security-only, performance-only, or a11y-only), use the dedicated audit template instead. -->

---
type: code-review
slug: <!-- kebab-case scope id, e.g. rest-api-handlers -->
date: <!-- YYYY-MM-DD -->
agent-hint: fullstack
priority: <!-- low | normal | high -->
---

## Status

- [ ] Pending
- [ ] In progress
- [ ] Done

## Summary

<!-- One sentence: what is being reviewed and why (e.g. "Review REST handlers added in v1.2 for security and maintainability before release"). -->

## Context

<!-- The codebase area to be reviewed. Scan `.agents/notes/` for prior review findings and architectural decisions relevant to this scope. -->

## Scope

<!-- Paths, directories, or symbols to review. Bound the review — avoid whole-plugin unless intended. -->

## Review goals

<!-- Check all that apply. -->

- [ ] Maintainability / clarity
- [ ] Security (capabilities, validation, escaping, CSRF)
- [ ] Performance (queries, hooks, assets)
- [ ] Accessibility / admin UX
- [ ] Test coverage / QA gaps

## Constraints

<!-- Must remain true: e.g. "public REST response shape unchanged", "no new dependencies". -->

## Out of scope

<!-- What this review should not do — e.g. no feature work, no large refactors without a follow-up task. -->

## Acceptance criteria

<!-- Fill: define "done" for this review. -->

- [ ] Produces written findings: prioritized issues with file/symbol references and rationale.
- [ ] Preserves externally observable behavior; any must-fix behavior bug is flagged, not silently fixed unless explicitly in scope.
- [ ] Limits in-session fixes to minimal changes tied to findings, verified by tests or stated manual checks.

---

## References

- `.agents/docs/docs-library.md` — key sections: WordPress Coding Standards, WordPress Security Best Practices, Performance Optimization, Accessibility (WCAG 2.1+).

## When to use this template instead of X

- **Not security-audit** — for a deep security-only review with threat modeling and severity classification, use `TASK_SECURITY_AUDIT_EXAMPLE.md`.
- **Not performance-audit** — for profiling with before/after measurements and optimization targets, use `TASK_PERFORMANCE_AUDIT_EXAMPLE.md`.
- **Not accessibility-audit** — for a dedicated WCAG compliance review with assistive-technology testing, use `TASK_ACCESSIBILITY_AUDIT_EXAMPLE.md`.
- Use this template when the review spans multiple quality dimensions or is primarily about maintainability.

## Optional — baseline context

<!-- PR links, prior notes under `.agents/notes/`, or related task files. -->

## Optional — threat model / performance budget

<!-- Only if security or performance is in scope — constraints the review should assume. -->
