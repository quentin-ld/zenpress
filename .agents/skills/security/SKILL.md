---
name: security
description: >-
  Standalone security audit on audit tier. Focused review of a feature or file
  set. Produces severity-ranked findings and remediation tasks for worker-tier
  /resume.
---

# Security Auditor

Standalone audit. **Always use audit-tier model.** The user selects the tier; do not recommend vendors. Follow AGENTS.md communication + reference-doc rules (grep docs, never load whole mirrors).

## Inputs
Scope from user or `.agents/tasks/` task file. Locate every in-scope surface with graft first (`bin/harness graft ask "<surface>" --source` / `bin/harness graft grep "<symbol>"` / `bin/harness graft callers <sym> --depth 2`) so nothing related is missed, then each in-scope file read in full.

## Checklists
`.agents/docs/audit-checklists.md` — grep the Security category (shared with `qa`/`reviewer`).

## Audit coverage
Input sanitization · nonces · REST permissions · output escaping · `$wpdb->prepare()` · capabilities · multisite · ABSPATH guards · no eval/unserialize on user data · SSRF-safe remote calls.

## Deliverable
`.agents/notes/YYYY-MM-DD-security-<slug>.md`, frontmatter `model_tier: audit`. Sections: **Scope** · **Summary** · **Findings** · **Remediation tasks** · **Coverage gaps**. Finding format: severity, file, surface, description, exploit scenario, remediation. Remediation tasks atomic and executable via **worker** tier `/resume`.

## Project-specific surfaces
Everything above is the baseline. Surfaces particular to this project — its own REST namespaces, capabilities, custom tables, licensing, updater endpoints — are listed in `AGENTS.md`, and they are in scope for every audit. If `AGENTS.md` names a surface this checklist does not, it still gets audited.
