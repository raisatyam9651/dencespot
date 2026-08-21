<?php
/**
 * JSON-LD builders.
 *
 * Every page assembles an @graph from these. Two rules that are not
 * negotiable, both from SEO-STRATEGY-dencespot.md §7.5:
 *
 *   1. MedicalClinic, never generic LocalBusiness.
 *   2. Never mark up a rating, review or price that is not visible on the
 *      page. Google treats that as a structured-data violation.
 */

declare(strict_types=1);

/** The clinic entity. Referenced by @id from every other node. */
function schema_clinic(): array
{
    $node = [
        '@type'     => 'MedicalClinic',
        '@id'       => SITE_ORIGIN . '/#clinic',
        'name'      => SITE_NAME,
        'url'       => SITE_ORIGIN . '/',
        'telephone' => PHONE_SCHEMA,
        'email'     => EMAIL,
        'address'   => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => NAP_STREET,
            'addressLocality' => NAP_LOCALITY,
            'addressRegion'   => NAP_REGION,
            'postalCode'      => NAP_POSTCODE,
            'addressCountry'  => NAP_COUNTRY,
        ],
        'medicalSpecialty' => 'Dermatology',
        'openingHoursSpecification' => [[
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => HOURS_DAYS,
            'opens'     => HOURS_OPEN,
            'closes'    => HOURS_CLOSE,
        ]],
    ];

    // Omit geo entirely rather than ship a guessed coordinate.
    if (GEO_LAT !== null && GEO_LNG !== null) {
        $node['geo'] = [
            '@type'     => 'GeoCoordinates',
            'latitude'  => GEO_LAT,
            'longitude' => GEO_LNG,
        ];
    }

    foreach (AREA_SERVED as $area) {
        $node['areaServed'][] = ['@type' => 'City', 'name' => $area];
    }

    return $node;
}

/** A treating doctor. */
function schema_physician(string $key = 'dr-nyra'): ?array
{
    $doc = DOCTORS[$key] ?? null;
    if ($doc === null) {
        return null;
    }

    $node = [
        '@type'    => 'Physician',
        '@id'      => abs_url($doc['url']) . '#physician',
        'name'     => $doc['name'],
        'jobTitle' => $doc['role'],
        'url'      => abs_url($doc['url']),
        'worksFor' => ['@id' => SITE_ORIGIN . '/#clinic'],
    ];

    if (!empty($doc['alumni']))  { $node['alumniOf'] = $doc['alumni']; }
    if (!empty($doc['same_as'])) { $node['sameAs']   = $doc['same_as']; }

    return $node;
}

/**
 * A procedure offered at the clinic.
 *
 * $fields accepts: name, alternateName, procedureType, bodyLocation,
 * howPerformed, preparation, followup, expectedPrognosis.
 */
function schema_procedure(string $pageUrl, array $fields): array
{
    $node = array_merge([
        '@type'    => 'MedicalProcedure',
        '@id'      => abs_url($pageUrl) . '#procedure',
        'performer'=> ['@id' => abs_url(DOCTORS['dr-nyra']['url']) . '#physician'],
        'location' => ['@id' => SITE_ORIGIN . '/#clinic'],
    ], $fields);

    return $node;
}

/** Non-surgical therapy — PRP, GFC, mesotherapy, LLLT. */
function schema_therapy(string $pageUrl, array $fields): array
{
    return array_merge([
        '@type'     => 'MedicalTherapy',
        '@id'       => abs_url($pageUrl) . '#therapy',
        'performer' => ['@id' => abs_url(DOCTORS['dr-nyra']['url']) . '#physician'],
        'location'  => ['@id' => SITE_ORIGIN . '/#clinic'],
    ], $fields);
}

/**
 * Breadcrumbs. $trail is [['name' => …, 'url' => …], …]; the final item
 * omits its url because it is the current page.
 */
function schema_breadcrumbs(array $trail): array
{
    $items = [];
    $last  = count($trail) - 1;

    foreach ($trail as $i => $crumb) {
        $item = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $crumb['name'],
        ];
        if ($i !== $last && !empty($crumb['url'])) {
            $item['item'] = abs_url($crumb['url']);
        }
        $items[] = $item;
    }

    return ['@type' => 'BreadcrumbList', 'itemListElement' => $items];
}

/**
 * FAQ entities.
 *
 * Note: Google restricted FAQ rich results to government and health-authority
 * sites in 2023, so this earns no SERP snippet for a clinic. It stays because
 * AI Overviews, ChatGPT and Perplexity parse it for answer extraction.
 *
 * $faqs must be the SAME array the page renders, so markup and visible text
 * can never drift apart.
 */
function schema_faq(string $pageUrl, array $faqs): ?array
{
    if ($faqs === []) {
        return null;
    }

    $entities = [];
    foreach ($faqs as $faq) {
        $entities[] = [
            '@type'          => 'Question',
            'name'           => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                // Answers may carry inline links; schema wants plain text.
                'text'  => trim(strip_tags($faq['a'])),
            ],
        ];
    }

    return [
        '@type'      => 'FAQPage',
        '@id'        => abs_url($pageUrl) . '#faq',
        'mainEntity' => $entities,
    ];
}

/** A blog post. */
function schema_article(string $pageUrl, array $fields): array
{
    return array_merge([
        '@type'            => 'Article',
        '@id'              => abs_url($pageUrl) . '#article',
        'publisher'        => ['@id' => SITE_ORIGIN . '/#clinic'],
        'mainEntityOfPage' => abs_url($pageUrl),
    ], $fields);
}

/** Site-level entity, homepage only. */
function schema_website(): array
{
    return [
        '@type'     => 'WebSite',
        '@id'       => SITE_ORIGIN . '/#website',
        'name'      => SITE_NAME,
        'url'       => SITE_ORIGIN . '/',
        'publisher' => ['@id' => SITE_ORIGIN . '/#clinic'],
    ];
}

/** Render an @graph as a JSON-LD script tag. */
function schema_render(array $nodes): string
{
    $nodes = array_values(array_filter($nodes));
    if ($nodes === []) {
        return '';
    }

    $json = json_encode(
        ['@context' => 'https://schema.org', '@graph' => $nodes],
        JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
    );

    return '<script type="application/ld+json">' . "\n" . $json . "\n" . '</script>';
}
