<?php
$pageTitle = 'Contact Us | DenceSpot Skin & Hair Clinic Gurugram';
$pageDesc = 'Book an appointment at DenceSpot Clinic. Call +91 8178330800 or visit us at C Block, Sector 39, Gurugram for expert hair and skin treatments.';
$pageCanonical = 'https://dencespot.com/contact.php';
$currentPage = 'contact';
include 'header.php';
?>

<!-- Page Header -->
<section class="page-header" style="background: var(--peach-bg); padding: 50px 0; text-align: center;">
    <div class="container">
        <h1 style="color: var(--secondary-color); margin-bottom: 10px;">Contact Us</h1>
        <p style="color: #666;">We are here to help you on your journey to confidence</p>
    </div>
</section>

<!-- Contact Form & Info Section -->
<section class="section-padding" style="background: var(--white);">
    <div class="container">
        <div class="contact-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem;">

            <!-- Contact Information -->
            <div class="contact-info">
                <h2 style="color: #1A2E44; margin-bottom: 2rem; font-size: 2.5rem;">Get In Touch</h2>
                <p style="color: #555; margin-bottom: 2rem; font-size: 1.1rem;">Have questions about our treatments or
                    want to book a consultation? Reach out to us directly or fill out the form.</p>

                <div class="contact-details">
                    <div style="display: flex; gap: 20px; margin-bottom: 30px; align-items: flex-start;">
                        <div
                            style="width: 50px; height: 50px; background: #E3F2FD; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.2rem; flex-shrink: 0;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 style="color: #333; margin-bottom: 5px;">Visit Us</h4>
                            <p style="color: #666;">C Block, Sector 39, Gurugram,<br>Haryana 122003</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 20px; margin-bottom: 30px; align-items: flex-start;">
                        <div
                            style="width: 50px; height: 50px; background: #E3F2FD; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.2rem; flex-shrink: 0;">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h4 style="color: #333; margin-bottom: 5px;">Call Us</h4>
                            <p style="color: #666;">+91 8178330800</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 20px; margin-bottom: 30px; align-items: flex-start;">
                        <div
                            style="width: 50px; height: 50px; background: #E3F2FD; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.2rem; flex-shrink: 0;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 style="color: #333; margin-bottom: 5px;">Email Us</h4>
                            <p style="color: #666;">dencespot@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Google Map Embed -->
                <div
                    style="margin-top: 30px; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.31789847168!2d77.0437477!3d28.439831899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5e4f6f45491%3A0x9dc43165216a74e6!2sDencespot%20clinic!5e0!3m2!1sen!2sin!4v1768232457326!5m2!1sen!2sin"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Appointment Form (Reusing App container styles roughly) -->
            <div class="contact-form-container"
                style="background: #1A2E44; padding: 40px; border-radius: 20px; color: white;">
                <h2 style="color: white; margin-bottom: 2rem;">Book an Appointment</h2>
                <form>
                    <div class="form-group" style="margin-bottom: 20px;">
                        <input type="text" class="form-control" placeholder="YOUR NAME*" required
                            style="width: 100%; padding: 15px; border-radius: 5px; border: none; outline: none;">
                    </div>
                    <div class="form-group" style="margin-bottom: 20px;">
                        <input type="tel" class="form-control" placeholder="PHONE NUMBER*" required
                            style="width: 100%; padding: 15px; border-radius: 5px; border: none; outline: none;">
                    </div>
                    <div class="form-group" style="margin-bottom: 20px; position: relative;">
                        <input type="email" class="form-control" placeholder="EMAIL ID"
                            style="width: 100%; padding: 15px; border-radius: 5px; border: none; outline: none;">
                    </div>
                    <div class="form-group" style="margin-bottom: 20px;">
                        <select class="form-control"
                            style="width: 100%; padding: 15px; border-radius: 5px; border: none; outline: none; color: #777;">
                            <option value="" disabled selected>Select Service</option>
                            <option value="Hair Transplant">Hair Transplant</option>
                            <option value="Skin Treatment">Skin Treatment</option>
                            <option value="Consultation">Consultation</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-bottom: 20px;">
                        <textarea class="form-control" rows="4" placeholder="Your Concern"
                            style="width: 100%; padding: 15px; border-radius: 5px; border: none; outline: none; font-family: inherit;"></textarea>
                    </div>
                    <button type="submit"
                        style="width: 100%; padding: 15px; background: #27AE60; color: white; border: none; border-radius: 5px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: 0.3s;">BOOK
                        AN APPOINTMENT</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Mobile Responsive Styles for this page -->
<style>
    @media (max-width: 900px) {
        .contact-grid {
            grid-template-columns: 1fr !important;
            gap: 3rem !important;
        }
    }
</style>

<?php include 'footer.php'; ?>