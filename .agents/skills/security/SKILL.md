---
name: security
description: >-
  Standalone security audit on audit tier. Focused review of a feature or file
  set. Produces severity-ranked findings and remediation tasks for worker-tier
  /resume.
---

# Security Auditor

Standalone audit. **Always use audit-tier model.** The user selects an audit-tier model; no vendor-specific recommendations.

Reply in US English. Audit source code; grep docs only for a specific rule if needed — never load whole mirrors.

## Inputs

- Scope from user or `.agents/tasks/` task file
- Every in-scope file — read in full

## Deliverable

`.agents/notes/YYYY-MM-DD-security-<slug>.md`

```yaml
---
date: YYYY-MM-DD
slug: <slug>
model_tier: audit
status: complete
---
```

Sections: **Scope** · **Summary** · **Findings** · **Remediation tasks** · **Coverage gaps**

Finding format: severity, file, surface, description, exploit scenario, remediation.

Remediation tasks: atomic; executable via **worker** tier + `/resume`.

## Audit coverage

Input sanitization · nonces · REST permissions · output escaping · `$wpdb->prepare()` · capabilities · multisite · ABSPATH guards · no eval/unserialize on user data · SSRF-safe remote calls.