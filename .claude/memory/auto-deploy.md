---
name: auto-deploy
description: Why this repo deploys without asking — a standing user preference, not an assumption
metadata:
  node_type: memory
  type: feedback
---

The "deploy without asking" rule in [`CLAUDE.md`](../../CLAUDE.md) is a preference the user stated outright, after being asked to confirm a push once too often. They treat a verified commit as ready to ship, so a confirmation prompt reads as friction rather than diligence.

**How to apply:** follow the deploy rules in `CLAUDE.md` — this note only records why they exist. Do not reintroduce "want me to push?" for routine work; the carve-out for the live production box is deliberate and stays.
