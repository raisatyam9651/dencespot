<?php
$pageTitle = 'Dr. Rahul | Hair Transplant Specialist in Gurugram';
$pageDesc = 'Meet Dr. Rahul, an expert MBBS + Trichologist at DenceSpot Clinic with over 7 years of experience in hair restoration and dermatology.';
$pageCanonical = 'https://dencespot.com/dr-rahul.php';
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

<!-- About Dr. Rahul Section -->
<section class="about-doctor-section">
    <div class="container">
        <div class="doctor-bio-grid">
            <!-- Image Column -->
            <div class="doctor-bio-image">
                <img src="images/dr-rahul-bio.jpg" alt="Dr. Rahul - Hair Transplant Specialist">
            </div>

            <!-- Content Column -->
            <div class="doctor-bio-text">
                <h4>MBBS + Trichologist</h4>
                <h2>Dr. Rahul</h2>
                <p>Dr. Rahul is a highly skilled Trichologist and Hair Transplant Specialist dedicated to restoring
                    confidence through advanced hair restoration techniques. He completed his medical education from the
                    prestigious <strong>Dr. D. Y. Patil Medical College, Hospital & Research Centre</strong>.</p>

                <p>With a comprehensive background in dermatology and aesthetic medicine, Dr. Rahul brings wealth of
                    experience from top-tier medical institutions.</p>

                <h3 style="font-size: 1.5rem; color: #1A2E44; margin-top: 30px; margin-bottom: 15px;">Experience</h3>
                <ul style="list-style: none; padding-left: 0;">
                    <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
                        <i class="fas fa-briefcase" style="color: var(--primary-color); margin-top: 5px;"></i>
                        <div>
                            <strong>DenceSpot Clinic</strong><br>
                            <span style="color: #666;">Consultant</span>
                        </div>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
                        <i class="fas fa-hospital" style="color: var(--primary-color); margin-top: 5px;"></i>
                        <div>
                            <strong>ESIC Hospital, Rohini</strong><br>
                            <span style="color: #666;">Senior Consultant Doctor (5 Years)</span>
                        </div>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
                        <i class="fas fa-hospital-alt" style="color: var(--primary-color); margin-top: 5px;"></i>
                        <div>
                            <strong>Medanta - The Medicity, Gurugram</strong><br>
                            <span style="color: #666;">2 Years Experience</span>
                        </div>
                    </li>
                </ul>

                <div class="doctor-highlights">
                    <div class="bio-pill"><i class="fas fa-user-md"></i> MBBS + Trichologist</div>
                    <div class="bio-pill"><i class="fas fa-star"></i> 7+ Years Experience</div>
                    <div class="bio-pill"><i class="fas fa-certificate"></i> Certified Expert</div>
                </div>

                <div style="margin-top: 30px;">
                    <a href="./#contact" class="btn btn-secondary">Book Appointment with Dr. Rahul</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>