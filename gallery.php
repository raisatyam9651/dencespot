<?php
/**
 * /gallery — Photo & Transformation Gallery Page
 */

declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/schema.php';

$crumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Gallery'],
];

// Fetch all photos from assets/img/gallery/
$galleryDir = __DIR__ . '/assets/img/gallery';
$photos = [];

if (is_dir($galleryDir)) {
    $files = scandir($galleryDir);
    $idx = 0;
    foreach ($files as $filename) {
        if ($filename === '.' || $filename === '..') continue;
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'avif'], true)) {
            $idx++;
            $url = '/assets/img/gallery/' . $filename;
            
            $category = 'results';
            $badge = 'BEFORE & AFTER RESULT';
            $title = 'Patient Transformation Case #' . $idx;
            
            $lowerName = strtolower($filename);
            if (str_contains($lowerName, 'cert') || str_contains($lowerName, 'excellence') || str_contains($lowerName, 'national')) {
                $category = 'certificates';
                $badge = 'NABH ACCREDITATION';
                $title = 'NABH Accreditation Certificate';
            } elseif (str_contains($lowerName, 'clinic') || str_contains($lowerName, 'dsc') || str_contains($lowerName, 'unnamed')) {
                $category = 'clinic';
                $badge = 'CLINICAL FACILITY';
                $title = 'DenceSpot Clinic & Infrastructure';
            }
            
            $photos[] = [
                'id'       => 'photo-' . $idx,
                'url'      => $url,
                'title'    => $title,
                'category' => $category,
                'badge'    => $badge,
                'alt'      => 'DenceSpot Clinic — ' . $title,
            ];
        }
    }
}

$page = [
    'title'       => 'Photo & Results Gallery | DenceSpot Clinic Gurgaon',
    'description' => 'Explore the complete photo gallery of DenceSpot Clinic: real patient hair transplant results, clinical facility in Sector 39 Gurgaon, and official NABH accreditation certificates.',
    'url'         => '/gallery',
    'crumbs'      => $crumbs,
    'schema'      => [
        schema_clinic(),
        schema_physician(),
        schema_breadcrumbs($crumbs),
        [
            '@type' => 'CollectionPage',
            '@id'   => abs_url('/gallery') . '#page',
            'name'  => 'Photo & Results Gallery',
            'about' => ['@id' => SITE_ORIGIN . '/#clinic'],
        ],
    ],
];

require __DIR__ . '/includes/header.php';
?>

<section class="hero" style="padding-bottom:2rem;">
  <div class="wrap">
    <div class="measure" style="text-align: center; margin-inline: auto;">
      <span class="pill pill--dot">Complete Photo Library</span>
      <h1 class="h1 mt-3">DenceSpot Clinic Photo &amp; Results Gallery</h1>
      <p class="lead mt-3">Browse our unedited patient transformation cases, doctor-led procedure facilities in Sector 39 Gurugram, and official NABH accreditation certificates.</p>
    </div>

    <!-- Filter Buttons -->
    <div class="btn-row mt-5" style="justify-content:center; gap:10px;">
      <button type="button" class="btn btn--sm btn--ink gallery-filter-btn active" data-filter="all">All Photos (<?= count($photos) ?>)</button>
      <button type="button" class="btn btn--sm btn--outline gallery-filter-btn" data-filter="results">Patient Results</button>
      <button type="button" class="btn btn--sm btn--outline gallery-filter-btn" data-filter="clinic">Clinic &amp; Infrastructure</button>
      <button type="button" class="btn btn--sm btn--outline gallery-filter-btn" data-filter="certificates">NABH Certificates</button>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="wrap">
    <div class="grid grid--3" id="gallery-grid" style="gap:24px;">
      <?php foreach ($photos as $p): ?>
        <div class="card gallery-item-card" data-category="<?= e($p['category']) ?>" style="display:flex; flex-direction:column; justify-content:space-between; transition:transform 0.3s ease, box-shadow 0.3s ease;">
          <div>
            <div class="media ratio-4-3 media--shadow" style="border:1px solid var(--line); position:relative; overflow:hidden; border-radius:var(--r-md); background:#1e183a; cursor:pointer;" onclick="openCertModal('<?= e($p['url']) ?>', '<?= e($p['title']) ?>')">
              <img src="<?= e($p['url']) ?>" alt="<?= e($p['alt']) ?>" width="800" height="600" loading="lazy" style="width:100%; height:100%; object-fit:cover; transition:transform 0.3s ease;">
            </div>
            <div style="margin-top:14px;">
              <span class="pill pill--dot" style="font-size:10px"><?= e($p['badge']) ?></span>
              <h3 class="h4 mt-2"><?= e($p['title']) ?></h3>
            </div>
          </div>
          <div style="margin-top:14px; padding-top:10px; border-top:1px solid var(--line); text-align:right;">
            <button type="button" class="btn btn--sm btn--outline" onclick="openCertModal('<?= e($p['url']) ?>', '<?= e($p['title']) ?>')">
              🔍 Click to Enlarge
            </button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="btn-row mt-7" style="justify-content:center">
      <a class="btn btn--lg btn--accent" href="<?= e(WHATSAPP_URL) ?>" rel="noopener" data-track="whatsapp"><?= icon('whatsapp', 19) ?> Talk on WhatsApp</a>
      <a class="btn btn--lg btn--ink" href="/book-consultation"><?= icon('calendar', 18) ?> Book Consultation</a>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  var btns = document.querySelectorAll('.gallery-filter-btn');
  var items = document.querySelectorAll('.gallery-item-card');

  btns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var filter = btn.getAttribute('data-filter');
      btns.forEach(function (b) {
        b.classList.remove('active', 'btn--ink');
        b.classList.add('btn--outline');
      });
      btn.classList.add('active', 'btn--ink');
      btn.classList.remove('btn--outline');

      items.forEach(function (item) {
        var cat = item.getAttribute('data-category');
        if (filter === 'all' || cat === filter) {
          item.style.display = 'flex';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
});
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
