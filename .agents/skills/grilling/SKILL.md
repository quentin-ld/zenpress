---
name: grilling
description: >-
  Interviewing the owner to a shared understanding before any work starts. Use
  when a plan, a decision or an idea needs stress-testing, or when the owner
  asks to be grilled, interviewed or questioned about one.
source: >-
  distilled from mattpocock/skills/grilling (https://raw.githubusercontent.com/mattpocock/skills/main/skills/productivity/grilling/SKILL.md)
  sha256 10ff989e7498b23b5acb49d5048f11dcd906757d2f79c5cdf8a00001381296f2,
  mattpocock/skills/grill-with-docs (https://raw.githubusercontent.com/mattpocock/skills/main/skills/engineering/grill-with-docs/SKILL.md)
  sha256 7de372c13488f1ee96cc11cd8907b56b6809cc93eef776eeddd37de6b6cbe3fe,
  mattpocock/skills/grill-me sha256 caaf8b8de1684f96e26b28f3c29189db5c89cce4b73e1c93d86164f66ef88637,
  and mattpocock/skills/batch-grill-me, a skills.sh id that serves the same body
  as grilling and has no resolvable path in the GitHub tree, so it carries no
  digest. Four ids for one skill. fetched 2026-09-27, no scan findings.
---

# Grilling

An interview, not a survey. The owner has a plan, a decision or an idea, and
nobody yet knows what is still undefined in it. This skill finds that out by
asking questions until none is left, and writes the answers down as they arrive.

Reach for it before planning, not during. `/architect` Phase 1 collects the
clarifications a request needs and Phase 3 writes the task file; grilling is the
deeper pass those two rest on, and its output is what the plan is built from.

## The design tree

Lay the subject out as a tree. Every decision sits above the decisions that hang
off it: *which storage?* above *which migration?*, and that above *what happens
to the old rows?*.

The **frontier** is the set of decisions whose prerequisites are all settled —
the questions that can be answered *now*, without guessing at an answer nobody
has given. Everything else waits, because asking it early is asking the owner to
guess about a decision that is not yet made.

## Rounds

Ask the **whole frontier in one round**, then stop and wait. Name the
recommendation for every question; that is what makes a round answerable instead
of a blank page.

```
Q1 · <title> — <the question, as long as it needs; the options where they exist>

Recommendation: <the answer you would give, and why in one line>

---

Q2 · <title> — …
```

Answers reshape the tree. A settled decision unblocks the questions that hung
off it, so the next frontier is **recomputed**, never carried over. A question
whose answer depends on another question still open in this round belongs to a
*later* round; that rule is what keeps a round answerable in one sitting.

## Facts are yours, decisions are the owner's

**A fact is your job.** When a frontier question needs something from the
environment — a file, a call site, a version, a tool — look it up. Never ask for
what you can find yourself, and never ask the owner to confirm what the code
already states.

**A decision is the owner's.** Put each one to them and wait. Do not decide in
their place, and do not read silence as agreement.

A lookup that takes time does not hold the round up. It is an unsettled
prerequisite, so only the questions downstream of it wait; ask the rest of the
frontier now.

## Write the answers down

An interview whose outcome lives only in the chat is an interview that gets
re-decided next week. Record each settled decision as it arrives, in the house
homes:

| home | what goes there |
|---|---|
| `.agents/notes/YYYY-MM-DD-grill-<slug>.md` | the round-by-round record: each question, the answer, the decision it settled |
| `.agents/tasks/` | the plan `/architect` Phase 3 writes, which now has its decisions instead of open questions |
| `docs/adr/` | one decision per file, where the repository keeps a decision log — this repository does |
| `AGENTS.md` | a convention the next agent must follow: a name, a boundary, a rule |

Vocabulary is an output too. When the interview settles what a thing is called,
put the term and its one-line meaning in the note; two agents inventing two
names for one concept is the defect this prevents.

## When it is done

The frontier is empty: every branch of the tree visited, nothing left silently
assumed.

Then stop and say so. Do not begin implementing. The last act of the interview
is the owner's confirmation that the understanding is shared — work that starts
before it is work built on one of the assumptions the interview existed to
surface.

## Verification

The skill was followed correctly when:

- every round asked the whole frontier and then waited;
- every question carried a recommendation;
- no question was asked whose answer was a lookup you could have done;
- each settled decision is written down where a later reader will find it;
- the interview ended on an explicit shared understanding, not on a lull.

## What this skill kept from upstream

Four ids on skills.sh serve one skill: `mattpocock/skills/grilling` carries the
method, `mattpocock/skills/grill-with-docs` is that method plus the documents it
produces, `mattpocock/skills/grill-me` is a one-line pointer at `grilling`, and
`mattpocock/skills/batch-grill-me` serves the same body under a second id.

- **The design tree and the frontier.** The one good idea in the source, and the
  reason a round can be answered rather than drown the owner.
- **Ask the whole frontier at once.** One question per turn hides the shape of
  the problem; the `batch-grill-me` id states it most plainly.
- **Facts are yours, decisions are theirs.** Upstream says it in a line, and it
  is what keeps the interview about choices instead of trivia.
- **Do not act until the owner confirms.** Upstream's closing sentence, and the
  failure it prevents is expensive.
- **Write the documents as you go.** `grill-with-docs` is grilling plus a
  domain-modelling pass that keeps a decision log and a vocabulary. That half is
  kept and pointed at the house files above.

## What was dropped, and why

- **"Call the Skill tool twice, for `grilling` and `domain-modeling`."** Three of
  the four ids are one-line wrappers or duplicates that name another skill to
  invoke. This fleet has no `domain-modeling` skill and no Skill tool to call, so
  the doc-producing half is written into this text — which is also why four ids
  became one skill.
- **The upstream homes for those documents.** `grill-with-docs` names its own
  conventions; the fleet's are `.agents/notes/`, `.agents/tasks/`, `docs/adr/`
  and `AGENTS.md`.
- **`disable-model-invocation`.** Upstream hides `grill-me` and
  `grill-with-docs` behind a manual trigger. A description that states the
  trigger is the house mechanism here, and it survives a restart.
- **The emoji round format.** Two decorative symbols as structural punctuation in
  every round is a formatting tic in house prose; the plain `Q1 ·` form carries
  the same information.

## What upstream was missing

- **A named note file.** Upstream says "creates docs" and stops. Nothing says
  where, and an agent that has to invent a path invents a different one each
  time. `.agents/notes/YYYY-MM-DD-grill-<slug>.md` sits beside the `review`,
  `security` and `qa` notes.
- **The link to the plan.** Grilling produces decisions; `/architect` Phase 3
  turns them into the task file. Nothing upstream connects the interview to the
  artifact that consumes it.
- **Vocabulary as a deliverable.** `grill-with-docs` says "glossary" and leaves
  it there. A settled name is a decision like any other and belongs in the
  record.
- **The stop rule stated as a completion condition.** "Do not act on it until
  the user confirms" is easy to read past; the section above makes it the end of
  the procedure rather than a footnote.
