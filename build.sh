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

# Partials are included by pages; they are not standalone pages themselves.
PARTIALS=(head header header-min footer footer-min foot)

is_partial() {
  local name="$1"
  for p in "${PARTIALS[@]}"; do [[ "$name" == "$p" ]] && return 0; done
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
  is_partial "$name" && continue
  curl -fsS "http://$HOST:$PORT/$f" -o "$OUT/$name.html"
  echo "    $f -> $name.html"
done

echo "==> Copy assets"
[ -d assets ] && cp -R assets "$OUT/"
# Top-level static files referenced directly (favicon, etc.)
for extra in robots.txt favicon.ico CNAME; do
  [ -f "$extra" ] && cp "$extra" "$OUT/"
done

echo "==> Rewrite internal links (.php -> .html)"
# Fix the pre-existing singular typo first, then convert every *.php href/src.
find "$OUT" -name '*.html' -print0 | while IFS= read -r -d '' page; do
  perl -0pi -e 's/service-detail\.php/service-details.php/g;
                s/(href|src)=(["\x27])([^"\x27]*?)\.php([#?][^"\x27]*)?\2/$1=$2$3.html$4$2/g' "$page"
done

# GitHub Pages serves 404.html automatically for missing paths.
echo "==> Done. Output in $OUT/"
