<?php
/**
 * Page head, masthead, breadcrumbs.
 *
 * Every page defines $page before including this file:
 *
 *   $page = [
 *     'title'       => 'Beard Transplant in Gurgaon | DenceSpot Clinic',
 *     'description' => 'One sentence, 150–160 chars, written for a human.',
 *     'url'         => '/beard-transplant-gurgaon',
 *     'crumbs'      => [['name' => 'Home', 'url' => '/'], ['name' => 'Beard transplant']],
 *     'schema'      => [schema_clinic(), schema_procedure(...)],
 *     'og_image'    => '/assets/img/og/beard.jpg',   // optional
 *     'nav_active'  => '/beard-transplant-gurgaon',  // optional, defaults to url
 *   ];
 *   require __DIR__ . '/includes/header.php';
 */

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';
require_once __DIR__ . '/components.php';

$page = array_merge([
    'title'       => SITE_NAME,
    'description' => '',
    'url'         => '/',
    'crumbs'      => [],
    'schema'      => [],
    'og_image'    => '',
    'nav_active'  => null,
    'body_class'  => '',
    'noindex'     => false,
], $page ?? []);

$canonical  = abs_url($page['url']);
$navActive  = $page['nav_active'] ?? $page['url'];
$ogImage    = $page['og_image'] !== '' ? abs_url($page['og_image']) : '';
$schemaHtml = schema_render($page['schema']);
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= e($page['title']) ?></title>
<?php if ($page['description'] !== ''): ?>
<meta name="description" content="<?= e($page['description']) ?>">
<?php endif; ?>
<link rel="canonical" href="<?= e($canonical) ?>">
<?php if (SITE_STAGING): ?>
<meta name="robots" content="noindex, nofollow">
<?php elseif ($page['noindex']): ?>
<meta name="robots" content="noindex, follow">
<?php endif; ?>

<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
<meta property="og:title" content="<?= e($page['title']) ?>">
<meta property="og:description" content="<?= e($page['description']) ?>">
<meta property="og:url" content="<?= e($canonical) ?>">
<meta property="og:locale" content="en_IN">
<?php if ($ogImage !== ''): ?>
<meta property="og:image" content="<?= e($ogImage) ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<?php else: ?>
<meta name="twitter:card" content="summary">
<?php endif; ?>
<meta name="twitter:title" content="<?= e($page['title']) ?>">
<meta name="twitter:description" content="<?= e($page['description']) ?>">

<meta name="theme-color" content="#F5F4F7">
<link rel="icon" href="/assets/img/favicon.svg" type="image/svg+xml">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap">
<link rel="stylesheet" href="/assets/css/site.css">

<?= $schemaHtml ?>
</head>
<body<?= $page['body_class'] !== '' ? ' class="' . e($page['body_class']) . '"' : '' ?>>

<a class="skip-link" href="#main">Skip to content</a>

<header class="site-header">
  <div class="site-header__bar">

    <a class="brand" href="/">
      <span class="brand__mark"><?= icon('logo', 19, '#10B981', 1.7) ?></span>
      <span class="brand__name">
        <b>DenceSpot</b>
        <span>Hair Restoration Clinic</span>
      </span>
    </a>

    <nav class="nav" aria-label="Primary">
      <?php foreach (NAV_PRIMARY as $item): ?>
        <a href="<?= e($item['url']) ?>"<?= $item['url'] === $navActive ? ' aria-current="page"' : '' ?>><?= e($item['label']) ?></a>
      <?php endforeach; ?>
    </nav>

    <div class="header-actions">
      <a class="icon-btn" href="tel:<?= e(PHONE_E164) ?>" aria-label="Call the clinic on <?= e(PHONE_DISPLAY) ?>" data-track="call">
        <?= icon('phone', 16) ?>
      </a>
      <a class="btn btn--accent btn--wa" href="<?= e(WHATSAPP_URL) ?>" rel="noopener" data-track="whatsapp">
        <?= icon('whatsapp', 15) ?> WhatsApp
      </a>
      <a class="btn btn--ink btn--book" href="/book-consultation">Book Consultation</a>
      <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="mobile-nav" aria-label="Open menu">
        <?= icon('menu', 20) ?>
      </button>
    </div>

  </div>

  <div class="mobile-nav" id="mobile-nav" data-open="false">
    <ul>
      <?php foreach (NAV_PRIMARY as $item): ?>
        <li><a href="<?= e($item['url']) ?>"<?= $item['url'] === $navActive ? ' aria-current="page"' : '' ?>><?= e($item['label']) ?></a></li>
      <?php endforeach; ?>
      <li><a href="/book-consultation">Book a consultation</a></li>
    </ul>
  </div>
</header>

<?php if (count($page['crumbs']) > 1): ?>
<nav class="crumbs" aria-label="Breadcrumb">
  <ol>
    <?php $lastCrumb = count($page['crumbs']) - 1; ?>
    <?php foreach ($page['crumbs'] as $i => $crumb): ?>
      <li>
        <?php if ($i === $lastCrumb || empty($crumb['url'])): ?>
          <span aria-current="page"><?= e($crumb['name']) ?></span>
        <?php else: ?>
          <a href="<?= e($crumb['url']) ?>"><?= e($crumb['name']) ?></a>
        <?php endif; ?>
      </li>
      <?php if ($i !== $lastCrumb): ?><li aria-hidden="true">&rsaquo;</li><?php endif; ?>
    <?php endforeach; ?>
  </ol>
</nav>
<?php endif; ?>

<main id="main">
