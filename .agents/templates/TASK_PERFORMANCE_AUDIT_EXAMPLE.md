task-type: performance-audit

<!-- Purpose: Use this template to profile and optimize a specific scope — database query count, asset weight, caching strategy, Core Web Vitals impact, REST response time, or background processing efficiency. -->

---
type: performance-audit
slug: <!-- kebab-case scope id, e.g. settings-page-queries -->
date: <!-- YYYY-MM-DD -->
agent-hint: fullstack
priority: <!-- low | normal | high -->
---

## Status
- [ ] Pending
- [ ] In progress
- [ ] Done

## Summary
<!-- What performance concern triggered this audit and the user-visible impact (slow page load, high TTFB, admin lag, etc.). -->

## Context
<!-- How the scoped surfaces are currently used in production or development. Review prior profiling data and `.agents/notes/` for related findings. -->

## Scope
<!-- Pages, endpoints, hooks, or assets to audit. Bound the scope — avoid whole-plugin unless intended. -->

## Audit focus
<!-- Check all that apply. -->
- [ ] Database queries (N+1, missing indexes, `SELECT *`, unneeded queries)
- [ ] Object / transient cache usage
- [ ] Asset delivery (scripts, styles, fonts — size, loading strategy, conditional enqueue)
- [ ] REST API response time and payload size
- [ ] Core Web Vitals (LCP, INP, CLS)
- [ ] Cron / background processing efficiency
- [ ] Autoloaded options size

## Current metrics (if known)
<!-- Baseline measurements: query count, page weight, TTFB, LCP, INP — include tool used (Query Monitor, Lighthouse, WebPageTest). -->

## Performance budget / targets
<!-- Concrete targets where applicable, e.g. "< 20 queries on settings page", "< 200 ms INP", "< 100 KB JS". -->

## Out of scope
<!-- What this audit should not attempt — e.g. no feature changes, no unrelated refactoring. -->

## Constraints
<!-- Must remain true: e.g. "no new dependencies", "backwards compatible with WP 6.0", "no breaking REST response shape". -->

## Acceptance criteria
<!-- Fill: define "done" for this audit. -->
- [ ] Produces written findings: prioritized issues with file/symbol references, measured impact, and recommended fix.
- [ ] Preserves externally observable behavior and public API.
- [ ] Limits in-session fixes to minimal changes tied to findings, verified with before/after measurements.

---

## References
- `.agents/docs/docs-library.md` — key sections: Performance Optimization, WordPress Caching, Core Web Vitals.

## When to use this template instead of X
- **Not code-review** — a code review can include a performance check, but use this template for a focused audit with profiling, measurements, and optimization targets.
- Use `TASK_CODE_REVIEW_EXAMPLE.md` when the review spans multiple quality dimensions and performance is only one of them.

## Optional — environment
<!-- PHP version, object cache backend (Redis, Memcached, none), hosting tier, active plugins — context that affects profiling. -->

## Optional — related notes
<!-- Prior notes under `.agents/notes/`, performance-related tasks, or Lighthouse reports. -->
