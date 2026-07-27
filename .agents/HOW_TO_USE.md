# How to Use — ZenPress Agents

You delegate. The agent plans, codes, lints, and fixes. Your job: describe outcomes, approve the plan, test, report issues.

## Setup (once)

1. Open the **plugin root** (`zenpress/`) in your editor.
2. Confirm the project's `AGENTS.md` is loaded as agent instructions.
3. Skills available: `architect`, `resume`, `reviewer`, `security`, `release`.
4. Trust the workspace when prompted.

## Model tiers — what to pick per thread

Each thread: choose a **tier** in your model selector. Skills tell the agent what to do; tiers tell **you** which model capability to use.

| Tier | When | Thread |
|------|------|--------|
| **Planning** | Clarify, design, write the plan — answer not in task file yet | `/architect` until you approve |
| **Worker** | Execute from task file — implement, lint, fix, rotate | `/architect` after `go` · `/resume` · `/release` |
| **Audit** | Review or security gate — no coding | `/reviewer` (high-risk) · `/security` |

**One-line rule:** Planning until `go` → worker to build → audit before ship when required.

Use **worker** on `/resume` threads to save tokens. Keep **audit** for `/security` and high-risk `/reviewer`. If a worker model mishandles tools or skips WP security rules, move that phase back to planning tier.

## Daily flow — one feature

**Thread A — planning tier**

```
/architect
[describe what you want]
→ plan + task file
→ you: go
```

**Thread B — worker tier** (recommended after `go`)

```
/resume
@.agents/tasks/YYYY-MM-DD-<type>-<slug>.md
→ executes tasks, lints, logs
```

Or stay in Thread A on worker tier if the feature is small.

**You:** test in Local, paste issues → agent fixes (worker tier).

The agent creates `.agents/tasks/YYYY-MM-DD-<type>-<slug>.md`. You never copy templates.

### When `/reviewer` is required

Mandatory if the change touches REST, SQL, auth/capabilities, export, multisite, user input, or new admin controls.

```
/reviewer
@.agents/tasks/YYYY-MM-DD-<type>-<slug>.md
```

Use **audit** tier for high-risk features; **planning** tier is enough for optional low-risk review. Output: `.agents/notes/YYYY-MM-DD-review-<slug>.md`.

Skip review only for low-risk work (comments-only, trivial CSS) when the agent confirms it.

Blockers found? **Worker** tier → `/resume` with the task file → fix → re-review on **audit** tier.

## Long sessions — rotate threads

Rotate on **worker** tier when:

- **3 tasks** done in the same thread, or
- **~20 agent turns**, or
- you stop for the day

```
/resume
@.agents/tasks/YYYY-MM-DD-<type>-<slug>.md
```

Same delegation — you don't re-explain the feature. If the agent suggests rotation, accept it.

## Interrupted session

Same as rotation — **worker** tier + `/resume` + task file.

## Security audit (standalone)

```
/security
[scope]
```

Always **audit** tier. Fix findings with **worker** tier + `/resume`.

## Release

When tested, reviewed (if required), and you **explicitly authorize** the version bump:

```
/release
```

**Worker** tier is usually enough (checklist-driven). The agent will not bump versions without your explicit OK.

## Reference docs

`.agents/docs/` holds large mirrors. **You don't open them.** Agents grep one section when needed. Source in `inc/` is primary.

## What you never do

- Copy task templates manually
- Pick files to edit (agent decides from the plan)
- Run lint by hand during dev
- Keep one worker thread open for days without `/resume`
- Micromanage steps after plan approval
- Hardcode vendor models in task files — use tiers

## Quick reference

| Goal | Command | Tier |
|------|---------|------|
| Start / plan | `/architect` | Planning |
| Build / continue | `/resume` + task file | Worker |
| Integration review | `/reviewer` + task file | Audit (or planning if low-risk) |
| Security audit | `/security` | Audit |
| Ship | `/release` | Worker |