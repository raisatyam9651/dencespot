<?php
$pageTitle = 'Dr. Nyra | Aesthetic & Hair Transplant Surgeon in Gurugram';
$pageDesc = 'Meet Dr. Nyra, the owner of DenceSpot Clinic. An MBBS graduate from D.Y. Patil Medical College with extensive international experience in Germany.';
$pageCanonical = 'https://dencespot.com/dr-nyra.php';
$currentPage = 'doctors';
include 'header.php';
?>

<link rel="stylesheet" href="css/about-doctor.css">

<!-- Hero Section (Simple) -->
<section class="page-header" style="background: var(--peach-bg); padding: 50px 0; text-align: center;">
    <div class="container">
        <h1 style="color: var(--secondary-color); margin-bottom: 10px;">Our Experts</h1>
        <p style="color: #666;">Meet the team behind your transformation</p>
    </div>
</section>

<!-- About Dr. Nyra Section -->
<section class="about-doctor-section">
    <div class="container">
        <div class="doctor-bio-grid">
            <!-- Image Column -->
            <div class="doctor-bio-image">
                <img src="images/dr-nyra-new.jpg" alt="Dr. Nyra - Owner & Aesthetic Surgeon">
            </div>

            <!-- Content Column -->
            <div class="doctor-bio-text">
                <h4>MBBS - D.Y. Patil Medical College</h4>
                <h2>Dr. Nyra</h2>
                <p>Dr. Nyra is the driving force and Owner of DenceSpot Clinic. She is a distinguished medical
                    professional who completed her MBBS from the renowned <strong>Dr. D. Y. Patil Medical
                        College</strong>.</p>

                <p>Her expertise is enriched by significant international exposure, having worked with leading medical
                    institutions in Germany, bringing world-class standards of care to DenceSpot.</p>

                <h3 style="font-size: 1.5rem; color: #1A2E44; margin-top: 30px; margin-bottom: 15px;">Experience</h3>
                <ul style="list-style: none; padding-left: 0;">
                    <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
                        <i class="fas fa-briefcase" style="color: var(--primary-color); margin-top: 5px;"></i>
                        <div>
                            <strong>DenceSpot Clinic</strong><br>
                            <span style="color: #666;">Owner & Chief Consultant</span>
                        </div>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
                        <i class="fas fa-hospital" style="color: var(--primary-color); margin-top: 5px;"></i>
                        <div>
                            <strong>Bio Hair Clinic, Germany</strong><br>
                            <span style="color: #666;">2 Years Work Experience</span>
                        </div>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
                        <i class="fas fa-hospital-alt" style="color: var(--primary-color); margin-top: 5px;"></i>
                        <div>
                            <strong>St. Georg Klinikum Eisenach Hospital, Germany</strong><br>
                            <span style="color: #666;">1 Year Work Experience</span>
                        </div>
                    </li>
                </ul>

                <div class="doctor-highlights">
                    <div class="bio-pill"><i class="fas fa-user-md"></i> MBBS Dr. D.Y. Patil</div>
                    <div class="bio-pill"><i class="fas fa-globe-europe"></i> International Exp (Germany)</div>
                    <div class="bio-pill"><i class="fas fa-building"></i> Clinic Owner</div>
                </div>

                <div style="margin-top: 30px;">
                    <a href="contact.php" class="btn btn-secondary">Book Appointment with Dr. Nyra</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>