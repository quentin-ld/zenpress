---
name: writing
description: >-
  Writing prose that reads as written. Use when the output is read by a person:
  a README, a changelog, a commit message, a review, a user-facing string.
---

# Writing

A person reads this, not an agent. The goal is prose that sounds like someone
wrote it, because someone did.

The fleet's register is **US English, conclusion first, no preamble**. Everything
below is what that means in practice.

## The tests a sentence has to pass

**Could it be shorter?** Most sentences can. The first draft explains; the
second states. Cut the runway — "in order to", "it should be noted that", "it is
important to", "the fact that".

**Does it say anything?** A sentence that survives deletion without loss was
padding. The commonest padding is a restatement of the sentence before it,
introduced by "in other words" or "essentially".

**Would anyone say this?** People do not "leverage functionality to facilitate
outcomes". They use a tool to do a thing. If the sentence cannot be said aloud
without embarrassment, it is written for a rubric rather than a reader.

## What machine prose looks like

The tells, in rough order of how often they appear here:

- **The hedge stack.** "It's worth noting that this may potentially cause
  issues." One hedge, or none. "May cause issues" is already uncertain.
- **The triad.** Three adjectives or three examples where one was needed.
  "Fast, reliable, and scalable" says nothing the reader can act on.
- **The symmetry.** Every paragraph the same length, every list the same shape.
  Real prose is uneven because real points are uneven.
- **The summary paragraph.** A closing paragraph beginning "In conclusion" or
  restating what was just said. The reader read it.
- **The empty transition.** "Furthermore", "Moreover", "Additionally" at the
  start of a sentence that is not a further point.
- **The nominalisation.** "Implementation of the configuration" instead of
  "configuring it". Verbs make sentences move.
- **The em-dash tic.** Used correctly, it is punctuation. Used every other
  sentence, it is a fingerprint.
- **The unearned emphasis.** Bold on a phrase that is not the point.

## What to do instead

**Lead with the conclusion.** The reader decides in the first two lines whether
to keep going. Say the thing, then explain it.

**Be specific.** "It broke" is not a bug report. "The second call returned an
empty string when the cache was cold" is. Names, numbers, file paths.

**Vary the length.** A short sentence after two long ones lands. That is rhythm,
and it is the difference between prose and a specification.

**Say "you" and "we".** The passive voice hides who did what: "the file was
modified" is not a fact anyone can act on. "The merge rewrites it" is.

**Own the uncertainty.** "I think the second is faster" beats "the second may
potentially offer improved performance". One is a claim, the other is a hedge
wearing a claim's clothes.

## Where this applies in this fleet

| output | reader |
|---|---|
| `README.md`, generated block and the project's own parts | a developer deciding whether to use this |
| commit messages | whoever runs `git log` in a year, probably you |
| changelog and `readme.txt` | a user deciding whether to update |
| review and QA findings | the person who has to fix them |
| code comments | the next reader of the line above them |

**Not** the harness's own internal docs: `DESIGN.md`, the ADRs and the
migrations notes are written for whoever maintains the harness, and prose that
argues a decision is doing a different job from prose that reports one.

## The one rule

Read it aloud. If you would not say it that way to someone who asked, rewrite
it until you would.

---

Distilled in part from `mattpocock/skills/writing-for-agents`, whose levers —
pruning, no-ops, leading words, negation — apply to prose as much as to
documents. See `.agents/docs/DISTILLATION.md`.

The `humanizer`-named skills on skills.sh that wrap a paid API
(`humanizerai.com` and similar) were rejected: they send the text off the
machine, which contradicts the fleet's first rule — everything runs locally. The
two that hold no API were distilled instead, as `humanizer` for English and
`humaniseur-fr` for French.

This skill is still the one to reach for first. `humanizer` reads a draft and
takes the machine out of it; this one is how to write the sentence that does not
have the machine in it to begin with.
