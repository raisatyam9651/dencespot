# AI Search Readiness (GEO) — dencespot.com

**Score:** 60/100 · **Audit weight:** 10%
**Audited:** 25 August 2026 · 47 URLs crawled, 20 indexable pages

## What is working

- robots.txt explicitly allows GPTBot, OAI-SearchBot, PerplexityBot, ClaudeBot and Google-Extended with a stated rationale - more deliberate AI-crawler handling than most sites have
- FAQPage schema on 10 pages with direct question and answer pairs, the single most citable structure available
- Fully server-rendered HTML with no JavaScript dependency, so every word is in the raw response
- Dense h2 and h3 structure gives clean passage boundaries for extraction
- Declarative, specific writing style that LLMs quote well

## Findings

### [CRITICAL] noindex removes the site from AI Overviews and LLM retrieval

The site-wide noindex, nofollow removes dencespot.com from Google AI Overviews and from every LLM retrieval path that respects robots directives. The explicit AI-crawler allowances in robots.txt have no effect while the meta robots tag says noindex.

**Fix:** Resolved by the Technical SEO noindex fix. No separate action needed.

### [HIGH] Placeholder text is citable and will outlive the fix

An LLM crawling /dr-nyra today can accurately report that DenceSpot Clinic lists its doctor's medical registration as 'To be confirmed', and that its cost page shows no prices. Once indexed, that text can be cached and quoted long after the page is corrected - a durable reputational risk in a YMYL category.

**Fix:** Clean all placeholders before enabling indexing, not after. This is the ordering constraint on the launch deploy.

### [HIGH] No entity linkage via sameAs

Nothing connects the site's business entity to its Google Business Profile, Practo listing or social profiles. Combined with the four conflicting business listings already documented in the project's own strategy file, LLMs have no authoritative signal for which representation of this clinic is correct.

**Fix:** Add sameAs to MedicalClinic and Physician - covered by the Schema recommendations.

### [LOW] No llms.txt

/llms.txt returns 404. Optional and ignored by Google Search, but cheap to add and used by some AI assistants.

**Fix:** Add an llms.txt summarising the clinic, its services, location and key pages.

---

**Summary:** 1 Critical, 2 High, 1 Low
