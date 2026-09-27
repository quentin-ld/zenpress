---
name: resume
description: >-
  Continue dev work on worker tier. Use after thread rotation, turn limits,
  crashes, or fixing review/security findings. Reads the task file and resumes
  from the first unchecked task.
---

# Resume

Continue `/architect` work without chat history. **Use a worker-tier model.**

Follow the architect Phase 4–5 rules throughout (retry ceiling, self-review, thread rotation, completion message, implementation reflexes).

## Start

1. Read the task file in full — `## Session checkpoint` first
2. If the file does not exist or cannot be read, say: "Task file not found at `<path>`. Please provide the correct path or describe what we were working on."
3. Say: "Resuming from task N. Remaining: [list]. Next: [action]."
4. Execute from the first unchecked task (architect Phase 4–5 rules)

## Reference docs

Grep one section only — never load a whole `.agents/docs/` file. They run to megabytes and one section is almost always the answer.

## Plan changes

Update `## Tasks` and note in `## Log` if the remaining plan is wrong.

## Hand-off

Follow `review_required` and lint tiers from the task file and `AGENTS.md`.

## Project specifics

Paths, commands and build steps for this project are in `AGENTS.md` and `workflow.md`. Read them rather than assuming the layout of another project in this fleet.
