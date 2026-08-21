<?php
/**
 * /hair-transplant-results-gurgaon — page #4.
 *
 * Proof is the #1 objection in this vertical, so this page has to exist. It
 * also has to be honest: the gallery is built and empty rather than filled
 * with borrowed or stock imagery.
 *
 * ⚠ NO ImageObject schema is emitted while the slots are placeholders, and
 * NO AggregateRating appears anywhere on this page. Marking up results or
 * ratings that are not really there is a structured-data violation and, for
 * a medical advertiser in India, a regulatory one.
 *
 * To publish a case: add an entry to $cases with real, consented image paths
 * and the metadata filled in. The schema block picks it up automatically.
 */

declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/schema.php';

/**
 * Real cases go here. Each needs: written patient consent on file, before and
 * after shot at the same angle, distance and lighting, an accurate interval,
 * and a graft count that matches the operation note.
 *
 * 'before' / 'after' are image paths. While they are null the card renders as
 * a placeholder and contributes nothing to schema.
 */
$cases = [
    ['id' => 'hairline-01', 'procedure' => 'hair-transplant', 'title' => 'Hairline restoration',
     'technique' => null, 'grafts' => null, 'interval' => null, 'before' => null, 'after' => null,
     'alt' => 'Hairline restoration before and after, same angle and lighting'],
    ['id' => 'crown-01', 'procedure' => 'hair-transplant', 'title' => 'Crown and vertex density',
     'technique' => null, 'grafts' => null, 'interval' => null, 'before' => null, 'after' => null,
     'alt' => 'Crown restoration before and after pair'],
    ['id' => 'beard-01', 'procedure' => 'beard-transplant', 'title' => 'Patchy cheek correction',
     'technique' => null, 'grafts' => null, 'interval' => null, 'before' => null, 'after' => null,
     'alt' => 'Patchy beard correction before and after pair'],
    ['id' => 'beard-02', 'procedure' => 'beard-transplant', 'title' => 'Moustache and goatee connection',
     'technique' => null, 'grafts' => null, 'interval' => null, 'before' => null, 'after' => null,
     'alt' => 'Moustache and goatee connection before and after pair'],
    ['id' => 'prp-01', 'procedure' => 'prp', 'title' => 'PRP course — crown density',
     'technique' => null, 'grafts' => null, 'interval' => null, 'before' => null, 'after' => null,
     'alt' => 'PRP course before and after, crown density'],
    ['id' => 'womens-01', 'procedure' => 'womens', 'title' => 'Widening parting',
     'technique' => null, 'grafts' => null, 'interval' => null, 'before' => null, 'after' => null,
     'alt' => 'Female pattern thinning before and after, parting width'],
];

$filters = [
    'all'               => 'All results',
    'hair-transplant'   => 'Hair transplant',
    'beard-transplant'  => 'Beard transplant',
    'prp'               => 'Hair PRP',
    'womens'            => 'Women’s hair loss',
];

$activeFilter = isset($_GET['type']) && isset($filters[$_GET['type']]) ? (string) $_GET['type'] : 'all';
$visible = $activeFilter === 'all'
    ? $cases
    : array_values(array_filter($cases, static fn (array $c): bool => $c['procedure'] === $activeFilter));

/** Only published cases with real imagery earn schema. */
$published = array_values(array_filter($cases, static fn (array $c): bool => $c['before'] !== null && $c['after'] !== null));

$imageNodes = array_map(static function (array $c): array {
    return [
        '@type'      => 'ImageObject',
        '@id'        => abs_url('/hair-transplant-results-gurgaon') . '#' . $c['id'],
        'contentUrl' => abs_url($c['after']),
        'caption'    => trim($c['title'] . ' — ' . ($c['grafts'] ?? '') . ' ' . ($c['technique'] ?? '') . ', reviewed at ' . ($c['interval'] ?? '')),
        'creator'    => ['@id' => SITE_ORIGIN . '/#clinic'],
    ];
}, $published);

$crumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Results'],
];

$page = [
    'title'       => 'Hair Transplant Results in Gurgaon | DenceSpot Clinic',
    'description' => 'Consented, unedited before and after photographs from DenceSpot Clinic, Gurugram — same angle, same lighting, dated intervals and real graft counts.',
    'url'         => '/hair-transplant-results-gurgaon',
    'crumbs'      => $crumbs,
    'schema'      => array_merge([
        schema_clinic(),
        schema_physician(),
        schema_breadcrumbs($crumbs),
    ], $imageNodes),
];

require __DIR__ . '/includes/header.php';
?>

<section class="section section--canvas">
  <div class="wrap">
    <div style="max-width:64ch">
      <span class="pill pill--dot">Results</span>
      <h1 class="h1 mt-3">Hair and Beard Transplant Results</h1>
      <p class="lead mt-3">Before and after photographs from patients treated at this clinic — shot at the same angle, distance and lighting, unretouched, published with written consent, and labelled with the technique, graft count and how long after the procedure the photograph was taken.</p>
      <p class="body mt-3 measure">Results vary between patients. What these show is what happened for these patients, with their donor supply and their pattern of loss. They are not a prediction of what will happen for you.</p>
    </div>

    <nav class="btn-row mt-6" aria-label="Filter results by procedure">
      <?php foreach ($filters as $key => $label): ?>
        <a class="btn btn--sm <?= $activeFilter === $key ? 'btn--ink' : 'btn--outline' ?>"
           href="/hair-transplant-results-gurgaon<?= $key === 'all' ? '' : '?type=' . e($key) ?>"><?= e($label) ?></a>
      <?php endforeach; ?>
    </nav>

    <?php if ($published === []): ?>
      <div class="card card--dashed card--pad-lg mt-6">
        <?= icon('info', 24, 'var(--ink-muted)') ?>
        <h2 class="h3 mt-3">This gallery is deliberately empty</h2>
        <p class="body mt-3 measure">Every card below is a placeholder waiting for a real, consented case. Nothing here is stock imagery, a licensed photo library, or a result from another clinic.</p>
        <p class="body mt-3 measure">That is not modesty. Publishing borrowed before-and-afters breaches Google's policies on misleading content, breaches medical-advertising rules, and — the part that actually matters — misleads someone making a decision about surgery on their own body. Patients notice, too: the same handful of stock result photos circulate across dozens of clinic websites.</p>
        <p class="body mt-3 measure">Cases appear here as consented patients reach their review points, with the graft count and interval printed on each one so you can judge them properly.</p>
        <div class="btn-row mt-5">
          <a class="btn btn--accent" href="<?= e(WHATSAPP_URL) ?>" rel="noopener" data-track="whatsapp"><?= icon('whatsapp', 18) ?> Ask to see cases like yours</a>
          <a class="btn btn--outline" href="/book-consultation">Book a consultation</a>
        </div>
        <p class="meta mt-4">At a consultation the doctor can show you consented cases relevant to your own pattern and donor supply, which is far more useful than a public gallery in any event.</p>
      </div>
    <?php endif; ?>

    <div class="grid grid--3 mt-6">
      <?php foreach ($visible as $case): ?>
        <article class="card" style="padding:0;overflow:hidden">
          <div class="grid grid--2" style="gap:0">
            <?php if ($case['before'] !== null): ?>
              <img src="<?= e($case['before']) ?>" alt="Before — <?= e($case['alt']) ?>" width="600" height="600" loading="lazy" decoding="async">
              <img src="<?= e($case['after']) ?>" alt="After — <?= e($case['alt']) ?>" width="600" height="600" loading="lazy" decoding="async">
            <?php else: ?>
              <div class="media ratio-1-1"><div class="slot"><span>BEFORE — <?= e($case['alt']) ?></span></div></div>
              <div class="media ratio-1-1"><div class="slot"><span>AFTER — same patient at review</span></div></div>
            <?php endif; ?>
          </div>
          <div style="padding:22px">
            <h2 class="h4"><?= e($case['title']) ?></h2>
            <?php if ($case['grafts'] !== null): ?>
              <p class="meta mt-2"><?= e($case['grafts']) ?> · <?= e($case['technique']) ?> · reviewed at <?= e($case['interval']) ?></p>
            <?php else: ?>
              <p class="meta mt-2" style="color:var(--placeholder)">Technique, graft count and review interval — added with the consented photographs.</p>
            <?php endif; ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="wrap">
    <div style="max-width:62ch">
      <p class="eyebrow">How to read any clinic's gallery</p>
      <h2 class="h2 mt-2">Six Checks Before You Believe a Result</h2>
      <p class="body mt-3">Apply these to ours as readily as to anyone else's. Most published result photography fails at least two.</p>
    </div>
    <div class="grid grid--3 mt-6">
      <div class="card card--tint card--pad-lg"><span class="step-num">1</span><h3 class="h3 mt-3">Same angle and distance</h3><p class="body-s mt-2">A camera moved a few inches closer, or tilted down, changes apparent density dramatically. If the head is at a different angle in the two shots, the pair proves nothing.</p></div>
      <div class="card card--tint card--pad-lg"><span class="step-num">2</span><h3 class="h3 mt-3">Same lighting</h3><p class="body-s mt-2">Harsh overhead light makes a scalp show through; diffuse front light hides it. This is the single easiest way to fake an improvement.</p></div>
      <div class="card card--tint card--pad-lg"><span class="step-num">3</span><h3 class="h3 mt-3">Same hair length and styling</h3><p class="body-s mt-2">Wet, flattened hair in the "before" and dry, styled hair in the "after" is a haircut, not a result.</p></div>
      <div class="card card--tint card--pad-lg"><span class="step-num">4</span><h3 class="h3 mt-3">A stated interval</h3><p class="body-s mt-2">"After" means nothing without a date. Hair restoration is judged at ten to twelve months; an image at four months is mid-growth and not a final result.</p></div>
      <div class="card card--tint card--pad-lg"><span class="step-num">5</span><h3 class="h3 mt-3">A stated graft count</h3><p class="body-s mt-2">Without it you cannot tell whether the coverage was efficient or whether the donor area was emptied to achieve it.</p></div>
      <div class="card card--tint card--pad-lg"><span class="step-num">6</span><h3 class="h3 mt-3">Reverse image search</h3><p class="body-s mt-2">Takes ten seconds and settles the question. A surprising number of clinic galleries return results from other clinics, other countries, or stock libraries.</p></div>
    </div>
  </div>
</section>

<section class="section section--canvas">
  <div class="wrap">
    <div class="split split--sidebar">
      <div>
        <p class="eyebrow">How we photograph</p>
        <h2 class="h2 mt-2">Our Documentation Protocol</h2>
        <p class="body mt-3">Progress is measured, not remembered. Every patient is photographed the same way at every visit, which is what makes a change readable at all.</p>
      </div>
      <div class="grid grid--2">
        <div class="card"><?= icon('chart', 22, 'var(--accent-deep)') ?><h3 class="h4 mt-2">Baseline at consultation</h3><p class="body-s mt-2">Before anything is prescribed or scheduled, so there is a fixed point to compare against.</p></div>
        <div class="card"><?= icon('settings', 22, 'var(--accent-deep)') ?><h3 class="h4 mt-2">Fixed setup</h3><p class="body-s mt-2">Same position, distance, lighting and camera settings at every visit. Standard views: frontal, top-down, both temples, crown, donor.</p></div>
        <div class="card"><?= icon('clock', 22, 'var(--accent-deep)') ?><h3 class="h4 mt-2">Set review points</h3><p class="body-s mt-2">Photographed at each scheduled review through the first twelve months, including the months when nothing appears to be happening.</p></div>
        <div class="card"><?= icon('shield', 22, 'var(--accent-deep)') ?><h3 class="h4 mt-2">Consent, separately</h3><p class="body-s mt-2">Clinical photography is part of your record. Publishing any image requires separate written consent, and that consent can be withdrawn.</p></div>
      </div>
    </div>
  </div>
</section>

<?= cta_band(
    'See Cases Relevant to Your Own Pattern',
    'At a consultation the doctor can show you consented cases with a similar pattern and donor supply to yours — which tells you far more than any public gallery can.',
    'results'
) ?>

<?php require __DIR__ . '/includes/footer.php'; ?>
