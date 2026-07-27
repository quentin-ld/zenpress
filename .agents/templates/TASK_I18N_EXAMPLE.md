task-type: i18n

<!-- Purpose: Use this template for internationalization work — wrapping hardcoded strings, fixing translation function usage, adding translator comments, setting up JS translations, regenerating POT files, and resolving PCP i18n violations. -->

---
type: i18n
slug: <!-- kebab-case scope id, e.g. settings-strings -->
date: <!-- YYYY-MM-DD -->
agent-hint: fullstack
priority: <!-- low | normal | high -->
---

## Status
- [ ] Pending
- [ ] In progress
- [ ] Done

## Summary
<!-- What i18n work is needed and why: missing translations, untranslatable strings, PCP i18n violations, JS translation setup, POT regeneration, etc. -->

## Context
<!-- The plugin's text domain, existing translation setup, and PCP i18n lint output. Project facts (text domain, build commands, lint order) live in `AGENTS.md`. -->

## Scope
<!-- Files, components, or admin screens with untranslated or incorrectly translated strings. -->

## Work type
<!-- Check all that apply. -->
- [ ] Wrap hardcoded strings with translation functions (`__()`, `_e()`, `esc_html__()`, etc.)
- [ ] Fix incorrect translation function usage (wrong escaping context, missing domain)
- [ ] Add translator comments (`translators:`) for ambiguous strings
- [ ] Set up or fix JS/block translations (`wp_set_script_translations`, `@wordpress/i18n`)
- [ ] Regenerate POT file (`composer run make:pot` or equivalent)
- [ ] Fix PCP i18n linter violations
- [ ] Handle plurals (`_n()`, `_nx()`)
- [ ] Handle date, number, or currency formatting for locales

## Text domain
<!-- The plugin's text domain, e.g. `{PLUGIN_SLUG}`. Must match the `Text Domain` header in the main plugin file. -->

## Out of scope
<!-- What this i18n task must not attempt — e.g. no functional behavior changes, no string meaning changes. -->

## Constraints
<!-- Must remain true: e.g. "no changes to string meaning", "preserve existing translation keys where possible". -->

## Acceptance criteria
<!-- Fill: define "done" for this i18n work. -->
- [ ] Wraps all user-facing strings with the correct translation function and text domain.
- [ ] Includes translator comments where string meaning is ambiguous without context.
- [ ] Registers and loads JS translations for any block or admin script with user-facing strings.
- [ ] Regenerates POT file reflecting current strings.
- [ ] Passes `composer run lint:pcp` i18n checks (or documents violations with rationale).
- [ ] Preserves all functional behavior.

---

## References
- `.agents/docs/docs-library.md` — key sections: Internationalization & Localization (i18n / l10n), Plugin Check (WordPress.org Compliance).

## When to use this template instead of X
- **Not feature-modification** — if the primary goal is changing feature behavior and i18n is incidental, use `TASK_FEATURE_MODIFICATION_EXAMPLE.md`. Use this template when i18n is the sole focus.

## Optional — affected files
<!-- Paths or directories with known i18n gaps. -->

## Optional — translation tools
<!-- GlotPress instance, Loco Translate, or manual `.po` editing — context for the translation workflow. -->
