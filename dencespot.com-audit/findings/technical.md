# Technical SEO — dencespot.com

**Score:** 35/100 · **Audit weight:** 22%
**Audited:** 25 August 2026 · 47 URLs crawled, 20 indexable pages

## What is working

- HTTPS enforced with a clean 301 from http
- Extensionless URLs with correct 301s for .php, index.php and trailing slashes
- Missing pages return a genuine HTTP 404 with no soft-404 behaviour
- robots.txt is well-formed, allows crawling, sensibly disallows conversion endpoints and tracking query variants, and declares the sitemap
- sitemap.xml is valid, generated from files on disk, lists 20 real URLs with lastmod, changefreq and weighted priority, and correctly excludes the noindex FUT page
- lang=en-IN and a correct mobile viewport on every page
- HTTP/3 available and gzip enabled on all text responses

## Findings

### [CRITICAL] Site-wide noindex, nofollow on all 29 live URLs

Every live URL returns <meta name="robots" content="noindex, nofollow">. includes/header.php:53 emits this when SITE_STAGING is true, and the deployed includes/config.php still has const SITE_STAGING = true - the value committed at git HEAD. The working tree in the repo already sets it to false, but that change is uncommitted and undeployed. The live robots.txt still carries the old comment referencing SITE_STAGING = true, confirming the deployed build predates the local edits. The nofollow compounds the damage: even a page Google reaches passes no link equity onward.

**Fix:** Commit the SITE_STAGING = false change and deploy, then verify with curl -s https://dencespot.com/ | grep robots - it must read 'index, follow'. Ship this together with the placeholder cleanup, not before it. Then verify the property in Google Search Console, submit the sitemap and request indexing on the money pages.

### [HIGH] 19 internal links resolve to 404 across 17 distinct URLs

17 URLs linked from within the site return 404. /cost-and-emi-options and /hair-transplant-aftercare are in the sitewide footer and therefore broken on all 29 pages. /womens-hair-loss-treatment-in-gurgaon is linked from 5 pages; /hair-transplant-in-gurgaon alone links to 8 non-existent pages. These read as a content roadmap that was linked before it was built.

**Fix:** Remove the two footer links from includes/config.php immediately, or repoint /cost-and-emi-options to /hair-transplant-cost-in-gurgaon. Triage the remaining 15 - each is a legitimate keyword target, so build them in commercial-value order, but remove every link until its page exists.

### [HIGH] www hostname serves 200 instead of redirecting

https://www.dencespot.com/ and https://www.dencespot.com/hair-transplant-in-gurgaon both return HTTP 200. The full site is served on two hostnames. The canonical tag on the www copy does point to the non-www URL, which prevents the worst outcome, but a canonical is a hint and a 301 is a directive - and two live hostnames split any link equity the domain earns.

**Fix:** Enable the host-canonicalisation block in .htaccess section 1. It is already written but commented out, and it currently redirects TO www while the site's canonicals and sitemap all use non-www - invert it before enabling. Check whether Hostinger already forces HTTPS at server level before also enabling the HTTPS block, since two competing redirects will loop.

### [MEDIUM] Missing security headers

The homepage returns no Strict-Transport-Security, X-Content-Type-Options, X-Frame-Options or frame-ancestors, Referrer-Policy or Permissions-Policy. The only security header present is Content-Security-Policy: upgrade-insecure-requests. Not a direct ranking factor, but a trust and compliance gap for a medical site handling patient enquiry data, and HSTS removes a redirect hop on every http request.

**Fix:** Add HSTS, X-Content-Type-Options: nosniff, Referrer-Policy: strict-origin-when-cross-origin, Permissions-Policy and a frame-ancestors directive in .htaccess.

### [LOW] X-Powered-By header discloses exact PHP version

All responses include X-Powered-By: PHP/8.3.30, disclosing the exact runtime version.

**Fix:** Set expose_php = Off, or unset the header in .htaccess.

### [LOW] Unreferenced JavaScript files served publicly

/support.js (69 KB) and /image-slot.js (65 KB) return HTTP 200 but are referenced by no page. They appear to be leftovers from the design-canvas build.

**Fix:** Remove from the deployment.

---

**Summary:** 1 Critical, 2 High, 1 Medium, 2 Low

---

## Appendix — broken internal link inventory

Every URL below is linked from within the site and returns HTTP 404.

| Broken target | Inbound links | Linked from |
|---|---|---|
| `/cost-and-emi-options` | 29 | **all 29 pages** (sitewide nav/footer) |
| `/hair-transplant-aftercare` | 29 | **all 29 pages** (sitewide nav/footer) |
| `/womens-hair-loss-treatment-in-gurgaon` | 5 | `/`, `/about-us`, `/blog/norwood-scale-explained`, `/hair-fall-treatment-in-gurgaon`, `/hair-prp-treatment-in-gurgaon` |
| `/crown-hair-transplant-in-gurgaon` | 2 | `/`, `/hair-transplant-in-gurgaon` |
| `/hair-transplant-repair-in-gurgaon` | 2 | `/`, `/hair-transplant-in-gurgaon` |
| `/hairline-transplant-in-gurgaon` | 2 | `/`, `/hair-transplant-in-gurgaon` |
| `/gfc-treatment-in-gurgaon` | 2 | `/about-us`, `/hair-fall-treatment-in-gurgaon` |
| `/hair-transplant-risks-and-side-effects` | 2 | `/faqs`, `/hair-transplant-in-gurgaon` |
| `/prp-hair-treatment-cost-in-gurgaon` | 2 | `/faqs`, `/hair-prp-treatment-in-gurgaon` |
| `/alopecia-areata-treatment-in-gurgaon` | 1 | `/beard-transplant-gurgaon` |
| `/beard-transplant-cost-gurgaon` | 1 | `/beard-transplant-gurgaon` |
| `/scalp-micropigmentation-in-gurgaon` | 1 | `/blog/norwood-scale-explained` |
| `/prp-vs-gfc-treatment` | 1 | `/hair-prp-treatment-in-gurgaon` |
| `/eyebrow-transplant-in-gurgaon` | 1 | `/hair-transplant-in-gurgaon` |
| `/fue-vs-dhi-hair-transplant` | 1 | `/hair-transplant-in-gurgaon` |
| `/fue-vs-fut-hair-transplant` | 1 | `/hair-transplant-in-gurgaon` |
| `/hair-transplant-for-women-in-gurgaon` | 1 | `/hair-transplant-in-gurgaon` |

**Total:** 17 distinct 404 URLs, 83 inbound link instances.

Raw data: `../crawl.json`, `../analysis.txt`
