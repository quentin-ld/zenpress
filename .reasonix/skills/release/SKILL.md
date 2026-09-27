---
name: release
description: Release cycle on worker tier. Version bump, readme.txt, changelog, build, Plugin Check, zip. Owner must explicitly authorize the version bump.
---

# Release

End-of-cycle packaging. **Worker-tier model** is typically sufficient.

Reply in US English. Follow the WordPress Documentation Style Guide for all user-facing prose.

Do not bump versions without explicit owner authorization in this conversation.

## Prerequisites — stop if any fail

- [ ] Cycle tasks complete
- [ ] No open **Blocker** items in review notes
- [ ] `npm run test:all` clean
- [ ] Owner explicitly authorized the version bump **in this thread**

## Version sync (lockstep)

Every place the version is written, changed in one commit:

`zenpress.php` (`Version:` header, plus the version constant where the project defines one) · `composer.json` and `package.json` `version` · `readme.txt` `Stable tag:`

Confirm version with owner before writing.

## readme.txt

`Stable tag:` matches constant · update `Tested up to:` if needed · promote changelog (plain text bullets) · upgrade notice only when required

Prose style: grep one section of the WordPress Documentation Style Guide — never load the whole file.

## Build order

1. `npm run build`
2. `composer run make:pot` — note any new/changed strings. If new strings appear, add them to the changelog entry: "Updated translations" or list the new strings if significant.
3. `composer run lint:pcp` — plugins that ship through WordPress.org
4. `npm run test:all`
5. `npm run zip`

## Completion message

On completion, report: "Release ready: version `X.Y.Z`, zip at `<path>`. All checks passed."

## Escalation

Failures → stop; **worker** tier thread with `/resume` for fixes
- Security issue → stop; `/security` on **audit** tier
- Never edit a frozen reference document under `.agents/docs/`
