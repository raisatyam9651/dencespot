# Performance (CWV) — dencespot.com

**Score:** 88/100 · **Audit weight:** 10%
**Audited:** 25 August 2026 · 47 URLs crawled, 20 indexable pages

## What is working

- Homepage transfers 10.4 KB gzipped HTML; the largest page in the site transfers 19.0 KB
- Single stylesheet at 5.4 KB gzipped
- Zero first-party JavaScript files - server-rendered PHP with no client-side framework and no hydration
- TTFB measured at 0.11-0.24 s across all pages from a Mumbai edge
- HTTP/3 available and gzip enabled on all text responses
- The one real image is WebP, dimensioned and lazy-loaded

## Findings

### [MEDIUM] Google Fonts stylesheet is render-blocking

Every page loads https://fonts.googleapis.com/css2?family=Inter as a blocking stylesheet on a third-party connection. preconnect hints to fonts.googleapis.com and fonts.gstatic.com are already present, which helps, but the dependency remains on the critical path.

**Fix:** Self-host Inter as WOFF2 with font-display: swap. Typically saves 100-300 ms of LCP on Indian mobile connections and removes the third-party dependency entirely.

### [MEDIUM] Elfsight Google Reviews widget is the main CLS and INP risk

The homepage loads https://elfsightcdn.com/platform.js, a third-party loader with a 14.7 KB entry point that pulls further payloads and injects a review carousel of unknown height into mid-page at runtime. It is loaded async with data-elfsight-app-lazy, which is the correct configuration, but the unreserved height is a layout-shift risk.

**Fix:** Give the widget container an explicit min-height matching the rendered carousel.

### [LOW] LCP image is lazy-loaded and not preloaded

The doctor portrait is loading=lazy on 8 pages and eager on one. Whichever element is the LCP candidate should be eager and preloaded, never lazy.

**Fix:** Identify the LCP element per page template, set loading=eager on it, and add a rel=preload hint.

### [INFO] No real-user field data available

dencespot.com is not a connected Google Search Console property on this machine and no GOOGLE_API_KEY is configured, so no CrUX data could be retrieved. CrUX has no origin-level dataset for this domain, which is consistent with a site that has been noindex and therefore has effectively no traffic. All performance figures in this audit are lab and transfer measurements.

**Fix:** Re-run performance analysis against CrUX 4-6 weeks after indexing is enabled and real traffic exists.

---

**Summary:** 2 Medium, 1 Low, 1 Info
