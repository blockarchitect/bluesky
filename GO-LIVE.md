# Go-Live Checklist — bluesky-advisors.com

Steps to take the **cleaned** site fully live. Most of the build work is done;
what remains below mostly needs **you** (accounts, DNS, real content) — those are
marked 👤. Steps I can do once unblocked are marked 🤖.

## Where things stand

- **Cleaned site** (rebuilt homepage, SEO, terms, favicon, Web3Forms form) is
  built and auto-deployed to the **preview**: <https://blockarchitect.github.io/bluesky/>
- **Production domain** `bluesky-advisors.com` still serves the **old** version
  from your AWS EC2 / nginx PHP server — untouched.
- Live pages: Home, About, Services, Service Details, Contact, Terms, 404.
  Withheld until real content exists: Projects, Team.

---

## 1. Activate the contact form (Web3Forms key) 👤 → 🤖

The contact form is wired to [Web3Forms](https://web3forms.com) but uses a
placeholder key, so submissions currently fail.

1. 👤 Go to <https://web3forms.com>, enter **`contact@bluesky-advisors.com`**,
   and submit. They email an **access key** to that address (~1 min, free).
2. 👤 Copy the access key from the email.
3. 🤖 Paste it into `$web3formsKey` near the top of `contact.php` (or send it to
   me and I'll do it), then rebuild.
4. 🤖 Send a test submission and confirm the email lands in the inbox.

The key is **public** (it only routes mail to your address) — safe to commit.

---

## 2. Put the cleaned site on the real domain 👤 (decision) → 🤖

The cleaned site lives on the preview + in git, **not** on `bluesky-advisors.com`
yet. Pick one path:

### Path A — Deploy to your existing EC2 box (keep PHP) — recommended

Your server already runs nginx + PHP, so the site can run as real PHP (the
`include` partials and the contact form work natively, no static build needed).

1. 👤 Tell me how the EC2 site is currently deployed (git pull on the server /
   rsync / manual upload) and the web root nginx serves.
2. 🤖/👤 Push the cleaned `.php` files to that web root (e.g. `git pull` on the
   server, or `rsync` from a clone).
3. No DNS change needed — the domain already points here.

> Note: the published static build hides Projects/Team/`home`. On a PHP server
> those `.php` files would be reachable by direct URL unless you also remove or
> block them — say the word and I'll handle it.

### Path B — Migrate the domain to GitHub Pages (static, free)

Replaces the EC2 site. DNS is at **GoDaddy** (`domaincontrol.com`); apex
currently points to `100.50.78.255` (EC2).

1. 🤖 Re-add the Pages custom domain (restore the `CNAME` file + Pages config).
2. 👤 In GoDaddy DNS, replace the apex record and add `www`:

   | Type | Name | Value |
   |------|------|-------|
   | A | @ | 185.199.108.153 |
   | A | @ | 185.199.109.153 |
   | A | @ | 185.199.110.153 |
   | A | @ | 185.199.111.153 |
   | AAAA | @ | 2606:50c0:8000::153 |
   | AAAA | @ | 2606:50c0:8001::153 |
   | AAAA | @ | 2606:50c0:8002::153 |
   | AAAA | @ | 2606:50c0:8003::153 |
   | CNAME | www | blockarchitect.github.io |

   Turn off GoDaddy domain forwarding/parking if on.
3. 👤 (recommended) Verify the domain on GitHub (Settings → Pages → **Verify a
   domain**) — adds one `TXT` record, prevents anyone else claiming it.
4. 🤖 Once DNS resolves, enable **Enforce HTTPS** in Pages.

> Trade-off: free + auto-deploy, but loses PHP — the contact form already works
> via Web3Forms, so that's fine, but any future server-side feature would not.

---

## 3. Real content to add when available 👤 → 🤖

Send me these and I'll wire them in:

- [ ] **Phone number** + which **Dubai location** to show on a map (contact page)
- [ ] **Team members** (names, roles, photos) → re-enable the Team section
- [ ] **Project / case studies** (real or anonymized) → publish the Projects pages
- [ ] **Social profile URLs** (LinkedIn, etc.) → restore footer/contact social links
- [ ] **Branded 1200×630 share image** → replaces the generic OG image
- [ ] **Proper dark/colour logo** → fixes the gray placeholder logo on scroll
