---
name: resume
description: >-
  Continue dev work on worker tier. Use after thread rotation, turn limits,
  crashes, or fixing review/security findings. Reads the task file and resumes
  from the first unchecked task.
---

# Resume

Continue `/architect` work without chat history. **Use a worker-tier model.**

Reply in US English. Follow the WordPress Documentation Style Guide for all user-facing prose.

## Start

1. Read the task file in full — `## Session checkpoint` first
2. If the file does not exist or cannot be read, say: "Task file not found at `<path>`. Please provide the correct path or describe what we were working on."
3. Say: "Resuming from task N. Remaining: [list]. Next: [action]."
4. Execute from the first unchecked task (architect Phase 4–5 rules)

## Reference docs

Grep one section only — never load whole `.agents/docs/` mirrors. The WordPress Documentation Style Guide is at `.agents/docs/wordpress-documentation-style-guide-consolidated.md`.

## Plan changes

Update `## Tasks` and note in `## Log` if the remaining plan is wrong.

## Retry ceiling

After **3 failed attempts** on the same task (any failure type — lint fail, failing test, reviewer blocker, or any error that prevents task completion), **STOP and re-plan** — update `## Tasks` and `## Log`, tell the user. Do not grind past three iterations. Different error types on the same task accumulate toward the same ceiling.

## Self-review before "done"

Before reporting a task or the feature complete: silently argue against your own solution (redundancy, unused code, simpler alternative, missed edge case). Fix or note anything surfaced. Then report with a one-line self-review note: "Self-review: checked [redundancy/unused code/edge cases/alternatives] — nothing surfaced" or "Self-review: noted [issue] — see Log."

## Implementation reflexes

ABSPATH guard · `zenpress_` hooks · REST `current_user_can()` · `$wpdb->prepare()` · sanitize in / escape out · docblocks on public surfaces · never reword existing i18n strings.

## Thread rotation

After 3 more tasks or ~20 turns, update checkpoint; suggest fresh **worker** tier thread + `/resume`.

## Completion message

On completion: `status: done`, one-line summary of what was done and what files changed. Ask user to test.

## Hand-off

Follow `review_required` and lint tiers from the task file and `AGENTS.md`.