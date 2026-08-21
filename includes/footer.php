<?php
/**
 * Site footer, sticky mobile CTA, and the small amount of JS the site needs.
 * Closes <main> opened in header.php.
 */

declare(strict_types=1);
?>
</main>

<footer class="site-footer">
  <div class="wrap">

    <div class="site-footer__cols">
      <div>
        <div style="display:flex;align-items:center;gap:10px">
          <span class="brand__mark" style="background:rgba(255,255,255,.1)"><?= icon('logo', 19, '#10B981', 1.7) ?></span>
          <span style="font-size:17px;font-weight:800;color:#fff;letter-spacing:-.01em">DenceSpot</span>
        </div>
        <p class="mt-2" style="font-size:14px;line-height:1.65;max-width:34ch">Doctor-led hair restoration in Gurugram. Hair transplant, beard transplant, PRP and medical hair-loss treatment, planned case by case.</p>
      </div>

      <?php foreach (NAV_FOOTER as $heading => $links): ?>
      <div>
        <h2><?= e($heading) ?></h2>
        <ul>
          <?php foreach ($links as $link): ?>
            <li><a href="<?= e($link['url']) ?>"><?= e($link['label']) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>

      <div>
        <h2>Contact</h2>
        <ul>
          <li><?= e(NAP_STREET) ?>,<br><?= e(NAP_LOCALITY) ?>, <?= e(NAP_REGION) ?> <?= e(NAP_POSTCODE) ?></li>
          <li><a href="tel:<?= e(PHONE_E164) ?>" data-track="call"><?= e(PHONE_DISPLAY) ?></a></li>
          <li><a href="<?= e(WHATSAPP_URL) ?>" rel="noopener" data-track="whatsapp">WhatsApp</a></li>
          <li><a href="mailto:<?= e(EMAIL) ?>"><?= e(EMAIL) ?></a></li>
          <li><?= e(HOURS_DISPLAY) ?><br><?= e(HOURS_NOTE) ?></li>
        </ul>
      </div>
    </div>

    <p class="disclaimer"><b>Medical disclaimer.</b> <?= e(MEDICAL_DISCLAIMER) ?></p>

    <div class="colophon">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. All rights reserved.</p>
      <div>
        <a href="/privacy-policy">Privacy policy</a>
        <a href="/terms">Terms</a>
        <a href="/medical-disclaimer">Medical disclaimer</a>
        <a href="/sitemap.xml">Sitemap</a>
      </div>
    </div>

  </div>
</footer>

<div class="sticky-cta">
  <a class="btn btn--outline" href="tel:<?= e(PHONE_E164) ?>" data-track="call"><?= icon('phone', 17) ?> Call</a>
  <a class="btn btn--accent" href="<?= e(WHATSAPP_URL) ?>" rel="noopener" data-track="whatsapp"><?= icon('whatsapp', 17) ?> WhatsApp</a>
</div>

<script>
(function () {
  'use strict';

  // Mobile navigation
  var toggle = document.querySelector('.nav-toggle');
  var panel  = document.getElementById('mobile-nav');

  if (toggle && panel) {
    toggle.addEventListener('click', function () {
      var open = panel.getAttribute('data-open') === 'true';
      panel.setAttribute('data-open', open ? 'false' : 'true');
      toggle.setAttribute('aria-expanded', open ? 'false' : 'true');
      toggle.setAttribute('aria-label', open ? 'Open menu' : 'Close menu');
    });
  }

  // Conversion events. Every lead path on this site is measurable:
  // tel: clicks, WhatsApp clicks, and form submits landing on /thank-you.
  document.addEventListener('click', function (event) {
    var el = event.target.closest('[data-track]');
    if (!el || typeof window.gtag !== 'function') { return; }
    window.gtag('event', 'lead_' + el.getAttribute('data-track'), {
      page_path: window.location.pathname
    });
  });
}());
</script>

</body>
</html>
