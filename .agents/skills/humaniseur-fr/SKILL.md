---
name: humaniseur-fr
description: >-
  Removing AI tells from French prose without lowering its register. Use when
  rewriting or reviewing French text — a reply to the owner, a `.po` target, a
  French post — that reads like a machine wrote it.
source: >-
  distilled from samber/cc-skills/humaniseur-fr (https://raw.githubusercontent.com/samber/cc-skills/main/skills/humaniseur-fr/SKILL.md)
  sha256 80ffd1cdca7bf6323b236d7f2618fcf1d8443970a99fe6910050a50463ea45c3
  fetched 2026-09-27, no scan findings.
---

# Humaniseur FR

The French half of `humanizer`. English text is not this skill's business: use
`humanizer` for that, and `translation` when the job is moving a string between
the two languages.

## Register is the first rule

**Never lower the register of the input.** An input in *langage soutenu* stays
soutenu. Formal is not the same as machine-made: a subordinate clause, a precise
connector and a long periodic sentence are features of good French, not
artefacts. Only what is genuinely mechanical comes out — inflated significance,
copula avoidance, synonym cycling, promotional filler.

So step zero is the target register (*soutenu*, *courant*, *familier*) and the
medium. When the request does not say, ask before rewriting anything.

## The dose, and the number of passes

- **The 80% rule.** Applying every rule all the time is its own tell. Keep an em
  dash that earns its place, one `par ailleurs`, one tidy list.
- **The three-signal rule.** One marker is noise — most of them are ordinary
  French. Three or more in the same passage is what makes a reader flinch. Judge
  density and co-occurrence, never a single occurrence.
- **One pass.** Do not run the skill twice over the same text; the second pass
  flattens the voice the first one created. If it still smells machine-made after
  the final pass, the fix is anchored content — a fact, a date, an opinion — not
  another scrub.

## It yields to a more specific method

A LinkedIn post, a press release, ad copy, developer documentation in a README:
whatever rules those bring win on conflict, and this skill covers only what they
leave open. A short punchy paragraph, a tidy list or a heading is the format
speaking, not the machine.

## French is not English with different words

- **The AI lexicon is its own**, and `crucial` is its first word, not "delve".
- **Anglicisms are a major tell**, because the model thought in English first.
- **Typography is strict**, and it is checked here rather than left to a style
  guide: spacing, guillemets, number format.
- **The dissertation tradition** (*thèse / antithèse / synthèse*) overlaps with AI
  structure, so announce-and-balance is school-legitimate and passes unnoticed.
- **Longer sentences are normal.** "Vary the sentence length" therefore means
  something narrower: the missing extremes are the tell, not the mean.

## The patterns

### 1 · Content

**1 · Inflation of significance.** `constitue un tournant`, `témoigne de`, `joue
un rôle crucial`, `souligne l'importance`, `ouvre la voie à`, `un paysage en
mutation`, `une empreinte indélébile`. State the fact; drop the significance.

**2 · Notability and coverage.** `cité par`, a list of prestige outlets, `une
forte présence sur les réseaux sociaux`. Use the real source and what it said, or
cut the list.

**3 · Superficial `-ant` participles.** `soulignant`, `mettant en lumière`,
`reflétant`, `contribuant à`, `favorisant`, `englobant`. The French shape of the
English `-ing` rider.

**4 · Promotional language.** `vibrant`, `riche`, `profond`, `niché`, `au cœur
de`, `révolutionnaire`, `incontournable`, `un joyau`. Also the valorising
adjective or inclusive doublet absent from the source — `nos soldats` becoming
`nos vaillants soldats`: restore the source's wording.

**5 · Vague attribution.** `les experts estiment`, `les observateurs
soulignent`, `il est largement reconnu que`, `des rapports sectoriels`. Name the
source, or drop the claim.

**6 · The *défis et perspectives* sandwich.** `Malgré …, fait face à`, `En dépit
de ces défis`, `Perspectives d'avenir`, `L'avenir s'annonce prometteur`. End on a
concrete fact instead.

### 2 · Language, grammar and style

**7 · Overused AI vocabulary.** The one word list, and the only place a word is a
tell by itself.

| AI | strategy |
|---|---|
| `crucial`, `essentiel` | a domain term, or drop it |
| `également` (the top measured marker) | `aussi`, `de même`, or drop — one a paragraph at most |
| `défi` | `problème`, `difficulté`, or name the obstacle |
| `significatif`, `robuste`, `substantiel` | a number |
| `holistique` | delete |
| `compréhensif` (for *exhaustif*) | `exhaustif`, `complet` |
| `disruptif` | `de rupture`, or describe the change |
| `notamment` (over one per 800 words) | `en particulier`, `entre autres`, or restructure |
| `par ailleurs`, `en outre`, `de plus` | `or`, `reste que`, `n'empêche que` |
| `il convient de noter que` | delete, start the sentence |
| `dans le paysage …`, `au cœur de` | delete, or name the place |
| `la pierre angulaire`, `un levier puissant` | say what it is |
| `permettre de`, `favoriser`, `optimiser` | the concrete verb |
| `mettre en lumière` | `montrer`, `révéler` |
| `naviguer dans`, `déverrouiller le potentiel de` | describe the action |
| `garantir`, `assurer`, `offrir` | state the fact |
| `dans cette optique`, `à cet égard` | delete, or link concretely |
| `que vous soyez X ou Y` | address the actual reader |

Add to it: ministerial jargon outside an administrative text (`dispositif`,
`acteurs`, `enjeux`, `mise en œuvre`, `dynamique territoriale`); formulaic
openings (`Dans le paysage …`, `À l'ère de …`, `Dans un monde où …`, `Il est
essentiel de noter que …`, `Plongeons dans …`, `Découvrez comment …`); formulaic
closings (`En conclusion`, `En résumé`, `En somme`, `Au final`); and the
connectors the model almost never uses, which are therefore free authenticity:
`Or`, `Quoi qu'il en soit`, `Toujours est-il que`, `Force est de constater que`,
`Reste que`, `N'empêche que`, `Soit dit en passant`.

**8 · Copula avoidance.** `constitue`, `fait office de`, `se positionne comme`,
`dispose de`, `offre`. Use `est` and `a`.

**9 · Negative parallelism.** `Non seulement … mais aussi …`, `Il ne s'agit pas
seulement de … mais de …`, `Ce n'est pas un simple X, c'est un Y`.

**10 · Systematic rule of three.** Ideas forced into groups of three.

**11 · Synonym cycling.** One referent under three names — `le protagoniste`,
`le personnage principal`, `la figure centrale`.

**12 · False scales.** `de X à Y, de A à B` where neither pair is a scale.

**13 · Anglicisms of architecture.** The most reliable family, because the model
reached for English first.

| AI | French |
|---|---|
| `faire du sens` | `avoir du sens` |
| `adresser un problème` | `traiter`, `aborder` |
| `implémenter` (outside IT) | `mettre en œuvre` |
| `impacter` | `affecter`, `toucher` |
| `supporter` (to support) | `prendre en charge` |
| `définitivement` (for "certainly") | `sans aucun doute` |
| `basiquement` | `en gros`, `fondamentalement` |
| a comma before `et` | no comma before `et` |

**14 · Redundant adjective doublets.** `crucial et essentiel`, `robuste et
fiable`, `innovant et avant-gardiste`.

**15 · Em dashes.** French prefers the comma and the parenthesis for an
incidental clause. *Weakened tell:* readers know it now and humans use it, so
reduce the overuse without treating a sighting as proof.

**16 · Mechanical bold, headed lists and tables.** `- **Titre :** …` bullets, and
a table presenting ordinary prose as data. Convert to prose; keep a table when
the content is genuinely tabular.

**17 · English title case in headings.** French capitalises the first word only —
`## Négociations stratégiques`, not `## Négociations Stratégiques`.

**18 · Emoji.** A register feature, not a defect. Keep the one that carries tone
or replaces words; remove the one that decorates structure. The tell is the
systematic series — same position, one per bullet, one per heading. Formal
documents take none. When the author's voice is unclear, ask.

**19 · Quote and mark inconsistency.** The tell is not one variant but the mix:
straight quotes, curly quotes and chevrons in one text, or `'` and `’`
alternating. Match the register — chevrons `« … »` with non-breaking spaces in
worked official prose, curly quotes elsewhere — and keep it consistent.

**20 · Conversation artefacts.** `J'espère que cela vous aide`, `Bien sûr !`,
`Absolument !`, `Vous avez tout à fait raison`, `Souhaitez-vous que …`,
`N'hésitez pas à`, `Voici un …`. Remove the wrapper, keep the content.

**21 · Knowledge-limit clauses.** `Selon les informations disponibles`, `Bien
que les détails spécifiques soient limités`, `sur la base des données
accessibles`. State what the source does not show, or cut the sentence.

**22 · Filler.** `Afin de parvenir à cet objectif` → `Pour y arriver`; `En raison
du fait que` → `parce que`; `À l'heure actuelle` → `aujourd'hui`; `Dans
l'éventualité où` → `si`; `Le système a la capacité de` → `le système peut`; `Il
est important de noter que` → delete and start the sentence; `En ce qui
concerne` → `sur`, `quant à`.

**23 · Excessive hedging.** `On pourrait potentiellement arguer que cette
politique pourrait éventuellement avoir un certain effet.`

**24 · Generic positive conclusions.** `L'avenir s'annonce prometteur`, `poursuit
son chemin vers l'excellence`, `un pas majeur dans la bonne direction`.

**25 · Structural uniformity.** Paragraphs of near-identical length, lists of
3/5/7/10 items, an invariable intro-body-conclusion. The only quantified French
study found mean sentence length nearly identical — 21.0 words human against 21.7
AI — and AI producing almost no sentence under 15 or over 39 words. **Reintroduce
the tail.** Also here: sentence-start anaphora (`Cela …`, `Cette approche …`,
`Ce système …` one after another), and the LinkedIn register — one-sentence
paragraphs, `Et là… tout a changé`, relentlessly upbeat — which now reads as
machine-made even when a human wrote it.

**26 · Residual Markdown and technical artefacts.** Unrendered `**mot**` or `##`
in a medium that does not render Markdown, `- **Titre :**` bullets pasted the
same way, `:contentReference[oaicite:2]{index=2}`, a leftover refusal (`Je suis
désolé, mais je ne peux pas …`). These are the strongest tells of all, because no
spell-checker produces them — only a pasted chat output does. Strip zero-width
characters (U+200B, U+200C, U+200D, U+FEFF). **Never** strip non-breaking spaces
(U+00A0, U+202F): they are correct French typography before `; : ! ?`, and
confusing the two raises a false alarm on every properly typeset French text.
Markdown in a README, a wiki or developer documentation is the medium, not a
tell.

### 3 · Discourse architecture

Lexical scrubbing is not enough. A text with zero flagged words can still read
machine-made because of how it is built. These are craft heuristics rather than
measured figures.

**27 · Announcement, recap and echo of the brief.** An intro announcing what the
text will say, a conclusion repeating it, headings mirroring the announced plan
one for one, a first sentence restating the question asked. Start *in medias
res*; end where the intro could not have predicted.

**28 · Catalogue structure.** Sections that could be reordered without damage,
every aspect of the topic at equal depth. The permutation test: if two sections
swap without damage, it is a disguised list, not an argument. Choose an angle,
cut the aspects that do not serve it, make the order necessary.

**29 · The paragraph mould.** Topic sentence, two or three supports, a
mini-conclusion, in every paragraph, with `D'abord` / `Ensuite` / `De plus` /
`Enfin` scaffolding. Drop the connectors; let one idea straddle a paragraph
break.

**30 · False balance.** Every claim immediately counterbalanced — `Cependant, il
convient de nuancer …`, a symmetrical `d'une part / d'autre part`, a `tout
dépend du contexte` conclusion. Take a position and nuance once. Deletion test:
remove the objection; if the conclusion still holds, it was ornament. *Quebec
caveat:* rédaction épicène and OQLF plain-language norms push human
institutional writers toward exactly that flat, symmetrical shape, so balance
alone is not evidence there.

**31 · SEO over-sectioning and the ghost Q&A.** A heading every two paragraphs, a
table of contents on a short text, an FAQ block, `Pourquoi est-ce important ?
Parce que …`. A heading governs four or five paragraphs or it merges; a
self-question becomes a statement.

**32 · Constant granularity.** The whole text at one altitude — no date, no name,
no price, no error message. Force one verifiable, named, dated detail per
section. An author with none has a content problem, not a style problem.

**33 · No holes.** Every question the text raises gets answered, no thread left
open. Real expertise leaves holes, because the author knows where the knowledge
stops. Leave one question honestly open and name the limit.

**34 · The list as avoidance.** A bullet list appearing exactly where the
reasoning gets hard — the decision, the trade-off, the prioritisation. Ask what
decision the list avoids, and write the sentence that chooses.

**35 · No occasion.** Nothing explains why the text exists now, for whom, or
triggered by what. Anchor it in its occasion within the first paragraphs. When
there is none, ask the author for it.

### 4 · Soul

Removing tells is half the job. Sterile text is as suspicious as `crucial`.

**Know the limit.** Experienced French readers no longer rely on style. What they
trust is behavioural: publishing cadence, whether the author exists, whether the
sources check out. No amount of scrubbing fixes a text with nothing situated in
it. When the input has no anchored content, ask for one real example, one date,
one source, and build the rewrite around them rather than polishing the surface.

Then add voice: an opinion (`Franchement, je ne sais pas quoi en penser` beats a
neutral pros-and-cons); unequal rhythm, short sentences against long periodic
ones; `je` where it fits; a parenthesis or a tangent; irony, understatement and
self-deprecation; one well-placed rare word, *soutenu* or *argotique*, matching
the register; the regionalisms of the author's actual French, never a forced one;
in *familier* only, the dropped `ne` and the contraction; and the abbreviation a
human reaches for (`pb`, `tjs`, `14h30`, `A+`, `cf.`, `PS:`, `RDV`). The model
never writes `je ne sais pas`, so a frank admission of not knowing is among the
strongest authenticity markers — as is humour. Both belong only where the context
allows: a legal notice tolerates neither.

The test for "soulless even when clean": every sentence the same length, no
opinion, no uncertainty, no first person where it would fit, no humour, reads
like a press release.

## Procedure and output

1. Establish the register and the medium. Ask when the request does not say.
2. Read the input once and mark the patterns, strongest first.
3. Rewrite, then add voice.
4. Self-audit: `Qu'est-ce qui rend ce texte évidemment généré par IA ?` Answer in
   two or three lines, then fix what the answer names.
5. Return, in this order: the **final version** (house order is conclusion
   first), the two or three tells that remain, then the patterns removed. The
   draft is available on request.

**Never add a fact.** A date, a number, a quote or a name the source does not
carry is a hallucination, not a human touch.

## In this fleet

- **French has two homes**: a `.po` catalogue target and a reply to the owner.
  French anywhere else in the repository is drift the next reader pays for — the
  `translation` skill's rule, which this skill does not relax.
- **Never reword an existing i18n string.** The catalogue is regenerated from the
  source string.
- **Do not translate what WordPress translates.** `article`, `page`,
  `extension`, `tableau de bord`: where WordPress already renders the term, a
  second name for one concept is a defect.
- **Check the typography on the way out**: non-breaking space before `: ; ! ?`,
  and no title case in headings. `translation` states both; this skill enforces
  them after a rewrite, which is the moment they get broken.

## Verification

The skill was followed correctly when:

- the register of the output is the register of the input;
- it reads aloud as French a French speaker would write;
- no fact, date, number or source was invented;
- typography is consistent and correct — spacing, guillemets, number format;
- the sentences have a short tail and a long tail, not just a mean;
- the result came out in one pass.

## What this skill kept from upstream

- **Register first, and never lowered.** Upstream's strongest rule, and the one
  almost every other humanizer breaks by turning prose casual.
- **The three-signal rule and the 80% rule.** Density and co-occurrence decide,
  never a single occurrence — which is what stops the skill producing sterile
  prose.
- **One pass only**, with the reason: a second pass erases the voice the first
  created.
- **The pattern taxonomy**, compacted from 38 entries, with the French triggers
  kept verbatim because the triggers *are* the tool.
- **Part 4, soul.** Upstream is unusual in saying that removing tells is only
  half the job, and in naming the behavioural signals no style fix reaches.
- **The typography details**: zero-width characters out, non-breaking spaces in.
- **The measured French figures** — `également` at four times human rate, the
  sentence-length distribution, the tense and pronoun profile — because they are
  the only quantified evidence in the source.

## What was dropped, and why

- **The French prose itself.** Upstream is written in French; everything written
  to this repository is US English, so the reasoning is in English and only the
  terms, triggers and examples stay French. `translation` is written the same
  way.
- **The full worked example.** A thirteen-line *avant* and three versions of it,
  about AI coding assistants, then a summary of the twelve patterns removed. The
  patterns are stated in the list; the example was illustration and long.
- **The per-region slang and abbreviation palettes in full.** France, Belgium,
  Quebec, Suisse romande — about forty items across four lists. Kept as a rule
  with a handful of examples, because a palette is only usable when it matches
  the author's real French, and a wrong regionalism is worse than none.
- **The narrative-fiction register** (pattern 29: *lyrisme de pacotille*). This
  fleet writes documents, translations and replies, not French fiction.
- **`allowed-tools`, `license`, `compatibility`, `metadata`, the OpenClaw block
  and the freshness warning.** Upstream's harness fields, meaningless to
  Reasonix; the freshness point survives in the weakened-tell notes.
- **The six measured percentages for `devoir` / `continuer` / `tenir` /
  `ensemble`.** Six figures for one tendency, kept as the tendency.

## What upstream was missing

- **The house homes for French.** A `.po` target and a reply to the owner, and
  the `translation` skill's rule that French anywhere else is drift.
- **The i18n rule.** Rewording an English source string invalidates every
  translation of it, and no upstream prose skill knows a catalogue exists.
- **WordPress vocabulary.** `article`, `page`, `extension`, `tableau de bord` —
  terms WordPress already translates, so translating them again produces a page
  where one concept has two names.
- **The output order.** Upstream returns draft, tells, final, summary. House
  order is conclusion first: the final version, then the tells that remain, then
  what was removed.
