# DenceSpot — PHP build progress

Working tracker for the loop. Source of truth for scope: `SEO-STRATEGY-dencespot.md`.
**47 numbered pages → 51 URLs.**

## Architecture

```
includes/config.php      NAP, hours, doctors, navigation, shared copy — single source of truth
includes/schema.php      JSON-LD builders (MedicalClinic, Physician, MedicalProcedure, FAQPage, …)
includes/components.php  icon(), slot(), ticks(), faq_list(), nap_block(), enquiry_form(),
                         cta_band(), doctor_block(), local_block()
includes/header.php      <head> (title/meta/canonical/OG/JSON-LD) + masthead + breadcrumbs + <main>
includes/footer.php      footer + sticky mobile CTA + nav JS + conversion events
assets/css/site.css      design tokens + components, mobile-first
enquire.php              form handler → validates → logs → mails → 303 to /thank-you
```

Every page sets `$page[...]` then `require includes/header.php` … `require includes/footer.php`.

## Launch blockers from strategy §8.1 — status

| Blocker | Status |
|---|---|
| No `<title>` | ✅ fixed — required per page |
| No meta description | ✅ fixed |
| No canonical | ✅ fixed |
| No JSON-LD | ✅ fixed — `schema.php`, `MedicalClinic` not `LocalBusiness` |
| `min-width:1280px`, not responsive | ✅ fixed — mobile-first CSS |
| No Open Graph / Twitter | ✅ fixed |
| Design-canvas chrome (`<x-dc>`) | ✅ gone in PHP build |
| `image-slot` placeholders, no alt | ⏳ slots marked; awaiting real photography |
| Conversion tracking | ✅ `data-track` on every lead path + `/thank-you` redirect |

## Awaiting clinic sign-off — blocks launch

1. **NAP** — `config.php` uses the strategy's recommended canonical (§7.1). Four versions live. Confirm, then push byte-identically to GBP, Practo, Justdial, Bing Places, Apple Maps, Facebook.
2. **Hours** — site says Mon–Sat 10–20; Google says Mon–Sun 09–21. Conservative version published.
3. **Geo coordinates** — `GEO_LAT`/`GEO_LNG` are null; schema omits geo rather than guess.
4. **Dr. Nyra credentials** — live site claims MD (Dermatology) + fellowship + ISHRS + 5,000 procedures; build states MBBS + 3 years Germany. Only evidenced claims published.
5. **Per-graft rates** — `hair-transplant-cost-in-gurgaon.php` `$rates` holds `[CONFIRM]` placeholders.
6. **`SITE_STAGING`** — `true`, so every page emits `noindex`. Flip to `false` at launch.

## Page status

Legend: ✅ built · 🔨 in progress · ⬜ not started · ⏭ keep live, schema only

### Tier 0 — conversion infrastructure
| # | URL | Status |
|---|---|---|
| 1 | `/` | ⬜ |
| 2 | `/book-consultation` | ✅ |
| 3 | `/hair-transplant-cost-in-gurgaon` | ✅ |
| 4 | `/hair-transplant-results-gurgaon` | ⬜ |
| 5 | `/patient-reviews` | ⬜ |
| 6 | `/patient-stories/*` ×5 | ⬜ |
| 7 | `/hair-loss-assessment` | ⬜ |
| 8 | `/hair-transplant-graft-calculator` | ⬜ |
| 9 | `/cost-and-emi-options` | ⬜ |
| 10 | `/about-us` | ✅ |
| 11 | `/dr-nyra` | ✅ |
| 12 | `/dr-rahul` | ⬜ |
| 13 | `/contact` | ✅ |
| 14 | `/faqs` | ✅ |
| 15 | `/thank-you` | ✅ |

### Tier 1 — hair transplant cluster
| # | URL | Status |
|---|---|---|
| 16 | `/hair-transplant-in-gurgaon` | ✅ |
| 17 | `/fue-hair-transplant-in-gurgaon` | ⬜ |
| 18 | `/dhi-hair-transplant-in-gurgaon` | ⬜ |
| 19 | `/fut-hair-transplant-in-gurgaon` | ⬜ |
| 20 | `/beard-transplant-gurgaon` | ✅ |
| 21 | `/beard-transplant-cost-gurgaon` | ⬜ |
| 22 | `/eyebrow-transplant-in-gurgaon` | ⬜ |
| 23 | `/hairline-transplant-in-gurgaon` | ⬜ |
| 24 | `/crown-hair-transplant-in-gurgaon` | ⬜ |
| 25 | `/hair-transplant-for-women-in-gurgaon` | ⬜ |
| 26 | `/hair-transplant-repair-in-gurgaon` | ⬜ |
| 27 | `/unshaven-hair-transplant-in-gurgaon` | ⬜ |
| 28 | `/hair-transplant-aftercare` | ⬜ |

### Tier 1 — PRP & non-surgical cluster
| # | URL | Status |
|---|---|---|
| 29 | `/hair-prp-treatment-in-gurgaon` | ✅ |
| 30 | `/prp-hair-treatment-cost-in-gurgaon` | ⬜ |
| 31 | `/gfc-treatment-in-gurgaon` | ⬜ |
| 32 | `/hair-mesotherapy-in-gurgaon` | ⬜ |
| 33 | `/face-prp-treatment-in-gurgaon` | ⬜ |
| 34 | `/hair-fall-treatment-in-gurgaon` | ✅ |
| 35 | `/womens-hair-loss-treatment-in-gurgaon` | ⬜ |
| 36 | `/alopecia-areata-treatment-in-gurgaon` | ⬜ |
| 37 | `/scalp-micropigmentation-in-gurgaon` | ⬜ |
| 38 | `/dandruff-treatment-in-gurgaon` | ⬜ |
| 39 | `/hair-microneedling-in-gurgaon` | ⬜ |
| 40 | `/hair-led-therapy-in-gurgaon` | ⬜ |

### Tier 2 — decision & comparison
| # | URL | Status |
|---|---|---|
| 41 | `/fue-vs-dhi-hair-transplant` | ⬜ |
| 42 | `/fue-vs-fut-hair-transplant` | ⬜ |
| 43 | `/prp-vs-hair-transplant` | ⬜ |
| 44 | `/prp-vs-gfc-treatment` | ⬜ |
| 45 | `/best-hair-transplant-clinic-in-gurgaon` | ⬜ |
| 46 | `/how-to-choose-hair-transplant-clinic` | ⬜ |
| 47 | `/hair-transplant-risks-and-side-effects` | ⬜ |

### Beyond the 47 — requested separately
| Item | Status |
|---|---|
| `/blog/` index + post template | ✅ (1 post live) |
| Legal: `/privacy-policy`, `/terms`, `/medical-disclaimer` | ⬜ |
| `sitemap.xml`, `robots.txt`, `.htaccess` (clean URLs + 301s) | ⬜ |
| 404 page | ⬜ |

## Decisions taken

- **Beard URL** → `/beard-transplant-gurgaon`, matching the strategy and the live URL. Avoids a 301 and its recovery window. The earlier `beard-transplant-in-gurgaon.html` design export becomes the source for this page's content.
- **Design exports stay put.** The root `.html` files are the design-canvas source. The `.php` files are the production site. Move the exports into `_design/` once the PHP build replaces them everywhere.
- **Cost pages publish the arithmetic, not a fake headline price.** Real rates go in as soon as the clinic supplies them; `[CONFIRM]` placeholders until then.
- **Zero locality pages**, per the §5.3 gate. Nothing in this build is geo-variant.

## Loop log

- **Iter 1** — scaffolding (config/schema/components/header/footer/CSS/enquire) + pages 15, 2, 3, 16, 20. All lint clean, all render 200 with zero PHP notices. JSON-LD parses; FAQ schema count matches visible `<details>` exactly on both hubs.
- **Iter 2** — pages 29 (PRP hub), 34 (hair-fall hub, the 301 target), 13 (contact), 11 (dr-nyra), 10 (about-us). 10 of 47 built. All lint clean, all render 200, zero PHP notices.
  - Resolved a conflict between the two design exports: the PRP page credited "MBBS, MD (Dermatology)" while the hair transplant page credited MBBS only. `doctor_block()` now renders from config, so credentials cannot diverge per page again.
  - Per user instruction, nothing is published to claude.ai — everything stays in this repo.
- **Iter 3** — blog system (`includes/blog.php` registry, `blog-header.php` / `blog-footer.php` layout, `/blog/` index with topic filter) + first post `norwood-scale-explained` (1,464 words, Article + reviewedBy schema) + page 14 `/faqs` (20 clinic-level Q&As; deliberately no overlap with treatment-page FAQs). 12 of 47 built.
  - Artifact watch ended — the claude.ai canvas was deleted. No action taken; all work stays local.
