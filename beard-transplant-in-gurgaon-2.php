<?php
$pageTitle = 'Beard Transplant in Gurgaon | Best FUE Facial Hair Restoration';
$pageDesc = 'Looking for Beard Hair Reconstruction in Gurugram? Leading Beard Hair Transplant Clinic in Gurgaon.';
$pageCanonical = 'https://dencespot.com/beard-transplant-in-gurgaon-2.php';
$currentPage = 'skin-treatments';
include 'header.php';
?>

<style>
    /* Slant Design Hero Section */
    .slant-hero {
        position: relative;
        width: 100%;
        height: 550px;
        background-color: #2c3e50;
        overflow: hidden;
        display: flex;
    }

    .slant-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('images/service-beard.png');
        background-size: cover;
        background-position: right center;
        transform: scaleX(-1);
        z-index: 1;
    }

    .slant-hero-mobile-img {
        display: none;
    }

    .slant-hero-wrapper {
        position: absolute;
        top: 0;
        right: 0;
        width: 55%;
        height: 100%;
        background-color: #8A1038;
        clip-path: polygon(15% 0, 100% 0, 100% 100%, 0 100%);
        display: flex;
        align-items: center;
        padding-left: 10%;
        padding-right: 5%;
        z-index: 2;
    }

    .slant-hero-content {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        width: 100%;
        max-width: 1000px;
    }

    .slant-text-area {
        width: 100%;
        max-width: 800px;
        color: #ffffff;
    }

    .slant-text-area h1 {
        font-family: 'Outfit', 'Inter', sans-serif;
        font-size: 3.5rem;
        font-weight: 700;
        line-height: 1.15;
        margin-bottom: 25px;
        color: #ffffff;
        letter-spacing: -0.5px;
    }

    .slant-text-area p {
        font-family: 'Inter', sans-serif;
        font-size: 1.15rem;
        line-height: 1.6;
        margin: 0;
        color: #ffffff;
        opacity: 0.95;
        font-weight: 400;
    }

    /* Results Section */
    .results-section {
        background-color: #FAFAFA;
        padding: 80px 0;
    }

    .results-header-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }

    .results-title-container {
        position: relative;
        padding: 20px 0 20px 30px;
    }

    .results-title-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 80px;
        height: 80px;
        background-image: radial-gradient(#d5d5d5 2px, transparent 2px);
        background-size: 10px 10px;
        z-index: 1;
    }

    .results-title-container h2 {
        position: relative;
        z-index: 2;
        font-family: 'Outfit', 'Inter', sans-serif;
        font-size: 2.6rem;
        font-weight: 700;
        color: #000000;
        margin: 0;
    }

    .btn-view-all {
        background-color: #8A1038;
        color: #ffffff !important;
        padding: 12px 28px;
        border-radius: 6px;
        font-size: 1rem;
        font-weight: 600;
        text-decoration: none !important;
        transition: background-color 0.3s;
    }

    .btn-view-all:hover {
        background-color: #6a0b2a;
        color: #ffffff;
    }

    .results-body {
        display: flex;
        gap: 30px;
        align-items: flex-start;
    }

    /* Gallery inside Results */
    .results-gallery {
        flex: 1;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .result-card {
        background: #ffffff;
        padding-bottom: 15px;
    }

    .result-image-wrapper {
        position: relative;
        padding: 15px;
        background: #ffffff;
    }

    /* Thick Maroon Borders on Image Wrappers */
    .result-image-wrapper::before,
    .result-image-wrapper::after {
        content: '';
        position: absolute;
        width: 30px;
        height: 30px;
        z-index: 2;
    }

    .result-image-wrapper::before {
        top: 5px;
        left: 5px;
        border-top: 6px solid #8A1038;
        border-left: 6px solid #8A1038;
    }

    .result-image-wrapper::after {
        bottom: 5px;
        right: 5px;
        border-bottom: 6px solid #8A1038;
        border-right: 6px solid #8A1038;
    }

    .result-image-wrapper img {
        width: 100%;
        height: 200px;
        /* Placeholder height */
        object-fit: cover;
        display: block;
        background: #e9ecef;
    }

    .result-labels {
        display: flex;
        justify-content: center;
        gap: 40px;
        margin-top: 15px;
        position: relative;
    }

    .result-labels::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        height: 15px;
        width: 1px;
        background-color: #e0e0e0;
    }

    .result-labels span {
        font-family: 'Inter', sans-serif;
        color: #888888;
        font-style: italic;
        font-size: 1rem;
    }

    /* Sidebar CTAs */
    .results-sidebar-cta {
        width: 170px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        flex-shrink: 0;
    }

    .sidebar-btn {
        background-color: #8A1038;
        color: #ffffff !important;
        text-decoration: none !important;
        border-radius: 12px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 25px 15px;
        transition: transform 0.3s, background 0.3s;
        text-align: center;
    }

    .sidebar-btn.outline-light {
        border: 1px solid rgba(255, 255, 255, 0.4);
    }

    .sidebar-btn.outline-solid {
        border: 2px solid #ffffff;
    }

    .sidebar-btn:hover {
        transform: translateY(-3px);
        background-color: #7a0c30;
    }

    .sidebar-btn i {
        font-size: 1.8rem;
        margin-bottom: 15px;
    }

    .sidebar-btn span {
        font-size: 0.85rem;
        font-weight: 700;
        line-height: 1.4;
        letter-spacing: 0.5px;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .results-gallery {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 992px) {
        .slant-hero {
            height: auto;
            flex-direction: column;
        }

        .slant-hero::before {
            display: none;
        }

        .slant-hero-mobile-img {
            display: block;
            width: 100%;
            height: 350px;
            background-image: url('images/service-beard.png');
            background-size: cover;
            background-position: right center;
        }

        .slant-hero-wrapper {
            position: relative;
            width: 100%;
            height: auto;
            clip-path: none;
            padding: 50px 20px;
        }

        .results-body {
            flex-direction: column;
        }

        .results-sidebar-cta {
            width: 100%;
            flex-direction: row;
            justify-content: center;
        }

        .sidebar-btn {
            flex: 1;
            max-width: 200px;
        }
    }

    @media (max-width: 768px) {
        .results-gallery {
            grid-template-columns: 1fr;
        }

        .results-header-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
        }
    }

    @media (max-width: 576px) {
        .slant-text-area h1 {
            font-size: 2.2rem;
        }

        .results-title-container h2 {
            font-size: 2rem;
        }

        .sidebar-btn {
            padding: 15px 10px;
        }

        .sidebar-btn i {
            font-size: 1.5rem;
            margin-bottom: 8px;
        }

        .sidebar-btn span {
            font-size: 0.75rem;
        }
    }

    /* Intro Section Layout */
    .intro-section {
        padding: 80px 0;
        background-color: #ffffff;
    }

    .intro-container {
        display: flex;
        align-items: center;
        gap: 50px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .intro-content {
        flex: 1;
    }

    .intro-content h2 {
        font-family: 'Outfit', 'Inter', sans-serif;
        font-size: 2.8rem;
        font-weight: 300;
        color: #2D3748;
        margin-bottom: 25px;
        letter-spacing: -0.5px;
    }

    .intro-cost-badge {
        display: inline-block;
        padding: 12px 25px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 25px rgba(231, 76, 60, 0.15);
        color: #2D3748;
        font-weight: 500;
        font-size: 1.05rem;
        margin-bottom: 35px;
    }

    .intro-content p {
        font-family: 'Inter', sans-serif;
        color: #4A5568;
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 25px;
    }

    .intro-content p strong {
        font-weight: 600;
        color: #2D3748;
    }

    .red-highlight {
        color: #e74c3c;
    }

    .intro-image-wrapper {
        flex: 1;
        display: flex;
        justify-content: flex-end;
    }

    .intro-image-inner {
        background: #ffffff;
        padding: 10px;
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.08);
        border-radius: 4px;
        max-width: 100%;
    }

    .intro-image-inner img {
        width: 100%;
        height: auto;
        display: block;
    }

    @media (max-width: 992px) {
        .intro-container {
            flex-direction: column;
        }

        .intro-image-wrapper {
            justify-content: center;
            margin-top: 20px;
        }

        .intro-content h2 {
            font-size: 2.2rem;
        }
    }
</style>

<section class="slant-hero">
    <div class="slant-hero-mobile-img"></div>
    <div class="slant-hero-wrapper">
        <div class="slant-hero-content">
            <div class="slant-text-area">
                <h1>Beard Hair Transplant<br>in Gurugram</h1>
                <p>Looking for Beard Hair Reconstruction in Gurugram? Our commitment to excellence, experienced beard
                    transplant specialists, and focus on patient satisfaction have earned us a reputation as the leading
                    Beard Hair Transplant Clinic in Gurgaon.</p>
            </div>
        </div>
    </div>
</section>


<section class="intro-section">
    <div class="intro-container">
        <div class="intro-content">
            <h2>Beard Transplant in Gurgaon</h2>
            <p>At puberty in males hormones start taking their effect and beard & moustache hairs become thicker and
                transform into their final forms within a few years following puberty. The genetics plays an important
                role in the texture and quality of the beard, and moustache. There could be various problems causing the
                loss of beard and moustache. Autoimmune disorders related to hormone level changes or skin diseases
                could show their course leading to loss of facial hair in Men. Often skin diseases called Alopecia
                Areata also cause hair loss in the facial region. Steroids may help reverse the condition but in many
                cases, <span class="red-highlight">hair transplantation</span> remains the only solution.</p>

            <p>Hair transplantation technique based on the transfer of healthy hair follicles (grafts) from the
                hair-bearing area to the beardless area. DenceSpot Clinic offers the best <strong>beard transplant in
                    Gurgaon</strong>. The clinic offers you the most chosen and latest transplant technique in the world
                performed by Dr. Rahul (MD, Dermatology) and his team.</p>
        </div>
        <div class="intro-image-wrapper">
            <div class="intro-image-inner">
                <img src="images/about-new.jpg" alt="Man with a beard looking in the mirror">
            </div>
        </div>
    </div>
</section>

<!-- Beard Transplant Procedure Section -->
<section class="benefits-section" style="background-color: #FAFAFA;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 50px;">
            <h2
                style="color: #1A2E44; font-family: 'Outfit', 'Inter', sans-serif; font-size: 2.6rem; font-weight: 700;">
                Our Treatment Procedure</h2>
            <p
                style="color: #666; max-width: 700px; margin: 0 auto; font-family: 'Inter', sans-serif; font-size: 1.05rem;">
                Our advanced beard restoration process follows a systematic, minimally invasive approach to ensure
                dense, natural-looking results.</p>
        </div>

        <div class="benefits-grid">
            <!-- Step 1 -->
            <div class="benefit-card" style="background: #ffffff;">
                <div class="benefit-icon-box" style="background-color: rgba(138, 16, 56, 0.1); color: #8A1038;"><i
                        class="fas fa-user-md"></i></div>
                <h3 style="font-family: 'Outfit', 'Inter', sans-serif; font-weight: 600;">Consultation & Design</h3>
                <p style="font-family: 'Inter', sans-serif; color: #555;">Detailed evaluation of your facial structure
                    and donor area. The surgeon precisely designs your ideal beard line for a natural look.</p>
            </div>

            <!-- Step 2 -->
            <div class="benefit-card" style="background: #ffffff;">
                <div class="benefit-icon-box" style="background-color: rgba(138, 16, 56, 0.1); color: #8A1038;"><i
                        class="fas fa-microscope"></i></div>
                <h3 style="font-family: 'Outfit', 'Inter', sans-serif; font-weight: 600;">Follicle Extraction</h3>
                <p style="font-family: 'Inter', sans-serif; color: #555;">Using the advanced FUE technique, healthy hair
                    follicles are individually extracted from the back of the scalp without creating any linear scar.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="benefit-card" style="background: #ffffff;">
                <div class="benefit-icon-box" style="background-color: rgba(138, 16, 56, 0.1); color: #8A1038;"><i
                        class="fas fa-vial"></i></div>
                <h3 style="font-family: 'Outfit', 'Inter', sans-serif; font-weight: 600;">Graft Preparation</h3>
                <p style="font-family: 'Inter', sans-serif; color: #555;">Extracted hair follicles are thoroughly
                    cleaned and sorted under high magnification to preserve maximum viability for facial
                    transplantation.</p>
            </div>

            <!-- Step 4 -->
            <div class="benefit-card" style="background: #ffffff;">
                <div class="benefit-icon-box" style="background-color: rgba(138, 16, 56, 0.1); color: #8A1038;"><i
                        class="fas fa-shield-alt"></i></div>
                <h3 style="font-family: 'Outfit', 'Inter', sans-serif; font-weight: 600;">Precise Implantation</h3>
                <p style="font-family: 'Inter', sans-serif; color: #555;">Grafts are strategically implanted into the
                    beard region, aligning strictly with the natural angle and growth direction of your facial hair.</p>
            </div>
        </div>
    </div>
</section>

<section class="results-section" style="background-color: #ffffff;">
    <div class="container">

        <div class="results-header-row">
            <div class="results-title-container">
                <h2>Before and After Results</h2>
            </div>
            <a href="#" class="btn-view-all">View All Results</a>
        </div>

        <div class="results-body">

            <div class="results-gallery">
                <!-- Result 1 -->
                <div class="result-card">
                    <div class="result-image-wrapper">
                        <!-- Standard placeholder size for horizontal comparison images -->
                        <img src="images/about-new.jpg" alt="Beard Transplant Before After 1">
                    </div>
                    <div class="result-labels">
                        <span>Before</span>
                        <span>After</span>
                    </div>
                </div>

                <!-- Result 2 -->
                <div class="result-card">
                    <div class="result-image-wrapper">
                        <img src="images/about-new.jpg" alt="Beard Transplant Before After 2">
                    </div>
                    <div class="result-labels">
                        <span>Before</span>
                        <span>After</span>
                    </div>
                </div>

                <!-- Result 3 -->
                <div class="result-card">
                    <div class="result-image-wrapper">
                        <img src="images/about-new.jpg" alt="Beard Transplant Before After 3">
                    </div>
                    <div class="result-labels">
                        <span>Before</span>
                        <span>After</span>
                    </div>
                </div>
            </div>

            <!-- Sticky Right-Hand Column CTA Buttons -->
            <div class="results-sidebar-cta">
                <a href="contact.php" class="sidebar-btn outline-light">
                    <!-- Standard FontAwesome icons replacing the broken font-box from the screenshot -->
                    <i class="far fa-calendar-check"></i>
                    <span>BOOK AN<br>APPOINTMENT</span>
                </a>
            </div>

        </div>

    </div>
</section>

<!-- Advanced Techniques / Why Choose -->
<section class="treatment-section">
    <div class="container">
        <div style="text-align: center; margin-bottom: 50px;">
            <h2 style="color: #1A2E44;">Why DenceSpot for Beard?</h2>
            <p style="color: #666; max-width: 700px; margin: 0 auto;">Beard transparency requires higher artistic skill
                than scalp hair transplant.</p>
        </div>

        <div class="treatment-grid">
            <!-- Feature 1 -->
            <div class="treatment-card">
                <div class="treatment-icon">
                    <i class="fas fa-palette"></i>
                </div>
                <h4>Artistic Design</h4>
                <p>We don't just fill gaps; we sculpt a beard style (Goatee, Full Beard, Stubble) that enhances your
                    masculine features.</p>
            </div>

            <!-- Feature 2 -->
            <div class="treatment-card">
                <div class="treatment-icon">
                    <i class="fas fa-microscope"></i>
                </div>
                <h4>Magnified Precision</h4>
                <p>Performed under high magnification to ensure no visible scarring on the face or the donor area.</p>
            </div>

            <!-- Feature 3 -->
            <div class="treatment-card">
                <div class="treatment-icon">
                    <i class="fas fa-sync-alt"></i>
                </div>
                <h4>Lifetime Results</h4>
                <p>The transplanted hair is permanent and can be shaved, trimmed, and styled just like your natural
                    beard.</p>
            </div>

            <!-- Feature 4 -->
            <div class="treatment-card">
                <div class="treatment-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h4>Safe & Painless</h4>
                <p>Done under local anesthesia, the procedure is virtually painless with quick recovery so you can
                    return to work faster.</p>
            </div>
        </div>
    </div>
</section>

<!-- Doctors Section -->
<section id="doctors" class="section-padding doctors">
    <div class="container">
        <div style="text-align: center; margin-bottom: 2rem;">
            <h5 style="color: #999; letter-spacing: 2px; text-transform: uppercase; font-size: 0.9rem;">Meet Our
                Team</h5>
            <h2 style="font-size: 3rem; color: #1A2E44;">Our Experts</h2>
        </div>

        <div class="doctors-grid">
            <!-- Doctor 1 -->
            <div class="doctor-card">
                <div class="doctor-card-inner">
                    <div class="doctor-img-wrapper">
                        <img src="images/dr-rahul-bio.jpg" alt="Dr. Rahul">
                    </div>
                    <h3>Dr. Rahul</h3>
                    <p class="specialty">Hair Transplant Specialist</p>
                    <a href="dr-rahul.php" class="view-profile-btn">View Profile</a>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="doctor-card">
                <div class="doctor-card-inner">
                    <div class="doctor-img-wrapper">
                        <img src="images/dr-nyra-new.jpg" alt="Dr. Nyra">
                    </div>
                    <h3>Dr. Nyra</h3>
                    <p class="specialty">Cosmetic & Aesthetic</p>
                    <a href="dr-nyra.php" class="view-profile-btn">View Profile</a>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- Why Choose Us Section & FAQs -->
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
                            <span>Who is a good candidate for beard transplant?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Men with patchy beards, facial scarring, or sparse facial hair due to genetics are ideal
                                candidates. You must have sufficient donor hair on your scalp.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How long does the procedure take?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>A beard transplant typically takes 3 to 6 hours, depending on the area to be covered and
                                the number of grafts required for desired density.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>When can I shave my new beard?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>You can gently trim your beard after 2 weeks once the scabs have fallen off. Normal
                                shaving can usually resume after 3-4 months when the skin has fully healed.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Will the results look natural?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Absolutely. We carefully angle and place each graft to match your natural growth pattern.
                                Once grown, it is indistinguishable from a natural beard.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How much does a beard transplant cost?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>The cost depends on the number of grafts needed. We offer competitive pricing and
                                flexible EMI plans. Book a consultation for a precise quote.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Booking / CTA Section -->
<section id="booking" class="app-split-container" style="margin-top: 50px;">
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
    </div>
</section>

<?php include 'footer.php'; ?>