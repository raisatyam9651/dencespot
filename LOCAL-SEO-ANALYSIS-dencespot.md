# Local SEO Analysis — dencespot.com

**Run:** 25 Aug 2026 · **Market:** Gurugram (Gurgaon), Haryana, India
**Analysed:** the PHP build in this repo *and* the live deploy at `https://dencespot.com` (HTTP 200, responding)
**Companion to:** `LOCAL-SEO-STRATEGY-dencespot.md` (competitor evidence, 21 Aug) and `BUILD-PROGRESS.md`

---

## 0. Read this first — the live site is set to `noindex`

Every page on the live deploy emits:

```html
<meta name="robots" content="noindex, nofollow">
```

Verified on `/`, `/hair-transplant-in-gurgaon`, `/contact`, `/patient-reviews`,
`/hair-transplant-cost-in-gurgaon` and `/dr-nyra`. The live `robots.txt` still carries the
old comment block that says `SITE_STAGING = true`.

The repo has `SITE_STAGING = false` in `includes/config.php`, but **that change is
uncommitted and undeployed** (`git status` shows `config.php`, `robots.txt` and `header.php`
as modified, not committed). The deploy is otherwise current — the Elfsight widget and the
`MD (Dermatology)` credentials from the 24–25 Aug commits are both live.

So the site is finished, styled, schema-complete, and **completely invisible to Google.**

Nothing else in this document changes anything until that flag ships. Local pack position,
citations, reviews, schema — all of it is downstream of a page Google is being told not to
index. Treat this as a deploy incident, not an SEO task.

---

## 1. Local SEO Score

**Build quality: 51 / 100** · **Live effective visibility: 0** (gated by the noindex above)

| # | Dimension | Weight | Score | Verdict |
|---|---|---|---|---|
| 1 | GBP signals | 25 | **13** | Map embed and hours present; category unconfirmed, hours contradict GBP, no `sameAs` to the listing |
| 2 | Reviews & reputation | 20 | **8** | ~109 reviews vs competitors at 3,000+; nothing server-rendered; homepage and reviews page contradict each other |
| 3 | Local on-page SEO | 20 | **16** | Strongest dimension — city+service titles/H1s, NAP everywhere, real service pages, no doorway pattern |
| 4 | NAP consistency & citations | 15 | **6** | Internally flawless, externally fragmented across three sectors and three business names |
| 5 | Local schema markup | 10 | **7** | Correct `MedicalClinic` subtype and clean graph; missing `geo`, `image`, `sameAs`, `hasMap`, `priceRange` |
| 6 | Local link & authority | 10 | **1** | No chamber, press, best-of, sponsorship or partnership signal anywhere on the site |

The shape of this score is worth naming: **the on-page work is genuinely good and the
off-site position is genuinely weak.** That is the opposite of most clinic sites in this
market, and it is the better problem to have — but it means the remaining gains are almost
all owned by the clinic, not by this repo.

---

## 2. Business type

**Brick-and-mortar, single location.**

| Signal | Found |
|---|---|
| Physical street address in page HTML | ✅ footer on every page, plus `nap_block()` |
| Google Maps embed with a real pin | ✅ `contact.php` + `local_block()` — 10 pages, lazy-loaded |
| "Visit the clinic" / directions language | ✅ `local_block()`, `/contact#directions` |
| Structured address in schema | ✅ complete `PostalAddress` |
| Service-area language | Partial — `areaServed` names Gurugram, New Delhi, Delhi NCR; copy says patients travel from South Delhi |

Not a SAB and not a hybrid — the service-area language supports a single physical clinic
rather than replacing one. Full NAP and embedded-map checks apply; SAB exemptions do not.

---

## 3. Industry vertical

**Healthcare — dermatology / hair restoration.** Detected from `MedicalClinic` +
`medicalSpecialty: Dermatology`, `Physician` node, patient/consultation/appointment language,
a sitewide medical disclaimer and a `Medically reviewed by` byline.

### Industry-specific findings

**Correct, and rarer than it should be:**
- `MedicalClinic`, not generic `LocalBusiness` or `MedicalBusiness` — the right subtype.
- `Physician` node linked to the clinic by `worksFor` + `@id`, and used as `author` /
  `reviewedBy` on blog articles. That is the correct YMYL authorship pattern.
- Unevidenced claims (98% success rate, 5,000+ procedures, ISHRS membership) deliberately
  withheld. On a YMYL medical page under NMC advertising norms, that is the right call and
  the reason not to reverse it is legal as much as editorial.
- The review policy on `/patient-reviews` explicitly rejects review gating and commits to
  never confirming or denying that a reviewer is a patient. Both are correct — gating is a
  Google fake-engagement violation and FTC-actionable, and confirming patient status in a
  public reply is the standard medical-privacy trap.

**Gaps specific to healthcare:**
- `DOCTORS['dr-nyra']['reg_number']` is `null`. In India there is no board-certification
  equivalent, so the **state medical council registration number is the verifiable trust
  signal** — and it is the one thing that substitutes for the credentials being withheld.
  It belongs on `/dr-nyra` in visible text and as `identifier` in the `Physician` node.
- `same_as` is an empty array. No Practo profile, no LinkedIn, no council register link.
  For a doctor-led clinic, the physician entity is the strongest thing to corroborate.
- The `Physician` node carries no `medicalSpecialty`, so the doctor is not typed as a
  dermatologist in the graph even though the clinic is.

---

## 4. GBP optimisation checklist

| Check | Status | Detail |
|---|---|---|
| GBP embed detectable on page | ✅ | Real place FID `0x390ce5e4f6f45491:0x9dc43165216a74e6`, on 10 pages, `loading="lazy"` |
| Business hours visible on page | ⚠️ | Visible, but **contradict the GBP listing** — see below |
| Reviews widget referencing GBP | ⚠️ | Elfsight on homepage only, client-side |
| `sameAs` link to the GBP listing | ❌ | Absent from schema entirely |
| Directions link uses canonical place URL | ❌ | `MAPS_URL` is a *search query*, not the place |
| Primary category confirmed | ❓ | Cannot be read from the website — clinic must confirm |
| Secondary categories (target: 4) | ❓ | Not observable |
| GBP posts active | ❓ | Not observable |
| Photos on the listing | ❓ | Not observable — but see the unused photo below |
| Google Verified badge eligibility | ❓ | Not observable |

### The hours conflict is a live ranking cost

`config.php` publishes **Mon–Sat 10:00–20:00**; the Google listing says **Mon–Sun
09:00–21:00**. "Open at the time of search" is a top-five local pack factor. Under the
published version the clinic is invisible to every Sunday search, every search before 10am
and every search after 8pm — roughly a third of the searchable week, including the evening
window when working patients actually search.

The build chose the conservative version deliberately, which was right while the answer was
unknown. It is now the longest-standing unanswered question in the file and the cheapest one
to close. **One question to the clinic: which is true?** Then make the site and GBP agree.

### `MAPS_URL` points at a search, not at the listing

```php
const MAPS_URL = 'https://www.google.com/maps?q=Dencespot+Clinic+Sector+39+Gurgaon';
```

Every "Directions on Google Maps" and "Read reviews on Google" button on the site runs a
*search* and hopes the right result comes first. The place ID is already in the map embed,
so the canonical link is known:

```php
const MAPS_URL     = 'https://maps.google.com/?cid=11368265669812057318';
const MAPS_REVIEWS = 'https://search.google.com/local/writereview?placeid=ChIJkVT09uTlDDkR5nRqIWUxxJ0';
```

The CID is `0x9dc43165216a74e6` converted to decimal. This matters twice: it removes the
chance of landing a patient on a competitor, and `MAPS_REVIEWS` is the direct review link the
P1.1 review engine needs for the WhatsApp follow-up and the reception QR code.

> Verify both URLs resolve to the clinic before shipping — the CID is derived from the embed
> in `components.php`, not read from GBP directly.

### A clinic exterior photo exists and is not being used

`assets/img/clinic-front.jpg` is in the working tree (untracked, 894 KB) and referenced by
**nothing**. Meanwhile `contact.php` and `local_block()` still render
`slot('Clinic exterior with signage', …)` placeholders. Listings with photos draw
substantially more direction requests, and a storefront photo is what lets a patient
recognise the building from the road. Compress it (it is ~10× the sensible size for a
web JPEG), convert to WebP alongside the existing `dr-nayra.webp`, drop it into both
placeholders with descriptive alt text, and upload the same shot to GBP.

---

## 5. Review health snapshot

| Signal | Value | Confidence |
|---|---|---|
| Google rating | 4.8–4.9★ | Low — two sources disagree, neither re-verified today |
| Review count | ~109 | Low — carried from the 21 Aug directory audit |
| Nearest competitor volume | QHT 3,184+ · Skinfinity 3,200+ | From competitor pages |
| Reviews rendered in page HTML | **None** | Verified |
| `aggregateRating` in schema | **None** | Verified — correctly gated |
| Owner response rate | Unknown | Policy stated on site; behaviour not observable |
| Third-party platforms | Practo, Justdial, magicpin | Listings exist; review volume unverified |

Rating is competitive. **Volume and velocity are the whole problem** — 109 against 3,000+ is
not a gap that content closes. The 18-day rule applies: rankings drop off if three weeks pass
with no new review, so cadence matters more than any single push.

### Two problems introduced by the Elfsight widget

The homepage now loads a live Google Reviews feed:

```html
<script src="https://elfsightcdn.com/platform.js" async></script>
<div class="elfsight-app-d4976df7-…" data-elfsight-app-lazy></div>
```

**First, it contradicts `/patient-reviews`.** That page still renders "No reviews are shown
here yet" and argues at length that showing a rating you cannot evidence is dishonest — while
the homepage displays a live Google feed. A patient who visits both sees a clinic hiding its
reviews on the reviews page. The page's own credibility argument is what breaks. Put the
widget on `/patient-reviews` too, above the review-policy section; the policy content is
excellent and deserves the traffic.

**Second, none of it is server-rendered.** The reviews arrive from a third-party CDN into a
client-side container, so the text is not in the HTML, is not reliably attributed to the page,
and is not there for the AI answer engines `robots.txt` explicitly welcomes. It also loads a
third-party script on the highest-value page on the site.

**On activating `aggregateRating`:** the note in `patient-reviews.php` plans to switch it on
once reviews are displayed. Worth correcting one assumption first — Google does not show
review rich results for **self-serving** reviews, meaning an organisation's own rating marked
up on its own site. Activating it will not produce stars in the SERP. It is still worth doing
for AI and entity parsing, and the visibility rule still applies, so the gate the file already
enforces stays correct. Just do not expect stars, and do not let anyone justify inflating the
number to chase them.

---

## 6. NAP consistency audit

### Internal — page vs schema: clean

| Source | Name | Address | Phone |
|---|---|---|---|
| Footer (every page) | DenceSpot Clinic | 1123, Sector 39 Road, Jharsa, C Block, Sector 39, Gurugram, Haryana 122003 | +91 81783 30800 |
| `nap_block()` / `/contact` | DenceSpot Clinic | identical | identical |
| JSON-LD `MedicalClinic` | DenceSpot Clinic | identical | `+91-81783-30800` |

**Zero discrepancies.** Everything derives from constants in `config.php`, so drift is
structurally impossible rather than merely absent. The phone formatting difference between
display and schema is correct — schema wants the dashed international form.

This is the one dimension where the build outperforms every competitor in the set.

### External — carried forward from the 21 Aug audit, not re-verified today

| Platform | Name | Address |
|---|---|---|
| Site + Google | DenceSpot Clinic | Sector 39 |
| Google (long form) | Dencespot : Hair Transplant and Skin Care Clinic | Sector 39 Road, Jharsa |
| **Practo** | Dencespot (Advanced & Best Hair Transplant Clinic, Skin Specialist, Dermatologist in Gurgaon India) | **Sector 38** |
| **magicpin** | Dencespot Clinic - Best Dermatologist & Hair Transplant in Gurgaon | **Sector 67A** |
| **Justdial** | **D S Dencespot** | Sector 39, Medanta |

Three sectors and three business names across the platforms Google uses to corroborate a
listing. Two of the names are keyword-stuffed, which is a GBP guidelines violation on its own
and carries suspension risk independent of any ranking effect.

Still the highest-severity *off-site* finding, still unfixed, still cheap to fix, and still
not a code task. Re-verify each listing before editing — four months have passed.

---

## 7. Citation presence

| Tier 1 | Status | Note |
|---|---|---|
| Google Business Profile | ✅ exists | Long-form keyword-stuffed name needs correcting |
| Practo | ⚠️ exists, wrong sector | Dominates "clinics near me" in India |
| Justdial | ⚠️ exists, wrong name | Listed as "D S Dencespot" |
| magicpin | ⚠️ exists, wrong sector | Sector 67A |
| **Bing Places** | ❌ unclaimed | **Feeds ChatGPT, Copilot and Alexa** |
| **Apple Business Connect** | ❌ unclaimed | Feeds Siri and Apple Maps |
| Facebook business page | ❓ | No link from the site |

No `sameAs` array anywhere in the schema means the site does not claim any of these listings
as its own. That is a missed corroboration signal for Google and a missed entity-resolution
signal for AI answer engines — which matters here specifically, because `robots.txt` goes out
of its way to welcome GPTBot, PerplexityBot, ClaudeBot and OAI-SearchBot, and ChatGPT does not
read GBP at all. It reads Bing, Practo-type directories and Reddit. An unclaimed Bing Places
listing is the single biggest AI-visibility gap on this site.

India-specific directories worth claiming beyond the above: Lybrate, Sehat, Credihealth, and
the IADVL member listing if Dr. Nyra is a member. For Justdial, correct the existing entry
rather than adding a second one.

---

## 8. Local schema status

**Present and well-built.** `includes/schema.php` is a proper `@graph` with stable `@id`
references — `MedicalClinic` at `/#clinic`, `Physician` at `/dr-nyra#physician`, procedures
and therapies linked back by `performer` and `location`. Correct subtype, no placeholder
content, valid JSON-LD confirmed on the live page.

### Missing properties

| Property | Impact | Availability |
|---|---|---|
| `geo` | **High** — recommended for LocalBusiness | **Already known — see below** |
| `sameAs` | High — citation + AI entity resolution | Needs the listing URLs |
| `image` | Medium — entity thumbnail, AI surfaces | `clinic-front.jpg` exists, unused |
| `hasMap` | Medium | Derivable from the CID |
| `priceRange` | Medium — filters and comparison surfaces | Blocked on the same decision as the cost table |
| `logo` | Low | Only `favicon.svg` exists |
| `medicalSpecialty` on `Physician` | Medium | Known |
| `identifier` (council registration) | **High for YMYL trust** | Clinic must supply |
| `isAcceptingNewPatients` | Low | Known |

### `GEO_LAT` / `GEO_LNG` are sitting in your own map embed

`config.php` says the coordinates are "REQUIRED before launch" and leaves them `null` rather
than guess — correct instinct. But the guess is unnecessary, because the Google Maps embed in
`components.php` and `contact.php` carries the pin for this exact place:

```
!2d77.0438613!3d28.439680699999997   →   2d = longitude, 3d = latitude
```

```php
const GEO_LAT = 28.4396807;   // 7 dp — exceeds the 5+ dp minimum
const GEO_LNG = 77.0438613;
```

`schema_clinic()` already has the conditional, so filling these two constants activates `geo`
sitewide with no other change. Cross-check against the GBP pin before shipping — the embed
centre should be the place location, but the listing is the authority.

### Ready-to-use patch

```php
// includes/config.php
const GEO_LAT = 28.4396807;
const GEO_LNG = 77.0438613;

const MAPS_URL     = 'https://maps.google.com/?cid=11368265669812057318';
const MAPS_REVIEWS = 'https://search.google.com/local/writereview?placeid=ChIJkVT09uTlDDkR5nRqIWUxxJ0';

/** Claimed listings. Every URL must resolve to THIS clinic — verify each. */
const CLINIC_SAME_AS = [
    'https://maps.google.com/?cid=11368265669812057318',
    // 'https://www.practo.com/…',      ← after the Sector 38 correction
    // 'https://www.justdial.com/…',    ← after the "D S Dencespot" correction
    // 'https://www.facebook.com/…',
];
```

```php
// includes/schema.php — inside schema_clinic(), before the return
$node['hasMap'] = MAPS_URL;
$node['image']  = abs_url('/assets/img/clinic-front.jpg');

if (CLINIC_SAME_AS !== []) {
    $node['sameAs'] = CLINIC_SAME_AS;
}
```

```php
// includes/schema.php — inside schema_physician(), before the return
$node['medicalSpecialty'] = 'Dermatology';

if (!empty($doc['reg_number'])) {
    $node['identifier'] = [
        '@type' => 'PropertyValue',
        'name'  => 'Medical Council Registration',
        'value' => $doc['reg_number'],
    ];
}
```

One type correction: `AREA_SERVED` maps all three entries to `@type: City`, but "Delhi NCR"
is a metropolitan region, not a city. Type it as `AdministrativeArea` — minor, but this graph
is otherwise precise enough that the inconsistency stands out.

---

## 9. Location page quality

**Single location — no location-page architecture, and that is correct.**

The doorway-page risk that dominated the 21 Aug strategy is resolved in this build. The live
sitemap now returns **20 URLs**, down from the ~802 (with ~172 near-identical locality pages)
on the old site. The swap test does not apply, because there are no swappable pages.

What replaces them is the right pattern: locality names in prose on relevant pages. But it
is applied on exactly one page.

`hair-fall-treatment-in-gurgaon.php` names Sector 39, Sushant Lok, DLF Phases 1–5, Golf
Course Road, Sohna Road, MG Road, Cyber City, Sector 56, South City and Palam Vihar. Across
the whole rest of the site each of those appears **once or not at all**, while "Sector 39"
appears 24 times.

The money pages — `/hair-transplant-in-gurgaon`, `/fue-…`, `/dhi-…`, `/beard-transplant-gurgaon`,
`/hair-prp-treatment-in-gurgaon`, `/hair-transplant-cost-in-gurgaon` — carry no locality prose
at all. Proximity is the largest single component of local ranking variance, and these are the
pages that need to surface for a patient searching from Golf Course Road. Extend the pattern
already built on the hair-fall page to the other six, written as genuine "patients travel to
us from" copy rather than a keyword list.

### Other on-page notes

- **Titles and H1s are strong.** Every commercial page carries city + service in both, without
  reading like it was written for a crawler.
- **Click-to-call is everywhere** — header icon button, footer, `nap_block()`, and a sticky
  mobile CTA bar with Call and WhatsApp. Correct `tel:` scheme, conversion tracking on each.
  This is well above the market.
- **No OG images sitewide.** Not one page sets `og_image`, so every page falls back to
  `twitter:card summary` with no image. Every WhatsApp share of this clinic — the dominant
  sharing channel for Indian patients, and the site's own primary CTA — renders as a bare
  text link.
- **`/hair-transplant-cost-in-gurgaon` still ships `[CONFIRM] ₹__–__ per graft`** in all four
  table rows. Cost queries dominate this vertical, every competitor publishes numbers, and the
  page is otherwise built and waiting. Still the largest commercial gap, still one decision.
- **`.htaccess` has HTTPS and www canonicalisation commented out** (lines 24–28). The site
  currently forces neither. Worse, `SITE_ORIGIN` is `https://dencespot.com` (non-www) while
  the commented rule redirects to `www.dencespot.com` — if someone uncomments it without
  reading, every canonical on the site points at a redirecting host. Pick non-www to match
  `SITE_ORIGIN`, uncomment the HTTPS rule, and make sure every citation uses the same form.

---

## 10. Top 10 prioritised actions

### Critical

**1. Deploy `SITE_STAGING = false`.** *Owner: dev. Minutes.*
The change is already made locally. Commit `config.php`, `robots.txt` and `header.php`, deploy,
then re-check `curl -s https://dencespot.com/ | grep robots` and confirm `index, follow`.
Everything below is inert until this ships.

**2. Verify dencespot.com in Search Console and submit the sitemap.** *Owner: clinic + dev.*
Immediately after #1. Nothing in this document can be validated without it, and you will want
the indexation curve from day one rather than reconstructed later.

**3. Resolve the hours conflict.** *Owner: clinic. One question.*
Mon–Sat 10–20 or Mon–Sun 09–21. Whichever is true, make `config.php` and GBP identical. The
current mismatch removes the clinic from a third of the searchable week.

### High

**4. Collapse the NAP to one canonical version across all platforms.** *Owner: clinic.*
`DenceSpot Clinic`, no keywords, one address. Correct Practo (Sector 38), magicpin (Sector 67A)
and Justdial ("D S Dencespot") individually. Re-verify each listing first — the audit behind
this is four months old.

**5. Claim Bing Places and Apple Business Connect.** *Owner: clinic. Free, one-time.*
Bing feeds ChatGPT and Copilot; Apple feeds Siri and Apple Maps. Given how deliberately this
site courts AI crawlers, an unclaimed Bing listing is the largest inconsistency in the strategy.

**6. Ship the schema patch in §8.** *Owner: dev. Under an hour.*
`geo`, `hasMap`, `image`, `sameAs`, `medicalSpecialty` on the physician, and the
`AdministrativeArea` type fix. The coordinates are already in your own map embed.

**7. Start the review engine, and hold an 18-day cadence.** *Owner: clinic.*
109 → 300+ over twelve months. Ask at the ten-day follow-up, WhatsApp the direct review link
(`MAPS_REVIEWS` above), QR at reception. No pre-screening, no incentives, reply to everything
without confirming patient status. Velocity beats volume — three weeks of silence costs
rankings.

### Medium

**8. Publish real per-graft rates and add `priceRange`.** *Owner: clinic decision, dev ships.*
Four `[CONFIRM]` placeholders are the only thing between this and the highest-commercial-intent
page on the site.

**9. Fix the review contradiction and the unused photo.** *Owner: dev.*
Put the Elfsight widget on `/patient-reviews` as well as the homepage. Compress
`clinic-front.jpg` (894 KB → target under 150 KB as WebP), use it in both exterior slots and
as schema `image`, and upload it to GBP.

**10. Extend locality prose to the six money pages, and add OG images.** *Owner: dev.*
Copy the pattern from `hair-fall-treatment-in-gurgaon.php`. Separately, generate a 1200×630 OG
image per commercial page — every WhatsApp share currently renders as bare text.

### Lower priority, genuinely valuable

- Add Dr. Nyra's council registration number to `/dr-nyra` and as schema `identifier` — the
  verifiable substitute for the credentials being withheld.
- Populate `same_as` for the doctor (Practo profile, LinkedIn, council register).
- Uncomment the HTTPS redirect in `.htaccess` and settle non-www to match `SITE_ORIGIN`.
- Pursue "best of Gurgaon" list placements — the strongest single AI-visibility citation
  signal, and the dimension currently scoring 1/10.

---

## 11. Limitations — what this analysis could not assess

| Not assessed | Why | What would fill the gap |
|---|---|---|
| Geo-grid local pack positions | No rank-tracking access; the search tooling here indexes US results | Local Falcon, BrightLocal, or `/seo maps` with DataForSEO |
| GBP internals — categories, posts, photo count, Q&A, Insights | Not observable from outside the listing | Clinic logs into GBP directly |
| Live local pack position for any query | Same as above | DataForSEO `serp_organic_live_advanced` |
| Current Practo / Justdial / magicpin listing state | Carried from the 21 Aug audit, **not re-verified in this run** | Open each listing and check |
| True review count and rating | Two conflicting directory figures, neither current | Read it off GBP |
| Backlink profile, Domain Authority, competitor links | No backlink API connected | Moz, Ahrefs, or the `seo-backlinks` skill |
| Search Console impressions, positions, indexation | No GSC property exists for this domain | Action #2 above |
| Core Web Vitals field data, including the Elfsight cost | No CrUX data — the site is `noindex` and likely has insufficient traffic | Re-run after indexing; PageSpeed lab data is available now |
| Competitor GBP internals | Same constraint as our own | Paid geo-grid tooling |

**One caveat on the whole document:** a `noindex` site has no local search performance to
measure, so every scored dimension above is an assessment of *build quality and readiness*,
not of observed ranking. Re-run this after the site has been indexed for 4–6 weeks with GSC
connected — the scores will change, and for the first time they will mean something measured.

---

## Related

- `LOCAL-SEO-STRATEGY-dencespot.md` — competitor set, market evidence, P0/P1/P2 plan (21 Aug)
- `SEO-STRATEGY-dencespot.md` — 47-page architecture
- `BUILD-PROGRESS.md` — build tracker and outstanding clinic sign-offs
- For AI search visibility specifically, run `/seo geo https://dencespot.com` — but only after
  action #1, since an AI crawler reading a `noindex, nofollow` page finds nothing either.
