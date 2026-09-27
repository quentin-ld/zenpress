# Distillation

What came from skills.sh, what was rejected and why, and the rules a third-party
skill has to pass before it enters this fleet.

The pipeline is `harness skills search | fetch | scan | distil | promote`. Fetch
lands in quarantine, `scan` applies the deterministic rules below, `distil`
emits a brief with TODOs, and `promote` accepts a completed one. Nothing reaches
`sources/skills/` without a person reading it first.

This document exists because the scan's rules lived in `skilldoc.py` and were
not readable by the person deciding whether to promote something.

---

## The rules

Deterministic, run by `harness skills scan`, one line per finding.

**Blocking** — the skill does not enter the fleet:

1. **An instruction to ignore or override earlier instructions.** "Ignore the
   above", "disregard your system prompt", "your new instructions are". The
   canonical prompt injection, and the reason a fetch is quarantined rather than
   installed.
2. **A credential, token or key in the body.** A skill that ships one is a leak,
   whether or not it was meant to.
3. **A `curl`, `wget`, `Invoke-WebRequest` or equivalent that posts content
   off-machine.** See the locality rule below.
4. **An executable payload** — a `bash -c`, `eval`, `exec` or a script the skill
   asks the agent to run, where the skill's stated purpose does not need it.

**Advisory** — reported, and a person decides:

5. **An external URL**, even a read-only one. Some are legitimate documentation
   pointers; some are the API call in a different shape.
6. **A `TODO`, `FIXME` or placeholder** left in the body.
7. **A description that does not say when to trigger.** The pointer's wording is
   what decides whether the skill is ever reached, so a vague one is a defect
   rather than a style choice.

## The locality rule

**Nothing leaves the machine.** The owner's first constraint: everything runs
locally in DDEV, and the agent never needs to reach outside the project.

A skill that calls a hosted API fails this even when it is the best tool for the
job. That is what happened to every `humanizer`-named skill on skills.sh — see
below. It is not a judgement about quality; it is the one rule the fleet does
not trade.

## What has been distilled

| source | installs | outcome |
|---|---|---|
| `trailofbits/skills/mutation-testing` | — | **distilled** into `mutation-testing`, with the class-method limitation recorded |
| `mattpocock/skills/writing-for-agents` | 316k | **distilled** into `documentation`, and the levers reused in `writing` |

## What has been rejected

| source | installs | why |
|---|---|---|
| `humanizerai/agent-skills/humanize` | 3,970 | **Paid API.** Posts the text to `humanizerai.com` and bills per word. Fails the locality rule outright. |
| `op7418/humanizer-zh/humanizer-zh` | 50,313 | Same shape, Chinese. |
| `blader/humanizer/humanizer` | 7,743 | No `SKILL.md` at the declared path. |
| `vercel-labs/agent-skills/writing-guidelines` | 75,768 | Fetches its rules from a `raw.githubusercontent.com` URL on every review. Read-only, but the fleet's reviews have to work with the network off. |
| `karnonson/marketing-skills/french-writing` | 5 | Below the install bar. |
| `rogueropemaster/safeword/french-inclusive-writing` | 1 | Below the install bar. |

The install bar is 100. It is not a quality measure — it is a proxy for "enough
people have read this that a hostile one would have been noticed".

## What was written instead

`writing` and `translation` have no upstream source. The prose levers in
`writing` come from `writing-for-agents`, which is about documents rather than
prose, and the English-to-French software vocabulary in `translation` is narrow
enough to state directly. Writing them was cheaper than distilling something
adjacent and wrong.

## Completing a distillation

The brief `harness skills distil` produces has six sections, and each is a
question the person promoting it has to answer:

- **description** — one line, in house voice, saying when to trigger.
- **House rules this must respect** — filled in from the fleet; the brief
  arrives with them.
- **What survives from upstream** — and why it is still true here.
- **What is dropped, and why.** A distillation that keeps everything is a copy,
  and a copy cannot be kept current.
- **What upstream was missing** — the gaps written from scratch. `documentation`
  gained a section on docblocks that disagree with the code, because that is
  this fleet's most common documentation defect and upstream has never seen a
  WordPress codebase.
- **Procedure** and **Verification**.

A brief promoted with TODOs still in it is an unread skill. That is the one
thing `promote` cannot check for you.
