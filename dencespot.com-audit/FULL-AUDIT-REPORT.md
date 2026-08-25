# Full SEO Audit — dencespot.com

**Audited:** 25 August 2026
**Business type:** Local Service — brick-and-mortar medical clinic (hair restoration), single location, Gurugram (Haryana, IN). YMYL / Your-Money-Your-Life category.
**Crawl:** 47 URLs fetched, 20 indexable HTML pages + 9 query-string variants, 17 URLs returning 404.
**Method:** live crawl of `https://dencespot.com` (raw HTML), plus review of the local PHP source in this repo.

---

## SEO Health Score: 59 / 100

| Category | Weight | Score | Weighted |
|---|---|---|---|
| Technical SEO | 22% | 35 | 7.7 |
| Content Quality | 23% | 55 | 12.7 |
| On-Page SEO | 20% | 78 | 15.6 |
| Schema / Structured Data | 10% | 72 | 7.2 |
| Performance (CWV) | 10% | 88 | 8.8 |
| AI Search Readiness | 10% | 60 | 6.0 |
| Images | 5% | 30 | 1.5 |
| **Total** | | | **59.5 → 59** |

The score is low for a reason that is unusual and encouraging: **the site's foundations are well above average, but it is switched off.** The writing, information architecture, schema and page speed are all genuinely strong — better than most clinic sites in this vertical. Two deployment-level facts are suppressing everything: the whole domain is set to `noindex`, and roughly three-quarters of the pages still carry visible build placeholders. Fix those two things and the same site scores in the low-to-mid 80s without a single new page being written.

---

## Executive Summary

### Top 5 critical issues

1. **The entire site is blocked from search — `noindex, nofollow` on all 29 live URLs.** Google cannot index a single page. This is the only finding that matters until it is fixed; everything else is downstream of it.
2. **Unfinished placeholder content is live on 16 of 21 pages.** Including `[CONFIRM] ₹__–__ per graft` on the cost page and "Medical registration: To be confirmed" on the doctor's profile.
3. **69 empty image placeholder slots** across 14 pages, against 11 real image instances of a single photograph. A hair-restoration site with no clinical or before/after imagery cannot compete.
4. **19 internal links point to pages that return 404.** Two of them (`/cost-and-emi-options`, `/hair-transplant-aftercare`) are in the sitewide footer, so they are broken on every single page.
5. **`www.dencespot.com` serves HTTP 200 instead of redirecting.** The site is fully reachable on two hostnames.

### Top 5 quick wins

1. **Flip `SITE_STAGING` to `false` and deploy.** One-line change, already made in the working tree but not committed or deployed. Unblocks the entire site.
2. **Remove or repoint the 2 sitewide footer links to 404s.** One edit in `includes/config.php`, fixes 58 broken links at once.
3. **Enable the www → non-www 301 in `.htaccess`.** The redirect block is already written, just commented out.
4. **Add `og:image`.** Zero pages have one — every WhatsApp and social share of this clinic currently renders as a bare text link, in a market where WhatsApp is the primary referral channel.
5. **Add `geo`, `hasMap`, `priceRange`, `sameAs` and `image` to the `MedicalClinic` schema.** ~15 lines in one template; directly feeds local pack eligibility.

### What is already right

Worth stating plainly, because it is unusual and it should not be disturbed by the fixes below:

- **Content is excellent.** 2,100–4,100 words on every money page, written as genuine patient education rather than keyword filler, with a consistent editorial voice and an explicit refusal to make unevidenced claims.
- **E-E-A-T handling is deliberate and correct.** Named doctor with stated qualifications, "medically reviewed by" with a review date on every treatment page, an honest review policy that explicitly rejects review gating, and a results gallery kept empty rather than filled with stock photos. This is exactly right for YMYL and is rarer than it should be in this sector.
- **Performance is very good.** 10 KB gzipped HTML, 5.4 KB gzipped CSS, no render-blocking JavaScript, TTFB ~0.15 s from a Mumbai edge.
- **Schema is rich and valid.** A well-formed `@graph` with `MedicalClinic`, `Physician`, `FAQPage`, `BreadcrumbList` and per-page `MedicalProcedure` / `MedicalTherapy` / `MedicalCondition`. No parse errors anywhere on the site.
- **URL and canonical hygiene is clean.** Extensionless URLs, correct 301s for `.php`, `index.php` and trailing slashes, a real 404 status on missing pages, self-referencing canonicals, and query-string filter variants correctly canonicalised to their clean parent.

---

## 1. Technical SEO — 35/100

### CRITICAL — Site-wide `noindex, nofollow`

Every one of the 29 live URLs returns:

```html
<meta name="robots" content="noindex, nofollow">
```

Source: `includes/header.php:53` emits this when `SITE_STAGING` is true. The deployed copy of `includes/config.php` still has `const SITE_STAGING = true` — this is what is committed at git HEAD. The working tree in this repo already has it set to `false`, but that change is **uncommitted and undeployed**.

`nofollow` compounds it: even if Google reaches a page, it will not follow any link out of it, so no internal link equity flows anywhere.

The live `robots.txt` still carries the old comment ("while `includes/config.php` has `SITE_STAGING = true`"), which confirms the deployed build predates the local edits.

**Impact:** zero organic visibility. No page can rank, appear in AI Overviews, or be cited by ChatGPT/Perplexity.

**Fix:** commit the `SITE_STAGING = false` change and deploy. Then verify with `curl -s https://dencespot.com/ | grep robots` — it must read `index, follow`. Then submit the sitemap in Google Search Console and request indexing on the money pages.

### HIGH — 19 internal links to 404 pages

17 distinct URLs are linked from within the site and return 404. Two are in the sitewide footer and therefore broken on all 29 pages:

| Broken target | Linked from |
|---|---|
| `/cost-and-emi-options` | **all 29 pages** (footer) |
| `/hair-transplant-aftercare` | **all 29 pages** (footer) |
| `/womens-hair-loss-treatment-in-gurgaon` | 5 pages |
| `/crown-hair-transplant-in-gurgaon` | `/`, `/hair-transplant-in-gurgaon` |
| `/hairline-transplant-in-gurgaon` | `/`, `/hair-transplant-in-gurgaon` |
| `/hair-transplant-repair-in-gurgaon` | `/`, `/hair-transplant-in-gurgaon` |
| `/gfc-treatment-in-gurgaon` | `/about-us`, `/hair-fall-treatment-in-gurgaon` |
| `/hair-transplant-risks-and-side-effects` | `/faqs`, `/hair-transplant-in-gurgaon` |
| `/prp-hair-treatment-cost-in-gurgaon` | `/faqs`, `/hair-prp-treatment-in-gurgaon` |
| `/eyebrow-transplant-in-gurgaon` | `/hair-transplant-in-gurgaon` |
| `/fue-vs-dhi-hair-transplant` | `/hair-transplant-in-gurgaon` |
| `/fue-vs-fut-hair-transplant` | `/hair-transplant-in-gurgaon` |
| `/hair-transplant-for-women-in-gurgaon` | `/hair-transplant-in-gurgaon` |
| `/alopecia-areata-treatment-in-gurgaon` | `/beard-transplant-gurgaon` |
| `/beard-transplant-cost-gurgaon` | `/beard-transplant-gurgaon` |
| `/scalp-micropigmentation-in-gurgaon` | `/blog/norwood-scale-explained` |
| `/prp-vs-gfc-treatment` | `/hair-prp-treatment-in-gurgaon` |

These read as a content roadmap that was linked before it was built. That is a reasonable way to work, but it must not ship — broken links waste crawl budget, leak internal link equity into dead ends, and are a direct trust signal to users.

**Fix:** two options per link — remove it, or build the page. The footer pair should be removed from `includes/config.php` immediately (or repointed: `/cost-and-emi-options` → `/hair-transplant-cost-in-gurgaon`). The rest are strong page ideas; see the Action Plan for a build order.

### HIGH — `www` hostname is not redirected

```
https://www.dencespot.com/                   → HTTP 200 (should be 301)
https://www.dencespot.com/hair-transplant-in-gurgaon → HTTP 200 (should be 301)
```

The full site is served on both hostnames. The canonical tag on the www copy does correctly point to the non-www URL, which prevents the worst outcome, but a canonical is a hint and a 301 is a directive. Two live hostnames also split any link equity the domain earns.

The fix is already written in `.htaccess` §1 — both the HTTPS and the host-canonicalisation `RewriteRule` blocks are commented out pending hostname confirmation. Note the commented rule currently redirects **to** www; the site's canonicals and sitemap all use **non-www**, so it needs inverting before it is enabled.

### MEDIUM — Missing security headers

The homepage returns no `Strict-Transport-Security`, `X-Content-Type-Options`, `X-Frame-Options`/`frame-ancestors`, `Referrer-Policy` or `Permissions-Policy`. The only security header present is `Content-Security-Policy: upgrade-insecure-requests`.

Not a direct ranking factor, but for a medical site handling patient enquiry data it is a trust and compliance gap, and HSTS removes a redirect hop on every http request.

### LOW — `X-Powered-By: PHP/8.3.30`

Discloses the exact runtime version. Remove via `expose_php = Off` or a header directive.

### LOW — Unreferenced JS files are publicly served

`/support.js` (69 KB) and `/image-slot.js` (65 KB) return 200 but are not referenced by any page. They appear to be leftovers from the design-canvas build. They cost nothing in page weight but are dead weight in the deployment.

### What is working

- HTTPS enforced; `http://` → `https://` returns a clean 301.
- Extensionless URLs with correct 301s: `/contact.php` → `/contact`, `/contact/` → `/contact`, `/index.php` → `/`.
- Missing pages return a genuine HTTP 404 (no soft-404s).
- `robots.txt` is well-formed, allows crawling, sensibly disallows `/thank-you`, `/enquire.php`, `/storage/`, `/includes/` and tracking query variants, and declares the sitemap.
- `/sitemap.xml` is valid, generated from files on disk, and lists 20 real URLs with `lastmod`, `changefreq` and sensible `priority` weighting. It correctly excludes the `noindex` FUT page.
- `lang="en-IN"` and a correct mobile viewport on every page.
- HTTP/3 available (`alt-svc: h3`), gzip on all text responses.

---

## 2. Content Quality — 55/100

This category is genuinely split. The prose is among the best in this vertical; the completeness is not there yet.

### CRITICAL — Visible placeholder content on 16 of 21 pages

**`/hair-transplant-cost-in-gurgaon`** — the highest commercial-intent page on the site — publishes an empty pricing table:

| Technique | Rate | Typically suited to |
|---|---|---|
| FUE | `[CONFIRM] ₹__–__ per graft` | Larger areas — crown, mid-scalp |
| DHI | `[CONFIRM] ₹__–__ per graft` | Hairline and detail zones |
| FUT | `[CONFIRM] ₹__–__ per graft` | High graft numbers in one session |
| Combination | `[CONFIRM] quoted per plan` | Different techniques across zones |

Followed by a note that is itself addressed to the developer, not the patient: *"⚠ Placeholder — clinic sign-off required. The rate column is not yet filled in. Publish this page only once the clinic's real per-graft rates are in place."*

The instruction on the page is correct and was not followed.

**`/dr-nyra`** — the E-E-A-T anchor page for a YMYL medical site:

> Medical registration — **To be confirmed** — *Required before launch*
> Memberships — **To be confirmed** — *Genuine bodies only*

A medical registration number is one of the strongest trust signals available to a clinic site. Publishing "To be confirmed" in its place is worse than omitting the row: it tells a prospective patient the clinic has not verified its own doctor's registration.

The same "Specialization: To be confirmed / Registration: To be confirmed" pair appears in the doctor credentials card on **8 further pages** (homepage and every treatment page).

**Directions blocks** on 8 pages carry: *"opposite Medanta – The Medicity — confirm wording with the clinic"*, *"Nearest metro and walking time — to confirm"*, *"Parking guidance — to confirm"*. The `/contact` page repeats this three times with *"— to confirm with the clinic"* in the By road, Nearest metro and Parking cards.

For a local business, directions content is a genuine ranking and conversion asset. Right now the site tells patients it does not know how to get to itself.

### HIGH — Two commercially important pages are deliberately empty

- **`/hair-transplant-results-gurgaon`**: *"This gallery is deliberately empty. Every card below is a placeholder waiting for a real, consented case."* 12 empty before/after slots.
- **`/patient-reviews`**: *"No reviews are shown here yet. This page is built and deliberately empty."*

The reasoning given on both pages is sound and I would not argue with the ethics: no stock imagery, no invented testimonials, no `aggregateRating` markup for a rating that is not visible. That is the correct call and it avoids a real manual-action risk.

But the commercial consequence is unavoidable. In hair restoration, before/after evidence and review volume are the two things patients actually choose on. Publishing both pages empty is worse than not publishing them yet: it puts a "we have nothing to show you" page into the navigation of a clinic that is asking for surgical bookings.

**Fix:** this is a clinic operations task, not a development one — collect consented before/after pairs and seed the Google review flow. Until then, consider removing both from the primary navigation rather than leaving empty pages in it.

### MEDIUM — Thin pages

Six pages fall under 600 words: `/blog/` (561) and its four `?topic=` variants (524 each), and `/terms` (541). The blog index is thin because there is only one post; the query variants are canonicalised so they are not an indexation risk. Not urgent, but the blog needs more posts before it earns its place in the nav.

### MEDIUM — Only one blog post

`/blog/norwood-scale-explained` is well-executed (1,946 words, correct `Article` schema, medically reviewed). It is also the entire blog. This is the cheapest available route to informational rankings and AI citations, and the 17 broken links above are effectively a ready-made editorial calendar.

### LOW — Copy bug in FAQ schema

The homepage FAQ answer renders: *"Opening hours are Mon–Sat · 10:00 – 20:00, with **sunday** · by appointment only."* — lowercase, from string interpolation of `HOURS_NOTE`. Visible in the rendered FAQ and in the JSON-LD.

### What is working

- Money pages run 2,169–4,084 words of substantive, non-repetitive content.
- Every treatment page carries "Medically reviewed by Dr. Nyra · last reviewed August 2026".
- A named doctor with stated qualifications (MBBS, MD Dermatology), named training institutions, and a specific, credible bio.
- The editorial stance is consistent and unusually honest — explicit statements that no guaranteed densities are offered, that some patients need no procedure, that review gating is prohibited, that donor supply is finite. This is exactly the kind of content that earns E-E-A-T rather than asserting it.
- `/medical-disclaimer`, `/privacy-policy` and `/terms` all present — required trust pages for YMYL.

---

## 3. On-Page SEO — 78/100

Strong. This is the most polished category on the site.

**Titles:** All 20 real pages have a unique, well-formed title between 31 and 60 characters. Keyword-first, brand-suffixed, no stuffing. No page is missing one and none is truncated.

**Meta descriptions:** All present, all unique across real pages, all hand-written and specific rather than templated. Four run slightly long and will truncate in SERPs:

| Page | Length |
|---|---|
| `/fue-hair-transplant-in-gurgaon` | 167 |
| `/hair-transplant-cost-in-gurgaon` | 165 |
| `/hair-transplant-in-gurgaon` | 164 |
| `/dhi-hair-transplant-in-gurgaon` | 161 |
| `/privacy-policy` | 161 |

**Headings:** Exactly one `<h1>` on all 29 URLs. No skipped levels observed. Money pages carry 11–17 `<h2>` and up to 36 `<h3>` — well-structured for both scanning and passage-level extraction.

**Canonicals:** Present and self-referencing on all pages. Query-string variants correctly canonicalise to their clean parent (`/blog/?topic=prp` → `/blog/`, `/hair-transplant-results-gurgaon?type=prp` → `/hair-transplant-results-gurgaon`). This is handled properly.

**Duplicate titles/descriptions:** Two clusters of 5, both entirely explained by the `?topic=` and `?type=` filter variants above. Because those variants are canonicalised, this is not a duplicate-content problem. It would be marginally better to give each filtered view its own title, but it is optional.

**Internal linking:** Every real page receives 29 inbound internal links via the header/footer — flat, even distribution. Two pages are under-linked: `/blog/norwood-scale-explained` (2 inbound) and `/fut-hair-transplant-in-gurgaon` (2 inbound, and `noindex` by design pending confirmation that the clinic performs strip surgery).

**Deficit:** essentially no contextual internal linking between money pages that resolves. The in-content links that exist mostly point at the 17 URLs that 404.

---

## 4. Schema / Structured Data — 72/100

Well above average. Every page carries exactly one JSON-LD block, all 29 parse without error, and the `@graph` structure with `@id` cross-references is done correctly.

**Types in use:** `WebSite`, `MedicalClinic`, `Physician`, `PostalAddress`, `OpeningHoursSpecification`, `City` (areaServed), `BreadcrumbList`/`ListItem` (28 pages), `FAQPage`/`Question`/`Answer` (10 pages), `MedicalProcedure` (5), `MedicalTherapy`, `MedicalCondition`, `Blog`/`BlogPosting`, `Article`, `AboutPage`, `ContactPage`, `ProfilePage`.

Page-type mapping is thoughtful — `ProfilePage` on the doctor page, `ContactPage` on contact and booking, `MedicalProcedure` on each technique page.

### Missing properties worth adding

On `MedicalClinic`:

| Property | Why |
|---|---|
| `geo` (latitude/longitude) | Direct local-pack relevance signal |
| `hasMap` | Links the entity to its Google Maps listing |
| `priceRange` | Standard `LocalBusiness` field; frequently surfaced |
| `sameAs` | **The biggest gap.** No link from the site's entity to its Google Business Profile, Practo, Justdial or social profiles. This is how search engines and LLMs reconcile the four conflicting listings noted in `SEO-STRATEGY-dencespot.md` §7.1 |
| `image` / `logo` | Required for several rich result types |

On `Physician`:

| Property | Why |
|---|---|
| `image` | Doctor photo already exists at `/assets/img/dr-nayra.webp` |
| `medicalSpecialty` | Present on the clinic, absent on the doctor |
| `sameAs` | Practo/LinkedIn profile — entity disambiguation |
| `identifier` | Medical registration number, once confirmed |

**Correctly absent:** `aggregateRating` and `Review`. The `/patient-reviews` page explicitly explains why it does not mark up a rating it cannot show. That is the right decision and should be preserved — add these only when real, visible reviews exist on the page.

**Note:** the `MedicalClinic` `openingHoursSpecification` publishes Mon–Sat 10:00–20:00, while `includes/config.php` flags that the Google listing says Mon–Sun 09:00–21:00. A mismatch between schema, site and GBP is a real local-pack liability — "open now" is a ranking input. Resolve before launch.

---

## 5. Performance — 88/100

Measured from a Mumbai edge (`x-hcdn-request-id: ...-mum-edge`), gzip enabled:

| Resource | Transfer | Notes |
|---|---|---|
| Homepage HTML | 10.4 KB gz (45 KB raw) | |
| `/hair-transplant-in-gurgaon` | 15.8 KB gz (62 KB raw) | |
| `/beard-transplant-gurgaon` | 19.0 KB gz (71 KB raw) | largest page |
| `site.css` | 5.4 KB gz (22.8 KB raw) | single stylesheet |
| `dr-nayra.webp` | 35.7 KB | WebP, dimensioned, lazy |
| **Homepage total** | **~52 KB** | plus Google Fonts |

TTFB 0.11–0.24 s across all pages. Server-rendered PHP, no client-side framework, no hydration, zero first-party JavaScript files (3–15 KB of inline JS per page). HTTP/3 available.

This is a genuinely fast site and the architecture is the reason. Only three things stand between it and a near-perfect score:

- **MEDIUM — Google Fonts is render-blocking.** `<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:...">` blocks first paint on a third-party connection. `preconnect` hints are already present, which helps. Self-hosting Inter as WOFF2 with `font-display: swap` removes the dependency entirely and typically saves 100–300 ms of LCP on Indian mobile connections.
- **MEDIUM — Elfsight Google Reviews widget on the homepage.** `https://elfsightcdn.com/platform.js` is a third-party loader (14.7 KB entry, but it pulls further payloads and injects DOM at runtime). It is loaded `async` with `data-elfsight-app-lazy`, which is the right configuration, but it remains the single largest CLS and INP risk on the site — it injects a review carousel of unknown height into mid-page. Reserve explicit height for its container.
- **LOW — no `<link rel="preload">` for the LCP image.** The homepage hero image is `loading="lazy"` on 8 pages and `eager` on one; whichever element is LCP should be `eager` + preloaded, never lazy.

**Limitation:** no CrUX field data is available. `dencespot.com` is not a connected Google Search Console property on this machine (only `rajhospitals.com` is), no `GOOGLE_API_KEY` is configured, and CrUX has no origin-level dataset for this domain — expected for a site that has been `noindex` and therefore has effectively no traffic. All figures above are lab/transfer measurements. Re-run against CrUX 4–6 weeks after indexing is enabled.

---

## 6. Images — 30/100

The lowest-scoring category, and for a visual-proof medical vertical that is significant.

**The site has one real image.** `/assets/img/dr-nayra.webp` (35.7 KB, 800×1000) is served 11 times across 10 pages. That is the entire image inventory of a hair-transplant clinic website.

**Against 69 empty placeholder slots on 14 pages:**

| Page | Empty slots |
|---|---|
| `/hair-transplant-in-gurgaon` | 13 |
| `/hair-transplant-results-gurgaon` | 12 |
| `/about-us` | 7 |
| `/beard-transplant-gurgaon` | 7 |
| `/dhi-`, `/fue-`, `/fut-`, `/hair-prp-` | 5 each |
| `/contact` | 3 |
| `/`, `/book-consultation` | 2 each |
| `/blog/`, `/hair-fall-`, `/hair-transplant-cost-` | 1 each |

The slots are well-specified — they name exactly what belongs there ("FUE extraction in progress — punch and donor area under magnification", "BEFORE — same angle & lighting"). The brief is written; the photography has not been done.

**HIGH — No `og:image` on any page.** All 29 pages have 6 OG tags and 3 Twitter tags but no image, and `twitter:card` is set to `summary` rather than `summary_large_image`. Every share of this site — and in this market, that overwhelmingly means WhatsApp, which is the site's own primary CTA on all 29 pages — renders as a bare text link with no visual. This is a same-day fix with real conversion impact.

**LOW — `/assets/img/clinic-front.jpg` is 894 KB and untracked.** It exists in the working tree, is not committed, and 404s live. If it is destined for the "Clinic exterior with signage" slots, convert to WebP first — 894 KB would be, by an order of magnitude, the heaviest asset on the site.

**What is right:** the one real image is handled correctly in every respect — WebP format, explicit `width`/`height` (no CLS), `loading="lazy"` where appropriate, and descriptive, non-stuffed alt text that varies by context ("Dr. Nyra with a patient during a hair loss consultation at DenceSpot Clinic, Sector 39 Gurugram"). Zero missing alt attributes sitewide. The pattern is correct — it simply needs to be applied to 69 more images.

---

## 7. AI Search Readiness (GEO) — 60/100

**Blocked at the root:** `noindex, nofollow` removes the site from Google AI Overviews and from every LLM retrieval path that respects it. Nothing else in this section takes effect until that is fixed.

**Strong foundations already in place:**

- `robots.txt` explicitly allows `GPTBot`, `OAI-SearchBot`, `PerplexityBot`, `ClaudeBot` and `Google-Extended` with a stated rationale. This is more deliberate AI-crawler handling than most sites have.
- `FAQPage` schema on 10 pages with direct question/answer pairs — the single most citable structure available.
- Server-rendered HTML with no JavaScript dependency: every word is in the raw response, so any crawler that does not execute JS still sees the full page.
- Dense `<h2>`/`<h3>` structure gives clean passage boundaries for extraction.
- The declarative, specific writing style ("₹30 × 3,500 grafts is more expensive than ₹45 × 2,200 grafts") is exactly what LLMs quote.

**Gaps:**

- **No `sameAs` entity links anywhere.** Nothing connects `dencespot.com` to its Google Business Profile, Practo listing or any social profile. LLMs and search engines reconcile business entities largely through these links — and `SEO-STRATEGY-dencespot.md` §7.1 already records that four conflicting versions of this business are live. Without `sameAs`, there is no authoritative signal saying which one is correct.
- **No `llms.txt`** (`/llms.txt` → 404). Optional and ignored by Google, but cheap and used by some assistants.
- **Placeholder text is citable too.** An LLM crawling `/dr-nyra` today can accurately report that DenceSpot Clinic lists its doctor's medical registration as "To be confirmed", and that its cost page shows no prices. That is a durable reputational risk once these pages are indexed — text can be cached and quoted long after it is corrected.
- **No `aggregateRating`, no review content, no results imagery** — three of the strongest citation hooks for a clinic, all absent.

---

## 8. Local SEO

Detected as a single-location brick-and-mortar clinic with an `areaServed` of Gurugram, New Delhi and Delhi NCR.

**Consistent on-site NAP:** `1123, Sector 39 Road, Jharsa, C Block, Sector 39, Gurugram, Haryana 122003` / `+91-81783-30800` / `dencespot@gmail.com` — rendered identically in the schema, footer and contact page across all pages. Centralised in `includes/config.php`, which is the right architecture.

**Open flags recorded in the source itself** (`includes/config.php`), both still unresolved:

1. **NAP is awaiting clinic sign-off.** Four conflicting versions of this business are live across directories. The site publishes the strategy's recommended canonical, but it has not been confirmed or propagated to GBP, Practo, Justdial, Bing Places, Apple Maps or Facebook. Until that byte-identical propagation happens, citation inconsistency will cap local pack performance.
2. **Opening hours conflict with the Google listing.** Site says Mon–Sat 10:00–20:00; GBP says Mon–Sun 09:00–21:00. "Open at time of search" is a top-tier local pack factor.

**Missing local assets:**

- No embedded map — `/contact` and 7 other pages have a "Google Maps embed" placeholder slot, unfilled.
- No `geo` coordinates or `hasMap` in schema.
- No clinic photography (exterior, reception, procedure room) — all placeholder slots. GBP performance correlates strongly with photo volume and freshness.
- Directions content unwritten ("Nearest metro and walking time — to confirm").
- No `sameAs` link to the GBP listing.

The only external local signal on the site is a plain `https://www.google.com/maps?q=Dencespot+Clinic+Sector+39+Gurgaon` link on 12 pages — a text search URL rather than a stable Place ID link.

---

## Audit limitations

- **No Google field data.** `dencespot.com` is not a connected GSC property here and no `GOOGLE_API_KEY` is configured, so there is no CrUX (real-user Core Web Vitals), no GSC indexation or query data, and no GA4 traffic. CrUX has no origin dataset for this domain, which is consistent with a site that has been `noindex`. Performance figures are lab/transfer measurements only.
- **No backlink data.** No Moz or Bing Webmaster credentials configured; only Common Crawl domain-level data was available, which returned nothing meaningful for this domain.
- **No rendered-DOM or visual testing.** Playwright was not available in this environment, so no screenshots, no mobile rendering capture, and no measured LCP/INP/CLS. The site is server-rendered with no client-side framework, so raw-HTML analysis captures effectively all indexable content — but the Elfsight widget's runtime layout impact could not be measured.
- **Crawl was rate-limited.** Hostinger's CDN returned 403s under rapid sequential requests. All findings above were re-verified with backoff; no 403 in this report reflects a real availability issue.
