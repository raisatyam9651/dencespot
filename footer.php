<!-- New Major Footer -->
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

      <!-- Column 2: Treatments -->
      <div class="footer-col">
        <h3>Treatments</h3>
        <ul class="footer-links">
          <li><a href="hair-transplant-in-gurgaon.php"><i class="fas fa-chevron-right"></i> Hair Transplant</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Beard Transplant</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> PRP Therapy</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Laser Hair Removal</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Anti-Ageing</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Acne Treatments</a></li>
        </ul>
      </div>

      <!-- Column 3: Conditions -->
      <div class="footer-col">
        <h3>Conditions</h3>
        <ul class="footer-links">
          <li><a href="#"><i class="fas fa-chevron-right"></i> Hair Loss</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Acne / Pimples</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Pigmentation</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Wrinkles</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Dark Circles</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Scars</a></li>
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
</script>

</body>

</html>