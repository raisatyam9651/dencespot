<?php $basePath = (isset($currentPage) && $currentPage == 'blog') ? '../' : ''; ?>
<!-- WhatsApp Widget - Popup Modal Style -->
<div id="whatsapp-widget-container">
    <!-- Floating Button -->
    <div class="whatsapp-chat-button" id="whatsappButton" onclick="openWhatsAppPopup()">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="white">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.516" />
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
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.516" />
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
                    <input type="tel" id="userPhone" name="phone" required placeholder="Enter your phone number" maxlength="10">
                </div>

                <button type="submit" class="submit-btn" id="submitButton">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 8px;">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.516" />
                    </svg>
                    Start WhatsApp Chat
                </button>
            </form>
        </div>
    </div>
</div>

<style>
    #whatsapp-widget-container { position: fixed; z-index: 999999; font-family: 'Inter', sans-serif; }
    .whatsapp-chat-button { position: fixed; bottom: 20px; left: 20px; background: #25D366; color: white; padding: 12px 20px; border-radius: 25px; cursor: pointer; display: flex; align-items: center; gap: 8px; box-shadow: 0 4px 12px rgba(37,211,102,0.4); transition: all 0.3s ease; animation: whatsappPulse 2s infinite; user-select: none; font-weight: 500; font-size: 14px; z-index: 999999; }
    .whatsapp-chat-button:hover { background: #20ba5a; transform: translateY(-2px); box-shadow: 0 6px 16px rgba(37,211,102,0.6); }
    @keyframes whatsappPulse { 0% { box-shadow: 0 4px 12px rgba(37,211,102,0.4); } 50% { box-shadow: 0 4px 12px rgba(37,211,102,0.6), 0 0 0 10px rgba(37,211,102,0.1); } 100% { box-shadow: 0 4px 12px rgba(37,211,102,0.4); } }
    .whatsapp-popup-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.6); z-index: 999998; opacity: 0; visibility: hidden; transition: all 0.3s ease; }
    .whatsapp-popup-overlay.show { opacity: 1; visibility: visible; }
    .whatsapp-popup-modal { position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%) scale(0.8); width: 420px; max-width: 90vw; max-height: 90vh; background: white; border-radius: 24px; box-shadow: 0 20px 60px rgba(0,0,0,0.3); z-index: 999999; opacity: 0; visibility: hidden; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); overflow: hidden; }
    .whatsapp-popup-modal.show { opacity: 1; visibility: visible; transform: translate(-50%, -50%) scale(1); }
    .popup-header { background: linear-gradient(135deg, #25d366 0%, #20ba5a 100%); color: white; padding: 24px; position: relative; display: flex; align-items: center; gap: 16px; }
    .header-icon { flex-shrink: 0; width: 50px; height: 50px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px); }
    .header-text h2 { margin: 0 0 4px 0; font-size: 18px; font-weight: 700; font-family: 'Poppins', sans-serif; }
    .header-text p { margin: 0; font-size: 13px; opacity: 0.9; line-height: 1.4; }
    .close-btn { position: absolute; top: 16px; right: 16px; background: rgba(255,255,255,0.2); border: none; color: white; font-size: 20px; cursor: pointer; width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: 0.3s; }
    .close-btn:hover { background: rgba(255,255,255,0.3); }
    .popup-content { padding: 24px; }
    .features-list { display: flex; justify-content: space-between; margin-bottom: 24px; background: #f8fafc; padding: 16px; border-radius: 16px; }
    .feature-item { display: flex; flex-direction: column; align-items: center; text-align: center; flex: 1; font-size: 11px; color: #64748b; font-weight: 600; }
    .feature-icon { font-size: 18px; margin-bottom: 4px; }
    .form-group { margin-bottom: 16px; }
    .form-group label { display: block; margin-bottom: 6px; font-weight: 600; color: #1e293b; font-size: 13px; }
    .form-group input { width: 100%; padding: 12px 16px; border: 2px solid #f1f5f9; border-radius: 12px; font-size: 15px; transition: 0.3s; background: #f8fafc; }
    .form-group input:focus { outline: none; border-color: #25d366; background: #fff; box-shadow: 0 0 0 4px rgba(37,211,102,0.1); }
    .submit-btn { width: 100%; background: linear-gradient(135deg, #25d366 0%, #20ba5a 100%); color: white; padding: 14px; border: none; border-radius: 12px; font-size: 16px; font-weight: 700; cursor: pointer; transition: all 0.3s; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(37,211,102,0.3); }
    .submit-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(37,211,102,0.4); }
    .submit-btn:disabled { background: #cbd5e1; cursor: not-allowed; transform: none; box-shadow: none; }
    .spinner { border: 2px solid rgba(255,255,255,0.3); border-top: 2px solid #fff; border-radius: 50%; width: 18px; height: 18px; animation: whatsappSpin 1s linear infinite; margin-right: 10px; }
    @keyframes whatsappSpin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    @media (max-width: 480px) {
        .whatsapp-chat-button { bottom: 15px; left: 15px; padding: 10px 16px; font-size: 13px; }
        .features-list { flex-direction: column; gap: 12px; }
        .feature-item { flex-direction: row; gap: 10px; text-align: left; }
        .feature-icon { margin-bottom: 0; }
    }
</style>

<script>
    function openWhatsAppPopup() {
        document.getElementById('whatsappModal').classList.add('show');
        document.getElementById('whatsappOverlay').classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function closeWhatsAppPopup() {
        document.getElementById('whatsappModal').classList.remove('show');
        document.getElementById('whatsappOverlay').classList.remove('show');
        document.body.style.overflow = 'auto';
    }

    document.getElementById('userPhone')?.addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 10) value = value.substring(0, 10);
        e.target.value = value;
    });

    function submitWhatsAppLead(event) {
        event.preventDefault();
        const name = document.getElementById('userName').value.trim();
        const phone = document.getElementById('userPhone').value.trim();
        const submitBtn = document.getElementById('submitButton');
        const basePath = '<?php echo $basePath; ?>';

        if (!name || !phone || !/^[0-9]{10}$/.test(phone)) {
            alert('Please enter a valid name and 10-digit phone number');
            return;
        }

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<div class="spinner"></div>Sending...';

        const formData = new FormData();
        formData.append('name', name);
        formData.append('phone', phone);
        formData.append('action', 'whatsapp_lead');

        fetch(basePath + 'whatsapp_handler.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                closeWhatsAppPopup();
                alert('Thank you! Redirecting to WhatsApp...');
                const message = `Hi, I'm ${name}. I'm interested in your services.`;
                const whatsappUrl = `https://api.whatsapp.com/send/?phone=%2B918178330800&text=${encodeURIComponent(message)}`;
                window.open(whatsappUrl, '_blank');
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
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Start WhatsApp Chat';
        });
    }

    // Auto open after 30s
    setTimeout(() => {
        if(!localStorage.getItem('whatsappPopupShown')) {
            openWhatsAppPopup();
            localStorage.setItem('whatsappPopupShown', 'true');
        }
    }, 30000);
</script>
