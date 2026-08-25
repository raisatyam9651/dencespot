# Maps Intelligence — DenceSpot Clinic (dencespot.com)

**Run:** 25 Aug 2026 · **Capability tier: 0 (free APIs only)**
**Companion to:** `LOCAL-SEO-STRATEGY-dencespot.md` (off-site local strategy) · `SEO-STRATEGY-dencespot.md` (architecture) · `BUILD-PROGRESS.md`
**Scope:** the business as it appears on maps *platforms*. On-page local signals are `seo-local`'s job — run `/seo local https://dencespot.com` for those.

---

## Maps Health Score: 41 / 100

| Dimension | Weight | Score | Verdict |
|---|---:|---:|---|
| NAP consistency & duplicate control | 25 | **4** | Critical. Eight name variants, three sectors, confirmed duplicate listings on two platforms. |
| Cross-platform listing coverage | 15 | **6** | Google present and verified. OSM confirmed absent. Bing/Apple unverifiable at Tier 0. |
| Review signals | 20 | **9** | Rating excellent (4.9★). Volume ~3% of category leaders. Velocity and response rate unmeasurable at Tier 0. |
| Website ↔ Maps integration | 15 | **8** | Embed present and correctly place-bound, but the outbound Maps link is a text search, not the listing. |
| Local schema completeness | 15 | **9** | `MedicalClinic` chosen correctly; `geo`, `hasMap`, `image`, `sameAs` all absent. |
| Competitive position in radius | 10 | **5** | Strong physical position (360 m from Medanta). Category is unmapped in OSM. |
| **Total** | **100** | **41** | |

**Confidence: partial.** Seventeen of the 25 GBP fields and four of the six review metrics cannot be observed without DataForSEO. Where absence is *confirmed* it is scored zero; where it is merely *unknown* it is excluded from the denominator and flagged below. The score will move once Tier 1 data is available — most likely downward on GBP completeness, since unverifiable fields are usually unset ones.

---

## 1. Capability tier

**Tier 0 detected.** No `business_data_*` or `serp_*` MCP tools are present in this session.

| Available now | Requires DataForSEO (Tier 1) |
|---|---|
| Nominatim geocoding | Geo-grid rank scan + SoLV |
| Overpass radius/competitor discovery | Live GBP field audit (25 fields) |
| Live-site and directory crawling | Review velocity, sentiment, distribution |
| Google Place ID / CID extraction | Owner response rate |
| Schema generation | GBP posts, Q&A, photo counts |
| Cross-platform NAP inventory | Tripadvisor / Trustpilot reviews |

To unlock the rest: install the DataForSEO extension, then `/seo maps grid "hair transplant in gurgaon" "Sector 39, Gurugram"`.

---

## 2. The most valuable thing this audit found

The site's own Maps embed contains the clinic's **Google Place feature ID** — which resolves two open `⚠ REQUIRED` blockers in `includes/config.php` without contacting the clinic.

Extracted from the embed in [includes/components.php:311](includes/components.php#L311) and [contact.php:64](contact.php#L64):

```
Feature ID (FTID) : 0x390ce5e4f6f45491:0x9dc43165216a74e6
CID (hex)         : 0x9dc43165216a74e6
CID (decimal)     : 11368265669812057318
Canonical listing : https://maps.google.com/?cid=11368265669812057318
Pin coordinates   : 28.4396807, 77.0438613
```

**Cross-checks that make the pin trustworthy:**

| Check | Result |
|---|---|
| Distance to Medanta – The Medicity (28.4389467, 77.0402727, via Nominatim) | **360 m** — consistent with `NAP_LANDMARK` "opposite Medanta" |
| Distance to Sector 39 centroid (28.4423675, 77.0504724) | **712 m** — inside Sector 39 |
| Sector 67A (magicpin's claim) | ~9 km away — **decisively refuted** |
| Sector 38 (Practo's claim) | Nominatim itself files Medanta under *Sector 38, 122001*. The 38/39 boundary runs through this block, which is the likely origin of the confusion — but the pin is Sector 39. |

That last row matters: the Practo error is *explicable*, not random. Medanta's own OSM record says Sector 38. Anyone keying the listing off the landmark lands on 38. Worth knowing when you file the correction, because it will recur.

### Ready-to-apply patch

```php
// includes/config.php — replaces the two ⚠ REQUIRED nulls.
// Source: Google Maps place embed for FTID 0x390ce5e4f6f45491:0x9dc43165216a74e6.
// Cross-checked: 360 m from Medanta, 712 m from Sector 39 centroid.
const GEO_LAT = 28.4396807;
const GEO_LNG = 77.0438613;

// Replace the text-search Maps URL with the canonical listing.
// The current value re-runs a search and can resolve to a duplicate or a competitor.
const MAPS_URL = 'https://maps.google.com/?cid=11368265669812057318';
```

Once `GEO_LAT`/`GEO_LNG` are non-null, [includes/schema.php:41-47](includes/schema.php#L41-L47) emits `geo` automatically — no other code change needed.

> **Caveat, stated plainly:** an embed centre is the place pin to within a few metres, not a surveyed coordinate. It is materially better than the current `null`, and worth confirming against the GBP dashboard when someone next has it open.

---

## 3. Cross-platform NAP — worse than previously documented

`LOCAL-SEO-STRATEGY-dencespot.md` §3 recorded five conflicting versions. This audit finds **eight name variants across nine listings, including confirmed duplicates on two platforms.**

### Name variants

| # | Name as published | Platform |
|---|---|---|
| 1 | `DenceSpot Clinic` | Website + JSON-LD (canonical) |
| 2 | `Dencespot : Hair Transplant and Skin Care Clinic` | Google long form, Facebook page B |
| 3 | `Dencespot (Advanced & Best Hair Transplant Clinic ,Skin Specialist,Dermatologist in Gurgaon India)` | Practo |
| 4 | `Dencespot Clinic - Best Dermatologist & Hair Transplant in Gurgaon` | magicpin |
| 5 | `D S Dencespot` | Justdial listing A |
| 6 | `Dence Spot` | Justdial listing B, Facebook page A |
| 7 | `Dencespot (Best Hair Transplant And Skin Clinic)` | idbf.in |
| 8 | `Nyra Clinic` | Linktree (`linktr.ee/nyraclinic`) |

Variants 3, 4 and 7 are keyword-stuffed business names — a Google Business Profile guidelines violation in their own right, and independently a suspension risk. Variant 8 is a *different brand* pointing at the same practice.

### Confirmed duplicate listings — new finding

**Justdial holds two separate records:**

| | Listing A | Listing B |
|---|---|---|
| Name | D S Dencespot | Dence Spot |
| Filed under | Gurgaon | **Delhi** |
| Category | Skin Care Clinics | **Tattoo Removal Services** |
| Address | Sector 39, Medanta | Near Allnat Pharmacy, Medanta Medicity Hospital, Sector 39 |
| Record ID | `...231120182822-P2S8` | `...240111164216-Q1B8` |

**Facebook holds at least two, possibly three:**

| Page | Identifier |
|---|---|
| `facebook.com/DenceSpot/` — "Dence Spot", 309 likes | vanity URL |
| `facebook.com/p/Dencespot-Hair-Transplant-and-Skin-Care-Clinic-.../` | `100094194790844` |
| Mirrored on beautynailhairsalons.com under a third ID | `100428553113485` |

Duplicates are worse than inconsistencies. An inconsistency weakens corroboration; a duplicate **splits** it — reviews, photos and citation weight divide across records, and Google's own dedupe may pick the wrong one as authoritative. The Justdial pair is additionally miscategorised (*tattoo removal*) and misfiled (*Delhi*), so it feeds Google a contradictory city **and** a contradictory category for the same phone number.

### Address variants

| Address | Source | Status |
|---|---|---|
| 1123, Sector 39 Road, Jharsa, C Block, Sector 39, Gurugram 122003 | Website, JSON-LD | Canonical (deployed) |
| Front of Medanta Hospital, 1123, Sector 39 Rd, Jharsa, **Janak Puri** C Block, Sector 39 | Google long form, Facebook | Pin-correct |
| Sector 38 | Practo | Wrong (explicable — see §2) |
| Sector 67A | magicpin | Wrong by ~9 km |
| Near Allnat Pharmacy, Medanta Medicity, filed under Delhi | Justdial B | Wrong city |

⚠ **The deployed canonical is not byte-identical to the Google listing.** The site drops `Janak Puri` from the locality string. Dropping the `Front of Medanta Hospital` prefix is correct — a landmark does not belong in `streetAddress`. Dropping `Janak Puri` is a judgement call that should be made deliberately: either add it back to `NAP_STREET`, or remove it from GBP. Right now the two differ, and §P0.1 of the strategy asked for byte-identical.

### Hours conflict — confirmed live

| Source | Hours |
|---|---|
| Website + `openingHoursSpecification` | Mon–Sat 10:00–20:00, Sunday by appointment |
| Google listing / Facebook mirrors | **Mon–Sun 09:00–21:00** |

Four hours per day and one full day apart. "Open now" is a top-tier local pack filter, so this suppresses the listing for every early-morning, evening and Sunday search — which, for an elective cosmetic procedure that working patients research after office hours, is a meaningful share of the demand curve. The config comment calls this out as awaiting sign-off; it is still unresolved and it is costing visibility every day it stays that way.

---

## 4. Cross-platform presence

| Platform | Status | Evidence |
|---|---|---|
| **Google Business Profile** | ✅ Live, verified pin, CID resolved | FTID extracted, CID redirect resolves |
| **OpenStreetMap** | ❌ **Confirmed absent** | Nominatim returns `[]` for "Dencespot"; zero results in a 5 km Overpass sweep |
| **Bing Places** | ⚠️ Unverified | Bing Maps is a JS app; not resolvable by fetch. Manual check required. |
| **Apple Business Connect** | ⚠️ Unverified | No public API by design. Manual check required. |
| **Practo** | ✅ Live, wrong sector, keyword-stuffed name | Bot-challenged on fetch; confirmed via search index |
| **Justdial** | ⚠️ **Two records** | Both URLs indexed |
| **magicpin** | ✅ Live, wrong sector (67A) | Confirmed via search index |
| **Facebook** | ⚠️ **Two–three records** | Multiple page IDs |
| **Instagram** | ✅ `@dencespot` | Not in `sameAs` |
| **idbf.in** | ✅ Live, name variant 7 | Confirmed via search index |

**The OSM gap is the cheap win.** OpenStreetMap feeds Apple Maps' base layer, parts of Bing, and a wide tail of apps and AI grounding sets. The clinic has no OSM node at all — and neither does most of this vertical in Gurugram (see §6), so the record can be created accurately, first, by the business itself. It is free, takes about ten minutes, and there is no competitor already sitting on it.

---

## 5. Review intelligence (Tier 0 — partial)

| Metric | Value | Source |
|---|---|---|
| Google rating | **4.9★** | Corroborated across three independent directory mirrors |
| Review count | **~109** | Same |
| Category leader volume | 3,184 (QHT) · 3,200 (Skinfinity) | Competitor sites, per strategy doc |
| Velocity (reviews/month) | **Unknown** — Tier 1 | — |
| 18-day gap check | **Unknown** — Tier 1 | — |
| Owner response rate | **Unknown** — Tier 1 | — |
| Rating distribution | **Unknown** — Tier 1 | — |

**Rating is not the problem; volume is.** At ~109 the clinic sits at roughly **3.4%** of the leaders' review volume in the same city and category. Rating parity (4.9 vs their 4.8–4.9) means there is no quality gap to close — only a collection gap.

**The site currently displays no rating anywhere**, which is the correct call while the number is unconfirmed: [patient-reviews.php:22-28](patient-reviews.php#L22-L28) holds `$reviews = []` and gates the `aggregateRating` node behind real, visible reviews. Three independent sources now agree on 4.9★/109. The earlier hard-coded 4.8 is gone. Do not add `aggregateRating` to schema until the reviews are actually rendered on the page — self-serving review markup is ignored by Google and is a structured-data violation when the reviewed content is not visible.

**One infrastructure gap worth fixing today:** there is no direct review link. With the CID now known, the one-click review URL is derivable and belongs on the WhatsApp follow-up and the reception QR proposed in strategy §P1.1:

```
https://search.google.com/local/writereview?placeid=<PLACE_ID>
```

⚠ That endpoint needs the `ChIJ…` Place ID, not the CID. The CID resolves the listing; the Place ID must be copied once from the GBP dashboard ("Get more reviews" → short link) or from a Places API lookup. Until then, `https://maps.google.com/?cid=11368265669812057318` is a reliable fallback that lands the patient on the correct listing with the review button one tap away — which is already better than the current text-search URL.

---

## 6. Competitor radius mapping (Overpass, 5 km)

Centred on the extracted pin (28.4396807, 77.0438613):

| Metric | Value |
|---|---|
| Healthcare POIs within 5 km | 159 (147 named) |
| Density | 1.87 named healthcare POIs / km² |
| With a `website` tag | 39 / 147 (27%) |
| **Hair / skin / derma / cosmetic matches** | **3** |

Nearest mapped neighbours:

| Distance | Name | Type |
|---:|---|---|
| 421 m | Dr Akram Jawed's The Upper Limb Clinic | clinic |
| 737 m | Sukhmani Hospital Pvt. Ltd | hospital |
| 945 m | Dispencery, Jharsa | clinic |
| 995 m | Samvit Health Care | hospital |
| 1,354 m | Bansal Medicare and Maternity Centre | clinic |

Category matches:

| Distance | Name | Speciality |
|---:|---|---|
| 2,235 m | Badal Clinic | paediatrics; dermatology |
| 2,483 m | CK Birla Hospital Gurgaon | 21 specialities incl. dermatology, plastic surgery |
| 3,067 m | Skin Clinic | — |

> **Read this correctly.** Three matches does **not** mean three competitors. `LOCAL-SEO-STRATEGY-dencespot.md` §1 identifies seventeen real ones — AK Clinics, QHT, Eugenix, DHI, Skinfinity, Uncover and the rest. What this actually measures is **OSM coverage of private aesthetic clinics in Gurugram, which is close to zero.** Only 27% of mapped healthcare POIs even carry a website tag.
>
> The finding is therefore an opportunity, not a competitive read: **the entire category is unmapped, and DenceSpot can be the first accurate record in it.** For the real competitive landscape, use the strategy doc; for live rank positions, Tier 1 geo-grid is the only instrument that answers it.

---

## 7. Geo-grid rank tracking

**Unavailable at Tier 0.** Grid scanning requires the DataForSEO Maps SERP endpoint with `location_coordinate` — there is no free substitute, and estimating positions without it would be fabrication.

Everything needed to run it the moment DataForSEO is installed is now known:

```
Centre     : 28.4396807, 77.0438613
Grid       : 7x7 (49 points), 5 km radius
Keywords   : "hair transplant in gurgaon", "hair transplant near me",
             "dermatologist in gurgaon", "prp hair treatment gurgaon"
SoLV       : (points ranking top-3 / 49) x 100
```

This is the single highest-value missing measurement. Review volume and NAP fragmentation both predict weak local-pack coverage outside a tight radius, but *predict* is the operative word — a grid scan would replace the whole of §5 and §6's guesswork with a map.

---

## 8. Schema recommendation

The existing markup is well-built and the two architectural calls are right: `MedicalClinic` over generic `LocalBusiness`, and no rating markup without visible reviews ([includes/schema.php:1-12](includes/schema.php#L1-L12)).

| Property | Status | Action |
|---|---|---|
| `@type: MedicalClinic` | ✅ | Correct subtype |
| `address` (full PostalAddress) | ✅ | Reconcile `Janak Puri` with GBP |
| `openingHoursSpecification` | ⚠️ | Conflicts with GBP — resolve first |
| `areaServed` | ✅ | Gurugram, New Delhi, Delhi NCR |
| `telephone`, `email`, `url` | ✅ | |
| `geo` | ❌ | **Now resolvable** — §2 |
| `hasMap` | ❌ | **Now resolvable** — CID URL |
| `image` | ❌ | `assets/img/clinic-front.jpg` is in the working tree |
| `sameAs` | ❌ | Facebook + Instagram exist and are unlinked |
| `priceRange` | ❌ | Blocked on strategy §P0.2 pricing decision |
| `aggregateRating` | ❌ | **Correctly withheld** — keep it that way |

Additions for `schema_clinic()` in [includes/schema.php:16-56](includes/schema.php#L16-L56), once the duplicate-page cleanup in §9 picks the surviving profiles:

```php
'geo' => [                                    // emitted automatically once
    '@type'     => 'GeoCoordinates',          // GEO_LAT / GEO_LNG are set
    'latitude'  => 28.4396807,
    'longitude' => 77.0438613,
],
'hasMap' => 'https://maps.google.com/?cid=11368265669812057318',
'image'  => 'https://dencespot.com/assets/img/clinic-front.jpg',
'sameAs' => [
    'https://www.instagram.com/dencespot/',
    // ⚠ Add the SURVIVING Facebook page only — see §9 C1.
    // Linking a duplicate teaches Google the wrong entity is canonical.
],
```

`sameAs` is the lever that ties the website, the GBP listing and the social profiles into one entity. It is also the one that does damage if pointed at a duplicate — so it waits on the Facebook consolidation, not the other way round.

---

## 9. Prioritised actions

### Critical

**C1 — Merge the duplicate Justdial and Facebook records.**
Two Justdial entries (one filed under *Delhi*, categorised *Tattoo Removal*) and two-to-three Facebook pages for one phone number. Duplicates split review and citation weight and feed Google contradictory city and category signals. Claim both Justdial records and request a merge; keep the Gurgaon/Skin Care one. On Facebook, keep the page with real history and merge the rest (Meta supports merging pages with matching name and address). *Owner: clinic. Not a code task.*

**C2 — Resolve the hours conflict.**
Mon–Sat 10:00–20:00 (site) vs Mon–Sun 09:00–21:00 (Google). Decide which is true, then make both match. Every hour of disagreement is a window where the listing is filtered out of "open now" results. *Owner: clinic.*

**C3 — Collapse eight name variants to one.**
`DenceSpot Clinic`, no keywords, everywhere. Variants 3, 4 and 7 breach GBP naming guidelines and carry suspension risk. Do not skip `linktr.ee/nyraclinic` — a second brand name for the same practice actively confuses entity resolution.

### High

**H1 — Apply the `GEO_LAT` / `GEO_LNG` / `MAPS_URL` patch.** §2. A code change, no clinic input needed, and it closes two `⚠ REQUIRED` blockers plus a live schema gap.

**H2 — Correct Practo (Sector 38) and magicpin (Sector 67A).** Both are wrong; magicpin by ~9 km. Expect Practo to recur — see the Medanta/Sector 38 note in §2.

**H3 — Create the OpenStreetMap node.** Free, ten minutes, feeds Apple/Bing/AI grounding, and the category is empty in Gurugram. First-mover with nothing to displace.

**H4 — Claim Bing Places and Apple Business Connect.** Strategy §P1.4, still open. Bing feeds Copilot and ChatGPT search; Apple feeds Siri and Apple Maps. Neither could be verified here — confirm status before assuming they are unclaimed.

### Medium

**M1 — Ship the direct review link.** Copy the `ChIJ…` Place ID from GBP once; until then use the CID URL. Unblocks the §P1.1 review engine — the thing that closes a 3,000-review gap.

**M2 — Add `hasMap`, `image`, `sameAs` to `schema_clinic()`.** §8. Gate `sameAs` on C1.

**M3 — Reconcile `Janak Puri` in the address string.** Pick one, apply to both site and GBP.

**M4 — Confirm the GBP primary category.** Strategy §P0.3, still open, still the strongest single local-pack factor. Unverifiable at Tier 0.

### Low

**L1 — Fill the three `to confirm` placeholders** in the getting-here card ([includes/components.php:317-321](includes/components.php#L317-L321)): landmark wording, nearest metro, parking. Directions content is a genuine local-pack and AI-answer signal.

**L2 — Re-audit quarterly.** Eight variants accumulated in under a year; §3 grew from five to eight in four days of elapsed documentation. It drifts.

---

## 10. Cost report

**₹0 / $0.** No paid API consumed. Tier 0 throughout: Nominatim (3 geocodes, rate-limited to 1 req/s), Overpass (1 successful query after one server-busy retry), plus direct HTTP fetches and web search.

---

## 11. Limitations

1. **No geo-grid, no rank data.** No local-pack positions, no SoLV, no per-coordinate variation. Requires DataForSEO.
2. **GBP internals invisible.** Categories, photo count, posts, Q&A, attributes, service list — 17 of the 25 checklist fields could not be observed. §1's score excludes them rather than guessing.
3. **Review analytics unavailable.** Velocity, the 18-day gap rule, distribution, response rate and fake-review signals all need the Reviews API. Only headline rating and count are corroborated.
4. **Bing and Apple unverified.** Bing Maps is JS-rendered; Apple has no public API. Both need a manual check.
5. **Practo bot-challenged.** Its listing details come from the search index, not a direct fetch — current as of indexing, not of today.
6. **Web search is US-indexed.** It reliably confirms *that* a listing exists; it does not reflect Indian SERP ordering. Same caveat as strategy §0.
7. **Pin precision.** The coordinate is an embed centre, accurate to a few metres — better than `null`, not a survey.
8. **OSM coverage is not market coverage.** §6 measures OpenStreetMap completeness in Gurugram, nothing more.

---

## 12. Sources

Google Place data extracted from the site's own embed ([includes/components.php:311](includes/components.php#L311)). Geocoding: [Nominatim](https://nominatim.openstreetmap.org/) (© OpenStreetMap contributors, ODbL). Radius mapping: [Overpass API](https://overpass-api.de/) (© OpenStreetMap contributors, ODbL). Live site: [dencespot.com](https://dencespot.com/), [sitemap](https://dencespot.com/sitemap.xml), [robots.txt](https://dencespot.com/robots.txt).

Listings inventoried: [Practo](https://www.practo.com/gurgaon/clinic/dencespot-advanced-best-hair-transplant-clinic-skin-specialist-dermatologist-in-gurgaon-india-gurgaon-sector-38) · [Justdial A](https://www.justdial.com/Gurgaon/D-S-Dencespot-Medanta-Hospital-Gurgaon-Sector-39/011PXX11-XX11-231120182822-P2S8_BZDET) · [Justdial B](https://www.justdial.com/Delhi/Dence-Spot-Near-Allnat-Pharmacy-Medanata-Medicity-Hospital-Gurgaon-Sector-39/011PXX11-XX11-240111164216-Q1B8_BZDET) · [magicpin](https://magicpin.in/Gurgaon/Sector-67A/Other/Dencespot-Clinic---Best-Dermatologist-and-Hair-Transplant-In-Gurgaon/store/1878c5c/) · [Facebook A](https://www.facebook.com/DenceSpot/) · [Facebook B](https://www.facebook.com/p/Dencespot-Hair-Transplant-and-Skin-Care-Clinic-100094194790844/) · [Instagram](https://www.instagram.com/dencespot/) · [idbf.in](https://gurgaon.idbf.in/718645/dencespot-best-hair-transplant-and-skin-clinic) · [beautynailhairsalons mirror](https://www.beautynailhairsalons.com/IN/Gurugram/100428553113485/Dencespot-:-Hair-Transplant-and-Skin-Care-Clinic) · [Linktree](https://linktr.ee/nyraclinic).
