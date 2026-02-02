</main>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <!-- Column 1: About -->
      <div class="footer-col">
        <h3>About DenceSpot</h3>
        <p>At DenceSpot, our goal is to provide the best skin and hair care that you need. Our doctors have
          years of experience in dermatology and aesthetic treatments. We are a centre of excellence
          committed to safe and effective therapies.</p>
      </div>

      <!-- Column 2: Hair Services -->
      <div class="footer-col">
        <h3>Hair Services</h3>
        <ul class="footer-links">
          <li><a href="hair-transplant-in-gurgaon.php"><i class="fas fa-chevron-right"></i> Hair Transplant</a></li>
          <li><a href="beard-transplant-in-gurgaon.php"><i class="fas fa-chevron-right"></i> Beard Transplant</a></li>
          <li><a href="hair-prp-treatment-in-gurgaon.php"><i class="fas fa-chevron-right"></i> Hair PRP</a></li>
          <li><a href="hair-microneedling-in-gurgaon.php"><i class="fas fa-chevron-right"></i> Microneedling</a></li>
          <li><a href="dandruff-treatment-in-gurgaon.php"><i class="fas fa-chevron-right"></i> Dandruff Treatment</a>
          </li>
          <li><a href="laser-hair-removal-in-gurgaon.php"><i class="fas fa-chevron-right"></i> Laser Hair Removal</a>
          </li>
        </ul>
      </div>

      <!-- Column 3: Skin Services -->
      <div class="footer-col">
        <h3>Skin Services</h3>
        <ul class="footer-links">
          <li><a href="hydrafacial-in-gurgaon.php"><i class="fas fa-chevron-right"></i> Hydrafacial</a></li>
          <li><a href="botox-treatment-in-gurgaon.php"><i class="fas fa-chevron-right"></i> Botox</a></li>
          <li><a href="lip-blush-in-gurgaon.php"><i class="fas fa-chevron-right"></i> Lip Blush</a></li>
          <li><a href="face-prp-treatment-in-gurgaon.php"><i class="fas fa-chevron-right"></i> Vampire Facial</a></li>
          <li><a href="tattoo-removal-in-gurgaon.php"><i class="fas fa-chevron-right"></i> Tattoo Removal</a></li>
          <li><a href="mole-wart-removal-in-gurgaon.php"><i class="fas fa-chevron-right"></i> Mole Removal</a></li>
        </ul>
      </div>

      <!-- Column 4: Get In Touch -->
      <div class="footer-col">
        <h3>Get In Touch</h3>
        <div class="footer-contact-item">
          <div class="footer-contact-icon"><i class="fas fa-phone-alt"></i></div>
          <div>+91 8178330800</div>
        </div>
        <div class="footer-contact-item">
          <div class="footer-contact-icon"><i class="fas fa-envelope"></i></div>
          <div>dencespot@gmail.com</div>
        </div>
        <div class="footer-contact-item">
          <div class="footer-contact-icon"><i class="fas fa-map-marker-alt"></i></div>
          <div>C Block, Sector 39, Gurugram, Haryana 122003</div>
        </div>
        <div class="map-container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.31789847168!2d77.0437477!3d28.439831899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5e4f6f45491%3A0x9dc43165216a74e6!2sDencespot%20clinic!5e0!3m2!1sen!2sin!4v1768232457326!5m2!1sen!2sin"
            width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
    <div style="border-top: 1px solid #334; padding-top: 20px; text-align: center; font-size: 0.85rem; color: #777;">
      &copy; 2026 DenceSpot Clinic. All Rights Reserved.
    </div>
  </div>
</footer>

<script>
  function toggleMenu() {
    const nav = document.getElementById('navLinks');
    nav.classList.toggle('active');
  }

  function toggleFaq(element) {
    const parent = element.parentElement;
    const answer = parent.querySelector('.faq-answer');
    const icon = element.querySelector('i');

    if (parent.classList.contains('active')) {
      parent.classList.remove('active');
    } else {
      // Close others if needed, for now just toggle
      parent.classList.add('active');
    }
  }

  // FAQ Accordion (Generic)
  const faqItems = document.querySelectorAll('.faq-item');
  if (faqItems) {
    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      if (question) {
        question.addEventListener('click', () => {
          faqItems.forEach(otherItem => {
            if (otherItem !== item) {
              otherItem.classList.remove('active');
            }
          });
          item.classList.toggle('active');
        });
      }
    });
  }
</script>
</body>

</html>