<?php
/**
 * Reusable markup blocks.
 *
 * Anything that appears on more than one page lives here, so a change lands
 * everywhere at once. Each function returns a string; templates echo it.
 */

declare(strict_types=1);

/* -------------------------------------------------------------------------
 * Icons
 *
 * One consistent stroke style, 24×24 grid. Never emoji — they do not scale,
 * recolour or read correctly to a screen reader.
 * ---------------------------------------------------------------------- */

function icon(string $name, int $size = 24, string $color = 'currentColor', float $width = 1.7): string
{
    static $paths = [
        'logo'     => '<path d="M6 21c0-6 3-9 6-9s6 3 6 9"/><path d="M8 12c-1.5-3-1-7 1-9"/><path d="M16 12c1.5-3 1-7-1-9"/>',
        'phone'    => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a1 1 0 0 1-1 1A16 16 0 0 1 4 5a1 1 0 0 1 1-1z"/>',
        'whatsapp' => '<path d="M21 11.5a8.5 8.5 0 0 1-12.6 7.4L3 20.5l1.7-5.2A8.5 8.5 0 1 1 21 11.5z"/>',
        'menu'     => '<path d="M4 7h16M4 12h16M4 17h16"/>',
        'close'    => '<path d="M6 6l12 12M18 6L6 18"/>',
        'check'    => '<path d="M4 12.5l5 5L20 6.5"/>',
        'calendar' => '<rect x="3.5" y="5" width="17" height="15" rx="3"/><path d="M8 3v4M16 3v4M3.5 10h17"/>',
        'shield'   => '<path d="M12 3l7 3v5.5c0 4.2-2.9 7.6-7 9-4.1-1.4-7-4.8-7-9V6z"/><path d="M9.5 12l1.8 1.8L15 10"/>',
        'info'     => '<circle cx="12" cy="12" r="9"/><path d="M12 8h.01M12 11v5"/>',
        'hairline' => '<path d="M4 16c3-6 13-6 16 0"/><path d="M7 16v3M12 14.5v4.5M17 16v3"/>',
        'beard'    => '<path d="M4 18c0-5 3.6-8 8-8s8 3 8 8"/><path d="M7 10.5C6 8 6.4 5 8 3.5M17 10.5c1-2.5.6-5.5-1-7"/>',
        'list'     => '<path d="M4 6h16M4 12h10M4 18h6"/>',
        'settings' => '<circle cx="12" cy="12" r="3"/><path d="M12 3v3M12 18v3M3 12h3M18 12h3M5.6 5.6l2.1 2.1M16.3 16.3l2.1 2.1M18.4 5.6l-2.1 2.1M7.7 16.3l-2.1 2.1"/>',
        'heart'    => '<path d="M12 20s-7-4.3-7-9.5A4 4 0 0 1 12 8a4 4 0 0 1 7 2.5C19 15.7 12 20 12 20z"/>',
        'chat'     => '<path d="M4 5h16v13H8l-4 3z"/><path d="M9 11h6"/>',
        'doc'      => '<path d="M6 3h9l4 4v14H6z"/><path d="M9 12h7M9 16h5"/>',
        'user'     => '<circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-7 8-7s8 2.6 8 7"/>',
        'pencil'   => '<path d="M4 20l4-1 9-9-3-3-9 9z"/><path d="M14 5l3 3"/>',
        'chart'    => '<path d="M3 17l6-6 4 4 8-8"/><path d="M21 7v5h-5"/>',
        'pin'      => '<path d="M12 21s-7-5.5-7-10a7 7 0 1 1 14 0c0 4.5-7 10-7 10z"/><circle cx="12" cy="11" r="2.5"/>',
        'clock'    => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'mail'     => '<rect x="3" y="5" width="18" height="14" rx="2.5"/><path d="M3.5 7l8.5 6 8.5-6"/>',
        'arrow'    => '<path d="M5 12h14M13 6l6 6-6 6"/>',
        'rupee'    => '<path d="M7 5h9M7 9h9M14 5c0 4-3 4.5-7 4.5L14 19"/>',
        'scale'    => '<path d="M12 4v16M6 8h12"/><path d="M6 8l-2.5 6a2.5 2.5 0 0 0 5 0z"/><path d="M18 8l-2.5 6a2.5 2.5 0 0 0 5 0z"/>',
        'star'     => '<path d="M12 4l2.4 5 5.6.7-4 3.9 1 5.4-5-2.7-5 2.7 1-5.4-4-3.9 5.6-.7z"/>',
        'search'   => '<circle cx="11" cy="11" r="6.5"/><path d="M16 16l4 4"/>',
    ];

    $body = $paths[$name] ?? $paths['info'];

    return sprintf(
        '<svg width="%d" height="%d" viewBox="0 0 24 24" fill="none" stroke="%s" stroke-width="%s" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">%s</svg>',
        $size, $size, $body === '' ? 'currentColor' : $color, $width, $body
    );
}

/* -------------------------------------------------------------------------
 * Doctor credit line
 *
 * Used by every hero badge. Exists so a credential is never retyped into a
 * template — when config changes, every page changes with it. Retyping is
 * exactly how the two design exports ended up claiming different
 * qualifications for the same doctor.
 * ---------------------------------------------------------------------- */

function doctor_credit(string $key = 'dr-nyra'): string
{
    $doc = DOCTORS[$key] ?? null;
    if ($doc === null) {
        return '';
    }
    return e($doc['quals']) . ' · ' . e($doc['role']);
}

function doctor_name(string $key = 'dr-nyra'): string
{
    return e(DOCTORS[$key]['name'] ?? '');
}

/** "Dr. Nyra, MBBS, MD (Dermatology)" */
function doctor_full(string $key = 'dr-nyra'): string
{
    $doc = DOCTORS[$key] ?? null;
    return $doc === null ? '' : e($doc['name']) . ', ' . e($doc['quals']);
}

/* -------------------------------------------------------------------------
 * Image placeholder
 *
 * Stands in until real clinic photography arrives. Deliberately obvious —
 * a grey box is honest; a stock photo of a stranger is not.
 * ---------------------------------------------------------------------- */

function slot(string $description, string $ratio = 'ratio-4-3', string $extra = ''): string
{
    return sprintf(
        '<div class="media %s %s"><div class="slot"><span>%s</span></div></div>',
        e($ratio), e($extra), e($description)
    );
}

/* -------------------------------------------------------------------------
 * Ticked benefit list
 * ---------------------------------------------------------------------- */

function ticks(array $items, bool $twoCol = true): string
{
    $out = '<ul class="ticks' . ($twoCol ? ' ticks--2col' : '') . '">';
    foreach ($items as $item) {
        $out .= '<li class="tick">' . icon('check', 18, 'currentColor', 2.2) . '<span>' . e($item) . '</span></li>';
    }
    return $out . '</ul>';
}

/* -------------------------------------------------------------------------
 * FAQ accordion
 *
 * Pass the SAME array to schema_faq() so the markup and the visible text can
 * never drift apart. Answers may contain inline <a> and <strong>.
 * ---------------------------------------------------------------------- */

function faq_list(array $faqs, int $openFirst = 1): string
{
    $out = '<div class="faq">';
    foreach ($faqs as $i => $faq) {
        $open = $i < $openFirst ? ' open' : '';
        $out .= '<details' . $open . '>'
              . '<summary>' . e($faq['q']) . '</summary>'
              . '<p>' . $faq['a'] . '</p>'
              . '</details>';
    }
    return $out . '</div>';
}

/* -------------------------------------------------------------------------
 * NAP block
 * ---------------------------------------------------------------------- */

function nap_block(): string
{
    ob_start(); ?>
<dl class="dl">
  <div>
    <dt>Address</dt>
    <dd><?= e(NAP_STREET) ?>,<br><?= e(NAP_LOCALITY) ?>, <?= e(NAP_REGION) ?> <?= e(NAP_POSTCODE) ?></dd>
  </div>
  <div>
    <dt>Phone</dt>
    <dd><a href="tel:<?= e(PHONE_E164) ?>" data-track="call"><?= e(PHONE_DISPLAY) ?></a></dd>
  </div>
  <div>
    <dt>WhatsApp</dt>
    <dd><a href="<?= e(WHATSAPP_URL) ?>" rel="noopener" data-track="whatsapp">Message <?= e(PHONE_DISPLAY) ?></a></dd>
  </div>
  <div>
    <dt>Email</dt>
    <dd><a href="mailto:<?= e(EMAIL) ?>"><?= e(EMAIL) ?></a></dd>
  </div>
  <div>
    <dt>Hours</dt>
    <dd><?= e(HOURS_DISPLAY) ?><span style="display:block;font-weight:500;color:var(--ink-muted)"><?= e(HOURS_NOTE) ?></span></dd>
  </div>
</dl>
<?php
    return (string) ob_get_clean();
}

/* -------------------------------------------------------------------------
 * Enquiry form
 *
 * Posts to /enquire.php, which validates and redirects to /thank-you so a
 * conversion event can actually fire. $source records which page produced
 * the lead.
 * ---------------------------------------------------------------------- */

function enquiry_form(string $source, array $treatments = [], bool $onInk = true): string
{
    if ($treatments === []) {
        $treatments = [
            'Hair transplant', 'Beard transplant', 'Hair PRP / GFC',
            'Hair fall treatment', 'Not sure — please advise',
        ];
    }

    ob_start(); ?>
<form class="form<?= $onInk ? ' form--onink' : '' ?>" action="/enquire.php" method="post" novalidate>
  <input type="hidden" name="source" value="<?= e($source) ?>">
  <p class="sr-only"><label>Leave this field empty <input type="text" name="website" tabindex="-1" autocomplete="off"></label></p>
  <div class="stack-sm">
    <div class="field">
      <label for="f-name-<?= e($source) ?>">Full name</label>
      <input class="input" id="f-name-<?= e($source) ?>" name="name" type="text" autocomplete="name" required>
    </div>
    <div class="field">
      <label for="f-phone-<?= e($source) ?>">Phone</label>
      <input class="input" id="f-phone-<?= e($source) ?>" name="phone" type="tel" inputmode="tel" autocomplete="tel" required>
    </div>
    <div class="field">
      <label for="f-treatment-<?= e($source) ?>">What are you enquiring about?</label>
      <select class="select" id="f-treatment-<?= e($source) ?>" name="treatment">
        <?php foreach ($treatments as $t): ?>
          <option><?= e($t) ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="field">
      <label for="f-message-<?= e($source) ?>">Anything you want the doctor to know</label>
      <textarea class="textarea" id="f-message-<?= e($source) ?>" name="message" rows="2"></textarea>
    </div>
    <button class="btn btn--block" type="submit" style="background:#fff;color:var(--ink)">Book My Consultation</button>
    <p class="fine">Your details are used only to arrange your consultation.</p>
  </div>
</form>
<?php
    return (string) ob_get_clean();
}

/* -------------------------------------------------------------------------
 * Closing CTA band
 * ---------------------------------------------------------------------- */

function cta_band(string $heading, string $body, string $source, array $treatments = []): string
{
    ob_start(); ?>
<section class="section section--canvas" id="book">
  <div class="wrap">
    <div class="cta-band">
      <div>
        <p class="eyebrow" style="color:var(--accent)">Next step</p>
        <h2 class="h2 mt-2"><?= e($heading) ?></h2>
        <p class="body-l mt-3" style="color:rgba(255,255,255,.72);max-width:56ch"><?= e($body) ?></p>
        <div class="btn-row mt-5">
          <a class="btn btn--lg btn--accent" href="/book-consultation"><?= icon('calendar', 18) ?> Book a Consultation</a>
          <a class="btn btn--lg btn--ghost" href="<?= e(WHATSAPP_URL) ?>" rel="noopener" data-track="whatsapp"><?= icon('whatsapp', 19) ?> WhatsApp Us</a>
        </div>
        <p class="fine mt-4" style="max-width:56ch">Suitability is determined after clinical assessment. This page is patient education and does not constitute medical advice.</p>
      </div>
      <div class="card card--ink card--pad-lg">
        <p class="h4" style="color:#fff">Quick enquiry</p>
        <div class="mt-3"><?= enquiry_form($source, $treatments) ?></div>
      </div>
    </div>
  </div>
</section>
<?php
    return (string) ob_get_clean();
}

/* -------------------------------------------------------------------------
 * Doctor E-E-A-T block
 * ---------------------------------------------------------------------- */

function doctor_block(string $whyItMatters, string $portraitAlt = 'Dr. Nyra — professional portrait'): string
{
    $doc = DOCTORS['dr-nyra'];

    ob_start(); ?>
<section class="section section--canvas" id="doctor">
  <div class="wrap">
    <div class="split split--wide-right">
      <div class="media ratio-4-5 media--shadow"><img src="/assets/img/dr-nayra.webp" alt="<?= e($portraitAlt) ?>" width="800" height="1000" loading="lazy" decoding="async"></div>
      <div>
        <p class="eyebrow">Who performs and reviews this treatment</p>
        <h2 class="h2 mt-2"><?= doctor_full() ?></h2>
        <p class="body-l mt-1" style="font-weight:600"><?= e($doc['role']) ?></p>
        <p class="body mt-3 measure">Qualified MBBS from <?= e($doc['alumni']) ?>, and holds an MD in Dermatology. Three years of clinical work in Germany followed — two at Bio Hair Clinic and one at St. Georg Klinikum Eisenach — before establishing DenceSpot in Gurugram.</p>
        <p class="body mt-3 measure"><?= e($whyItMatters) ?></p>

        <div class="grid grid--2 mt-4" style="max-width:640px">
          <div class="card"><p class="eyebrow" style="color:var(--ink-muted)">Qualification</p><p class="h4 mt-1"><?= e($doc['quals']) ?></p></div>
          <div class="card"><p class="eyebrow" style="color:var(--ink-muted)">Training</p><p class="h4 mt-1">3 years, Germany</p></div>
          <div class="card"><p class="eyebrow" style="color:var(--ink-muted)">Specialization</p><p class="h4 mt-1">Dermatology</p></div>
          <?php if (!empty($doc['reg_number'])): ?>
          <div class="card"><p class="eyebrow" style="color:var(--ink-muted)">Registration</p><p class="h4 mt-1"><?= e($doc['reg_number']) ?></p></div>
          <?php endif; ?>
        </div>

        <div class="btn-row mt-4" style="align-items:center">
          <a class="btn btn--ink" href="<?= e($doc['url']) ?>">Meet Your Doctor</a>
          <p class="meta" style="max-width:30ch">Medically reviewed by <?= e(REVIEWED_BY) ?> · last reviewed <?= e(REVIEWED_DATE) ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    return (string) ob_get_clean();
}

/* -------------------------------------------------------------------------
 * Local / visit-us block
 * ---------------------------------------------------------------------- */

function local_block(string $heading, string $intro): string
{
    ob_start(); ?>
<section class="section section--white" id="local">
  <div class="wrap">
    <div class="split split--top" style="align-items:start">
      <div>
        <p class="eyebrow">Visit the clinic</p>
        <h2 class="h2 mt-2"><?= e($heading) ?></h2>
        <p class="body mt-3 measure"><?= e($intro) ?></p>
        <?= nap_block() ?>
        <div class="btn-row mt-4">
          <a class="btn btn--outline" href="<?= e(MAPS_URL) ?>" rel="noopener"><?= icon('pin', 17) ?> Directions on Google Maps</a>
          <a class="btn btn--outline" href="/contact">Full clinic details</a>
        </div>
      </div>
      <div>
        <div class="media ratio-16-10">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.3229126883884!2d77.0438613!3d28.439680699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5e4f6f45491%3A0x9dc43165216a74e6!2sDencespot%20Clinic!5e0!3m2!1sen!2sus!4v1787587082143!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
        <div class="grid grid--2 mt-3">
          <div class="media ratio-4-3 media--sm media--shadow"><img src="/assets/img/clinic-front-board.jpg" alt="DenceSpot Clinic Entrance and Signage, Sector 39 Gurgaon" width="800" height="600" loading="lazy"></div>
          <div class="card">
            <p class="eyebrow" style="color:var(--ink-muted)">Getting here</p>
            <ul class="stack-sm mt-2">
              <?php foreach (DIRECTIONS as $line): ?>
                <?php if ($line !== null): ?>
              <li class="meta"><?= e($line) ?></li>
                <?php endif; ?>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    return (string) ob_get_clean();
}

/* -------------------------------------------------------------------------
 * Before & After Interactive Slider block
 * ---------------------------------------------------------------------- */

function before_after_slider_section(): string
{
    $results = [
        [
            'id' => 'uttam-gurgaon',
            'title' => 'Uttam — Hairline & Temple Restoration',
            'category' => 'FUE Hair Transplant (Gurugram)',
            'img' => '/assets/img/case-uttam-gurgaon.jpg',
            'badge' => 'BEFORE & AFTER RESULT',
            'type' => 'image',
            'desc' => 'Receding hairline & frontal scalp completely restored with age-appropriate hairline design and dense graft placement.',
            'meta' => 'Procedure: FUE · Location: Gurgaon · Reviewed at 12 Months'
        ],
        [
            'id' => 'shukri-europe',
            'title' => 'Shukri — High-Density Frontal Grafts',
            'category' => 'Advanced Micro-FUE (International)',
            'img' => '/assets/img/case-shukri-europe.jpg',
            'badge' => 'BEFORE & AFTER RESULT',
            'type' => 'image',
            'desc' => 'High graft count frontal area design & immediate post-op high density graft implantation.',
            'meta' => 'Procedure: Micro-FUE · Patient: Europe · OT Completed'
        ],
    ];

    ob_start(); ?>
<section class="section section--white" id="results-gallery">
  <div class="wrap">
    <div class="measure" style="text-align: center; margin-inline: auto;">
      <span class="pill pill--dot">Real Patient Results &amp; Testimonials</span>
      <h2 class="h2 mt-2">Before &amp; After Cases &amp; Video Testimonials</h2>
      <p class="body mt-3">Consented, unedited before and after transformation photographs and video reviews from patients treated personally by <strong>Dr. Nyra</strong> at DenceSpot Clinic, Sector 39 Gurugram.</p>
    </div>

    <!-- Results Cards Grid (Matching Awards Section Style) -->
    <div class="grid grid--2 mt-6" style="gap:24px">
      <?php foreach ($results as $r): ?>
        <div class="card card--pad-lg cert-card" style="display:flex; flex-direction:column; justify-content:space-between;">
          <div>
            <div class="media ratio-16-10 media--shadow" style="border:1px solid var(--line); position:relative; overflow:hidden; border-radius:var(--r-md); background:#1e183a; cursor:pointer;" onclick="<?= $r['type'] === 'video' ? "openVideoModal('" . e($r['video_url']) . "', '" . e($r['title']) . "')" : "openCertModal('" . e($r['img']) . "', '" . e($r['title']) . "')" ?>">
              <img src="<?= e($r['img']) ?>" alt="<?= e($r['title']) ?>" width="800" height="500" loading="lazy" style="width:100%; height:100%; object-fit:cover; transition:transform 0.3s ease;">
              
              <?php if ($r['type'] === 'video'): ?>
                <div style="position:absolute; inset:0; background:rgba(26,17,71,0.4); display:flex; align-items:center; justify-content:center;">
                  <div style="width:64px; height:64px; border-radius:50%; background:var(--accent); color:#fff; display:flex; align-items:center; justify-content:center; box-shadow:0 8px 24px rgba(16,185,129,0.5); transition:transform 0.2s ease;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                  </div>
                </div>
              <?php endif; ?>
            </div>

            <div style="margin-top:16px;">
              <span class="pill pill--dot" style="font-size:10px"><?= e($r['badge']) ?></span>
              <h3 class="h3 mt-2"><?= e($r['title']) ?></h3>
              <p class="body-s mt-2"><?= e($r['desc']) ?></p>
            </div>
          </div>

          <div style="margin-top:16px; padding-top:14px; border-top:1px solid var(--line); display:flex; align-items:center; justify-space-between; flex-wrap:wrap; gap:10px;">
            <span class="meta"><?= e($r['meta']) ?></span>
            <button type="button" class="btn btn--sm btn--outline" onclick="<?= $r['type'] === 'video' ? "openVideoModal('" . e($r['video_url']) . "', '" . e($r['title']) . "')" : "openCertModal('" . e($r['img']) . "', '" . e($r['title']) . "')" ?>" style="margin-left:auto;">
              <?= $r['type'] === 'video' ? '▶ Watch Video' : '🔍 Enlarge View' ?>
            </button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="btn-row mt-6" style="justify-content:center">
      <a class="btn btn--ink" href="/hair-transplant-results-gurgaon">View Full Results Gallery</a>
      <a class="btn btn--accent" href="<?= e(WHATSAPP_URL) ?>" rel="noopener" data-track="whatsapp"><?= icon('whatsapp', 18) ?> Ask Cases Like Yours</a>
    </div>
  </div>

  <!-- Smooth Infinite Sliding Marquee Track for Patient Cases -->
  <div class="marquee mt-6">
    <div class="marquee-track">
      <?php
      $galleryFiles = glob(__DIR__ . '/../assets/img/gallery/*.{jpg,jpeg,png,webp,JPG,PNG,JPEG,WEBP}', GLOB_BRACE);
      $galleryImages = [];
      if (!empty($galleryFiles)) {
          foreach ($galleryFiles as $filepath) {
              $filename = basename($filepath);
              $galleryImages[] = '/assets/img/gallery/' . $filename;
          }
      }
      if (empty($galleryImages)) {
          $galleryImages = [
              '/assets/img/case-uttam-gurgaon.jpg',
              '/assets/img/case-shukri-europe.jpg',
              '/assets/img/clinic-facade.jpg',
              '/assets/img/clinic-front-board.jpg',
              '/assets/img/clinic-equipment.jpg',
              '/assets/img/dr-nayra.webp',
          ];
      }
      // Duplicate array to build 2 identical sets for 100% infinite endless loop without gaps
      $marqueeLoop = array_merge($galleryImages, $galleryImages);
      ?>
      <?php foreach ($marqueeLoop as $imgUrl): ?>
        <img src="<?= e($imgUrl) ?>" alt="DenceSpot Patient Result Transformation" loading="lazy" onclick="openCertModal('<?= e($imgUrl) ?>', 'DenceSpot Clinic — Patient Case &amp; Results')" style="cursor:pointer;">
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Video Player Lightbox Modal -->
<div id="video-modal" style="display:none; position:fixed; inset:0; z-index:9999; background:rgba(0,0,0,0.88); backdrop-filter:blur(8px); align-items:center; justify-content:center; padding:20px;" onclick="closeVideoModal(event)">
  <div style="position:relative; max-width:900px; width:100%; background:#100d28; border-radius:16px; overflow:hidden; box-shadow:0 25px 50px -12px rgba(0,0,0,0.7); border:1px solid rgba(255,255,255,0.15);">
    <div style="display:flex; align-items:center; justify-content:space-between; padding:16px 24px; border-bottom:1px solid rgba(255,255,255,0.1); color:#fff;">
      <h3 id="video-modal-title" class="h4" style="margin:0; color:#fff;">Patient Video Testimonial</h3>
      <button type="button" onclick="closeVideoModalForce()" style="background:none; border:none; font-size:24px; cursor:pointer; color:#fff;">&times;</button>
    </div>
    <div style="position:relative; padding-bottom:56.25%; height:0; background:#000;">
      <iframe id="video-modal-iframe" src="" style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</div>
<?php
    return (string) ob_get_clean();
}

/* -------------------------------------------------------------------------
 * Awards & Accreditations block (NABH Certifications)
 * ---------------------------------------------------------------------- */

function awards_certificates_section(): string
{
    $certs = [
        [
            'id' => 'cert-1',
            'title' => 'Excellence in Clinical Services',
            'category' => 'Dermatology & Cosmetology',
            'issuer' => 'National Accreditation Board for Hospitals & Healthcare Providers (NABH)',
            'img' => '/assets/img/cert-nabh-excellence.jpg',
            'cert_no' => '646744646-2026-001',
            'validity' => '01 Sep 2026 – 31 Aug 2029',
            'badge' => 'NABH Clinical Excellence',
            'alt' => 'NABH Certificate - Excellence in Clinical Services Dermatology & Cosmetology - DenceSpot Clinic'
        ],
        [
            'id' => 'cert-2',
            'title' => 'NABH Accreditation — Dermatology Clinic',
            'category' => 'Dermatology Clinic Standards (Edition 1, 2021)',
            'issuer' => 'National Accreditation Board for Hospitals & Healthcare Providers (NABH)',
            'img' => '/assets/img/cert-nabh-dermatology.jpg',
            'cert_no' => '646744646-2026-001',
            'validity' => '01 Sep 2026 – 31 Aug 2029',
            'badge' => 'NABH Accredited',
            'alt' => 'NABH Accreditation Certificate - Dermatology Clinic - DenceSpot Clinic'
        ],
        [
            'id' => 'cert-3',
            'title' => 'NABH Accreditation — Allopathic Clinic',
            'category' => 'Allopathic Clinic Standards (Edition 1, 2021)',
            'issuer' => 'National Accreditation Board for Hospitals & Healthcare Providers (NABH)',
            'img' => '/assets/img/cert-nabh-allopathic.jpg',
            'cert_no' => '646744646-2026-001',
            'validity' => '01 Sep 2026 – 31 Aug 2029',
            'badge' => 'NABH Accredited',
            'alt' => 'NABH Accreditation Certificate - Allopathic Clinic - DenceSpot Clinic'
        ],
    ];

    ob_start(); ?>
<section class="section section--white" id="awards">
  <div class="wrap">
    <div class="measure" style="text-align: center; margin-inline: auto;">
      <span class="pill pill--dot">Official Accreditations</span>
      <h2 class="h2 mt-2">Awards &amp; NABH Certifications</h2>
      <p class="body mt-3">DenceSpot Clinic is officially accredited by the <strong>National Accreditation Board for Hospitals &amp; Healthcare Providers (NABH)</strong> for clinical excellence, patient safety, and high-standard care in Dermatology, Cosmetology &amp; Allopathic Medicine.</p>
    </div>

    <!-- Official Certificates Cards Grid -->
    <div class="grid grid--3 mt-6">
      <?php foreach ($certs as $c): ?>
        <div class="card card--pad-lg text-center cert-card" style="text-align:center">
          <div class="media ratio-4-5 media--shadow cert-img-wrap" style="border:1px solid var(--line); overflow:hidden; border-radius:var(--r-md); background:#fafafa; cursor:pointer;" onclick="openCertModal('<?= e($c['img']) ?>', '<?= e($c['title']) ?>')">
            <img src="<?= e($c['img']) ?>" alt="<?= e($c['alt']) ?>" width="800" height="1100" loading="lazy" style="width:100%; height:auto; object-fit:contain; transition:transform 0.3s ease;">
          </div>
          <span class="pill pill--dot mt-3" style="font-size:10px"><?= e($c['badge']) ?></span>
          <h3 class="h4 mt-2"><?= e($c['title']) ?></h3>
          <p class="meta mt-1"><?= e($c['category']) ?></p>
          <p class="fine mt-2" style="color:var(--ink-muted)">Cert No: <strong><?= e($c['cert_no']) ?></strong><br>Valid: <?= e($c['validity']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Smooth Infinite Marquee Carousel -->
  <div class="marquee mt-6">
    <div class="marquee-track">
      <?php
      $certSet = array_merge($certs, $certs, $certs);
      $certDouble = array_merge($certSet, $certSet);
      ?>
      <?php foreach ($certDouble as $c): ?>
        <img src="<?= e($c['img']) ?>" alt="<?= e($c['alt']) ?>" loading="lazy" onclick="openCertModal('<?= e($c['img']) ?>', '<?= e($c['title']) ?>')" style="cursor:pointer;">
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Lightbox Modal for Certificate Zoom -->
<div id="cert-modal" style="display:none; position:fixed; inset:0; z-index:9999; background:rgba(0,0,0,0.85); backdrop-filter:blur(8px); align-items:center; justify-content:center; padding:20px;" onclick="closeCertModal(event)">
  <div style="position:relative; max-width:900px; max-height:90vh; width:100%; background:#fff; border-radius:16px; overflow:hidden; box-shadow:0 25px 50px -12px rgba(0,0,0,0.5); display:flex; flex-direction:column;">
    <div style="display:flex; align-items:center; justify-content:space-between; padding:16px 24px; border-bottom:1px solid var(--line); background:#fff;">
      <h3 id="cert-modal-title" class="h4" style="margin:0;">NABH Certificate</h3>
      <button type="button" onclick="closeCertModalForce()" style="background:none; border:none; font-size:24px; cursor:pointer; color:var(--ink);">&times;</button>
    </div>
    <div style="padding:20px; text-align:center; overflow-y:auto; flex:1; background:#f9f9fb;">
      <img id="cert-modal-img" src="" alt="NABH Certificate Full View" style="max-width:100%; max-height:75vh; height:auto; object-fit:contain; border-radius:8px; box-shadow:0 8px 24px rgba(0,0,0,0.15);">
    </div>
  </div>
</div>
<?php
    return (string) ob_get_clean();
}


