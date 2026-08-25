# Schema / Structured Data — dencespot.com

**Score:** 72/100 · **Audit weight:** 10%
**Audited:** 25 August 2026 · 47 URLs crawled, 20 indexable pages

## What is working

- Every page carries exactly one JSON-LD block and all 29 parse without error
- Well-formed @graph structure with correct @id cross-references between WebSite, MedicalClinic and Physician
- Thoughtful page-type mapping: ProfilePage on the doctor page, ContactPage on contact and booking, MedicalProcedure on each technique page, MedicalTherapy on PRP, MedicalCondition on hair fall
- FAQPage with Question and Answer pairs on 10 pages
- BreadcrumbList with ListItem on 28 pages
- aggregateRating and Review correctly absent - the reviews page explicitly explains why it will not mark up a rating it cannot display, which is the right call

## Findings

### [HIGH] MedicalClinic entity has no sameAs links

Nothing in the structured data connects dencespot.com to its Google Business Profile, Practo listing, Justdial listing or any social profile. SEO-STRATEGY-dencespot.md section 7.1 already records that four conflicting versions of this business are live across directories. Search engines and LLMs reconcile business entities largely through sameAs links; without them there is no authoritative signal saying which listing is correct.

**Fix:** Add a sameAs array to MedicalClinic listing the GBP, Practo, Justdial and social profile URLs, and a sameAs to Physician for the doctor's professional profiles.

### [MEDIUM] Missing local and rich-result properties on MedicalClinic

MedicalClinic lacks geo (latitude/longitude), hasMap, priceRange, image and logo. geo and hasMap are direct local-pack relevance signals; priceRange is a standard LocalBusiness field that is frequently surfaced; image and logo are required for several rich result types.

**Fix:** Add all five to the MedicalClinic node in the shared schema template.

### [MEDIUM] Physician node is missing image, medicalSpecialty and identifier

The Physician node has name, jobTitle, url, worksFor and alumniOf but no image (the doctor photo already exists at /assets/img/dr-nayra.webp), no medicalSpecialty (present on the clinic but not the doctor), and no identifier for the medical registration number.

**Fix:** Add image and medicalSpecialty now; add identifier once the registration number is confirmed.

### [MEDIUM] Opening hours in schema may conflict with the Google Business Profile

The MedicalClinic openingHoursSpecification publishes Monday-Saturday 10:00-20:00, while includes/config.php flags that the Google listing says Monday-Sunday 09:00-21:00. A mismatch between schema, site and GBP is a local-pack liability because 'open at time of search' is a ranking input.

**Fix:** Confirm the real hours with the clinic and make schema, site copy and GBP agree.

---

**Summary:** 1 High, 3 Medium
