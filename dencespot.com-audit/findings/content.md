# Content Quality — dencespot.com

**Score:** 55/100 · **Audit weight:** 23%
**Audited:** 25 August 2026 · 47 URLs crawled, 20 indexable pages

## What is working

- Money pages run 2,169 to 4,084 words of substantive, non-repetitive patient education rather than keyword filler
- Every treatment page carries 'Medically reviewed by Dr. Nyra, last reviewed August 2026'
- A named doctor with stated qualifications (MBBS, MD Dermatology), named training institutions and a specific, credible biography
- An unusually honest editorial stance: no guaranteed densities, explicit statements that some patients need no procedure, that donor supply is finite, and that review gating is prohibited
- Medical disclaimer, privacy policy and terms pages all present - required trust pages for YMYL
- The decision to keep the results gallery and reviews page empty rather than use stock imagery or invented testimonials is ethically correct and avoids a real manual-action risk

## Findings

### [CRITICAL] Visible unfinished placeholder content on 16 of 21 pages

The cost page - the highest commercial-intent page on the site - publishes a pricing table reading '[CONFIRM] Rs.__-__ per graft' for FUE, DHI and FUT, followed by a developer-facing note: 'Placeholder - clinic sign-off required. The rate column is not yet filled in. Publish this page only once the clinic's real per-graft rates are in place.' The doctor profile publishes 'Medical registration: To be confirmed - Required before launch' and 'Memberships: To be confirmed'. The same 'Specialization / Registration: To be confirmed' pair appears in the doctor credentials card on 8 further pages. Directions blocks on 8 pages read 'Nearest metro and walking time - to confirm', 'Parking guidance - to confirm' and 'confirm wording with the clinic'. A medical registration number is one of the strongest trust signals available to a clinic site; publishing 'To be confirmed' in its place is worse than omitting the row.

**Fix:** Obtain real per-graft rates and the medical registration number from the clinic, or remove those rows and cards entirely. Write the real directions content or drop the cards. This must ship before or with the noindex removal - cached placeholder text outlives the fix.

### [HIGH] Two commercially critical pages are deliberately empty

/hair-transplant-results-gurgaon states 'This gallery is deliberately empty. Every card below is a placeholder waiting for a real, consented case' with 12 empty before/after slots. /patient-reviews states 'No reviews are shown here yet. This page is built and deliberately empty.' The reasoning given on both is sound - no stock imagery, no invented testimonials, no aggregateRating for a rating that is not visible. But in hair restoration, before/after evidence and review volume are the two things patients actually choose on, and both pages sit in the primary navigation.

**Fix:** This is a clinic operations task, not a development one: collect consented before/after pairs at fixed angle and lighting, and run the review-request flow already documented on the page. In the interim, consider removing both from the primary navigation rather than routing prospective patients to an empty page.

### [MEDIUM] Only one blog post exists

/blog/norwood-scale-explained is well-executed at 1,946 words with correct Article schema and a medical review line. It is also the entire blog. The blog index and its four topic filter views are consequently thin at 524-561 words.

**Fix:** Build out the blog at 2-4 posts per month using the existing post as a template. The 17 broken internal links are effectively a ready-made editorial calendar; comparison and cost posts earn the most AI citations.

### [LOW] Copy bug in homepage FAQ and its JSON-LD

The homepage FAQ answer renders 'Opening hours are Mon-Sat 10:00-20:00, with sunday by appointment only' - lowercase, from string interpolation of the HOURS_NOTE constant. It appears both in the rendered FAQ and in the FAQPage structured data.

**Fix:** Fix the capitalisation in includes/config.php or at the interpolation site.

---

**Summary:** 1 Critical, 1 High, 1 Medium, 1 Low

---

## Appendix — placeholder text inventory

| Page | Placeholder types found | Image slots |
|---|---|---|
| `/` | confirm-with-clinic, to confirm | 2 |
| `/about-us` | confirm-with-clinic, to confirm | 7 |
| `/beard-transplant-gurgaon` | confirm-with-clinic, to confirm | 7 |
| `/blog/` | — | 1 |
| `/book-consultation` | confirm-with-clinic, to confirm | 2 |
| `/contact` | confirm-with-clinic, to confirm | 3 |
| `/dhi-hair-transplant-in-gurgaon` | confirm-with-clinic, to confirm | 5 |
| `/dr-nyra` | required before launch, to confirm | 0 |
| `/fue-hair-transplant-in-gurgaon` | confirm-with-clinic, to confirm | 5 |
| `/fut-hair-transplant-in-gurgaon` | confirm-with-clinic, to confirm | 5 |
| `/hair-fall-treatment-in-gurgaon` | to confirm | 1 |
| `/hair-prp-treatment-in-gurgaon` | confirm-with-clinic, to confirm | 5 |
| `/hair-transplant-cost-in-gurgaon` | [CONFIRM], blank rate, not yet, placeholder, sign-off required | 1 |
| `/hair-transplant-in-gurgaon` | confirm-with-clinic, to confirm | 13 |
| `/hair-transplant-results-gurgaon` | deliberately empty, placeholder | 12 |
| `/patient-reviews` | deliberately empty | 0 |

**Pages with any unfinished content: 16 of 21.**

Raw data: `../placeholders.txt`
