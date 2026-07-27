task-type: testing

<!-- Purpose: Use this template to write or fix automated tests — PHPUnit unit/integration, Jest block logic, Playwright E2E — or to create documented manual test plans. -->

---
type: testing
slug: <!-- kebab-case scope id, e.g. rest-api-tests -->
date: <!-- YYYY-MM-DD -->
agent-hint: quality
priority: <!-- low | normal | high -->
---

## Status
- [ ] Pending
- [ ] In progress
- [ ] Done

## Summary
<!-- What test work is needed and why: missing coverage, broken tests, new test suite setup, regression coverage, etc. -->

## Context
<!-- The feature or scope under test, its expected behavior, and any existing test infrastructure. Project tooling (PHP version, lint order, build commands) lives in `AGENTS.md`. -->

## Scope
<!-- Features, classes, endpoints, or UI flows to cover with tests. -->

## Test types
<!-- Check all that apply. -->
- [ ] PHPUnit — unit tests (isolated, no DB)
- [ ] PHPUnit — integration tests (WordPress loaded, `WP_UnitTestCase`)
- [ ] Jest — block / JS logic tests
- [ ] Playwright — E2E / admin UI tests
- [ ] Manual test plan (documented steps and expected results)
- [ ] Accessibility tests (Axe-core integration)

## Coverage targets
<!-- What should be covered: specific methods, REST routes, user flows, edge cases, roles, error states. -->

## Test environment
<!-- PHP version, WP version, multisite yes/no, object cache backend, required plugins — or "default" if using project defaults from `AGENTS.md`. -->

## Out of scope
<!-- What this testing task must not attempt — e.g. no production code changes, no feature work beyond test fixtures. -->

## Constraints
<!-- Must remain true: e.g. "tests must be non-destructive", "no production API calls", "compatible with CI runner". -->

## Acceptance criteria
<!-- Fill: define "done" for this testing work. -->
- [ ] Passes all tests locally with a clean database state.
- [ ] Covers the surfaces and edge cases listed above.
- [ ] Preserves all existing tests without breakage.
- [ ] Produces deterministic results: no reliance on external services, time-of-day, or random state without seeding.
- [ ] Follows the project's naming and directory conventions (see `AGENTS.md`).

---

## References
- `.agents/docs/docs-library.md` — key sections: WordPress Testing, PHPUnit for WordPress, Playwright / E2E Testing.

## When to use this template instead of X
- **Not code-review** — a code review can note test gaps, but use this template when writing or fixing tests is the primary deliverable.

## Optional — existing coverage gaps
<!-- Output from code coverage tools, or known untested paths. -->

## Optional — related task
<!-- Link to the feature, bug fix, or refactoring task these tests support. -->
