---
name: writing
description: >-
  Writing anything the fleet produces for a person to read: a README, a
  changelog, a commit message, a review note, a task file, a docblock, a
  user-facing string. Carries the WordPress Documentation Style Guide rules in
  `references/`. Use before drafting or rewriting prose, then run the pass that
  takes the machine out: `humanizer` for English, `humaniseur-fr` for French.
---

# Writing

A person reads this, not an agent. The goal is prose that sounds like someone
wrote it, because someone did.

The fleet's register is **US English, conclusion first, no preamble**. Everything
below is what that means in practice.

## The guide's rules

The fleet's standard is the **WordPress Documentation Style Guide**, and its
rules are the house style wherever a person reads the output. Each heading below
links to the reference that holds that section of the guide in full, with its
examples and its exceptions. The lines are the whole guide in one line each;
open the reference when a line is not enough to decide.

### [General guidelines](references/general-guidelines.md)

- Follow a defined document structure throughout your documentation.
- Write in a conversational tone that is succinct, natural, and friendly.
- Write documentation that is accessible to everyone.
- Write for a global audience, and consider translation.
- Use inclusive language, word choice, and examples.
- Avoid excessive claims about products and services. Do not document or predict
  future features.
- Write in your own words. Do not copy content from external sources.

### [Language and grammar](references/language-and-grammar.md)

- Spell out and declare an abbreviation the first time it is used. Avoid
  internet slang and jargon.
- Include definite and indefinite articles.
- Follow standard American (US) English capitalization rules. In general, use
  sentence case.
- Put conditional clauses before instructions, not after them.
- Contractions are generally acceptable; watch the exceptions.
- In general, use indirect speech.
- In general, use second person.
- Capitalize proper nouns. Do not use a verb as a noun or a noun as a verb.
- Pluralize a singular noun by adding _-s_.
- Form a singular possessive with an _apostrophe-s_.
- Do not use three or more affixes in a single word.
- Use prepositions as needed, even at the end of a sentence.
- Ensure that a pronoun clearly refers to its antecedent.
- In general, write in the present tense rather than the future tense.
- Use precise verbs to write clear, succinct sentences.
- In general, use active voice rather than passive voice.
- Use common and simple technical terms that most readers understand.

### [Punctuation](references/punctuation.md)

- Use straight apostrophes.
- Use colons to introduce closely related content that follows.
- Use commas to separate items in a series and certain kinds of clauses. Use
  serial commas.
- Use an em dash to set off a break in the flow of a sentence. Use an en dash for
  a range of numbers, a minus sign, or a negative number.
- In general, avoid ellipses.
- Use exclamation points only when absolutely needed, and never in code
  examples.
- Hyphenate words only when needed for clarity.
- Use parentheses sparingly.
- End every independent sentence with a period, and insert one space after it.
- Use question marks sparingly.
- Use straight double quotation marks.
- Use semicolons to separate independent clauses.
- Avoid slashes except in code examples, file paths, and URLs.

### [Formatting](references/formatting.md)

- Use the _day of week, month dd, year_ date format. Express time on the 12-hour
  clock and always include _AM_ and _PM_. Use Coordinated Universal Time (UTC),
  and always include the time zone for a real time.
- Write unbiased examples that reveal no personally identifiable information.
- Use all-lowercase filenames and separate words with hyphens.
- Avoid footnotes.
- Use sentence case for headings, and follow the heading hierarchy.
- Use italics to emphasize or introduce a particular word or phrase.
- Use numbered lists for sequences, bulleted lists for non-sequential items, and
  description lists for pairs of related data.
- Use SVG or PNG images, and provide alt text.
- Use notices to warn, alert, notify, or inform.
- Spell out whole numbers from zero through nine.
- Mark outdated content with a warning notice.
- Use mock phone numbers in examples.
- Use procedures for a sequence of numbered steps.
- Use tables for lengthy, related, complex data.
- Maintain consistent type and text formatting.
- Follow the trademark, licensing, and citation rules of the mark's owner.
- Put a nonbreaking space between a number and its unit of measurement.
- Italicize words used as words.

### [Linking](references/linking.md)

- Use cross-references to guide readers to related information.
- Linking to an external site for more information is fine.
- Use heading anchors.
- Use root-relative URLs for image links.
- Write link text that is detailed and gives the reader context.

### [Developer content](references/developer-content.md)

- Use code blocks, preformatted text, and code fences for code examples.
- Set code-related content in a monospace code font.
- Follow the WordPress coding standards.
- Follow proper command-line syntax and formatting.
- Wrap a placeholder in a `<var>` element and use uppercase characters with
  underscore delimiters.
- Emphasize the task to be accomplished rather than how to interact with a UI
  element.
- Format UI element names in bold, and use the right nouns and verbs to describe
  interacting with them.

### [Word list and usage dictionary](references/word-list/index.md)

- A term's spelling and usage is in the dictionary, split by first letter:
  `references/word-list/<first letter>.md`. Open one letter, never the whole
  dictionary.

## Where the rest lives

Seven references sit beside this file. What you are writing decides which one you
open — not how big it is.

| reference | open it when |
|---|---|
| `references/general-guidelines.md` | the question is structure, tone, audience, inclusivity, or a claim |
| `references/language-and-grammar.md` | articles, capitalization, clauses, tense, voice, pronouns, word choice |
| `references/punctuation.md` | apostrophes, colons, commas, dashes, hyphens, periods, quotation marks, slashes |
| `references/formatting.md` | dates, filenames, headings, lists, notices, numbers, procedures, tables, trademarks, units |
| `references/linking.md` | cross-references, heading anchors, image links, link text |
| `references/developer-content.md` | code examples, inline code, command-line syntax, placeholders, UI elements |
| `references/word-list/<letter>.md` | a term's spelling or usage — one file per first letter |

## Which register wins

The guide governs documents and quoted text: em dashes for a break in the flow,
straight apostrophes, straight double quotation marks. The humanizer lists govern
prose habit: a dash used as a universal connector is a tell, and stacked
punctuation is rationed. Both hold at once — documentation punctuation is house
style, and the habit of reaching for the same mark is the tell.

## The pass that takes the machine out

Draft, then run the pass that matches the language: `humanizer` for an English
text, `humaniseur-fr` for a French one. Their lists are theirs and are not
restated here. Name the pass in the summary of anything you write about the text
— `reviewer` and `qa` record whether it ran, on any change that adds or rewrites
a sentence or more of reader-visible prose.

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
| pull-request prose | a reviewer deciding whether to read the diff |
| changelog and `readme.txt` | a user deciding whether to update |
| review and QA findings | the person who has to fix them |
| task files | the next agent, who has only this to go on |
| code comments and docblocks | the next reader of the line above them |
| user-facing strings | someone reading the screen, in their own language |

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

The rules above are the WordPress Documentation Style Guide, cut from
`mirrors/wordpress-documentation-style-guide-consolidated.md` by
`mirrors/tools/build_style_guide_references.py` and shipped in `references/`.
Every page in them keeps the live URL it came from on its `**Source:**` line.

This skill is still the one to reach for first. `humanizer` reads a draft and
takes the machine out of it; this one is how to write the sentence that does not
have the machine in it to begin with.
