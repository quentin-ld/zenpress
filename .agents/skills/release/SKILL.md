---
name: release
description: >-
  Release cycle on worker tier. Version bump, readme.txt, changelog, build,
  Plugin Check, zip. Owner must explicitly authorize the version bump.
---

# Release

End-of-cycle packaging. **Worker-tier model** is usually sufficient.

Do not bump versions without explicit owner authorization in this conversation.

## Prerequisites — stop if any fail

- [ ] Cycle tasks complete
- [ ] No open **Blocker** items in review notes
- [ ] `npm run test:all` clean
- [ ] Owner explicitly authorized the version bump **in this thread**

## Version sync (lockstep)

`zenpress.php` (`Version:` + `ZENPRESS_VERSION`) · `composer.json` / `package.json` `version` · `readme.txt` `Stable tag:`

Confirm version with owner before writing.

## readme.txt

`Stable tag:` matches constant · update `Tested up to:` if needed · promote changelog (plain text bullets) · upgrade notice only when required

Prose style: grep style guide one section if needed — never load the full file.

## Build order

1. `npm run build`
2. `composer run make:pot` — note any new/changed strings. If new strings appear, add them to the changelog entry: "Updated translations" or list the new strings if significant.
3. `composer run lint:pcp`
4. `npm run test:all`
5. `npm run zip`

## Completion message

On completion, report: "Release ready: version `X.Y.Z`, zip at `<path>`. All checks passed."

## Escalation

- Failures → stop; **worker** tier + `/resume` for fixes
- Security issue → stop; `/security` on **audit** tier
- Never edit frozen `wordpress-native-updates-reference.md`