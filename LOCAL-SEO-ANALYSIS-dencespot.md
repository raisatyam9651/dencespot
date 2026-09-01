# Local SEO Analysis — dencespot.com

**Run:** 1 Sep 2026 · **Market:** Gurugram (Gurgaon), Haryana, India
**Analysed:** the PHP build in this repo, rendered locally via `php -S 127.0.0.1:8901 router.php` (25 routes, all HTTP 200)
**Supersedes:** the 25 Aug 2026 run (commit `d8d3248`). Git holds the previous version.
**Companion to:** `LOCAL-SEO-STRATEGY-dencespot.md`, `BUILD-PROGRESS.md`

> **Scope note.** This run analysed the working tree only, which contains substantial
> uncommitted work (14 modified files, plus `gallery.php`, `router.php` and 59 new images).
> The live deploy was **not** fetched this time, so nothing below confirms current live
> indexation. Scores are this skill's heuristics, not Google-internal signals.

---

## 0. Read this first — stop before deploying the gallery

The 25 Aug run opened with a deploy incident (site-wide `noindex`). That flag is now
`SITE_STAGING = false` and committed. It is replaced by a more serious problem.

**`hair-transplant-results-gurgaon.php` scans `assets/img/gallery/` and emits `ImageObject`
schema for all 49 files, captioning every one of them as a consented patient result.**

Verified in the rendered JSON-LD:

| Case # | `contentUrl` | What the file actually is |
|---|---|---|
| #25 | `EXCELLENCE IN CLINICAL SERVICES – DERMATOLOGY & COSMETOLOGY (1).jpg` | an award certificate |
| #26 | `Excellence in Clinical Services – Dermatology & Cosmetology.jpg` | the same certificate again |
| #30 | `National Accreditation Board for Hospitals & Healthcare Providers (NABH).jpg` | an accreditation certificate |
| #34–36 | `DSC_1752.JPG.jpeg`, `DSC_1754.JPG (1).jpeg`, `DSC_1754.JPG.jpeg` | clinic interior photos, one duplicated |
| #37–49 | UUID `.png` files, `img.png`, `unnamed*.jpg` | unidentified |

Every one carries the caption:

```
"Patient Transformation Case #N — Sector 39 Gurugram Doctor-Led Hair Restoration,
 reviewed at Consented Case"
```

Three separate failures compound here:

1. **Certificates and clinic photos are marked up as patient before/after photographs.**
   On a YMYL medical page this is a misrepresentation in structured data, not a cosmetic
   bug. Google's structured-data policy prohibits markup that does not represent the page
   content; the exposure is a manual action against the whole domain.
2. **Duplicates are marked up as distinct patients.** `2020-07-26.jpg` and
   `2020-07-26 (1).jpg` are cases #1 and #2. `1d791e85-…png` and `…(1).png` are #39 and
   #40. `b3b12e85-…png` and `…(1).png` are #44 and #45. Same image, two "patients".
3. **The fallback cases use one image for both before and after.**
   `hair-transplant-results-gurgaon.php:51` and `:54` both set
   `'before' => …/case-uttam-gurgaon.jpg` and `'after' => …/case-uttam-gurgaon.jpg`.
   Case 2 is additionally labelled `'interval' => 'OT Completed'` — an immediately
   post-operative photograph — while the card badge reads `BEFORE & AFTER RESULT`.

`gallery.php:31-42` is the root cause: the classifier defaults `$category = 'results'` and
`$badge = 'BEFORE & AFTER RESULT'` for **any** filename not containing `cert`, `excellence`,
`national`, `clinic`, `dsc` or `unnamed`. **39 of 49 files fall through to that default.**

This also contradicts the site's own published policy, which is still in the repo two files
away — *"Nothing here is stock imagery, a licensed photo library, or a result from another
clinic"* — and the header comment at `hair-transplant-results-gurgaon.php:9` that says no
`ImageObject` is emitted while slots are placeholders. That guard no longer holds.

**Do not deploy until each image is individually classified and consented.** Filename-based
inference is not a consent record. Everything else in this document is a smaller problem
than this one.

---

## 1. Local SEO Score

**52 / 100** — but read §0 first. Two dimensions moved up since 25 Aug on genuine schema
work; dimension 5 moved *down* because misuse now outweighs the additions.

| # | Dimension | Weight | 25 Aug | 1 Sep | Verdict |
|---|---|---|---|---|---|
| 1 | GBP signals | 25 | 13 | **15** | `hasMap`, `sameAs` to CID and 7-dp `geo` now shipping; hours still contradict the listing |
| 2 | Reviews & reputation | 20 | 8 | **6** | Elfsight widget is client-side only; still nothing crawlable, still no `aggregateRating` |
| 3 | Local on-page SEO | 20 | 16 | **17** | Strongest dimension. City+service titles/H1s, NAP everywhere, one page per service, no doorway pattern |
| 4 | NAP consistency & citations | 15 | 6 | **7** | Page↔schema now byte-identical; external fragmentation unchanged |
| 5 | Local schema markup | 10 | 7 | **4** | Correct `MedicalClinic` subtype and a clean graph, undone by the `ImageObject` misuse in §0 |
| 6 | Local link & authority | 10 | 1 | **3** | NABH accreditation is the first real authority signal on the site — if it verifies |

The shape from August still holds: **on-page craft is well above this market, off-site
position is well below it.** What changed is that the first attempt to close the evidence
gap introduced a compliance risk larger than the gap it closed.

---

## 2. Business type

**Brick-and-mortar, single location.**

| Signal | Found |
|---|---|
| Physical street address in page HTML | ✅ footer on every page, plus `nap_block()` |
| Google Maps embed with pin | ✅ `contact.php:64` and `components.php:313`, both `loading="lazy"` |
| Structured address in `MedicalClinic` schema | ✅ full `PostalAddress` |
| `areaServed` without street address (SAB marker) | ❌ — `areaServed` present *alongside* address, which is correct for a clinic drawing from Delhi NCR |
| Multi-location / store locator | ❌ not applicable — one clinic, one address |

No location-page quality gate applies: there are no location pages, and the sitemap comment
at `sitemap.php:5-8` shows this was a deliberate rejection of the old site's ~172 locality
doorway pages. That decision remains correct and is worth protecting.

---

## 3. Industry vertical

**Healthcare** — unambiguous. Signals: `Dr.`, patients, appointments/consultations,
medical disclaimer, `medicalSpecialty: Dermatology`, procedure pages, HIPAA-equivalent
confidentiality language in the review policy.

Vertical-specific findings:

- ✅ **Correct schema subtype.** `MedicalClinic`, not generic `MedicalBusiness` or
  `LocalBusiness`. `schema.php:9-11` enforces this as a non-negotiable rule.
- ✅ **`Physician` node present** and linked `worksFor` → clinic `@id`, with
  `MedicalProcedure` / `MedicalTherapy` / `MedicalCondition` on the right pages.
- ⚠️ **No `sameAs` to a medical register.** India has no NPI equivalent; the substitute is
  the state medical council registration number, still `null` in `config.php:170`.
- ✅ **Review-response policy respects confidentiality** — the clinic will not confirm or
  deny that a reviewer is a patient (`patient-reviews.php`). Correct for healthcare.
- 🔴 **Advertising-compliance exposure** from §0. Indian medical advertising is governed by
  the NMC code of ethics and the Drugs & Magic Remedies Act; presenting certificates and
  unidentified images as patient results is the kind of claim those regimes police, over
  and above Google's own policy.

---

## 4. GBP optimisation checklist

| Signal | Status | Evidence |
|---|---|---|
| Maps embed on site | ✅ | `contact.php:64`, lazy-loaded, `strict-origin-when-cross-origin` |
| Embed addressed by FTID/place, not text search | ✅ | `!1s0x390ce5e4f6f45491:0x9dc43165216a74e6` |
| `hasMap` in schema, CID-addressed | ✅ | `https://maps.google.com/?cid=11368265669812057318` |
| `sameAs` → GBP listing | ✅ | now present (was missing 25 Aug) |
| `geo` precision ≥ 5 dp | ✅ | `28.4396807, 77.0438613` — 7 dp |
| Business hours visible on page | ✅ | `Mon–Sat · 10:00 – 20:00`, plus `openingHoursSpecification` |
| **Hours match the Google listing** | 🔴 | Site says Mon–Sat 10:00–20:00; GBP says Mon–Sun 09:00–21:00 (`config.php:56-60`) |
| Primary category confirmed | ❓ | Not verifiable from the codebase. This is the **#1 local pack factor** and the #1 negative factor when wrong |
| Secondary categories (optimal: 4) | ❓ | Not verifiable from the codebase |
| GBP posts active | ❓ | No evidence on site |
| Photos on the listing | ❓ | 59 new images exist locally; none confirmed uploaded to GBP |
| Q&A seeded | ❓ | Not verifiable |
| GBP website link target | ❓ | Per Sterling Sky's Diversity Update, do **not** point it at your strongest organic page — use `/contact` or the homepage, not `/hair-transplant-in-gurgaon` |

**"Open at time of search" is a top-5 local pack factor.** The hours mismatch is costing
visibility every evening and all day Sunday, in whichever direction is wrong. It has been
flagged in `config.php` since August and is blocked on one answer from the clinic, not on
code.

---

## 5. Review health snapshot

| Metric | Value |
|---|---|
| Reviews rendered server-side | **0** |
| `aggregateRating` in schema | **absent** |
| Rating visible to a crawler | none |
| Review platform diversity | Google only (Practo/Justdial listings exist but are wrong — see §7) |
| Owner-response evidence on site | none |
| Recency indicators | none |

**The Elfsight widget does not close this gap.** `index.php:307-309` loads
`elfsightcdn.com/platform.js` with `data-elfsight-app-lazy`. Reviews injected client-side by
a third-party script are not in the server-rendered HTML, so they contribute nothing to
Google's local signals, nothing to schema, and nothing to the AI engines that read the raw
document. It is a visitor-facing widget, not an SEO asset.

It also creates a new inconsistency worth watching: if the widget paints a star rating on
the homepage, the site is now *displaying* a rating it does not mark up — the mirror image
of the violation `patient-reviews.php` was carefully written to avoid.

Against the benchmarks: the magic threshold is **10 reviews** (Sterling Sky), 31% of
consumers filter to 4.5+, 74% only weigh reviews from the last three months, and rankings
soften if no new review lands for about three weeks. The clinic's published policy — every
patient asked at the ten-day follow-up, nobody pre-screened, nothing incentivised — is
already correct and already FTC/Google-compliant. It simply is not being run yet.

---

## 6. NAP consistency audit

**Internally: exact match.** Compared visible page HTML against JSON-LD on `/contact`:

| Source | Value |
|---|---|
| Page HTML | `1123, Sector 39 Road, Jharsa, C Block, Sector 39, Gurugram, Haryana 122003` · `+91 81783 30800` |
| `MedicalClinic` schema | `1123, Sector 39 Road, Jharsa, C Block, Sector 39` / `Gurugram` / `Haryana` / `122003` · `+91-81783-30800` |
| Discrepancy | **none** |

This is the payoff from routing every NAP string through `config.php` constants — there is
no path by which a template can drift. Keep it that way.

**Externally: still fragmented.** `config.php:118-127` documents it plainly — Practo lists
Sector 38, Justdial lists the business as "D S Dencespot", and both are deliberately
withheld from `sameAs` until corrected. Withholding is the right call (claiming a listing
that contradicts your canonical NAP corroborates the contradiction), but it means `sameAs`
currently carries exactly one URL.

Note also: the address itself is marked ⚠ AWAITING SIGN-OFF at `config.php:30-40`. Every
citation fix below is blocked on that one confirmation.

---

## 7. Citation presence

Not verifiable from the codebase; this is a checklist to work, not a measurement.

| Tier | Platform | Status | Priority |
|---|---|---|---|
| 1 | Google Business Profile | ✅ claimed (CID known) | maintain |
| 1 | **Bing Places** | ❓ | **High** — powers ChatGPT, Copilot and Alexa; ChatGPT does not read GBP |
| 1 | **Apple Maps / Apple Business** | ❓ | **High** — claim and verify against Apple's own docs before asserting anything about platform renames |
| 1 | Facebook business page | ❓ commented out of `sameAs` | Medium |
| 2 | Practo | ⚠️ exists, **wrong sector** (38 vs 39) | **High** — correct, then add to `sameAs` |
| 2 | Justdial | ⚠️ exists, **wrong name** ("D S Dencespot") | **High** — correct, then add to `sameAs` |
| 2 | Lybrate, Sehat, Credihealth | ❓ | Medium — healthcare-vertical directories for India |
| 3 | Data Axle, Foursquare, Neustar/TransUnion | ❓ | Medium — downstream distribution |

Chamber of Commerce and BBB are US-centric and largely non-applicable here; the Indian
equivalents worth pursuing are IMA membership, the local Gurugram trade bodies, and NABH's
own public directory listing.

Whitespark's 2026 finding that **3 of the top 5 AI-visibility factors are citation-related**
is the reason this section outranks its 15% weight in practice. ChatGPT sources local
recommendations from Bing, Yelp, TripAdvisor, BBB and Reddit — not from GBP.

---

## 8. Local schema status

**Present and well-built**, with one disqualifying misuse.

| Property | Status |
|---|---|
| `@type: MedicalClinic` | ✅ correct subtype |
| `name`, `url`, `telephone`, `email` | ✅ |
| `address` (full `PostalAddress`) | ✅ |
| `geo` (7 dp) | ✅ |
| `openingHoursSpecification` | ✅ |
| `hasMap`, `image`, `sameAs` | ✅ new since 25 Aug |
| `areaServed` (City / AdministrativeArea) | ✅ correctly typed |
| `medicalSpecialty` | ✅ |
| `Physician` node, `worksFor` → clinic `@id` | ✅ |
| `priceRange` | ❌ missing |
| `hasCredential` for NABH | ❌ missing — see below |
| `aggregateRating` | ⬜ correctly absent (nothing visible to mark up) |
| `ImageObject` on `/results` | 🔴 **misused — see §0** |

**Missing: the accreditation is not in structured data at all.** `components.php:466-503`
renders three NABH certificates with numbers and validity dates in HTML, but emits no
schema. That is the single best authority signal the clinic has and machines cannot read it.

Ready-to-use fix — add to the `MedicalClinic` node in `schema.php:schema_clinic()`:

```php
$node['hasCredential'] = [[
    '@type'                => 'EducationalOccupationalCredential',
    'credentialCategory'   => 'Accreditation',
    'name'                 => 'NABH Accreditation — Dermatology Clinic Standards (Edition 1, 2021)',
    'recognizedBy'         => [
        '@type' => 'Organization',
        'name'  => 'National Accreditation Board for Hospitals & Healthcare Providers',
        'url'   => 'https://nabh.co/',
    ],
    'identifier'           => '646744646-2026-001',
    'validFrom'            => '2026-09-01',
    'expires'              => '2029-08-31',
]];
```

**Verify before shipping that block.** Three points need checking against the certificates
themselves and NABH's public directory:

1. All three cards carry the **same certificate number** `646744646-2026-001` and the same
   validity window. Three distinct credentials sharing one number is internally
   inconsistent — either it is one accreditation presented as three, or the numbers were
   copied between cards.
2. The validity window starts **01 Sep 2026 — today**. Confirm that is the real issue date.
3. *"Excellence in Clinical Services"* reads as an **award**, not an accreditation, yet
   `components.php:509` describes the clinic as *"officially accredited by NABH … for
   clinical excellence"* and `gallery.php:37` labels that file `NABH ACCREDITATION`. If it
   is an award, say award. Overstating an accreditation is the highest-risk sentence on the
   site after §0.

**Also missing:** `priceRange`. The clinic deliberately publishes no per-graft price, which
is defensible — but `priceRange` accepts a coarse band (`"₹₹"`) that satisfies the property
without quoting a figure.

---

## 9. Local on-page SEO

The strongest dimension, and largely unchanged from August.

| Check | Status |
|---|---|
| City + service in title tag | ✅ `Hair Transplant in Gurgaon \| DenceSpot Clinic` |
| City + service in H1 | ✅ `Hair Transplant in Gurgaon for Natural-Looking Hair Restoration` |
| NAP visible in HTML | ✅ footer, every page |
| Dedicated page per core service | ✅ 6 treatment pages — **the #1 local organic factor and #2 AI-visibility factor** |
| `tel:` click-to-call | ✅ footer + sticky mobile CTA |
| Embedded map, lazy-loaded | ✅ |
| Doorway-page pattern | ✅ none — deliberately rejected |
| Every page within 3 clicks of home | ✅ |
| Contextual internal links per 1,000 words | ✅ 2.9–19.0, inside the 2–5 guideline on most pages |

Two new issues from today's work:

- 🟡 **`/gallery` H1 drops the city.** Title is `Photo & Results Gallery | DenceSpot Clinic
  Gurgaon`; H1 is `DenceSpot Clinic Photo & Results Gallery`. Add *Gurgaon* or *Sector 39*
  to the H1 — a 49-image local gallery is a strong geographic signal and the H1 is wasting it.
- 🔴 **`/router` is in the sitemap.** `sitemap.php` generates from every `.php` on disk, so
  the new dev helper `router.php` is now published as `https://dencespot.com/router`. Add
  `'router'` to `SITEMAP_EXCLUDE` (`sitemap.php:32`) — the list already excludes
  `thank-you`, `enquire`, `sitemap` and `404`.

Also still open from August: `fut-hair-transplant-in-gurgaon` ships `noindex` pending
written confirmation that the clinic performs strip surgery, and is correctly excluded from
the sitemap. Resolve both together or neither.

---

## 10. Top 10 prioritised actions

**Critical**

1. **Stop the gallery deploy.** Classify all 49 images individually — result / clinic /
   certificate / marketing — with a written consent record per patient photograph. Replace
   the filename heuristic in `gallery.php:31-42` with an explicit manifest.
2. **Remove `ImageObject` markup from anything that is not a consented patient
   photograph.** Restore the guard the file's own header comment describes.
3. **Fix the before/after pairs.** `hair-transplant-results-gurgaon.php:51,54` use one image
   for both states. Either supply the real pair or drop the case. Re-label
   `'interval' => 'OT Completed'` — an immediately post-op photo is not a 12-month result.
4. **Verify the NABH claims** against the certificates and NABH's public directory: one
   number across three credentials, a validity window starting today, and "Excellence in
   Clinical Services" described as an accreditation. Correct the copy at
   `components.php:509` if it is an award.

**High**

5. **Resolve the hours conflict** and deploy one canonical answer to the site, GBP, Bing
   Places, Apple Maps and the directories. Same sign-off covers the address at
   `config.php:30-40`.
6. **Claim Bing Places and Apple Maps.** Bing feeds ChatGPT, Copilot and Alexa, which
   convert at ~15.9% against ~1.76% for Google organic. This is the highest-leverage
   citation work available.
7. **Correct Practo (Sector 38 → 39) and Justdial ("D S Dencespot" → DenceSpot Clinic)**,
   then uncomment both in `CLINIC_SAME_AS`.
8. **Start the review programme** the policy page already describes. Ten reviews is the
   threshold; a new review roughly every 18 days is the cadence. Then populate `$reviews`,
   `$rating` and `$reviewCount` — the `AggregateRating` branch activates itself.

**Medium**

9. **Add `hasCredential` and `priceRange`** to `schema_clinic()` (§8), and add `'router'` to
   `SITEMAP_EXCLUDE`. Put the city back in the `/gallery` H1.
10. **Confirm the GBP primary category** with the clinic and add up to 4 secondary
    categories. Primary category is the single largest local pack factor and the largest
    negative factor when wrong — and it is currently unverified.

---

## 11. Limitations

This analysis read the local working tree. It could **not** assess:

- **Live-site state.** The deploy was not fetched. Whether `SITE_STAGING = false` is
  actually live, and whether the August `noindex` incident is genuinely resolved, is
  unconfirmed here. *Advanced GSC MCP is connected in this session — say the word and I can
  pull real indexation and URL-inspection data.*
- **GBP internals** — primary/secondary categories, posts, photo count, Q&A, Insights.
  Requires dashboard access.
- **Geo-grid rank tracking / SoLV** across the Gurugram grid. Requires `/seo maps` with
  DataForSEO, which is not connected in this session.
- **Real-time local pack position** for `hair transplant in gurgaon` and siblings.
- **Citation presence** on any directory — §7 is a work list, not a measurement. Requires
  DataForSEO `business_data_business_listings_search` or manual checks.
- **Backlink profile and Domain Authority.** Run `/seo backlinks`.
- **NABH accreditation validity.** Verify against NABH's public directory directly.

Scores are heuristics from this skill's model. Google Search Console remains the only
first-party source for how these pages actually perform.

For AI-search visibility specifically, run `/seo geo https://dencespot.com` — 45% of
consumers now use AI assistants for local recommendations, up from 6%, and AI Overviews
appear on up to 68% of local searches.
