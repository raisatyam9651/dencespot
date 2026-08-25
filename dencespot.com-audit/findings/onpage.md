# On-Page SEO — dencespot.com

**Score:** 78/100 · **Audit weight:** 20%
**Audited:** 25 August 2026 · 47 URLs crawled, 20 indexable pages

## What is working

- All 20 real pages have a unique, well-formed title between 31 and 60 characters, keyword-first and brand-suffixed with no stuffing
- All pages have unique, hand-written meta descriptions rather than templated ones
- Exactly one h1 on all 29 URLs with no skipped heading levels
- Money pages carry 11-17 h2 and up to 36 h3 - well-structured for scanning and passage-level extraction
- Self-referencing canonicals on every page
- Query-string filter variants correctly canonicalise to their clean parent, so the duplicate titles they produce are not an indexation risk
- Flat, even internal link distribution: every real page receives 29 inbound links via header and footer

## Findings

### [MEDIUM] Two pages are under-linked internally

/blog/norwood-scale-explained and /fut-hair-transplant-in-gurgaon each receive only 2 inbound internal links, against 29 for every other page. More broadly, there is almost no contextual internal linking between money pages that resolves - most in-content links point at the 17 URLs that 404.

**Fix:** Add contextual in-content links between money pages once the Phase 2 pages exist. Note the FUT page is noindex by design pending written confirmation that the clinic performs strip surgery.

### [LOW] Five meta descriptions exceed 160 characters

/fue-hair-transplant-in-gurgaon (167), /hair-transplant-cost-in-gurgaon (165), /hair-transplant-in-gurgaon (164), /dhi-hair-transplant-in-gurgaon (161) and /privacy-policy (161) will truncate in search results.

**Fix:** Trim to 150-158 characters, keeping the call to action inside the visible portion.

### [INFO] Filter variants share titles and descriptions with their parent

Two clusters of five duplicate titles and descriptions, entirely explained by the ?topic= and ?type= filter variants on /blog/ and /hair-transplant-results-gurgaon. Because those variants correctly canonicalise to their clean parent, this is not a duplicate-content problem.

**Fix:** Optional: give each filtered view its own title and description for clarity. No action required for indexation.

---

**Summary:** 1 Medium, 1 Low, 1 Info
