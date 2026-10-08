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

**A stub has to mirror core for the input shapes the code guards against.** A
stub is a claim about what WordPress does, and it is only as good as the inputs
it was given. `updatronix-pro`'s unit bootstrap stubbed `wp_parse_args( $args,
$defaults )` so that anything that was not an array came back as `$defaults` —
one line, and sensible-looking. WordPress does not do that: for a non-array,
non-object argument it runs `parse_str()` over the string and merges what falls
out. The stub therefore made a malformed license option look harmless, and the
two guards that exist for exactly that option could not be reached *through the
stub* — so the counterfactual reported the guard's line as a survivor, and the
finding looked like a weak test.

The rule: **a stub for a WordPress function must answer, the way core does, the
input shapes the code under test guards against.** A stub that turns a malformed
input into a sane default is not a simplification — it is a branch deleted from
the code under test, and it will be reported as a test's fault. Where the honest
answer is hard to write, that case belongs in the integration suite, where core
answers it for you.

```php
// The stub that hid the branch: a non-array came back as $defaults.
function wp_parse_args( $args, array $defaults ): array {
    return is_array( $args ) ? array_merge( $defaults, $args ) : $defaults;
}

// The stub that mirrors core, so the guard's input can be produced.
function wp_parse_args( $args, array $defaults ): array {
    if ( is_object( $args ) ) {
        $args = get_object_vars( $args );
    } elseif ( ! is_array( $args ) ) {
        $parsed = array();
        parse_str( (string) $args, $parsed );
        $args = $parsed;
    }
    return array_merge( $defaults, $args );
}
```

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

## The line has to be killable before the test can kill it

Step five above cannot succeed on a line whose fix is observationally identical
to its own twin, and the strict rules push you toward exactly such a line. When
a condition's operand is an `int`, a `string`, an `array` or a nullable, the fix
is an **explicit comparison** — `0 !== $x`, `'' !== $x`, `count( $x ) > 0`,
`null !== $v` — and never a bare `(bool)`: on those types `(bool) $x` and
`(int) $x` have the same truthiness, so `bin/harness mutation` (Infection's
`CastBool`) and `bin/harness counterfactual` (`(bool)` → `(int)`) both produce a
mutant no honest test can kill. The cast is right only on a `mixed` operand, and
only where a test can reach a **non-numeric string**.

The table, the reason, and the four lines the last raise reformed are in
`docs/TOOLCHAIN.md`, "How to write a condition, and why the cast is the wrong
default" — read it before deciding what a line's fix should be, and before
concluding that a survivor is your test's fault.

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

## What `counterfactual` does to a changed line

`bin/harness counterfactual` reads each changed line and applies the **first**
pattern it finds, from the list below, in this order — first match wins, which
is why a line carrying both `false` and `(bool)` is substituted at `false` and
never at the cast. You cannot avoid a substitution you have not seen, so here is
the whole list, with one operand shape per row where the twin's behaviour
differs and a test can therefore kill it:

| the line contains | it is replaced by | a shape where the twin is **not** equivalent |
|---|---|---|
| `===` | `!==` | any value the comparison is about: the two take different branches |
| `!==` | `===` | as above |
| `&&` | `\|\|` | the left operand false and the right one true |
| `\|\|` | `&&` | the left operand true and the right one false |
| `>=` | `>` | the equal case — `4 >= 4` is true, `4 > 4` is not |
| `<=` | `<` | the equal case |
| `true` | `false` | any line whose branch the literal decides |
| `false` | `true` | as above |
| `(int)` | `(string)` | the result is compared strictly or concatenated: `12` and `'12'` differ |
| `(bool)` | `(int)` | **a non-numeric string** (`(bool) 'v1'` is true, `(int) 'v1'` is 0) or a float in `(-1, 1)` (`(bool) 0.5` is true, `(int) 0.5` is 0). On an `int`, a `bool`, an `array`, `null` or a numeric string the twin is observationally identical |
| `(string)` | `(int)` | the value is used where its type shows: `'0'` and `0` are not the same question |
| `min(` | `max(` | two arguments that differ |
| `max(` | `min(` | as above |
| `strtolower(` | `strtoupper(` | any letter the code compares or stores |
| `strtoupper(` | `strtolower(` | as above |
| `array_values(` | `array_filter(` | an array holding a falsy element — `array_filter` drops it |

The list is **asymmetric**, and that is worth knowing before you write a line:
`array_filter(` appears as a twin and never as a pattern, so a line whose only
substitution token is `array_filter(` is not substituted at all. A substitution
you expected and did not get reads exactly like a mutation you killed. An
addition, a removal or a reordering in this table is a defect for that reason,
and `bin/harness counterfactual` reports the pair it applied on every line it
substitutes, so a row can be checked against a run.

A row whose third cell is empty for your operand is an **equivalent mutation**:
no honest test can kill it, and `bin/harness counterfactual` has a marker for
saying so on the line — `// counterfactual: equivalent — <reason>` — which
reports it as classified instead of failing the gate. That is the same
classification step five asks for, in the place the gate can read it.

Four things about the marker, each one a way a classification can be read as
something it is not:

- **The reason is prose and may name a token.** The gate chooses the substitution
  from the code *outside* the comment, so a reason saying "false in the reason"
  does not make it mutate `false`. Write the reason freely.
- **A block comment is a marker too.** `/* counterfactual: equivalent — … */`
  works, and the code after its `*/` is still code.
- **A `//` inside a string literal is not a comment.** `$s = '// counterfactual:
  equivalent';` is a line with no marker, and the gate substitutes in the code
  after the string — not in the quoted text, where nothing could see it.
- **A line carrying two substitution tokens needs its pair named.** The marker is
  read per *line* and the substitution is applied per *pattern*; on a line with
  two, the first match wins, and a bare `equivalent` would excuse whichever pair
  the gate happened to pick. Name it: `// counterfactual: equivalent (bool) ->
  (int) — the operand is an int`. A line with a single pair keeps the bare form.

The run also prints the lines it could **not** ask about — a token carried only
by the classification comment, or only by a string literal or a comment — so a
line you expected the gate to check and did not see is a number in the output
rather than a silence. `DESIGN.md` section 5 lists the whole report.

**A classification is one gate's claim, and there are two gates.** The marker
above is what `bin/harness counterfactual` reads on the line. `bin/harness
mutation` is Infection, its mutator set and its granularity are different, and
what it reads is `@infection-ignore-all` — statement-granular, which is the
granularity Infection works at. A line classified for one is **not** classified
for the other, and a sweep runs both. Measured on `updatronix`: the first push of
a swept file had `mutation` at 69 % covered MSI against a 70 % floor — 36
mutants, 25 killed, 11 escaped — and every escaped mutant was a `TrueValue`,
`CastString`, `Coalesce` or `Foreach_` twin on a line the counterfactual had just
classified. When a run reports `CLASSIFIED equivalent` on a line that carries no
`@infection-ignore-all`, it prints a line naming the other gate. That is a
reminder to run it, not a failure: `mutation` is the gate that can decide.

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
