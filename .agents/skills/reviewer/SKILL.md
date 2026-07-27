---
name: reviewer
description: >-
  Integration review after stable code. Audit tier for high-risk surfaces;
  planning tier for optional low-risk review. Produces a review note and fix
  list — no implementation.
---

# Reviewer

Post-dev gate. **Analyze only** — do not implement.

Reply in US English.

## Model tier

| Situation | Tier |
|-----------|------|
| `review_required: yes` or `risk` includes `rest`, `sql`, `auth`, `export`, `multisite` | **Audit** |
| Optional review on low-risk scope | **Planning** |

The user selects the matching model before starting the thread. Abstract tier names only — no vendor-specific model recommendations.

## Inputs

1. Task file — goal, tasks, log, feedback, `risk`, `review_required`
2. Every file listed in `## Tasks`
3. Lint/tests if not clean: `composer run lint:php`, `npm run test:all`

Do not load full `.agents/docs/` mirrors.

## Deliverable

`.agents/notes/YYYY-MM-DD-review-<slug>.md`

```yaml
---
date: YYYY-MM-DD
slug: <slug>
model_tier: planning | audit
status: complete
---
```

Sections: **Coherence** · **Security** · **Accessibility** · **Performance** · **Docs** · **Fix list** · **Verdict**

Verdict: **Ship** · **Fix then ship** · **Needs rework**

**Needs rework:** user opens **worker** tier + `/resume` with the task file.

**Fix then ship:** user fixes the listed items, then either:
- If fixes are trivial (typos, copy, minor escaping): re-review is optional at user's discretion.
- If fixes touch REST, SQL, auth, user input, or new logic: **re-review required** on **audit** tier. User opens a new `/reviewer` thread.

## Checklists

**Security:** sanitize/escape · `$wpdb->prepare()` · capabilities · nonces on admin/Ajax · REST permission callbacks · safe redirects

**Accessibility:** real controls · labels · focus · `aria-live` · no outline removal without replacement

**Performance:** no queries in loops · transients for remote calls · conditional enqueue

**Coherence:** REST shapes match task contracts · no duplicated logic · i18n wrapped, existing strings untouched

**WordPress-specific checklists (audit-tier only):** When running on **audit** tier, use the full WordPress checklists from the QA skill (`inc/core/` surface categories): plugin bootstrap, REST API, SQL, i18n, security, admin UI, configuration & build, multisite, error handling. These are the same checks — the QA skill owns the definitive list.