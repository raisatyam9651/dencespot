# Action Plan — dencespot.com

Prioritised by impact per unit of effort. Effort is engineering time unless marked **[clinic]**, which means it is blocked on the clinic providing information, photography or sign-off — start those conversations today, because they gate the highest-value items.

---

## Phase 0 — Do this today (unblocks everything else)

### 1. Remove the site-wide `noindex` — CRITICAL
**Effort:** 5 minutes. **Blocks:** literally all organic performance.

`const SITE_STAGING = true` is what is committed and deployed. The working tree already has `false` — it is uncommitted.

```bash
git add includes/config.php robots.txt
git commit -m "Go live: disable staging noindex"
# deploy, then verify:
curl -s https://dencespot.com/ | grep -i 'name="robots"'
# must return: <meta name="robots" content="index, follow">
```

**Do not deploy this until Phase 1 item 4 is done** — see the ordering note at the end. Publishing `[CONFIRM] ₹__–__ per graft` into the index is worse than staying dark one more day.

### 2. Fix the two sitewide footer 404s — CRITICAL
**Effort:** 5 minutes. **Fixes:** 58 broken links in one edit.

In `includes/config.php`, `NAV_FOOTER` links to `/cost-and-emi-options` and `/hair-transplant-aftercare`, neither of which exists. Either repoint `/cost-and-emi-options` → `/hair-transplant-cost-in-gurgaon` and drop the aftercare link, or remove both.

### 3. Enable the www → non-www 301 — HIGH
**Effort:** 10 minutes.

The rule is already written in `.htaccess` §1, commented out — **but it currently redirects to www, and the site's canonicals and sitemap all use non-www.** Invert it before enabling:

```apache
RewriteCond %{HTTP_HOST} ^www\.dencespot\.com$ [NC]
RewriteRule ^ https://dencespot.com%{REQUEST_URI} [R=301,L]
```

Check whether Hostinger already forces HTTPS at the server level before also enabling the HTTPS block — two competing redirects will loop.

---

## Phase 1 — Week 1 (before or with the launch deploy)

### 4. Strip every placeholder from live pages — CRITICAL **[clinic]**
**Effort:** 2–4 hours engineering + clinic sign-off. **16 of 21 pages affected.**

| What | Where | Action |
|---|---|---|
| `[CONFIRM] ₹__–__ per graft` ×4 | `/hair-transplant-cost-in-gurgaon` | Get real per-graft rates, or remove the rate column entirely and keep the (excellent) "how pricing works" content |
| "Medical registration: To be confirmed" | `/dr-nyra` | Get the registration number. If unavailable, **remove the row** — do not publish "To be confirmed" |
| "Specialization / Registration: To be confirmed" | homepage + 8 treatment pages | Same — one shared component, one fix |
| "Nearest metro / Parking — to confirm" ×12 | 8 pages incl. `/contact` | Write the real directions, or remove the cards |
| "confirm wording with the clinic" | 8 pages | Confirm the Medanta landmark wording |
| Lowercase "sunday" in FAQ + JSON-LD | homepage | Fix `HOURS_NOTE` capitalisation |

The developer-facing warning already on the cost page — *"Publish this page only once the clinic's real per-graft rates are in place"* — is correct. Follow it.

### 5. Add `og:image` sitewide — HIGH
**Effort:** 1 hour.

Zero pages have one. WhatsApp is this site's primary CTA on all 29 pages, and every WhatsApp share currently renders as a bare text link. Add a 1200×630 branded OG image in `includes/header.php`, and switch `twitter:card` from `summary` to `summary_large_image`.

### 6. Enrich `MedicalClinic` + `Physician` schema — HIGH
**Effort:** 1 hour (+ **[clinic]** for `sameAs` URLs).

Add to `MedicalClinic`: `geo` (lat/lng), `hasMap`, `priceRange`, `image`, `logo`, and — most importantly — **`sameAs`** pointing at the Google Business Profile, Practo, Justdial and any social profiles. This is the strongest available signal for reconciling the four conflicting business listings recorded in `SEO-STRATEGY-dencespot.md` §7.1.

Add to `Physician`: `image` (the photo already exists), `medicalSpecialty`, `sameAs`, and `identifier` once the registration number is confirmed.

Do **not** add `aggregateRating` — the `/patient-reviews` page is right that a marked-up rating must be visible on the page. Add it only when real reviews are displayed.

### 7. Resolve the NAP and opening-hours conflicts — HIGH **[clinic]**
**Effort:** clinic decision + 2 hours propagation.

Both are flagged as unresolved in `includes/config.php`:
- Confirm the canonical NAP string, then deploy it **byte-identically** to GBP, Practo, Justdial, Bing Places, Apple Maps and Facebook.
- Reconcile hours: site says Mon–Sat 10:00–20:00, GBP says Mon–Sun 09:00–21:00. "Open now" is a top-tier local pack factor.

### 8. Add security headers — MEDIUM
**Effort:** 30 minutes.

In `.htaccess`: `Strict-Transport-Security`, `X-Content-Type-Options: nosniff`, `Referrer-Policy: strict-origin-when-cross-origin`, `Permissions-Policy`, and a `frame-ancestors` directive. Also set `expose_php = Off` to drop the `X-Powered-By: PHP/8.3.30` header.

### 9. Post-launch indexing tasks — HIGH
**Effort:** 30 minutes, after item 1 ships.

Verify `dencespot.com` in Google Search Console (it is not currently a connected property), submit `/sitemap.xml`, request indexing on the five money pages, and set up Bing Webmaster Tools + IndexNow.

---

## Phase 2 — Weeks 2–3

### 10. Resolve the remaining 17 broken internal links — HIGH
**Effort:** 2 hours to triage, then per-page build cost.

Every one is a legitimate keyword target. Suggested order by commercial value:

| Priority | Page | Currently linked from |
|---|---|---|
| 1 | `/womens-hair-loss-treatment-in-gurgaon` | 5 pages |
| 2 | `/hair-transplant-aftercare` | footer (all pages) |
| 3 | `/hairline-transplant-in-gurgaon` | 2 pages |
| 4 | `/crown-hair-transplant-in-gurgaon` | 2 pages |
| 5 | `/gfc-treatment-in-gurgaon` | 2 pages |
| 6 | `/hair-transplant-risks-and-side-effects` | 2 pages |
| 7 | `/prp-hair-treatment-cost-in-gurgaon` | 2 pages |
| 8 | `/fue-vs-dhi-hair-transplant` | comparison — high AI-citation value |
| 9 | `/fue-vs-fut-hair-transplant` | comparison |
| 10 | `/hair-transplant-repair-in-gurgaon` | high-intent, low competition |
| 11–17 | eyebrow, beard cost, alopecia areata, SMP, PRP vs GFC, EMI options, women's HT | backlog |

**Until each is built, remove the link.** A broken link is worse than a missing one.

### 11. Clinic and clinical photography — HIGH **[clinic]**
**Effort:** one photo session + 2 hours integration. **69 empty slots on 14 pages.**

The slots already specify exactly what is needed. Start with the highest-leverage set:
- Clinic exterior with signage (8 pages) + reception + consultation room + procedure room
- Google Maps embed (8 pages)
- Procedure photography for `/hair-transplant-in-gurgaon` (13 slots) and each technique page

Convert everything to WebP, set explicit `width`/`height`, `loading="lazy"` except the LCP image. Note `assets/img/clinic-front.jpg` is currently 894 KB — convert before deploying.

### 12. Self-host the Inter font — MEDIUM
**Effort:** 1 hour.

`fonts.googleapis.com` is render-blocking. Self-host WOFF2 with `font-display: swap` — typically 100–300 ms LCP saving on Indian mobile networks, and removes a third-party dependency.

### 13. Reserve height for the Elfsight widget — MEDIUM
**Effort:** 15 minutes.

The Google Reviews widget injects a carousel of unknown height mid-homepage — the site's main CLS/INP risk. Give its container an explicit `min-height`.

### 14. Trim long meta descriptions — LOW
**Effort:** 20 minutes.

Five run over 160 chars: `/fue-` (167), `/hair-transplant-cost-` (165), `/hair-transplant-in-gurgaon` (164), `/dhi-` (161), `/privacy-policy` (161).

### 15. Remove unreferenced JS — LOW
`/support.js` (69 KB) and `/image-slot.js` (65 KB) are served publicly but referenced by nothing. Design-build leftovers.

---

## Phase 3 — Month 2

### 16. Fill the results gallery and reviews page — HIGH **[clinic]**

The two highest-conversion pages on the site are both deliberately empty. The ethics are right — no stock photos, no invented testimonials — so the fix is operational, not editorial:
- Collect consented before/after pairs at fixed angle and lighting (the site already commits to this protocol).
- Run the review-request flow already documented on `/patient-reviews` (asked at the ten-day follow-up, no gating, no incentives).

Once real reviews are visible on the page, add `Review` and `aggregateRating` schema — and not before.

**Interim:** consider removing both from the primary navigation while they are empty, rather than routing prospective patients to a "we have nothing to show you" page.

### 17. Build out the blog — MEDIUM

One post is not a blog. The 17 broken links in item 10 are a ready-made editorial calendar, and the existing Norwood post (1,946 words, `Article` schema, medically reviewed) is a good template. Target 2–4 posts per month; comparison and cost posts earn the most AI citations.

### 18. Add contextual internal linking — MEDIUM

Once the Phase 2 pages exist, link them contextually from the money pages. Currently `/blog/norwood-scale-explained` and `/fut-hair-transplant-in-gurgaon` receive only 2 inbound links each, and nearly all in-content links point at URLs that 404.

### 19. Add `llms.txt` — LOW

Optional and ignored by Google, but cheap and used by some AI assistants. Robots.txt already welcomes the AI crawlers explicitly.

---

## Phase 4 — Ongoing

- **Weeks 4–6 after indexing:** re-run this audit with CrUX field data, which will exist once the site has real traffic. Verify Core Web Vitals against real users rather than lab measurements.
- **Monthly:** GSC coverage and query review; watch for the 404s reappearing as new content is linked before it is built.
- **Quarterly:** NAP consistency re-check across GBP, Practo, Justdial, Bing Places, Apple Maps and Facebook — this drifts.
- **Ongoing:** keep the "last reviewed" dates on treatment pages genuinely current. They are a real E-E-A-T asset while accurate and a liability once stale.
- **Set up drift monitoring** so a future deploy cannot silently reintroduce `noindex`.

---

## Ordering note

Items 1 (remove `noindex`) and 4 (strip placeholders) must ship **together**, with 4 landing first or in the same deploy.

Indexing a site that publishes `[CONFIRM] ₹__–__ per graft` on its cost page and "Medical registration: To be confirmed" on its doctor profile is worse than remaining unindexed for another day. Cached and quoted placeholder text outlives the fix — LLMs and search snapshots will happily report that this clinic has not confirmed its doctor's medical registration, long after the page is corrected.

Get the clinic sign-off, clean the pages, then flip the switch.
