task-type: accessibility-audit

<!-- Purpose: Use this template for a WCAG 2.1/2.2 Level AA review of a specific scope — keyboard navigation, ARIA usage, color contrast, focus management, screen reader output, form accessibility, and motion handling. -->

---
type: accessibility-audit
slug: <!-- kebab-case scope id, e.g. settings-page -->
date: <!-- YYYY-MM-DD -->
agent-hint: interface-content
priority: <!-- low | normal | high -->
---

## Status
- [ ] Pending
- [ ] In progress
- [ ] Done

## Summary
<!-- What triggered this audit: new UI, user complaint, PCP accessibility finding, WCAG compliance goal, etc. -->

## Context
<!-- The UI components being audited and their intended user flows. Review existing `.agents/notes/` accessibility notes before starting. -->

## Scope
<!-- Pages, blocks, components, or admin screens to audit. Bound the scope — avoid whole-plugin unless intended. -->

## Audit focus
<!-- Check all that apply. -->
- [ ] Keyboard navigation (tab order, focus traps, skip links)
- [ ] ARIA usage (roles, labels, live regions, states)
- [ ] Semantic HTML (heading hierarchy, landmarks, native elements vs. divs)
- [ ] Color contrast (WCAG AA 4.5:1 text, 3:1 large text / UI components)
- [ ] Focus management (modals, dynamic content, post-action focus)
- [ ] Screen reader compatibility (announcements, hidden text, reading order)
- [ ] Form accessibility (labels, error messages, required indicators)
- [ ] Motion / animation (`prefers-reduced-motion`, auto-play)

## WCAG target
<!-- e.g. "WCAG 2.1 Level AA" or "WCAG 2.2 Level AA". -->

## Assistive technology tested (if any)
<!-- e.g. NVDA + Firefox, VoiceOver + Safari, JAWS + Chrome, Axe-core. Write "Pending" if not yet tested. -->

## Out of scope
<!-- What this audit should not attempt — e.g. no functional behavior changes, no visual redesign beyond a11y fixes. -->

## Constraints
<!-- Must remain true: e.g. "no layout changes beyond accessibility fixes", "match WordPress admin visual language". -->

## Acceptance criteria
<!-- Fill: define "done" for this audit. -->
- [ ] Produces written findings: prioritized issues with file/line references, WCAG criterion violated, and recommended fix.
- [ ] Preserves functional behavior and visual design beyond accessibility corrections.
- [ ] Verifies in-session fixes with at least one automated tool (Axe-core) and manual checks (keyboard, screen reader).

---

## References
- `.agents/docs/docs-library.md` — key sections: Accessibility (WCAG 2.1+), WordPress Accessibility Guidelines, Semantic HTML & ARIA.

## When to use this template instead of X
- **Not code-review** — a code review can include an accessibility check, but use this template for a focused WCAG-level audit with assistive-technology testing and criterion-level findings.
- Use `TASK_CODE_REVIEW_EXAMPLE.md` when the review spans multiple quality dimensions and accessibility is only one of them.

## Optional — existing reports
<!-- Axe-core output, Lighthouse accessibility score, PCP findings, or prior `.agents/notes/` accessibility notes. -->

## Optional — design references
<!-- Figma, mockups, or style guide links that constrain visual changes. -->
