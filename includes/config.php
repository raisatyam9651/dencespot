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
 * CREDENTIAL — resolved with the clinic (Aug 2026): Dr. Nyra holds MBBS and
 * MD (Dermatology), and she both consults on and performs every case. That is
 * what is published sitewide.
 *
 * Still unevidenced and therefore still withheld: the fellowship, the ISHRS
 * membership, the "5,000+ procedures" figure and the "98% success rate" claim
 * that appear on the old live site. Do not reinstate any of them without
 * documentation — on a YMYL medical page those are the expensive kind of
 * mistake. "Board-certified" is dropped deliberately: India has no equivalent
 * board, so the verifiable substitute is the council registration number below.
 *
 * ⚠ STILL REQUIRED: reg_number, the MD institution and year, and same_as URLs.
 */
const DOCTORS = [
    'dr-nyra' => [
        'name'        => 'Dr. Nyra',
        'quals'       => 'MBBS, MD (Dermatology)',
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
    ['label' => 'Treatments', 'url' => '#', 'children' => [
        ['label' => 'Hair Transplant', 'url' => '/hair-transplant-in-gurgaon'],
        ['label' => 'Beard Transplant','url' => '/beard-transplant-gurgaon'],
        ['label' => 'Hair PRP',        'url' => '/hair-prp-treatment-in-gurgaon'],
        ['label' => 'Hair Fall',       'url' => '/hair-fall-treatment-in-gurgaon'],
        ['label' => 'Results',         'url' => '/hair-transplant-results-gurgaon'],
    ]],
    ['label' => 'Blog',            'url' => '/blog/'],
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
 * mbstring fallback
 *
 * The enquiry handler measures user input with mb_strlen()/mb_substr(). On a
 * host without the mbstring extension those calls are a fatal error, which
 * means every submitted lead dies with a 500 and is never stored. That is the
 * single most expensive failure this site can have, so it is polyfilled here
 * rather than left to hosting configuration.
 * ---------------------------------------------------------------------- */

if (!function_exists('mb_strlen')) {
    function mb_strlen(string $string, ?string $encoding = null): int
    {
        // Count UTF-8 characters, not bytes.
        return strlen(preg_replace('/[-¿]/', '', $string) ?? $string);
    }
}

if (!function_exists('mb_substr')) {
    function mb_substr(string $string, int $start, ?int $length = null, ?string $encoding = null): string
    {
        preg_match_all('/./us', $string, $m);
        $chars = $m[0] ?? [];
        $slice = $length === null
            ? array_slice($chars, $start)
            : array_slice($chars, $start, $length);
        return implode('', $slice);
    }
}

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
