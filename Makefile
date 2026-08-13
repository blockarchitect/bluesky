# Repo gate — discovered and run by .githooks/pre-commit, and usable by hand (`make gate`).
# Fast by design: build the site, then check the two things that actually break in publishing —
# every internal link resolves, and no placeholder copy reaches a published page.

.PHONY: gate build verify

gate: build verify

build:
	@./build.sh >/dev/null

verify:
	@fail=0; \
	for t in $$(grep -rho 'href="[a-z0-9-]*\.html"' _site/*.html | sed 's/href="//;s/"//' | sort -u); do \
	  [ -f "_site/$$t" ] || { echo "✖ broken internal link: $$t"; fail=1; }; \
	done; \
	for term in lorem ipsum Consulo Toronto "Ronald Richards"; do \
	  if grep -rli "$$term" _site/*.html >/dev/null 2>&1; then \
	    echo "✖ placeholder copy on a published page: $$term"; fail=1; \
	  fi; \
	done; \
	if [ $$fail -ne 0 ]; then exit 1; fi; \
	echo "✓ gate green — links resolve, no placeholder leaks"
