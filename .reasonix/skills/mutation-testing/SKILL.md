---
name: mutation-testing
description: Turn surviving mutants into better tests, or into bug reports. Use when a mutation run reports escaped mutants, when the MSI gate fails, when asked whether a test suite is actually testing anything, or before proposing to lower a threshold.
---

# Mutation testing

A test that cannot fail is worse than no test, because it still reports
coverage. Mutation testing is the only mechanical way to find those: it changes
the code on purpose and re-runs the suite. A mutant that survives is a hole.

This skill is about what to do with the survivors. Running the gate is
`bin/harness mutation`; deciding what each survivor means is judgement, and it
is the whole job.

## The two gates, cheapest first

| gate | cost | finds |
|---|---|---|
| `bin/harness antipatterns <files>` | instant | assertions that are structurally incapable of failing |
| `bin/harness mutation` | seconds to minutes | assertions that could fail but do not, because nothing exercises them |

Run the first before the second. It costs nothing and removes whole categories
before the expensive gate sees them.

`bin/harness mutation` runs Infection **on the diff only**
(`--git-diff-lines`), so the budget stays bounded. Thresholds: **MSI 70**,
**covered MSI 80**. They live in `bin/harness`, not in `infection.json5` — one
place. `infection.json5` owns only paths.

```
bin/harness mutation                       # the diff, versus origin/HEAD
HARNESS_MUTATION_BASE=main bin/harness ... # versus another ref
```

## Reading a run

```
76 mutations were generated:
      56 mutants were killed by Test Framework
      20 covered mutants were not detected
       Mutation Code Coverage: 100%
              Covered Code MSI: 73%
```

`Mutation Code Coverage` is how much of the mutated code the suite executes.
`Covered Code MSI` is how much of what it executes it can actually tell apart.
**A high first number with a low second one is the signature of a tautological
suite**: 100% of the lines run, and a fifth of the logic could be inverted
without a single failure.

That is not hypothetical. `Updatronix_Security` measured exactly those numbers,
and nine of its twenty survivors were `LogicalAnd` variants: the tests assert
what the method returns, and never exercise the case where one branch of the
condition is false.

## The three kinds of survivor

Every survivor is one of these. Deciding which is the job; guessing is how a
real bug gets closed as "equivalent".

**1 · The test is too weak.** Most common. The assertion checks the outcome for
one input, and the mutation changes behaviour for an input nobody tried.

Fix: assert on the branch. If the condition is `$a && $b`, there are four cases
and the test suite should name all four in its intent, even when two share an
assertion.

**2 · The mutant is equivalent.** The change genuinely cannot alter behaviour:
logic that is already dominated by an earlier return, a defensive branch that
cannot be reached, `$x = 1` where `$x` is unused.

Fix: none in the test. Consider deleting the dead logic instead — an equivalent
mutant is usually a small piece of code that does nothing, and removing it is
better than documenting it. If it must stay, say why in the code, not in the
mutation config.

**3 · The code is wrong or unreachable.** The branch is never taken, or the
guard contradicts something upstream. This is a bug, and the survivor found it
for free.

Fix: report it. Do not quietly write a test that pins the current behaviour —
that converts a bug into a specification.

## Procedure

1. Run `bin/harness mutation`. Read the escaped list from
   `build/infection.json`; group it by `mutatorName` before looking at
   individual mutants. Twenty survivors are usually three causes, not twenty.
2. For each **group**, open the mutant's line and read its `originalCode` and
   `mutatedCode`. The mutation says exactly which decision the suite cannot
   see.
3. Classify it: weak test, equivalent, or real bug. Say which, out loud, for
   each group. A classification nobody stated is a classification nobody can
   check.
4. For a weak test, write the case that distinguishes the two versions, and
   confirm it fails against the mutation before it passes against the code.
5. Re-run. The number moving is the proof; a test added without re-running is
   an assumption.

## Thresholds

**Never lower a threshold to make a run pass.** The threshold is the only thing
making the gate real, and a gate that moves on request is not a gate.

If the current threshold genuinely cannot be met yet, the honest move is to
record the measured number and raise the threshold as the suite improves — in a
commit that says so. A number in a file with no explanation is the next
person's guess.

## What this skill kept from upstream

Distilled from `trailofbits/skills/mutation-testing`, which targets the `mewt`
and `muton` tools rather than PHP.

- **Equivalent mutants are a category, not a failure.** Upstream devotes a
  reference to cataloguing them; that distinction is the single most useful idea
  in the source and it transfers unchanged.
- **Group survivors before analysing them.** Twenty findings are usually a
  handful of causes.
- **Severity determines effort.** Not every survivor deserves a new test.
- **Survivors are a bug-hunting tool, not only a test-quality metric.** The
  third category above comes from there.

## What was dropped, and why

- **Every `mewt`/`muton` command, flag and config file.** Wrong toolchain: this
  fleet uses Infection with PHPUnit. Keeping them would have produced a skill
  that reads well and misleads.
- **Blockchain and Solidity references.** No target here.
- **The foreign-tool input formats** (`slither-mutate`, `mull`,
  `dextool-mutate`). Infection writes its own JSON.
- **The report template.** A formal analysis document does not fit a gate that
  runs on every push.

## What upstream was missing

- **The `antipatterns` first pass.** Structural bans are instant and remove the
  cheapest categories before the expensive run.
- **`--git-diff-lines` and the budget it protects.** Upstream assumes you run a
  campaign; here it runs inside a pre-push hook.
- **`--initial-tests-php-options`.** Infection spawns PHPUnit as a plain `php`,
  so a coverage driver loaded only in Infection's own invocation does not reach
  the child. That failure reads as "no code coverage generator has been
  detected", which is misleading. `bin/harness mutation` passes the flags
  through; a hand-rolled invocation must too.
- **The classification-is-mandatory rule.** Upstream assumes an analyst who
  will label things. An agent needs to be told, because "all twenty are
  equivalent" is a very easy sentence to write.

## Verification

The skill was followed correctly when:

- every escaped mutant has been classified and the classification was stated;
- the MSI moved, or the run was explained rather than excused;
- no threshold in `bin/harness` or `infection.json5` was changed to make the
  run pass.
