<?php
$pageTitle = 'Best Hair Transplant Clinic in Gurugram | DenceSpot';
$pageDesc = 'DenceSpot Clinic is a trusted hair transplant & skin care clinic in Gurugram offering advanced aesthetic treatments by expert doctors.';
$pageCanonical = 'https://dencespot.com/';
$currentPage = 'home';
include 'header.php';
?>

<!-- Medical Tourism Hero Section -->
<!-- Hero Slider Section -->
<section class="hero-slider-container">
    <!-- Slides Wrapper -->
    <div class="hero-slides">
        <!-- Slide 1: Hair Transplant -->
        <div class="hero-slide active" style="background-image: url('images/hero-collage.png');">
            <div class="hero-overlay"></div>
            <div class="hero-slide-content container">
                <span class="slide-subtitle">World-Class Hair Restoration</span>
                <h1>Advanced Hair Transplant<br>Techniques in Gurugram</h1>
                <p>Experience natural-looking results with our FUE & FUT procedures performed by certified experts.</p>
                <div class="slide-buttons">
                    <a href="contact.php" class="btn-slider-primary">Book Consultation</a>
                    <a href="hair-transplant-in-gurgaon.php" class="btn-slider-outline">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Slide 2: Skin Care -->
        <div class="hero-slide" style="background-image: url('images/service-skin.png');">
            <div class="hero-overlay"></div>
            <div class="hero-slide-content container">
                <span class="slide-subtitle">Rejuvenate Your Skin</span>
                <h1>Premium Skin Treatments<br>For A Radiant Glow</h1>
                <p>From HydraFacials to Laser Toning, discover personalized skin care solutions.</p>
                <div class="slide-buttons">
                    <a href="contact.php" class="btn-slider-primary">Book Appointment</a>
                    <a href="hydrafacial-in-gurgaon.php" class="btn-slider-outline">View Treatments</a>
                </div>
            </div>
        </div>

        <!-- Slide 3: Laser/Anti-Ageing -->
        <div class="hero-slide" style="background-image: url('images/service-laser.png');">
            <div class="hero-overlay"></div>
            <div class="hero-slide-content container">
                <span class="slide-subtitle">Advanced Laser Technology</span>
                <h1>Safe & Effective<br>Laser Hair Removal</h1>
                <p>Say goodbye to unwanted hair with our pain-free, US-FDA approved laser technology.</p>
                <div class="slide-buttons">
                    <a href="contact.php" class="btn-slider-primary">Start Your Session</a>
                    <a href="laser-hair-removal-in-gurgaon.php" class="btn-slider-outline">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Controls -->
    <button class="slider-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
    <button class="slider-btn next-btn"><i class="fas fa-chevron-right"></i></button>

    <!-- Dots -->
    <div class="slider-dots">
        <span class="dot active" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</section>

<script>
    let slideIndex = 1;
    let slideInterval;
    showSlides(slideIndex);

    // Auto play
    startSlideAutoPlay();

    function startSlideAutoPlay() {
        slideInterval = setInterval(() => {
            plusSlides(1);
        }, 5000); // Change image every 5 seconds
    }

    function plusSlides(n) {
        clearInterval(slideInterval); // Reset timer on manual interaction
        showSlides(slideIndex += n);
        startSlideAutoPlay(); // Restart timer
    }

    function currentSlide(n) {
        clearInterval(slideInterval);
        showSlides(slideIndex = n);
        startSlideAutoPlay();
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("hero-slide");
        let dots = document.getElementsByClassName("dot");

        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }

        for (i = 0; i < slides.length; i++) {
            slides[i].className = slides[i].className.replace(" active", "");
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex - 1].className += " active";
        dots[slideIndex - 1].className += " active";
    }

    // Event Listeners for Buttons
    document.querySelector('.prev-btn').addEventListener('click', () => plusSlides(-1));
    document.querySelector('.next-btn').addEventListener('click', () => plusSlides(1));
</script>

<!-- Conditions We Treat Section -->
<section class="section-padding conditions-section">
    <div class="container">
        <div class="section-header">
            <h2>Conditions We Treat</h2>
            <p>Expert dermatological solutions for common skin and hair concerns</p>
            <div class="divider"></div>
        </div>

        <div class="conditions-grid">
            <!-- Card 1: Acne & Scars -->
            <div class="condition-card">
                <div class="condition-img">
                    <img src="images/service-acne.png" alt="Acne & Scars">
                </div>
                <div class="condition-content">
                    <h3>Acne & Scars</h3>
                    <p>Effective treatments to clear active acne and reduce scarring for smooth skin.</p>
                    <a href="chemical-peel-treatment-in-gurgaon.php" class="condition-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Card 2: Hair Loss -->
            <div class="condition-card">
                <div class="condition-img">
                    <img src="images/service-hair.png" alt="Hair Loss">
                </div>
                <div class="condition-content">
                    <h3>Hair Loss</h3>
                    <p>Restore your hair density with advanced transplant and PRP therapies.</p>
                    <a href="hair-transplant-in-gurgaon.php" class="condition-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Card 3: Pigmentation -->
            <div class="condition-card">
                <div class="condition-img">
                    <img src="images/service-skin.png" alt="Pigmentation">
                </div>
                <div class="condition-content">
                    <h3>Pigmentation</h3>
                    <p>Even out your skin tone and reduce dark spots with targeted treatments.</p>
                    <a href="laser-hair-removal-in-gurgaon.php" class="condition-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Card 4: Anti-Ageing -->
            <div class="condition-card">
                <div class="condition-img">
                    <img src="images/service-anti-ageing.png" alt="Anti-Ageing">
                </div>
                <div class="condition-content">
                    <h3>Anti-Ageing</h3>
                    <p>Turn back the clock with Botox, fillers, and skin tightening procedures.</p>
                    <a href="botox-treatment-in-gurgaon.php" class="condition-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Card 5: Unwanted Hair -->
            <div class="condition-card">
                <div class="condition-img">
                    <img src="images/service-laser.png" alt="Unwanted Hair">
                </div>
                <div class="condition-content">
                    <h3>Unwanted Hair</h3>
                    <p>Long-lasting hair reduction using safe and painless laser technology.</p>
                    <a href="laser-hair-removal-in-gurgaon.php" class="condition-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Card 6: Dull Skin -->
            <div class="condition-card">
                <div class="condition-img">
                    <img src="images/service-skin.png" alt="Dull Skin">
                </div>
                <div class="condition-content">
                    <h3>Dull Skin</h3>
                    <p>Revitalize tired skin with Hydrafacials and chemical peels for an instant glow.</p>
                    <a href="hydrafacial-in-gurgaon.php" class="condition-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section-padding why-choose-section">
    <div class="container">
        <div class="why-choose-wrapper">
            <!-- Left: Image side -->
            <div class="why-choose-image">
                <img src="images/why-choose.png" alt="Why Choose DenceSpot">
                <div class="experience-badge">
                    <span class="exp-number">10+</span>
                    <span class="exp-text">Years of<br>Excellence</span>
                </div>
            </div>

            <!-- Right: Content side -->
            <div class="why-choose-content">
                <span class="section-subtitle">Why Choose Us</span>
                <h2>Where Medical Expertise Meets Aesthetic Perfection</h2>
                <p>We combine advanced technology with a personalized approach to deliver result-oriented treatments that enhance your natural beauty. Experience the best in hair and skin care with DenceSpot.</p>

                <div class="features-grid">
                    <!-- Feature 1 -->
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-user-md"></i></div>
                        <div class="feature-info">
                            <h4>Expert Doctors</h4>
                            <p>Treatments by certified dermatologists.</p>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-microscope"></i></div>
                        <div class="feature-info">
                            <h4>FDA-Approved Tech</h4>
                            <p>Safe & effective world-class technology.</p>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-hand-holding-heart"></i></div>
                        <div class="feature-info">
                            <h4>Personalized Care</h4>
                            <p>Customized plans for your unique needs.</p>
                        </div>
                    </div>
                    <!-- Feature 4 -->
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-tag"></i></div>
                        <div class="feature-info">
                            <h4>Transparent Pricing</h4>
                            <p>Affordable excellence with no hidden costs.</p>
                        </div>
                    </div>
                </div>

                <a href="contact.php" class="btn-primary mt-4" style="display: inline-block;">Book Appointment</a>
            </div>
        </div>
    </div>
</section>
<section id="about" class="about-split">
    <div class="container">
        <div class="about-grid">
            <div class="about-img-container">
                <img src="images/about-collage.png" alt="Skin treatment and analysis">
            </div>
            <div class="about-content">
                <h4>Best Hair Transplant & Skin Clinic in Gurugram</h4>
                <h2>Celebrating 10+ Years of<br>Aesthetic Excellence</h2>
                <p>Experience unmatched skincare expertise at DenceSpot Clinic, your trusted partner in beauty.
                    Nestled in Sector 39, Gurugram, our spacious clinic has the latest LASER and aesthetic
                    technology.</p>
                <p>Our skilled dermatologists and technicians are here to offer you personalized, safe, and
                    effective treatments that rejuvenate and highlight your natural beauty.</p>
                <a href="#about" class="btn btn-secondary">ABOUT DENCESPOT CLINIC</a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="section-padding services">
    <div class="container">
        <div class="modern-service-grid">
            <!-- Item 1: Text Intro -->
            <div class="service-text-block">
                <span class="service-label">Explore Us</span>
                <h2>Skin & Hair Treatments for Every Concern</h2>
                <p>At DenceSpot Clinic, we offer the most effective skin and hair care solutions using FDA-approved,
                    result-oriented technologies. Whether you're battling acne, hair fall, wrinkles, or pigmentation,
                    our customized approach makes us the top-rated clinic in Gurugram.</p>
            </div>

            <!-- Item 2: Hair Transplant -->
            <a href="hair-transplant-in-gurgaon.php" class="modern-service-card">
                <img src="images/service-hair.png" alt="Hair Transplant">
                <div class="modern-service-overlay">
                    <h3>Hair Transplant</h3>
                </div>
            </a>

            <!-- Item 3: HydraFacial -->
            <a href="hydrafacial-in-gurgaon.php" class="modern-service-card">
                <img src="images/service-anti-ageing.png" alt="Hydrafacial">
                <div class="modern-service-overlay">
                    <h3>Hydrafacial</h3>
                </div>
            </a>

            <!-- Item 4: Laser Hair Removal -->
            <a href="laser-hair-removal-in-gurgaon.php" class="modern-service-card">
                <img src="images/service-laser.png" alt="Laser Hair Removal">
                <div class="modern-service-overlay">
                    <h3>Laser Hair Removal</h3>
                </div>
            </a>

            <!-- Item 5: Botox -->
            <a href="botox-treatment-in-gurgaon.php" class="modern-service-card">
                <img src="images/service-anti-ageing.png" alt="Botox">
                <div class="modern-service-overlay">
                    <h3>Botox</h3>
                </div>
            </a>

            <!-- Item 6: Fillers/Lip Blush -->
            <a href="lip-blush-in-gurgaon.php" class="modern-service-card">
                <img src="images/service-skin.png" alt="Lip Blush & Fillers">
                <div class="modern-service-overlay">
                    <h3>Lip Blush & Fillers</h3>
                </div>
            </a>
        </div>

        <div style="text-align: center; margin-top: 50px;">
            <a href="#" class="btn-primary btn-explore-more">Explore More Services</a>
        </div>
    </div>
</section>

<!-- Doctors Section -->
<!-- Doctors Section (Premium Split) -->
<section id="doctors" class="section-padding doctors-premium">
    <div class="container">
        <div class="section-header">
            <h2>Meet Our Experts</h2>
            <p>Led by highly qualified and experienced dermatologists</p>
            <div class="divider"></div>
        </div>

        <div class="doctors-list">
            <!-- Doctor 1: Dr. Rahul -->
            <div class="doctor-premium-card">
                <div class="doctor-image-side">
                    <img src="images/dr-rahul-bio.jpg" alt="Dr. Rahul - Hair Transplant Specialist">
                    <div class="doc-socials">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="doctor-content-side">
                    <span class="doc-subtitle">Hair Transplant Surgeon</span>
                    <h3>Dr. Rahul</h3>
                    <p class="doc-bio">Dr. Rahul is a renowned hair transplant specialist with over 15 years of experience in FUE and FUT techniques. He has successfully performed nearly 5000+ surgeries, delivering natural and dense results for patients globally.</p>

                    <div class="doc-qualifications">
                        <ul>
                            <li><i class="fas fa-check-circle"></i> MBBS, MD (Dermatology)</li>
                            <li><i class="fas fa-check-circle"></i> Member of ISHRS (USA)</li>
                            <li><i class="fas fa-check-circle"></i> Certified Hair Restoration Surgeon</li>
                        </ul>
                    </div>

                    <div class="doc-stats">
                        <div class="stat-item">
                            <span class="stat-num">15+</span>
                            <span class="stat-label">Years Exp</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-num">5k+</span>
                            <span class="stat-label">Surgeries</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-num">4.9</span>
                            <span class="stat-label">Rating</span>
                        </div>
                    </div>

                    <a href="dr-rahul.php" class="btn-doc-profile">View Full Profile</a>
                </div>
            </div>

            <!-- Doctor 2: Dr. Nyra -->
            <div class="doctor-premium-card reverse-layout">
                <div class="doctor-image-side">
                    <img src="images/dr-nyra-new.jpg" alt="Dr. Nyra - Aesthetic Physician">
                    <div class="doc-socials">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="doctor-content-side">
                    <span class="doc-subtitle">Aesthetic Physician</span>
                    <h3>Dr. Nyra</h3>
                    <p class="doc-bio">Dr. Nyra is a leading aesthetic physician known for her artistic approach to facial rejuvenation. Specializing in Botox, fillers, and anti-aging treatments, she ensures subtle yet impactful transformations.</p>

                    <div class="doc-qualifications">
                        <ul>
                            <li><i class="fas fa-check-circle"></i> MBBS, DDVL (Dermatology)</li>
                            <li><i class="fas fa-check-circle"></i> Expert in Non-Surgical Facelifts</li>
                            <li><i class="fas fa-check-circle"></i> Gold Medalist in Aesthetics</li>
                        </ul>
                    </div>

                    <div class="doc-stats">
                        <div class="stat-item">
                            <span class="stat-num">12+</span>
                            <span class="stat-label">Years Exp</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-num">8k+</span>
                            <span class="stat-label">Happy Patients</span>
                        </div>
                    </div>

                    <a href="dr-nyra.php" class="btn-doc-profile">View Full Profile</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-new">
    <div class="container">
        <div class="why-choose-grid">
            <div class="why-blob-container">
                <div class="why-blob-image">
                    <img src="images/why-choose.png" alt="Clinical Excellence">
                </div>
            </div>

            <div class="why-text-content">
                <h4>DENCESPOT CLINIC</h4>
                <h2>Why Choose DenceSpot<br>Skin Clinic?</h2>

                <div class="why-list">
                    <!-- FAQ Item 1 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Why choose DenceSpot for hair transplant?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>We use advanced FUE & FUT techniques with a 98% success rate, performed by
                                certified dermatologists ensuring natural-looking results.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Are the skin treatments safe?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, all our treatments are US-FDA approved and performed in a sterile
                                environment using state-of-the-art technology.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What is the cost of consultation?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>We offer competitive consultation rates. For a limited time, we are also offering
                                free initial consultations for hair transplants.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Do you offer EMI options?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we adhere to patient convenience and offer flexible EMI options for major
                                procedures.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How long is the recovery time?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Most skin treatments have zero downtime. Hair transplants typically require 3-7
                                days for initial recovery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- New Appointment & Testimonial Split Section (Reference Based) -->
<section id="contact" class="app-split-container">
    <!-- Left: Appointment Form -->
    <div class="app-left-form">
        <h2>Book an<br>Appointment</h2>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="YOUR NAME*" required>
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" placeholder="PHONE NUMBER*" required>
            </div>
            <div class="form-group icon-group" style="position: relative;">
                <input type="email" class="form-control" placeholder="EMAIL ID">
                <i class="fas fa-envelope" style="position: absolute; right: 15px; top: 15px; color: #27AE60;"></i>
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="4" placeholder="Your Concern"></textarea>
            </div>
            <button type="submit" class="btn-submit-app">BOOK AN APPOINTMENT</button>
        </form>
    </div>

    <!-- Right: Video Testimonials -->
    <div class="app-right-video">
        <h2>Our Happy Faces</h2>
        <span>Video Testimonials</span>

        <div class="app-video-thumb">
            <img src="images/video-testimonial-thumb.png" alt="Patient Success Story">
            <div class="app-play-btn">
                <i class="fas fa-play"></i>
            </div>
        </div>

        <div class="testimonial-nav" style="margin-top: 20px; display: flex; gap: 10px;">
            <div class="nav-arrow" style="border: 1px solid rgba(255,255,255,0.5); color: white;"><i
                    class="fas fa-chevron-left"></i></div>
            <div class="nav-arrow" style="border: 1px solid rgba(255,255,255,0.5); color: white;"><i
                    class="fas fa-chevron-right"></i></div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>