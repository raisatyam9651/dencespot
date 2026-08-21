# DenceSpot Clinic — SEO Strategy & Page Architecture

**Target market:** Gurugram (Gurgaon), Haryana · **Money verticals:** Hair Transplant · PRP · Beard Transplant
**Domain:** dencespot.com · **Prepared:** 21 August 2026 · **Horizon:** Sep 2026 – Aug 2027

---

## 0. Executive summary — read this first

DenceSpot does **not** have a content shortage. It has a **content control** problem.

| What I found | Number |
|---|---|
| Total URLs in `sitemap.xml` | **802** |
| `hair-fall-treatment-in-{locality}` doorway pages (Gurgaon) | **~122** |
| Hair-transplant + beard-transplant Delhi locality pages | **~50** |
| Blog articles | **~370** |
| Real Gurgaon service pages | **17** |
| JSON-LD schema on the main money page | **0** |
| Pages in the new design build with a `<title>` tag | **0 of 3** |

The three verticals you want to rank for already have a page each — `/hair-transplant-in-gurgaon`, `/hair-prp-treatment-in-gurgaon`, `/beard-transplant-gurgaon`. They are not ranking to potential because **~172 near-identical locality pages are diluting every topical and internal-linking signal the site produces**, and because the money pages carry **no structured data, no cost page, no proof assets, and no measurable conversion path**.

**The strategy is therefore: consolidate first, then build.** Cut the doorway estate, concentrate authority into one strong page per intent, add the pages that genuinely convert, and wire up measurement so decisions stop being guesses.

> 🛑 **Quality gate triggered.** The local-service template hard-stops at **50+ location pages**; programmatic rules hard-stop at **500+ unreviewed pages** and flag anything under **40% unique content**. DenceSpot sits at **~172 location pages** and **802 total URLs**. **Do not build a single new locality page until the consolidation in §5 is done.** This is the highest-risk item in the account — Google's Scaled Content Abuse policy (March 2024, enforcement escalated June 2025) targets exactly this pattern.

---

## 1. PART ONE — Every page to create, for lead generation

This answers *"first of all, mention all pages which we need to create."* **47 pages**, grouped by how directly each one produces a booked consultation.

Legend: 🆕 CREATE · ♻️ REWRITE (exists, not fit for purpose) · ✅ EXISTS (keep, add schema)

### 1.1 Tier 0 — Conversion infrastructure (build these FIRST)

These do not chase new traffic. They convert the traffic you already have. Nothing else in this plan pays back until they exist.

| # | Page | URL | Status | Why it generates leads |
|---|---|---|---|---|
| 1 | Homepage | `/` | ♻️ | The new design in this repo. Needs title, meta, schema, mobile layout before launch. |
| 2 | **Book a Consultation** | `/book-consultation` | 🆕 | One destination for every CTA on the site — form + WhatsApp + call, no distractions. Today every CTA points at an on-page anchor, and you cannot measure or ad-target an anchor. |
| 3 | **Hair Transplant Cost in Gurgaon** | `/hair-transplant-cost-in-gurgaon` | 🆕 | The highest-intent non-brand query in this market. It currently exists only as an `<h2>` inside another page. Every competitor has a dedicated page. **The biggest single missed keyword on the site.** |
| 4 | **Results / Before & After** | `/hair-transplant-results-gurgaon` | 🆕 | Proof is the #1 objection in this vertical. Consented, dated, same-angle pairs, filterable by procedure. |
| 5 | **Patient Reviews** | `/patient-reviews` | 🆕 | Carries `AggregateRating` schema, embeds Google reviews, and feeds AI assistants, which lean heavily on review content. |
| 6 | Patient case studies | `/patient-stories/{name}-{procedure}` | 🆕 ×5 | Long-form single-patient narratives: Norwood stage → graft count → 12-month timeline. The highest-converting asset type in aesthetic medicine. |
| 7 | **Hair Loss Self-Assessment** | `/hair-loss-assessment` | 🆕 | Interactive Norwood/Ludwig quiz → WhatsApp or email capture. Pure lead magnet; also ranks for "hair loss stages". |
| 8 | **Graft Calculator** | `/hair-transplant-graft-calculator` | 🆕 | "How many grafts do I need" is a top informational query. A calculator captures the lead at the exact moment of intent. |
| 9 | Cost, EMI & payment options | `/cost-and-emi-options` | 🆕 | Finance objection handling; captures "hair transplant EMI Gurgaon". |
| 10 | About the clinic | `/about-us` | ♻️ | Rebuild from `about-clinic.html` in this repo. |
| 11 | Dr. Nyra profile | `/dr-nyra` | ✅ | E-E-A-T. Add `Physician` schema, qualifications, medical registration number, `sameAs` to Practo/LinkedIn. |
| 12 | Dr. Rahul profile | `/dr-rahul` | ✅ | Same. **Fix first:** the live site attributes surgery to Dr. Rahul while the new design credits only Dr. Nyra. Pick one story and tell it everywhere. |
| 13 | Contact / Visit the clinic | `/contact` | ♻️ | NAP, embedded map, metro + landmark + parking directions, hours. |
| 14 | FAQs hub | `/faqs` | 🆕 | `FAQPage` schema. Directly feeds AI Overviews and ChatGPT answers. |
| 15 | Thank-you page | `/thank-you` | 🆕 | Non-negotiable — without it you cannot fire a conversion event in GA4 or Google Ads. |

### 1.2 Tier 1 — Service pages: HAIR TRANSPLANT cluster

| # | Page | URL | Status | Priority |
|---|---|---|---|---|
| 16 | Hair Transplant in Gurgaon **(hub)** | `/hair-transplant-in-gurgaon` | ♻️ | 🔴 Critical |
| 17 | FUE Hair Transplant | `/fue-hair-transplant-in-gurgaon` | 🆕 | 🔴 Critical |
| 18 | DHI Hair Transplant | `/dhi-hair-transplant-in-gurgaon` | 🆕 | 🔴 Critical |
| 19 | FUT Hair Transplant | `/fut-hair-transplant-in-gurgaon` | 🆕 | 🟠 High |
| 20 | Beard Transplant | `/beard-transplant-gurgaon` | ♻️ | 🔴 Critical |
| 21 | Beard Transplant Cost | `/beard-transplant-cost-gurgaon` | ✅ | 🟠 High |
| 22 | Eyebrow Transplant | `/eyebrow-transplant-in-gurgaon` | 🆕 | 🟠 High |
| 23 | Hairline / receding hairline restoration | `/hairline-transplant-in-gurgaon` | 🆕 | 🟠 High |
| 24 | Crown & vertex restoration | `/crown-hair-transplant-in-gurgaon` | 🆕 | 🟡 Medium |
| 25 | Hair transplant for women | `/hair-transplant-for-women-in-gurgaon` | 🆕 | 🟠 High |
| 26 | **Hair transplant repair / revision** | `/hair-transplant-repair-in-gurgaon` | 🆕 | 🟠 High — low competition, high ticket, high intent |
| 27 | Unshaven / no-shave transplant | `/unshaven-hair-transplant-in-gurgaon` | 🆕 | 🟡 Medium |
| 28 | Recovery & aftercare guide | `/hair-transplant-aftercare` | 🆕 | 🟡 Medium — retention + AI citation |

### 1.3 Tier 1 — Service pages: PRP & non-surgical cluster

| # | Page | URL | Status | Priority |
|---|---|---|---|---|
| 29 | Hair PRP Treatment **(hub)** | `/hair-prp-treatment-in-gurgaon` | ♻️ | 🔴 Critical |
| 30 | PRP Treatment Cost | `/prp-hair-treatment-cost-in-gurgaon` | 🆕 | 🔴 Critical |
| 31 | **GFC Therapy** | `/gfc-treatment-in-gurgaon` | 🆕 | 🔴 Critical — fast-growing query, competitors already rank, you have zero coverage |
| 32 | Mesotherapy for hair | `/hair-mesotherapy-in-gurgaon` | 🆕 | 🟡 Medium |
| 33 | Face PRP | `/face-prp-treatment-in-gurgaon` | ✅ | 🟡 Medium |
| 34 | Hair fall treatment **(hub)** | `/hair-fall-treatment-in-gurgaon` | ♻️ | 🔴 Critical — becomes the 301 target for ~122 doorway pages |
| 35 | Women's hair loss treatment | `/womens-hair-loss-treatment-in-gurgaon` | 🆕 | 🟠 High |
| 36 | Alopecia areata treatment | `/alopecia-areata-treatment-in-gurgaon` | 🆕 | 🟡 Medium |
| 37 | Scalp micropigmentation (SMP) | `/scalp-micropigmentation-in-gurgaon` | 🆕 | 🟡 Medium — DHI and QHT both offer it; you don't |
| 38 | Dandruff & scalp treatment | `/dandruff-treatment-in-gurgaon` | ✅ | 🟡 Medium |
| 39 | Hair microneedling | `/hair-microneedling-in-gurgaon` | ✅ | 🟢 Low |
| 40 | LED / low-level laser therapy | `/hair-led-therapy-in-gurgaon` | ✅ | 🟢 Low |

### 1.4 Tier 2 — Decision & comparison pages (feed AI answers, capture late-stage intent)

| # | Page | URL | Status |
|---|---|---|---|
| 41 | FUE vs DHI | `/fue-vs-dhi-hair-transplant` | 🆕 |
| 42 | FUE vs FUT | `/fue-vs-fut-hair-transplant` | 🆕 |
| 43 | PRP vs Hair Transplant | `/prp-vs-hair-transplant` | 🆕 |
| 44 | PRP vs GFC | `/prp-vs-gfc-treatment` | 🆕 |
| 45 | Best hair transplant clinic in Gurgaon | `/best-hair-transplant-clinic-in-gurgaon` | 🆕 |
| 46 | How to choose a hair transplant clinic | `/how-to-choose-hair-transplant-clinic` | 🆕 |
| 47 | Hair transplant risks, myths & side effects | `/hair-transplant-risks-and-side-effects` | 🆕 |

> ⚠️ **On #41:** your live `/hair-transplant-in-gurgaon` page carries an `<h2>` reading **"FUE vs DHT Hair Transplant"**. DHT is a hormone; DHI is the technique. That typo sits on your top money page and quietly undermines medical credibility.

### 1.5 Build sequence — do not build all 47 at once

| Batch | Pages | Weeks |
|---|---|---|
| **A — Convert what you already have** | 1, 2, 3, 4, 5, 13, 15 | 1–3 |
| **B — Money page rebuilds + schema** | 16, 20, 29, 34, 11, 12 | 3–6 |
| **C — Technique split-outs** | 17, 18, 19, 30, 31 | 6–10 |
| **D — Concern & audience pages** | 22–26, 35–37 | 10–16 |
| **E — Decision + proof assets** | 6, 7, 8, 9, 14, 41–47 | 16–24 |

---

## 2. PART TWO — Service pages vs treatment pages

You asked for these separately, and the distinction matters for URL structure and schema:

| | **Service page** | **Treatment page** |
|---|---|---|
| Answers | "Who does this, where, and what will it cost me?" | "What is this procedure and is it right for my case?" |
| Intent | Commercial / transactional | Commercial investigation |
| URL contains | `-in-gurgaon` (geo-qualified) | technique or condition name |
| Schema | `MedicalClinic` + `Service` + `Offer` | `MedicalProcedure` / `MedicalTherapy` |
| Conversion | Direct — book / call / WhatsApp | Assisted — educates, then routes to the service hub |

**Service pages (geo-qualified) — 12:** #16, 20, 21, 25, 29, 30, 33, 34, 35, 37, 38, 45
**Treatment pages (procedure / condition) — 16:** #17, 18, 19, 22, 23, 24, 26, 27, 28, 31, 32, 36, 39, 40, 43, 47

Every treatment page links **up** to its service hub. Every service hub links **down** to its treatment pages. That is the hub-and-spoke structure in §4.

---

## 3. PART THREE — Keyword architecture

**Honest caveat:** no verified search volumes appear below. This account has **no Google Ads API, no DataForSEO, and no Search Console credentials configured** (§9), so any volume figure I printed would be invented. Priorities are ranked on intent strength, SERP competitiveness and commercial value — all directly observable. **Pull real volumes before finalising the content calendar.**

### 3.1 Hair transplant cluster → `/hair-transplant-in-gurgaon`

| Target query | Intent | Page |
|---|---|---|
| hair transplant in gurgaon | Transactional | #16 |
| best hair transplant clinic in gurgaon | Commercial | #45 |
| hair transplant cost in gurgaon / price per graft | Transactional | #3 |
| fue hair transplant gurgaon | Transactional | #17 |
| dhi hair transplant gurgaon | Transactional | #18 |
| hair transplant near me / near Medanta / sector 39 | Local | #16 + GBP |
| hair transplant before after result | Investigation | #4 |
| hair transplant for receding hairline | Investigation | #23 |
| female hair transplant gurgaon | Transactional | #25 |
| failed hair transplant repair | Transactional | #26 |

### 3.2 PRP cluster → `/hair-prp-treatment-in-gurgaon`

| Target query | Intent | Page |
|---|---|---|
| prp treatment for hair in gurgaon | Transactional | #29 |
| prp hair treatment cost / price per session gurgaon | Transactional | #30 |
| gfc treatment for hair gurgaon | Transactional | #31 |
| prp side effects / how many sessions needed | Investigation | #29 FAQ block |
| prp vs hair transplant | Investigation | #43 |
| prp for female hair loss | Investigation | #35 |

### 3.3 Beard cluster → `/beard-transplant-gurgaon`

| Target query | Intent | Page |
|---|---|---|
| beard transplant in gurgaon | Transactional | #20 |
| beard transplant cost in gurgaon / per graft | Transactional | #21 |
| patchy beard treatment | Investigation | #20 |
| beard implant result | Investigation | #4 (filtered) |
| moustache transplant | Transactional | #20 section |

### 3.4 Cannibalisation warning

`/hair-transplant-in-gurgaon`, `/hair-fall-treatment-in-gurgaon`, `/best-hair-transplant/` and ~370 blog posts overlap heavily. **One page per intent.** Before publishing anything new, run `site:dencespot.com "target keyword"` and merge whatever already competes.

---

## 4. Site architecture & internal linking

```
/                                    ← LocalBusiness + MedicalClinic schema
├── /hair-transplant-in-gurgaon      ← HUB (service)
│   ├── /fue-hair-transplant-in-gurgaon
│   ├── /dhi-hair-transplant-in-gurgaon
│   ├── /fut-hair-transplant-in-gurgaon
│   ├── /hairline-transplant-in-gurgaon
│   ├── /crown-hair-transplant-in-gurgaon
│   ├── /hair-transplant-for-women-in-gurgaon
│   ├── /hair-transplant-repair-in-gurgaon
│   ├── /hair-transplant-cost-in-gurgaon
│   └── /hair-transplant-aftercare
├── /beard-transplant-gurgaon        ← HUB
│   ├── /beard-transplant-cost-gurgaon
│   └── /eyebrow-transplant-in-gurgaon
├── /hair-prp-treatment-in-gurgaon   ← HUB
│   ├── /prp-hair-treatment-cost-in-gurgaon
│   ├── /gfc-treatment-in-gurgaon
│   └── /hair-mesotherapy-in-gurgaon
├── /hair-fall-treatment-in-gurgaon  ← HUB (301 target for ~122 locality pages)
│   ├── /womens-hair-loss-treatment-in-gurgaon
│   ├── /alopecia-areata-treatment-in-gurgaon
│   ├── /dandruff-treatment-in-gurgaon
│   └── /scalp-micropigmentation-in-gurgaon
├── /compare/  (7 decision pages)
├── /hair-transplant-results-gurgaon  ·  /patient-stories/*
├── /patient-reviews · /faqs · /about-us · /dr-nyra · /dr-rahul
├── /contact · /book-consultation · /thank-you
└── /blog/  (audited — see §6)
```

**Linking rules**

- Every page within **3 clicks** of the homepage.
- **2–5 contextual internal links per 1,000 words**, descriptive anchors, never the same exact-match anchor repeatedly.
- Every treatment page links up to its hub; every hub links down to all its spokes.
- Every service and treatment page links to `/book-consultation` **and** `/hair-transplant-results-gurgaon`.
- `BreadcrumbList` schema on every page below root.
- Cost pages cross-link to `/cost-and-emi-options`.

---

## 5. PART FOUR — Programmatic / location pages: the consolidation

This is the most consequential technical decision in the account.

### 5.1 What exists today

| Pattern | Count | Verdict |
|---|---|---|
| `/hair-fall-treatment-in-{gurgaon-locality}` | ~122 | ❌ Classic doorway set — Sector 14 … Sector 113, DLF phases, malls, metro stops |
| `/hair-transplant-in-{delhi-locality}` | ~28 | ❌ Same pattern, different city |
| `/beard-transplant-{delhi-locality}` | ~23 | ❌ Same |

**Apply the swap test:** if you can swap "Sector 45" for "Sector 46" and the page still reads correctly, it is a doorway page. These pass the swap test — which means they fail Google's. A comparable HVAC estate lost **80% of rankings and 63% of traffic** after the March 2024 Core Update on exactly this footprint.

### 5.2 What to do

| Action | Pages | How |
|---|---|---|
| **301 → hub** | ~122 Gurgaon locality pages | Redirect all to `/hair-fall-treatment-in-gurgaon`. Migrate any genuinely unique paragraph into that hub's "Areas we serve" section first. |
| **301 → one Delhi page each** | ~50 Delhi locality pages | Consolidate into `/hair-transplant-in-delhi` and `/beard-transplant-in-delhi`. Keep **two** at most. |
| **Keep & strengthen** | 1 Gurgaon hub per service | The clinic has **one address**. One clinic, one location page. |
| **Never rebuild** | — | No new locality pages without written justification against the gate below. |

**Redirect in batches of 25–30, two weeks apart**, watching GSC coverage and rankings between batches. Never redirect 170 URLs in one night.

### 5.3 Quality gate for any future location page

A new location page may be built **only** if it clears every line:

- [ ] ≥ **600 words**, of which ≥ **60% is unique** to that page (boilerplate counts against you)
- [ ] **Fails the swap test** — the locality name cannot be exchanged without breaking meaning
- [ ] Contains ≥ 3 of: named local landmarks, travel/metro directions, area-specific patient testimonial, locality-specific photography, locally relevant clinical note
- [ ] Its own `LocalBusiness` `@id` and geo coordinates to 5+ decimal places
- [ ] Human-reviewed before publish
- [ ] **Max 5 new location pages per quarter**, published in batches, monitored 2–4 weeks before the next batch

**Recommended answer for DenceSpot: build zero.** One clinic, one address, one location page. Spend that effort on §1 instead.

### 5.4 Index bloat control

- `noindex` anything that fails the gate but must stay live for users.
- Split `sitemap.xml` (802 URLs, single flat file) into a **sitemap index**: `pages`, `services`, `blog`. Use real `lastmod` dates.
- Remove redirected URLs from the sitemap at redirect time.
- Monthly: compare *indexed* count in GSC against *intended* count. The gap is your bloat.

---

## 6. Blog: audit before you write

~370 articles is either a substantial asset or a substantial liability, and right now nobody knows which. Run this before commissioning a single new post:

1. Pull 12 months of impressions and clicks per URL from GSC.
2. Bucket every post: **Keep & refresh** (has impressions) · **Merge** (topic duplicates — combine into the strongest URL, 301 the rest) · **Prune** (zero impressions, zero links, thin → `noindex` or delete).
3. Expect roughly 40–60% to merge or prune. That is normal, and it is a **gain**.
4. Every surviving post gets a contextual link into its money hub. Most of those 370 posts almost certainly link nowhere useful.

**New posts only after the audit** — 4/month, each mapped to one hub:

| Hub | Sample titles |
|---|---|
| Hair transplant | Norwood scale explained · graft counts by stage · month-by-month growth timeline · how to spot an unqualified clinic |
| PRP | How many PRP sessions you actually need · what a PRP session day looks like · PRP for women · why PRP sometimes fails |
| Beard | Realistic beard density expectations · understanding the beard donor area · beard recovery week by week |
| Local | Hair transplant travel guide for outstation patients · what your first consultation actually covers |

---

## 7. PART FIVE — Local SEO (Gurgaon)

Business type: **Brick-and-mortar** · Vertical: **Healthcare** · One address, not a service-area business.

### 7.1 🚨 NAP conflict — fix this week, before anything else

Four different versions of this business are live right now:

| Source | Address | Hours |
|---|---|---|
| Design brief | Chandwal Murdawan | — |
| New design build + GBP | C Block, Sector 39, Gurugram 122003 | Mon–Sat 10:00–20:00 |
| Google / Justdial listing | 1123, Sector 39 Road, Jharsa, Janak Puri C Block, front of Medanta Hospital | Mon–**Sun** 09:00–**21:00** |
| Practo | Sector **38** | — |

Pick **one canonical NAP string** and deploy it byte-identically to: website footer, `/contact`, JSON-LD, GBP, Practo, Justdial, Bing Places, Apple Maps, Facebook.

Hours matter more than people assume — *"business is open at time of search"* is now a **top-5 local pack ranking factor** (Whitespark 2026). Publishing Mon–Sat while GBP says Mon–Sun costs you Sunday visibility and creates a trust mismatch when patients arrive.

**Recommended canonical:**

```
DenceSpot Clinic
1123, Sector 39 Road, Jharsa, C Block, Sector 39,
Gurugram, Haryana 122003
+91 81783 30800 · dencespot@gmail.com
```

### 7.2 Google Business Profile

- **Primary category:** `Hair transplantation clinic` — the single strongest local pack factor, and the wrong primary category is the **#1 negative factor**.
- **Secondary categories (4):** Skin care clinic · Dermatologist · Hair replacement service · Medical clinic.
- Complete every field: all 12 services from §1, attributes, appointment URL → `/book-consultation`.
- **Do not point the GBP website link at your strongest organic page** (Sterling Sky Diversity Update — it can suppress organic performance). Point it at `/` or `/contact`.
- Weekly **GBP Posts**; 10+ new photos monthly (listings with photos see roughly 45% more direction requests).
- Populate **Q&A** with the same questions as `/faqs`, answered as the owner.
- Connect **WhatsApp** as the messaging channel — Google Business Chat is deprecated, and WhatsApp is already your fastest lead path.

### 7.3 Reviews — the 18-day rule

Rankings visibly decay after roughly three weeks with no new review. Build a **standing cadence, not campaigns**:

- Ask at the **10-day post-op follow-up**, when satisfaction peaks.
- Target **4–6 new Google reviews per month** — never a gap longer than 18 days.
- Respond to **100%** within 48 hours. **Medical-privacy caution: never confirm or deny that a reviewer is a patient.** Respond generically and take detail offline.
- Diversify across Google, Practo, Justdial and Facebook — consumers consult around six review sources.
- ⛔ **Never gate reviews** (pre-screening happy patients before directing them to Google). Prohibited by Google policy, and FTC penalties run to $53,088 per violation.

### 7.4 Citations & AI-visible directories

**Tier 1 (this month):** Google Business Profile · **Bing Places** · **Apple Maps** · Justdial · Practo · Facebook.
**Healthcare-specific:** Practo, Lybrate, Sehat, Credihealth, Bajaj Finserv Health, Ask Apollo.
**Local authority:** Gurgaon Chamber of Commerce, local business associations, Medanta-adjacent medical directories.

**3 of the top 5 AI visibility factors are citation-related**, and ChatGPT does **not** read Google Business Profile — it sources from the Bing index and third-party directories. Bing Places is not optional.

### 7.5 Schema markup plan

Currently **zero** JSON-LD across every page, live and in the new build. This is the fastest technical win available.

| Page type | Schema |
|---|---|
| Homepage | `MedicalClinic` (+ `LocalBusiness`) + `Organization` + `WebSite` |
| Service hubs | `MedicalClinic` + `Service` + `Offer` + `BreadcrumbList` |
| Treatment pages | `MedicalProcedure` / `MedicalTherapy` + `BreadcrumbList` |
| Doctor profiles | `Physician` + `Person`, `sameAs` → Practo/LinkedIn, medical registration |
| Reviews page | `AggregateRating` (real counts only) |
| FAQs and FAQ blocks | `FAQPage` |
| Results / case studies | `ImageObject` with dated captions |
| Contact | `ContactPage` + `MedicalClinic` |

Use `MedicalClinic` — **not** generic `LocalBusiness`. Include `geo` to **5+ decimal places**, `openingHoursSpecification`, `telephone`, `priceRange`, `areaServed`.

### 7.6 GEO / AI search

AI Overviews appear on up to **68% of local searches**, and ChatGPT-sourced local traffic converts at **15.9% vs 1.76%** for Google organic. To be citable:

- Answer each FAQ in a **self-contained 40–60 word paragraph** directly under its question heading.
- Publish **real, specific numbers** — graft ranges, session counts, recovery days. Vague copy is uncitable copy.
- Pursue placement on **"best hair transplant clinic in Gurgaon" listicles** — the #1 AI visibility citation factor.
- Brand mentions correlate with AI visibility roughly **3× more strongly than backlinks** (0.664 vs 0.218). Prioritise digital PR and unlinked mentions over link buying.

---

## 8. PART SIX — Technical foundation

### 8.1 Launch blockers in the new design build (this repo)

| Issue | Files | Severity |
|---|---|---|
| **No `<title>` tag** | all 3 | 🔴 Critical |
| **No meta description** | all 3 | 🔴 Critical |
| **No canonical tag** | all 3 | 🔴 Critical |
| **No JSON-LD** | all 3 | 🔴 Critical |
| **`min-width:1280px`** — not responsive; India is ~80% mobile | all 3 | 🔴 Critical |
| No Open Graph / Twitter card tags | all 3 | 🟠 High |
| `image-slot` placeholders unfilled, no `alt` text | all 3 | 🟠 High |
| Design-canvas chrome (`<x-dc>`, "Homepage Design v1" bar) still present | index | 🟠 High — strip before launch |
| Dead `#book` anchor in the about-clinic header | about | 🟡 Medium |

> Mobile-first indexing means Google evaluates the **mobile** rendering. A 1280px-locked layout is an existential problem in a market where most hair-loss research happens on a phone. Resolve before launch, not after.

### 8.2 Site-wide

- **HTTPS** everywhere, HSTS, one canonical host (`https://dencespot.com`).
- **Core Web Vitals targets:** LCP < 2.5s · **INP < 200ms** · CLS < 0.1 (mobile, field data — INP replaced FID in 2024).
- Lazy-load the map embed and gallery; serve WebP/AVIF; set `width`/`height` on every image to prevent CLS.
- `sitemap.xml` → sitemap index (§5.4). Keep robots.txt permissive and add the new sitemap index line.
- Descriptive, keyword-bearing `alt` text on before/after images — they rank in Image Search for "hair transplant result".

---

## 9. PART SEVEN — Measurement (Google APIs)

**Current credential tier: NONE.** No `~/.config/claude-seo/google-api.json`, no service account, no GA4 property ID. Until that is fixed, every performance claim about this site — including the baselines in §11 — is an estimate. **Week-1 task.**

| Setup step | Unlocks |
|---|---|
| Google Cloud project + **API key** | PageSpeed, CrUX field data, 25-week CWV history, Knowledge Graph, Web Risk |
| **Service account**, then add its `client_email` in GSC → Settings → Users | Search Analytics, URL Inspection, sitemap status, Indexing API |
| **GA4 property ID** in config | Organic sessions, top organic landing pages, conversions |
| Google Ads developer token *(optional)* | Real Keyword Planner volumes — needed to finalise §3 |

Run `/seo google setup` to be walked through it.

**Once connected, the standing reporting rhythm:**

| Frequency | Command | Watching for |
|---|---|---|
| Weekly | `/seo google gsc sc-domain:dencespot.com` | Position 4–10 quick wins; impression shifts during consolidation |
| Weekly (during §5) | `/seo google inspect-batch redirected-urls.txt` | Redirects processed, coverage errors |
| Monthly | `/seo google crux-history https://dencespot.com` | CWV trend after the mobile rebuild |
| Monthly | `/seo google ga4-pages` | Which pages actually produce consultations |
| Quarterly | `/seo audit dencespot.com` | Full re-audit |

**Two data caveats to carry into every report:**

- A GSC logging error made **impressions, CTR and average position unreliable from 2025-05-13 to 2026-04-27** (clicks unaffected; fixed forward-only, no backfill). Trend lines crossing that window will show an artificial impressions drop.
- **AI Mode traffic is already folded into standard Performance totals.** You cannot cleanly separate classic from AI search there — use the *Generative AI performance* report (impressions only) for AI visibility.

**Conversion tracking to implement alongside:** `tel:` click, WhatsApp click, form submit → `/thank-you`, assessment completion, calculator completion. None of these are measurable today, which is exactly why "which page produces leads" is currently unanswerable.

---

## 10. Roadmap

### Phase 1 — Foundation · Weeks 1–4 (Sep 2026)

1. Fix the NAP conflict across all platforms (§7.1) — **day one**
2. Connect GSC, GA4 and CrUX; set up conversion events (§9)
3. Clear the launch blockers: titles, meta, canonicals, **responsive rebuild** (§8.1)
4. Deploy `MedicalClinic` + `Physician` + `FAQPage` schema
5. Ship Batch A: `/book-consultation`, `/hair-transplant-cost-in-gurgaon`, `/thank-you`, `/contact`
6. GBP: categories, services, hours, WhatsApp, first posts
7. Claim **Bing Places** and Apple Maps
8. Export the full URL inventory and start the doorway-page audit

### Phase 2 — Consolidation & core content · Weeks 5–12 (Oct–Nov 2026)

1. **301 the ~122 Gurgaon locality pages** in batches of 25–30 (§5.2)
2. Rewrite the four money hubs (#16, 20, 29, 34) with schema and internal linking
3. Ship Batch C: FUE, DHI, FUT, PRP cost, GFC
4. Blog audit — keep / merge / prune (§6)
5. Review engine live: 4–6/month on an 18-day cadence
6. Sitemap index deployed; monitor indexed vs intended weekly

### Phase 3 — Scale · Weeks 13–24 (Dec 2026 – Feb 2027)

1. Delhi consolidation → 2 pages
2. Batches D and E: concern pages, comparisons, results, case studies, calculators
3. Digital PR targeting "best of Gurgaon" listicles (#1 AI visibility factor)
4. Local link building — chamber, medical directories, Medanta-area partnerships: 5–10 quality links/month
5. CWV optimisation against real CrUX field data

### Phase 4 — Authority · Months 7–12 (Mar–Aug 2027)

1. Dr. Nyra thought leadership: bylined articles, media commentary, video
2. YouTube: procedure walkthroughs and patient stories (video correlates with AI visibility)
3. Structured patient-outcome data published at scale — dated and consented
4. Quarterly full audits; expand only what the data proves

---

## 11. KPIs

| Metric | Baseline | Month 3 | Month 6 | Month 12 |
|---|---|---|---|---|
| Indexed pages | ~802 (unverified) | **~550** ↓ intentional | ~450 | ~480 |
| Non-brand organic clicks | *needs GSC* | +25% | +80% | +200% |
| Top-3 for the 3 money terms | *needs GSC* | 1 of 3 | 2 of 3 | 3 of 3 |
| Google reviews | *audit needed* | +15 | +35 | +70 |
| Review recency gap | unknown | ≤18 days | ≤18 days | ≤18 days |
| GBP direction requests | *needs GBP access* | +30% | +75% | +150% |
| Mobile INP | *needs CrUX* | <200ms | <200ms | <200ms |
| Consultations from organic | **untracked** | tracked + baselined | +60% | +150% |

**Note the deliberately falling page count.** Fewer, stronger pages is the goal. If indexed pages are still ~800 in month 3, the consolidation did not happen.

---

## 12. Risks

| Risk | Likelihood | Mitigation |
|---|---|---|
| Traffic dip after consolidating ~172 pages | High (short-term) | Batch the redirects; those pages produce near-zero qualified leads today; recovery typically 6–10 weeks |
| Core update penalty if doorway pages stay | **High without action** | Precisely why consolidation is Phase 2, not Phase 4 |
| YMYL scrutiny on medical content | Certain | Every clinical page reviewed and bylined by a named doctor with registration; `Physician` schema; cite sources |
| Medical advertising compliance (ASCI, India) | Medium | No guaranteed-outcome claims. The live "98% success rate" and "5,000+ procedures" claims need documentary backing or removal |
| Review gating temptation | Medium | Prohibited — Google policy and FTC. Ask everyone, gate no one |
| NAP drift across 6+ directories | High | Single canonical string, quarterly re-audit |

---

## 13. Do this in the next 7 days

1. **Choose the canonical address and hours.** Deploy identically to site, GBP, Practo and Justdial. *(§7.1)*
2. **Connect GSC + GA4.** You are flying blind until this is done. *(§9)*
3. **Fix the "FUE vs DHT" typo** on `/hair-transplant-in-gurgaon`. *(§1.4)*
4. **Set the GBP primary category to `Hair transplantation clinic`** and connect WhatsApp. *(§7.2)*
5. **Add titles, meta descriptions and canonicals** to the three design files. *(§8.1)*
6. **Export all 802 URLs** and tag each keep / merge / redirect. *(§5)*
7. **Brief `/hair-transplant-cost-in-gurgaon`** — the highest-value missing page on the site. *(§1.1 #3)*

---

### Sources & basis

- Live site inventory: `dencespot.com/sitemap.xml` (802 URLs), `robots.txt`, `/hair-transplant-in-gurgaon` — retrieved 21 Aug 2026
- Competitive set observed: AK Clinics, DHI India, AKS Clinic, QHT Clinic (all Gurgaon)
- Ranking-factor data: Whitespark 2026 Local Search Ranking Factors; Sterling Sky; BrightLocal LCRS 2026; Seer Interactive
- Google policy: Scaled Content Abuse (Mar 2024, enforcement escalated Jun 2025); site reputation abuse clarification (19 Nov 2024)
- **Not verified:** search volumes, keyword difficulty, current rankings, backlink profile, GBP insights, real traffic. All require the credentials in §9 or a paid data source.
