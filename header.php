<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header-link.php'; ?>
</head>

<body>

    <header>
        <div class="container navbar">
            <a href="./" class="logo">
                <img src="images/logo.png" alt="DenceSpot Skin Clinic">
            </a>

            <div class="hamburger" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </div>

            <nav class="nav-links" id="navLinks">
                <a href="./" class="<?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Home</a>
                <a href="./#about">About Us</a>

                <div class="dropdown">
                    <a href="javascript:void(0)"
                        class="dropbtn <?php echo (in_array($currentPage, ['hair-transplant', 'beard-transplant', 'hair-prp', 'hair-microneedling', 'hair-led-therapy', 'dandruff-treatment', 'hydrafacial', 'carbon-facial', 'chemical-peel', 'botox-treatment', 'lip-blush', 'face-prp', 'tattoo-removal', 'mole-removal', 'laser-hair-removal'])) ? 'active' : ''; ?>">
                        Services <i class="fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <!-- Hair Services -->
                        <a href="hair-transplant-in-gurgaon">Hair Transplant</a>
                        <a href="beard-transplant-in-gurgaon">Beard Transplant</a>
                        <a href="hair-prp-treatment-in-gurgaon">Hair PRP Treatment</a>
                        <a href="hair-microneedling-in-gurgaon">Microneedling</a>
                        <a href="hair-led-therapy-in-gurgaon">LED Therapy</a>
                        <a href="dandruff-treatment-in-gurgaon">Dandruff Treatment</a>
                        <a href="laser-hair-removal-in-gurgaon">Laser Hair Removal</a>

                        <!-- Skin Services -->
                        <a href="hydrafacial-in-gurgaon">Hydrafacial</a>
                        <a href="carbon-facial-in-gurgaon">Carbon Facial</a>
                        <a href="chemical-peel-treatment-in-gurgaon">Chemical Peel</a>
                        <a href="botox-treatment-in-gurgaon">Botox Treatment</a>
                        <a href="lip-blush-in-gurgaon">Lip Blush</a>
                        <a href="face-prp-treatment-in-gurgaon">Face PRP (Vampire Facial)</a>
                        <a href="tattoo-removal-in-gurgaon">Tattoo Removal</a>
                        <a href="mole-wart-removal-in-gurgaon">Mole & Wart Removal</a>
                        <a href="skin-treatment-in-gurgaon">General Skin Treatments</a>
                    </div>
                </div>

                <a href="./#doctors">Our Doctors</a>
                <a href="contact.php"
                    class="<?php echo ($currentPage == 'contact') ? 'active' : ''; ?> btn btn-secondary"
                    style="margin-left: 20px;">Contact Us</a>
            </nav>
        </div>
    </header>

    <main>


        <!--Whatsapp form Code--><!--<!--
         
 <!-- WhatsApp Widget for Header Integration - Popup Modal Style -->
        <div id="whatsapp-widget-container">
            <!-- Floating Button -->
            <div class="whatsapp-chat-button" id="whatsappButton" onclick="openWhatsAppPopup()">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="white">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.516" />
                </svg>
                <span>Chat with Us</span>
            </div>

            <!-- Popup Modal Overlay -->
            <div class="whatsapp-popup-overlay" id="whatsappOverlay" onclick="closeWhatsAppPopup()"></div>

            <!-- Popup Modal -->
            <div class="whatsapp-popup-modal" id="whatsappModal">
                <div class="popup-header">
                    <div class="header-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.516" />
                        </svg>
                    </div>
                    <div class="header-text">
                        <h2>Start a Conversation</h2>
                        <p>Hi! Fill the form below to chat with us on WhatsApp</p>
                    </div>
                    <button class="close-btn" onclick="closeWhatsAppPopup()">&times;</button>
                </div>

                <div class="popup-content">
                    <div class="features-list">
                        <div class="feature-item">
                            <span class="feature-icon">⚡</span>
                            <span>Quick Response</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">🕐</span>
                            <span>24/7 Support Available</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">💬</span>
                            <span>Direct WhatsApp Chat</span>
                        </div>
                    </div>

                    <form id="whatsappLeadForm" onsubmit="submitWhatsAppLead(event)">
                        <div class="form-group">
                            <label for="userName">Your Name *</label>
                            <input type="text" id="userName" name="name" required placeholder="Enter your full name">
                        </div>

                        <div class="form-group">
                            <label for="userPhone">Phone Number *</label>
                            <input type="tel" id="userPhone" name="phone" required placeholder="Enter your phone number"
                                maxlength="10">
                        </div>

                        <button type="submit" class="submit-btn" id="submitButton">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"
                                style="margin-right: 8px;">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.516" />
                            </svg>
                            Start WhatsApp Chat
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <style>
            #whatsapp-widget-container {
                position: fixed;
                z-index: 999999;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            /* Floating Button */
            .whatsapp-chat-button {
                position: fixed;
                bottom: 20px;
                left: 20px;
                background: #25D366;
                color: white;
                padding: 12px 20px;
                border-radius: 25px;
                cursor: pointer;
                display: flex;
                align-items: center;
                gap: 8px;
                box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
                transition: all 0.3s ease;
                animation: pulse 2s infinite;
                user-select: none;
                font-weight: 500;
                font-size: 14px;
                z-index: 999999;
            }

            .whatsapp-chat-button:hover {
                background: #20ba5a;
                transform: translateY(-2px);
                box-shadow: 0 6px 16px rgba(37, 211, 102, 0.6);
            }

            @keyframes pulse {
                0% {
                    box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
                }

                50% {
                    box-shadow: 0 4px 12px rgba(37, 211, 102, 0.6), 0 0 0 10px rgba(37, 211, 102, 0.1);
                }

                100% {
                    box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
                }
            }

            /* Popup Overlay */
            .whatsapp-popup-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.6);
                z-index: 999998;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
            }

            .whatsapp-popup-overlay.show {
                opacity: 1;
                visibility: visible;
            }

            /* Popup Modal */
            .whatsapp-popup-modal {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%) scale(0.8);
                width: 420px;
                max-width: 90vw;
                max-height: 90vh;
                background: white;
                border-radius: 16px;
                box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
                z-index: 999999;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                overflow: hidden;
            }

            .whatsapp-popup-modal.show {
                opacity: 1;
                visibility: visible;
                transform: translate(-50%, -50%) scale(1);
            }

            /* Popup Header */
            .popup-header {
                background: linear-gradient(135deg, #25d366 0%, #20ba5a 100%);
                color: white;
                padding: 24px;
                position: relative;
                display: flex;
                align-items: center;
                gap: 16px;
            }

            .header-icon {
                flex-shrink: 0;
                width: 60px;
                height: 60px;
                background: rgba(255, 255, 255, 0.2);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                backdrop-filter: blur(10px);
            }

            .header-text h2 {
                margin: 0 0 6px 0;
                font-size: 20px;
                font-weight: 600;
            }

            .header-text p {
                margin: 0;
                font-size: 14px;
                opacity: 0.9;
                line-height: 1.4;
            }

            .close-btn {
                position: absolute;
                top: 16px;
                right: 20px;
                background: rgba(255, 255, 255, 0.2);
                border: none;
                color: white;
                font-size: 20px;
                cursor: pointer;
                padding: 8px;
                line-height: 1;
                border-radius: 50%;
                width: 36px;
                height: 36px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: background-color 0.3s ease;
            }

            .close-btn:hover {
                background: rgba(255, 255, 255, 0.3);
            }

            /* Popup Content */
            .popup-content {
                padding: 24px;
            }

            .features-list {
                display: flex;
                justify-content: space-between;
                margin-bottom: 24px;
                background: #f8f9fa;
                padding: 16px;
                border-radius: 12px;
            }

            .feature-item {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                flex: 1;
                font-size: 12px;
                color: #666;
            }

            .feature-icon {
                font-size: 20px;
                margin-bottom: 6px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-group label {
                display: block;
                margin-bottom: 8px;
                font-weight: 600;
                color: #333;
                font-size: 14px;
            }

            .form-group input {
                width: 100%;
                padding: 14px 16px;
                border: 2px solid #e0e0e0;
                border-radius: 10px;
                font-size: 16px;
                box-sizing: border-box;
                transition: all 0.3s ease;
                background: #fff;
            }

            .form-group input:focus {
                outline: none;
                border-color: #25d366;
                box-shadow: 0 0 0 3px rgba(37, 211, 102, 0.1);
            }

            .form-group input::placeholder {
                color: #999;
            }

            .submit-btn {
                width: 100%;
                background: linear-gradient(135deg, #25d366 0%, #20ba5a 100%);
                color: white;
                padding: 16px;
                border: none;
                border-radius: 10px;
                font-size: 16px;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.3s ease;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
            }

            .submit-btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
            }

            .submit-btn:disabled {
                background: #ccc;
                cursor: not-allowed;
                transform: none;
                box-shadow: none;
            }

            /* Loading spinner */
            .spinner {
                border: 2px solid #f3f3f3;
                border-top: 2px solid #25d366;
                border-radius: 50%;
                width: 18px;
                height: 18px;
                animation: spin 1s linear infinite;
                display: inline-block;
                margin-right: 8px;
            }

            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

            /* Mobile Responsive */
            @media (max-width: 480px) {
                .whatsapp-popup-modal {
                    width: 95vw;
                    max-width: none;
                }

                .whatsapp-chat-button {
                    font-size: 13px;
                    padding: 10px 16px;
                    bottom: 15px;
                    left: 15px;
                }

                .popup-content {
                    padding: 20px;
                }

                .features-list {
                    flex-direction: column;
                    gap: 12px;
                }

                .feature-item {
                    flex-direction: row;
                    justify-content: flex-start;
                    text-align: left;
                }

                .feature-icon {
                    margin-right: 10px;
                    margin-bottom: 0;
                }
            }
        </style>

        <script>
            // Auto open popup after 10 seconds
            setTimeout(function () {
                openWhatsAppPopup();
            }, 40000);

            // Open popup function
            function openWhatsAppPopup() {
                document.getElementById('whatsappModal').classList.add('show');
                document.getElementById('whatsappOverlay').classList.add('show');
                document.body.style.overflow = 'hidden'; // Prevent background scroll
            }

            // Close popup function
            function closeWhatsAppPopup() {
                document.getElementById('whatsappModal').classList.remove('show');
                document.getElementById('whatsappOverlay').classList.remove('show');
                document.body.style.overflow = 'auto'; // Restore background scroll
            }

            // Phone number validation
            document.getElementById('userPhone').addEventListener('input', function (e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length > 10) {
                    value = value.substring(0, 10);
                }
                e.target.value = value;
            });

            // Handle form submission
            function submitWhatsAppLead(event) {
                event.preventDefault();

                const name = document.getElementById('userName').value.trim();
                const phone = document.getElementById('userPhone').value.trim();
                const submitBtn = document.getElementById('submitButton');

                // Validation
                if (!name || !phone) {
                    alert('Please fill in all required fields');
                    return;
                }

                if (!/^[0-9]{10}$/.test(phone)) {
                    alert('Please enter a valid 10-digit phone number');
                    return;
                }

                // Show loading state
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<div class="spinner"></div>Sending...';

                // Create form data
                const formData = new FormData();
                formData.append('name', name);
                formData.append('phone', phone);
                formData.append('action', 'whatsapp_lead');

                // Send data to PHP handler
                fetch('whatsapp_handler.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Close popup
                            closeWhatsAppPopup();

                            // Show success message
                            alert('Thank you! Redirecting to WhatsApp...');

                            // Redirect to WhatsApp
                            const message = `Hi, I'm ${name}. My phone number is ${phone}. I'm interested in your services.`;
                            const whatsappUrl = `https://api.whatsapp.com/send/?phone=%2B919359553046&text=${encodeURIComponent(message)}&type=phone_number&app_absent=0`;
                            window.open(whatsappUrl, '_blank');

                            // Reset form
                            document.getElementById('whatsappLeadForm').reset();
                        } else {
                            alert('Error: ' + (data.message || 'Something went wrong'));
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred. Please try again.');
                    })
                    .finally(() => {
                        // Reset button state
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 8px;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.516"/></svg>Start WhatsApp Chat';
                    });
            }

            // Close popup with Escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    closeWhatsAppPopup();
                }
            });
        </script>