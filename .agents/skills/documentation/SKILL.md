---
name: documentation
description: >-
  Writing documents an agent consumes. Use when creating or editing a skill, an
  AGENTS.md, a README section, a docblock, or any file reached by a pointer.
---

# Documentation

Reference for writing any document an agent reads: a skill, an `AGENTS.md`, a
docblock, a line in a README. The packaging differs; the levers do not.

Distilled from `mattpocock/skills/writing-for-agents` — see
`.agents/docs/DISTILLATION.md` for what was kept, dropped, and added.

## Context pointers

A **context pointer** is a reference held in the agent's context that names
out-of-context material and encodes the condition for reaching it. A skill's
description is one; a line in `AGENTS.md` naming a doc is the same object. The
pointer's **wording**, not its target, decides when the agent reaches the
material and how reliably. A must-have target behind weakly worded pointer is a
variance bug: sharpen the wording first, inline the material only if sharpening
fails.

A pointer does two jobs: state what the material is, and list the **branches**
that should trigger reaching it. Every word of an always-loaded pointer costs on
every turn:

- **Front-load the leading word.** The pointer is where it does its work.
- **One trigger per branch.** Synonyms renaming a single branch are one branch
  written twice; collapse them.
- **Cut identity the body already carries.**

## The two loads

- **Context load** is always-loaded material on the agent's window: an
  `AGENTS.md` line, a skill description, anything spending tokens whether or not
  it fires.
- **Cognitive load** is the cost on the human: which documents exist and when to
  reach for each. The human is the index. Not a cost to minimise; spend it where
  human judgement matters.

## Information hierarchy

Two content types: **steps** (ordered actions) and **reference** (facts
consulted on demand). The core decision is where each piece sits:

1. **In-file step** — what the agent does, in order.
2. **In-file reference** — consulted on demand. Often a legitimately flat
   peer-set, which is a fine arrangement, not a smell.
3. **Disclosed reference** — pushed into a separate file behind a pointer.

**Progressive disclosure** is the move down the ladder. Branching is the
cleanest test: inline what every branch needs, disclose what only some reach.

**Co-location** decides what sits beside what. Keep a concept's definition,
rules and caveats under one heading. Grouped material reads as documentation;
scattered material does not.

**Sprawl** is the failure mode: a document too long even when every line is
live. The cure is the ladder.

## Completion criteria

Every step ends on a **completion criterion**. Two properties make it a lever:

- **Clarity** — can the agent tell done from not-done? A vague bound invites
  **premature completion**. Sharpen the bound first, locally and cheaply.
- **Demand** — how much it requires. "Every modified model accounted for" forces
  thorough work where "produce a change list" does not.

The strongest criteria are both checkable and exhaustive.

## Leading words

A **leading word** is a compact concept already in the model's pretraining that
the agent thinks with: _lesson_, _fog of war_, _tracer bullets_. Repeated as a
token, never as a sentence, it anchors a whole region of behaviour in the fewest
tokens by recruiting priors the model already holds. A coined word recruits no
priors: you pay in definition tokens what a pretrained word gives free.

**Negation is the failure mode beside this lever.** Steering by prohibition
drags the forbidden behaviour into context and makes it _more_ available.
_Don't think of an elephant._ Prompt the **positive**: "write one-line comments"
so the banned one is never spoken. A prohibition earns its place only as a hard
guardrail you cannot phrase positively, and even then pair it with the target.

## Pruning

- **Single source of truth.** Duplication costs maintenance and tokens, and
  inflates a meaning's prominence past its real rank. A leading word repeats a
  token on purpose; duplication repeats a meaning by accident.
- **The environment is a source of truth too** — `package.json` scripts, config,
  directory layout, `--help`. A document restating it is a **cache**, and earns
  its load only when the lookup is expensive. Cache the unwritten convention,
  the reason behind a choice, the gotcha no config confesses.
- **Relevance**, line by line. The default fate without this discipline is
  **sediment**: stale layers that settle because adding feels safe and removing
  feels risky.
- **No-ops.** An instruction the model already obeys by default pays load to say
  nothing. The test is model-relative, not reader-relative. When a sentence
  fails, delete the sentence rather than trim words from it.

## In this fleet

- **US English.** User-facing prose belongs to the `writing` skill: it carries the WordPress Documentation Style Guide rules in `references/` and hands the draft to `humanizer` or `humaniseur-fr`. This skill is for the documents an agent consumes.
- **A docblock states what the code does, not what it should do.** The fleet's
  most common documentation defect is a docblock that disagrees with the code —
  `'WordPress'` where the function returns `'wordpress'`, a fixed array shape a
  failure path contradicts. WPCS checks that a docblock is present and shaped
  right; nothing checks that it is true. That is this skill's job.
- **Do not restate the signature.** `@param int $id` under
  `function f( int $id )` is a no-op. Say what the value means, or say nothing.
- **`@return` describes what comes back, including when it is nothing.** "Empty
  string when the term has no archive" is worth a line; "the link" is not.
