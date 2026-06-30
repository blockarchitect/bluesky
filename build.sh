#!/usr/bin/env bash
# Pre-render the flat-file PHP site to static HTML for GitHub Pages.
#
# PHP here is only used for `include` partials + array-driven content loops
# (no $_GET, no forms, no DB), so the rendered output is fully static. This
# script boots PHP's built-in server, captures each page's HTML, copies the
# assets, and rewrites internal `.php` links to `.html`.
#
# Usage: ./build.sh   ->   output in ./_site
set -euo pipefail

OUT="_site"
PORT="8910"
HOST="127.0.0.1"
BASE_URL="https://bluesky-advisors.com"

# Partials are included by pages; they are not standalone pages themselves.
PARTIALS=(head header header-min footer footer-min foot)

# Not-ready pages: source kept in the repo but withheld from the published
# site until real content replaces the template placeholders. Re-enable a page
# by removing it from this list (and restoring its inbound links).
# `home` is the design reference whose modules were merged into index.php (the
# live homepage); it stays in the repo but is not published.
UNPUBLISHED=(project project-details home)

skip_page() {
  local name="$1"
  for p in "${PARTIALS[@]}" "${UNPUBLISHED[@]}"; do
    [[ "$name" == "$p" ]] && return 0
  done
  return 1
}

echo "==> Clean output dir"
rm -rf "$OUT"
mkdir -p "$OUT"

echo "==> Start PHP dev server on $HOST:$PORT"
php -S "$HOST:$PORT" >/dev/null 2>&1 &
PHP_PID=$!
trap 'kill "$PHP_PID" 2>/dev/null || true' EXIT
# Wait for the server to accept connections.
for _ in $(seq 1 30); do
  curl -fs "http://$HOST:$PORT/" >/dev/null 2>&1 && break
  sleep 0.2
done

echo "==> Render pages"
for f in *.php; do
  name="${f%.php}"
  skip_page "$name" && continue
  curl -fsS "http://$HOST:$PORT/$f" -o "$OUT/$name.html"
  echo "    $f -> $name.html"
done

echo "==> Copy assets"
[ -d assets ] && cp -R assets "$OUT/"
# Top-level static files referenced directly (favicon, etc.)
for extra in robots.txt favicon.ico site.webmanifest CNAME; do
  [ -f "$extra" ] && cp "$extra" "$OUT/"
done

echo "==> Rewrite internal links (.php -> .html)"
# Fix the pre-existing singular typo first, then convert every *.php href/src.
find "$OUT" -name '*.html' -print0 | while IFS= read -r -d '' page; do
  perl -0pi -e 's/service-detail\.php/service-details.php/g;
                s/(href|src)=(["\x27])([^"\x27]*?)\.php([#?][^"\x27]*)?\2/$1=$2$3.html$4$2/g' "$page"
done

echo "==> Generate sitemap.xml"
# One <url> per published page (404 excluded; index maps to the site root).
{
  echo '<?xml version="1.0" encoding="UTF-8"?>'
  echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'
  for html in "$OUT"/*.html; do
    base="$(basename "$html")"
    [ "$base" = "404.html" ] && continue
    if [ "$base" = "index.html" ]; then loc="$BASE_URL/"; else loc="$BASE_URL/$base"; fi
    echo "  <url><loc>$loc</loc></url>"
  done
  echo '</urlset>'
} > "$OUT/sitemap.xml"

# GitHub Pages serves 404.html automatically for missing paths.
echo "==> Done. Output in $OUT/"
