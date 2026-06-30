# Bluesky Advisors — Website

Marketing website for **Bluesky Advisors DMCC**, a Dubai-based corporate &amp;
financial advisory firm. A flat-file PHP site: PHP is used only to `include`
shared partials and render content from PHP arrays (no database). The contact
form posts to [Web3Forms](https://web3forms.com), so there is no server-side
backend. For publishing, [`build.sh`](build.sh) pre-renders the pages to static
HTML and a GitHub Actions workflow deploys them to GitHub Pages.

> **Taking it live?** See [`GO-LIVE.md`](GO-LIVE.md) for the remaining steps
> (contact-form key, domain/DNS, real content).

## Pages

| File | Page |
|------|------|
| `index.php` | Home / landing |
| `home.php` | Alternate home layout |
| `about.php` | About the firm |
| `services.php` | Services overview |
| `service-details.php` | Individual service detail |
| `project.php` | Projects / portfolio listing |
| `project-details.php` | Individual project detail |
| `contact.php` | Contact page |
| `terms.php` | Terms &amp; conditions |
| `404.php` | Not-found page |

### Shared partials

`head.php` (doctype, meta, CSS), `header.php` / `header-min.php` (navigation),
`footer.php` / `footer-min.php` / `foot.php` (footer + scripts). Each page wires
these in with `<?php include '...'; ?>`.

## Assets

```
assets/
├── css/    compiled stylesheets (vendor.css, custom.css, style.css)
├── scss/   Sass sources for the above
├── js/     scripts
└── img/    images, icons, favicon
```

CSS is loaded directly from `assets/css/`. If you edit styles, change the SCSS
in `assets/scss/` and recompile to `assets/css/` (see below).

## Running locally

Any PHP runtime works since the pages only use `include`. The simplest option is
PHP's built-in server:

```bash
php -S localhost:8000
```

Then open <http://localhost:8000/index.php>.

> A plain static file server will **not** work — the `include` directives need
> PHP to be processed.

### Recompiling SCSS (only if you change styles)

```bash
# with Dart Sass installed
sass assets/scss/style.scss assets/css/style.css
```

## Repository conventions

- Work on a branch; open a PR rather than committing to `main`.
- `.DS_Store`, `.env`, editor folders, and `vendor/` are gitignored — keep them
  out of commits.
- No secrets in the repo. If a backend/integration is added later, put config in
  a gitignored `.env` and document the variable **names** in `.env.example`.

## Contact form

The contact form posts to [Web3Forms](https://web3forms.com) (no backend
required, works on static hosting). To activate it: create a free access key
tied to `contact@bluesky-advisors.com`, then set `$web3formsKey` near the top of
`contact.php`. The key is public (it only routes mail to your address), so it is
safe to commit. Submissions are sent over AJAX with an inline confirmation
message; a hidden honeypot field blocks bots.
