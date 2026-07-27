# `.agents/` — workflow assets

Agent configuration. Always-on rules: `../AGENTS.md`. Human playbook: `HOW_TO_USE.md`.

| Path | Role |
|------|------|
| `skills/` | `/architect` · `/resume` · `/reviewer` · `/security` · `/release` |
| `templates/` | Reference task patterns (agent writes real tasks) |
| `tasks/` | Task files — external memory (gitignored) |
| `notes/` | Review & audit deliverables (gitignored) |
| `notes/archive/` | Historical notes |
| `docs/` | Large reference mirrors — **lookup only, never read whole files** |
| `scripts/` | Regenerate doc mirrors |

**Design:** Skills + **model tiers** (planning / worker / audit) picked per thread; disk-backed task files; rotation via `/resume`. See `AGENTS.md`.

**Git:** `skills/`, `templates/`, `docs/`, `scripts/` committed · `tasks/`, `notes/` gitignored.
