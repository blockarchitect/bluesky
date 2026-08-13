---
name: auto-deploy
description: Push and deploy this repo without asking; the live production domain stays hands-off
metadata:
  node_type: memory
  type: feedback
---

Deploy without asking. Once work is committed and verified, push to `main` and let the Actions workflow publish to the Pages preview — never pause on "want me to push?".

**Why:** the user asked for this directly, after being prompted for push confirmation once too often; they treat a verified commit as ready to ship.

**How to apply:** commit in clean increments, run `./build.sh` and check the output (links resolve, no placeholder leaks), then `git push origin main` and confirm the run succeeded. This repo's history is direct-to-main — no branch/PR step.

**Carve-out — still ask first:** anything that touches the live `bluesky-advisors.com` production box (DNS records, deploying to EC2, repo visibility). The preview and production are separate deployments; the open go-live decision is tracked in [`GO-LIVE.md`](../../GO-LIVE.md).
