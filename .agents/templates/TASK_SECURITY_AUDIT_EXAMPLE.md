task-type: security-audit

<!-- Purpose: Use this template to review a feature, file, or endpoint scope for security risks — escaping, sanitization, nonces, capability checks, SQL injection, path traversal, open redirects, and data exposure. -->

---
type: security-audit
slug: <!-- kebab-case scope id, e.g. rest-api-handlers -->
date: <!-- YYYY-MM-DD -->
agent-hint: quality
priority: <!-- low | normal | high -->
---

## Status
- [ ] Pending
- [ ] In progress
- [ ] Done

## Summary
<!-- What triggered this audit: new feature, external report, routine review, PCP finding, wp.org review, etc. -->

## Context
<!-- The feature or scope's attack surface. Review prior security notes in `.agents/notes/` and the threat model before starting. -->

## Scope
<!-- Files, classes, endpoints, or surfaces to audit. Bound the review to avoid unbounded scope. -->

## Audit focus
<!-- Check all that apply; guides the depth of the review for each area. -->
- [ ] Input sanitization (user input, query params, POST data, REST body)
- [ ] Output escaping (HTML, attributes, URLs, SQL, JS context)
- [ ] Nonce verification (forms, AJAX, REST where applicable)
- [ ] Capability / permission checks (`current_user_can`, `permission_callback`)
- [ ] SQL injection (`$wpdb->prepare`, parameterized queries)
- [ ] Path traversal / file inclusion (uploads, template loading)
- [ ] Open redirects (`wp_safe_redirect`, URL validation)
- [ ] Data exposure (sensitive info in REST responses, debug output, error messages)
- [ ] Authentication and session handling

## Threat model (if known)
<!-- Who is the attacker: unauthenticated visitor, low-privilege user, authenticated admin, or supply chain? What assets are at risk: user data, admin access, site integrity? -->

## Out of scope
<!-- What this audit should not attempt — e.g. no feature changes, no unrelated refactoring. -->

## Constraints
<!-- Must remain true: e.g. "no changes to REST response shape", "backwards compatible with existing nonces/tokens". -->

## Acceptance criteria
<!-- Fill: define "done" for this audit. -->
- [ ] Produces written findings: prioritized vulnerabilities with file/line references, severity (critical / high / medium / low), and recommended fix.
- [ ] Preserves externally observable behavior unless explicitly fixing a vulnerability.
- [ ] Applies in-session fixes following least-privilege and defense-in-depth principles, verified with tests or stated manual checks.

---

## Rollback
<!-- How to revert security fixes if they cause regressions: revert commit, restore prior nonce/token scheme — state "Git revert sufficient" if no data changes are involved. -->

## References
- `.agents/docs/docs-library.md` — key sections: WordPress Security Best Practices, Data Sanitization & Escaping, Nonces & Capability Checks.

## When to use this template instead of X
- **Not code-review** — a code review can include a security check, but use this template for a focused audit with threat modeling, severity classification, and vulnerability-specific findings.
- Use `TASK_CODE_REVIEW_EXAMPLE.md` when the review spans multiple quality dimensions and security is only one of them.

## Optional — prior reports
<!-- CVEs, PCP findings, penetration test excerpts, or prior `.agents/notes/` security notes. -->

## Optional — compliance context
<!-- Regulatory requirements (GDPR data handling, PCI if payment-adjacent) or wp.org plugin review standards. -->
