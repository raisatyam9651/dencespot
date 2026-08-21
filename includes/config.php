<?php
/**
 * DenceSpot Clinic — site configuration.
 *
 * Single source of truth for NAP, contact details and navigation.
 * Change a value here and it updates on every page. Nothing below should
 * ever be retyped into a template.
 */

declare(strict_types=1);

/* -------------------------------------------------------------------------
 * Site
 * ---------------------------------------------------------------------- */

const SITE_NAME   = 'DenceSpot Clinic';
const SITE_TAGLINE= 'Hair Restoration Clinic in Gurgaon';
const SITE_ORIGIN = 'https://dencespot.com';

/**
 * Set to false the moment the site goes live. While true, pages emit
 * <meta name="robots" content="noindex"> so a staging deploy can never be
 * indexed by accident.
 */
const SITE_STAGING = true;

/* -------------------------------------------------------------------------
 * NAP — Name, Address, Phone
 *
 * ⚠ AWAITING SIGN-OFF. Four conflicting versions of this business are live
 * (see SEO-STRATEGY-dencespot.md §7.1). The values below follow the
 * strategy's recommended canonical, which reconciles the website with the
 * Google Business Profile listing. Confirm with the clinic, then deploy this
 * exact string byte-identically to GBP, Practo, Justdial, Bing Places,
 * Apple Maps and Facebook.
 *
 * Previously on the site: 'C Block, Sector 39' / 'Gurugram' / 122003
 * ---------------------------------------------------------------------- */

const NAP_STREET   = '1123, Sector 39 Road, Jharsa, C Block, Sector 39';
const NAP_LOCALITY = 'Gurugram';
const NAP_REGION   = 'Haryana';
const NAP_POSTCODE = '122003';
const NAP_COUNTRY  = 'IN';

/** Landmark used in directions copy, not part of the canonical NAP string. */
const NAP_LANDMARK = 'opposite Medanta – The Medicity';

/**
 * ⚠ AWAITING SIGN-OFF. The site says Mon–Sat 10:00–20:00; the Google listing
 * says Mon–Sun 09:00–21:00. "Open at time of search" is a top-5 local pack
 * factor, so a mismatch costs real visibility. Publishing the conservative
 * version until the clinic confirms.
 */
const HOURS_DAYS    = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
const HOURS_OPEN    = '10:00';
const HOURS_CLOSE   = '20:00';
const HOURS_DISPLAY = 'Mon–Sat · 10:00 – 20:00';
const HOURS_NOTE    = 'Sunday · by appointment only';

/**
 * ⚠ REQUIRED before launch. Pull the exact pin from the Google Business
 * Profile — LocalBusiness geo wants 5+ decimal places. Leave null and the
 * schema simply omits geo rather than shipping a wrong coordinate.
 */
const GEO_LAT = null;
const GEO_LNG = null;

/* -------------------------------------------------------------------------
 * Contact
 * ---------------------------------------------------------------------- */

const PHONE_E164    = '+918178330800';
const PHONE_DISPLAY = '+91 81783 30800';
const PHONE_SCHEMA  = '+91-81783-30800';
const EMAIL         = 'dencespot@gmail.com';
const WHATSAPP_URL  = 'https://api.whatsapp.com/send/?phone=%2B918178330800';
const MAPS_URL      = 'https://www.google.com/maps?q=Dencespot+Clinic+Sector+39+Gurgaon';

/** Areas the clinic draws patients from — used in schema areaServed. */
const AREA_SERVED = ['Gurugram', 'New Delhi', 'Delhi NCR'];

/* -------------------------------------------------------------------------
 * People
 * ---------------------------------------------------------------------- */

/**
 * ⚠ CREDENTIAL CONFLICT. The live site claims MD (Dermatology), a
 * fellowship, ISHRS membership and 5,000+ procedures. The design build
 * states MBBS plus three years in Germany. Only what can be evidenced is
 * published here. Resolve before launch — on a YMYL medical page,
 * unevidenced credentials are the expensive kind of mistake.
 */
const DOCTORS = [
    'dr-nyra' => [
        'name'        => 'Dr. Nyra',
        'quals'       => 'MBBS',
        'role'        => 'Owner & Chief Consultant, DenceSpot Clinic',
        'alumni'      => 'Dr. D. Y. Patil Medical College',
        'url'         => '/dr-nyra',
        'reg_number'  => null,   // ⚠ add medical registration number
        'same_as'     => [],     // ⚠ add Practo / LinkedIn profile URLs
    ],
];

const REVIEWED_BY   = 'Dr. Nyra';
const REVIEWED_DATE = 'August 2026';

/* -------------------------------------------------------------------------
 * Navigation
 * ---------------------------------------------------------------------- */

const NAV_PRIMARY = [
    ['label' => 'Hair Transplant', 'url' => '/hair-transplant-in-gurgaon'],
    ['label' => 'Beard Transplant','url' => '/beard-transplant-gurgaon'],
    ['label' => 'Hair PRP',        'url' => '/hair-prp-treatment-in-gurgaon'],
    ['label' => 'Hair Fall',       'url' => '/hair-fall-treatment-in-gurgaon'],
    ['label' => 'Results',         'url' => '/hair-transplant-results-gurgaon'],
    ['label' => 'About',           'url' => '/about-us'],
    ['label' => 'Contact',         'url' => '/contact'],
];

const NAV_FOOTER = [
    'Clinic' => [
        ['label' => 'Home',            'url' => '/'],
        ['label' => 'About the clinic','url' => '/about-us'],
        ['label' => 'Dr. Nyra',        'url' => '/dr-nyra'],
        ['label' => 'Results',         'url' => '/hair-transplant-results-gurgaon'],
        ['label' => 'Patient reviews', 'url' => '/patient-reviews'],
        ['label' => 'Contact',         'url' => '/contact'],
    ],
    'Treatments' => [
        ['label' => 'Hair transplant in Gurgaon', 'url' => '/hair-transplant-in-gurgaon'],
        ['label' => 'FUE hair transplant',        'url' => '/fue-hair-transplant-in-gurgaon'],
        ['label' => 'DHI hair transplant',        'url' => '/dhi-hair-transplant-in-gurgaon'],
        ['label' => 'Beard transplant',           'url' => '/beard-transplant-gurgaon'],
        ['label' => 'Hair PRP treatment',         'url' => '/hair-prp-treatment-in-gurgaon'],
        ['label' => 'Hair fall treatment',        'url' => '/hair-fall-treatment-in-gurgaon'],
    ],
    'Resources' => [
        ['label' => 'Hair transplant cost', 'url' => '/hair-transplant-cost-in-gurgaon'],
        ['label' => 'Cost, EMI & payment',  'url' => '/cost-and-emi-options'],
        ['label' => 'FAQs',                 'url' => '/faqs'],
        ['label' => 'Recovery & aftercare', 'url' => '/hair-transplant-aftercare'],
        ['label' => 'Blog',                 'url' => '/blog/'],
    ],
];

/* -------------------------------------------------------------------------
 * Shared copy
 * ---------------------------------------------------------------------- */

const MEDICAL_DISCLAIMER = 'The information on this page is general patient education and is not a substitute for a consultation. Results vary between patients; individual treatment plans differ, and suitability for any procedure is determined only after clinical assessment by a qualified doctor. No outcome, density or timeline is guaranteed.';

/* -------------------------------------------------------------------------
 * Helpers
 * ---------------------------------------------------------------------- */

/** Escape for HTML output. Every dynamic value in a template goes through this. */
function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Full canonical address on one line. */
function nap_address_line(): string
{
    return NAP_STREET . ', ' . NAP_LOCALITY . ', ' . NAP_REGION . ' ' . NAP_POSTCODE;
}

/** Absolute URL for a site-relative path. */
function abs_url(string $path): string
{
    return SITE_ORIGIN . '/' . ltrim($path, '/');
}

/** True when $url is the page currently being rendered. */
function is_current(string $url): bool
{
    $here = rtrim(strtok($_SERVER['REQUEST_URI'] ?? '/', '?'), '/');
    $there = rtrim($url, '/');
    return ($here === '' ? '/' : $here) === ($there === '' ? '/' : $there);
}
