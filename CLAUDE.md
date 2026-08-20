# Bluesky Advisors — website

Marketing site for Bluesky Advisors DMCC. Flat-file PHP, pre-rendered to static HTML by
[`build.sh`](build.sh) and published to GitHub Pages. Start with [`README.md`](README.md) for how it is
built and run; [`GO-LIVE.md`](GO-LIVE.md) tracks what is still needed to take the real domain live.

**The account method.** The global law is `~/.claude/CLAUDE.md` (auto-loaded; its ⛔ CORE block is
non-negotiable). The portable method lives in `~/.claude/playbooks/` — `PLAN`, `DOCUMENTATION`,
`MULTI_AGENT`, `CODE_STRUCTURE` — read the relevant one **before** planning, restructuring docs,
running agent waves, or shaping a codebase's file layout.
Project rules (this file) override method defaults; nothing overrides the global law. Memory travels
**with this repo** in [`.claude/memory/`](.claude/memory/) (committed); the local Claude namespace is a
symlink — re-link a fresh checkout from the repo root with
`ln -s "$PWD/.claude/memory" ~/.claude/projects/-Users-ag-GitHub-blockarchitect-bluesky/memory`.

## Project rules

- **Deploying is routine, production is not.** Verified commits go straight to `main` and auto-deploy to
  the Pages preview without asking. Anything touching the live `bluesky-advisors.com` box — DNS, EC2,
  repo visibility — needs an explicit decision first.
- **Verify by building.** `make gate` builds the site and checks the rendered `_site/` — every internal
  link resolves, no placeholder copy reaches a published page. The pre-commit hook runs it for you.
- **No invented content.** Team members, client logos, case studies and testimonials stay withheld until
  real material exists — the withheld pages are listed in `UNPUBLISHED` in [`build.sh`](build.sh).
