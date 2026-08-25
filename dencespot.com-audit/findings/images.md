# Images — dencespot.com

**Score:** 30/100 · **Audit weight:** 5%
**Audited:** 25 August 2026 · 47 URLs crawled, 20 indexable pages

## What is working

- Zero missing alt attributes sitewide
- The one real image is WebP at 35.7 KB, 800x1000, with explicit width and height so it causes no layout shift
- Alt text is descriptive, non-stuffed and varies by context rather than repeating a single string
- loading=lazy applied correctly on non-critical instances
- The empty placeholder slots are well-specified - each names exactly what photograph belongs there

## Findings

### [HIGH] The site has one real image against 69 empty placeholder slots

/assets/img/dr-nayra.webp is served 11 times across 10 pages and is the entire image inventory of a hair-transplant clinic website. Against it sit 69 empty placeholder slots on 14 pages: 13 on /hair-transplant-in-gurgaon, 12 on /hair-transplant-results-gurgaon, 7 each on /about-us and /beard-transplant-gurgaon, 5 each on the DHI, FUE, FUT and PRP pages, 3 on /contact. For a visual-proof medical vertical, no clinical, clinic or before/after imagery is a decisive competitive gap.

**Fix:** Commission a photo session against the slot briefs already written into the pages. Prioritise clinic exterior with signage (needed on 8 pages), reception, consultation and procedure rooms, the Google Maps embed (8 pages), and procedure photography for the main hair transplant and technique pages. Convert everything to WebP with explicit dimensions.

### [HIGH] No og:image on any page

All 29 pages carry 6 Open Graph tags and 3 Twitter tags but no image, and twitter:card is set to summary rather than summary_large_image. Every share renders as a bare text link - and WhatsApp, the site's own primary CTA on all 29 pages, is the dominant sharing channel in this market.

**Fix:** Add a 1200x630 branded OG image in includes/header.php and switch twitter:card to summary_large_image. Add per-page OG images for the money pages later.

### [LOW] Untracked 894 KB JPEG in the working tree

assets/img/clinic-front.jpg is 894 KB, uncommitted, and returns 404 live. If it is destined for the 'Clinic exterior with signage' slots it would become, by an order of magnitude, the heaviest asset on the site.

**Fix:** Convert to WebP and resize before committing.

---

**Summary:** 2 High, 1 Low

---

## Appendix — image placeholder slot inventory

69 empty slots across 14 pages. Each slot already carries a written brief describing the photograph required.

| Page | Slots | Briefs |
|---|---|---|
| `/hair-transplant-in-gurgaon` | 13 | Hair transplant procedure or doctor-patient consultation at the clinic; Donor area / graft separation under magnification; FUE extraction — clinical photo; DHI implanter pen in use; Donor assessment / consultation photo; Procedure in progress — graft placement; Prepared treatment room / instruments; BEFORE — consented patient photo, same angle & lighting; AFTER — same patient at review; Crown before / after pair; Beard before / after pair; Google Maps embed / static map of the clinic location; Clinic exterior with signage |
| `/hair-transplant-results-gurgaon` | 12 | BEFORE — Hairline restoration before and after, same angle and lighting; AFTER — same patient at review; BEFORE — Crown restoration before and after pair; AFTER — same patient at review; BEFORE — Patchy beard correction before and after pair; AFTER — same patient at review; BEFORE — Moustache and goatee connection before and after pair; AFTER — same patient at review; BEFORE — PRP course before and after, crown density; AFTER — same patient at review; BEFORE — Female pattern thinning before and after, parting width; AFTER — same patient at review |
| `/about-us` | 7 | Clinic interior — consultation room in natural light; Clinic exterior with signage; Reception area; Consultation room; Procedure room, prepared; Google Maps embed / static map of the clinic location; Clinic exterior with signage |
| `/beard-transplant-gurgaon` | 7 | Beard design being drawn on a consented patient's face, or beard graft placement in progress; Close-up of beard graft placement showing the acute facial angle; FUE extraction from the occipital donor area — clinical photo; DHI implanter pen placing a graft along the cheek border; Beard design marked on a consented patient before surgery; Google Maps embed / static map of the clinic location; Clinic exterior with signage |
| `/dhi-hair-transplant-in-gurgaon` | 5 | DHI implanter loaded with a graft, or hairline placement in progress; Close view of an implanter tip, or grafts loaded ready for placement; Implanter placement along the hairline, or loaded implanters on the tray; Google Maps embed / static map of the clinic location; Clinic exterior with signage |
| `/fue-hair-transplant-in-gurgaon` | 5 | FUE extraction in progress — punch and donor area under magnification; Donor area after extraction — dot healing pattern visible; Recipient site creation, or sorted grafts under magnification; Google Maps embed / static map of the clinic location; Clinic exterior with signage |
| `/hair-prp-treatment-in-gurgaon` | 5 | PRP centrifuge and prepared syringe, or a scalp injection in progress; Centrifuge with separated blood layers, plasma fraction visible; Treatment room set up for a PRP session; Google Maps embed / static map of the clinic location; Clinic exterior with signage |
| `/fut-hair-transplant-in-gurgaon` | 5 | Microscopic graft dissection from a donor strip, or donor closure at review; Dissection team working under microscopes, or a healed donor line at review; Donor closure line immediately after the procedure, or the dissection bench; Google Maps embed / static map of the clinic location; Clinic exterior with signage |
| `/contact` | 3 | Google Maps embed of the clinic — lazy-loaded so it does not cost LCP; Clinic exterior with signage; Reception area |
| `/` | 2 | Google Maps embed / static map of the clinic location; Clinic exterior with signage |
| `/book-consultation` | 2 | Google Maps embed / static map of the clinic location; Clinic exterior with signage |
| `/blog/` | 1 | Diagram of the seven Norwood stages of male pattern hair loss |
| `/hair-fall-treatment-in-gurgaon` | 1 | Scalp examination under magnification during a hair-loss consultation |
| `/hair-transplant-cost-in-gurgaon` | 1 | Donor area being mapped and graft zones counted at the consultation |

**Real images sitewide:** 1 unique file (`/assets/img/dr-nayra.webp`), served 11 times.

Raw data: `../placeholders.json`, `../placeholders.txt`
