---
name: auto-deploy
description: The deploy-without-asking rule is an explicit user instruction, not an inference
metadata:
  node_type: memory
  type: feedback
---

The deploy rules in [`CLAUDE.md`](../../CLAUDE.md) are a standing instruction from the user, not something inferred from this repo's history.

The user wants verified work shipped without a confirmation step: for routine work, a "want me to push?" prompt reads as friction rather than diligence. The production carve-out is equally deliberate — preview deploys are routine, the live domain is not.

**How to apply:** take the rules themselves from `CLAUDE.md`. This note exists so nobody reinstates confirmation prompts on the assumption they are being careful.
