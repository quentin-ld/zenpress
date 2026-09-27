---
name: test-author
description: Write a test that can fail. Use whenever adding a test, when a suite is being created for a project that has none, when asked to raise coverage, or before claiming a behaviour is covered. Covers the oracle problem, when to choose the integration suite over the unit one, and how to prove the test is not tautological.
---

# Writing a test that can fail

Coverage counts lines that ran. It says nothing about whether the assertions
could tell the difference between the code working and the code being wrong.
That distinction is the entire job of this skill.

**The acceptance criterion, and it is the only one:** you must be able to name
the change to the source that would make this test fail, and you must have
watched it fail. A test you have not seen fail is a test you have not written.

## Four questions before writing a line

1. **What behaviour am I pinning?** Not "the function exists" and not "it
   returns an array" — that is a shape, and shapes are already checked by the
   type declaration. Pick a decision the code makes.
2. **What input makes it choose differently?** The branch you are not testing
   is where the bug is. If the condition is `$a && $b`, there are four cases.
3. **What would break this assertion if I mutated the code?** Name it. If you
   cannot, the test is decorative.
4. **Is the oracle real?** See below. This is where most suites quietly fail.

## The oracle problem

**A test that stubs the thing it is testing asserts the stub.**

`zenpress_sanitize_snippets_option()` is mostly `sanitize_file_name()`'s
behaviour: a stub standing in for WordPress would have had to re-implement it,
and the test would then have been checking the stub. A path-traversal case would
have passed against the stub and against WordPress, or failed against both, for
reasons unrelated to the plugin.

Choose the suite by the oracle, not by speed:

| the behaviour depends on | suite |
|---|---|
| only this plugin's own logic | **unit** — fast, no WordPress |
| a WordPress function's real behaviour | **integration** — real core, slower, honest |

When in doubt pick integration. A unit suite that stubs WordPress is cheap and
is often measuring the stubs.

## Procedure

1. **Read the code you are about to test, and find its decisions.** Not its
   shape — its `if`s, its casts, its filters, its early returns.
2. **For each decision, write the input that makes it go the other way.**
3. **Write the test so that flipping the decision changes the assertion.**
   `assertIsArray()` on a value the source guarantees is not that.
4. **Watch it pass.**
5. **Break the source, deliberately, and watch it fail.** Then restore. This is
   step five, not optional — `bin/harness mutation` automates it, and until it
   can run, doing it by hand is the same work at a smaller scale.

```bash
bin/harness test              # unit
bin/harness integration       # real WordPress
bin/harness antipatterns      # structural bans, instant
bin/harness mutation          # the automated version of step 5
```

## Step five, worked

Four mutations applied by hand to `zenpress`, one at a time, against ten new
tests. Two were killed, two survived, and the survivors were the interesting
part:

| mutation | verdict | why |
|---|---|---|
| `array_values()` removed | **killed** | the assertion compared `array_keys()` to `[0, 1]` |
| `array_merge( $defaults, … )` replaced by `$data` | **killed** | the assertion named a key that only the defaults provide |
| `(int)` removed from `weight` | **survived** | every metadata file declares the literal `0`, so the cast is a no-op |
| `sanitize_text_field()` removed from `title` | **survived** | no shipped title contains anything the sanitiser would change |

Both survivors are **equivalent mutations**: the change genuinely cannot alter
behaviour *for the data that exists*. That is a different finding from "the test
is weak", and the difference matters — one calls for a better test, the other
calls for a decision about the code.

The honest handling is to say which it is, in the test itself, so the next
person does not re-litigate it:

```php
/**
 * **This assertion cannot fail against the shipped data, and that is stated
 * rather than hidden.** Every metadata file declares the literal `0`, so
 * `(int)` is a no-op. It is kept because it pins the contract callers rely on.
 */
```

Do **not** write a test that reaches the branch by inventing a fixture, unless
that fixture represents something real. A test that only passes because of a
file the suite creates is testing the file.

## Three rules that catch most tautologies

**Assert the specific, not the plausible.** `assertIsArray( $result )` where the
source always returns an array asserts the signature. Assert a value, a key, a
count, an ordering.

**Never assert on a literal.** `assertTrue( true )` is the extreme; the same
family includes asserting a constant against itself, and asserting a value the
test just assigned without the code touching it. `bin/harness antipatterns`
blocks the syntactic cases — the semantic ones are yours.

**A skip is not a pass.** `markTestSkipped()` without a reason turns a broken
setup into a green run. The scanner rejects it; do not work around the scanner.

## When the project has no tests at all

Order matters, and the bootstrap comes first:

1. **Check the scaffolding actually works before writing tests.**
   `zenpress`'s `phpunit.xml.dist` pointed at a `tests/Unit` directory that did
   not exist and its bootstrap loaded three files without stubbing the WordPress
   functions they call. Nothing could have run. `bin/harness test` now refuses a
   suite with no `*Test.php` file, because PHPUnit 9 exits 0 on an empty one.
2. **Pick the smallest surface with real decisions.** Not the file with the most
   lines — the one whose branches a wrong answer would break.
3. **Write the failing-mutation test first**, before the others. It sets the bar
   for the file.
4. **Do not chase a number.** A suite that reaches 80% by asserting shapes will
   report 80% and catch nothing.

## Verification

This skill was followed correctly when:

- every new test has a named source change that would break it;
- said change was actually applied and the test was seen to fail;
- every mutation that survived is classified as equivalent, unreachable, or a
  gap — and the classification is written down where the next person will find
  it;
- no test passes only because of data the test itself created.
