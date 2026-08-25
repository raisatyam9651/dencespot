# Local SEO — dencespot.com

**Score:** 50/100 · *(cross-cutting, folded into Technical and Content)*
**Audited:** 25 August 2026 · 47 URLs crawled, 20 indexable pages

## What is working

- NAP is rendered identically across schema, footer and contact page on all 29 pages
- NAP is centralised in includes/config.php as a single source of truth, which is the right architecture
- areaServed correctly lists Gurugram, New Delhi and Delhi NCR
- A landmark reference (opposite Medanta - The Medicity) is used in directions copy but correctly kept out of the canonical NAP string

## Findings

### [HIGH] Canonical NAP is unconfirmed and unpropagated

includes/config.php flags that four conflicting versions of this business are live across directories. The site publishes the strategy's recommended canonical, but it has not been confirmed by the clinic or propagated to Google Business Profile, Practo, Justdial, Bing Places, Apple Maps or Facebook. Citation inconsistency caps local pack performance.

**Fix:** Get clinic sign-off on the exact NAP string, then deploy it byte-identically to every listing.

### [HIGH] Opening hours conflict between site and Google listing

The site publishes Monday-Saturday 10:00-20:00; includes/config.php records that the Google listing says Monday-Sunday 09:00-21:00. 'Open at time of search' is a top-tier local pack ranking factor, so the mismatch costs real visibility.

**Fix:** Confirm real hours and reconcile site copy, schema and GBP.

### [HIGH] No map embed, geo coordinates or clinic photography

Eight pages including /contact carry an unfilled 'Google Maps embed' placeholder slot. Schema has no geo or hasMap. There is no clinic exterior, reception or interior photography. Directions content is unwritten across all 8 pages. The only external local signal is a plain Google Maps text-search link on 12 pages rather than a stable Place ID link.

**Fix:** Embed a real map, add geo and hasMap to schema, shoot clinic photography, write the directions content, and replace the text-search Maps link with a Place ID link.

---

**Summary:** 3 High
