---
name: bluesky-deploy-setup
description: "How the bluesky site builds and deploys (static build, Pages preview, EC2 production)"
metadata: 
  node_type: memory
  type: project
  originSessionId: 8625b937-3038-47ac-8315-989c870dee37
---

The bluesky repo (`blockarchitect/bluesky`, public) is a flat-file PHP site for **Bluesky Advisors DMCC** (Dubai advisory firm). It is pre-rendered to static HTML and served on **GitHub Pages preview**: <https://blockarchitect.github.io/bluesky/>.

- `build.sh` boots `php -S`, renders each page to `_site/*.html`, copies assets, rewrites `.php`→`.html` links, generates `sitemap.xml`. `.github/workflows/deploy.yml` runs it on push to `main` and deploys to Pages. Push → live in ~40s. Verify locally with `./build.sh` before pushing.
- `build.sh` has `PARTIALS` (includes, not pages) and `UNPUBLISHED` (withheld pages: project, project-details, home, service-details, plus team-section already removed). Service detail pages are data-driven from `services-data.php` via thin `*-advisory.php` files including the `service-details.php` template.
- **Production `bluesky-advisors.com` is a SEPARATE old deployment** on the user's AWS EC2 / nginx PHP box (IP 100.50.78.255) — untouched, still the pre-cleanup version. Getting the cleaned site onto the real domain (EC2 deploy vs Pages DNS migration) is an open decision tracked in committed `GO-LIVE.md`. Do NOT change DNS or make the domain live without explicit user direction.
- Contact form uses **Web3Forms** (`$web3formsKey` in `contact.php`) — placeholder key until the user supplies a real one.

See [[auto-deploy]].
