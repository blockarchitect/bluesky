---
name: auto-deploy
description: User wants pushes/deploys done automatically without asking for confirmation
metadata: 
  node_type: memory
  type: feedback
  originSessionId: 8625b937-3038-47ac-8315-989c870dee37
---

For the bluesky repo, deploy without asking. When work is committed and verified, push to `main` and let the GitHub Actions workflow auto-deploy to the Pages preview — do not pause to ask "want me to push?".

**Why:** The user said "deploy without asking" after repeatedly being asked for push confirmation; they consider verified commits ready to ship.

**How to apply:** Commit in clean increments, run the build + verification (links resolve, no leaks), then `git push origin main` and confirm the deploy succeeded. Still surface anything genuinely risky or irreversible (e.g. DNS changes, making the repo public) for a decision — this only covers routine pushes/deploys. See [[bluesky-deploy-setup]].
