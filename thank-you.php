<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Thank You | DenceSpot Clinic Gurgaon</title>
    <meta name="description" content="Thank you for contacting DenceSpot Clinic Gurgaon. Our team will get back to you within 24 hours.">
    <meta name="robots" content="noindex, nofollow">
    <link rel="canonical" href="https://dencespot.com/thank-you" />

    <?php include "includes/head_links.php"; ?>

    <style>
        .ty-checkmark {
            width: 100px; height: 100px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            background: linear-gradient(135deg, #0EA5A4, #0d9695);
            box-shadow: 0 20px 60px rgba(14,165,164,0.3);
            animation: popIn 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) both;
        }
        .ty-checkmark i { font-size: 44px; color: #fff; animation: checkDraw 0.4s 0.5s ease both; }
        @keyframes popIn { 0% { transform: scale(0); opacity: 0; } 100% { transform: scale(1); opacity: 1; } }
        @keyframes checkDraw { 0% { opacity: 0; transform: scale(0.5); } 100% { opacity: 1; transform: scale(1); } }
        .ty-card { animation: slideUp 0.5s 0.2s ease both; }
        @keyframes slideUp { 0% { transform: translateY(30px); opacity: 0; } 100% { transform: translateY(0); opacity: 1; } }
        .ty-steps li { animation: fadeIn 0.4s ease both; }
        .ty-steps li:nth-child(1) { animation-delay: 0.7s; }
        .ty-steps li:nth-child(2) { animation-delay: 0.9s; }
        .ty-steps li:nth-child(3) { animation-delay: 1.1s; }
        @keyframes fadeIn { 0% { opacity: 0; transform: translateX(-10px); } 100% { opacity: 1; transform: translateX(0); } }
    </style>
</head>
<body class="bg-bgLight font-sans text-darkSlate overflow-x-hidden">

    <?php include "includes/header.php"; ?>

    <!-- Thank You Section -->
    <section class="min-h-[80vh] flex items-center justify-center pt-32 pb-20 px-4">
        <div class="ty-card max-w-xl w-full text-center">

            <!-- Checkmark -->
            <div class="flex justify-center mb-8">
                <div class="ty-checkmark">
                    <i class="fas fa-check"></i>
                </div>
            </div>

            <!-- Card -->
            <div class="bg-white rounded-[2rem] p-8 md:p-12 shadow-xl border border-gray-100">
                <h1 class="text-3xl md:text-4xl font-display font-bold mb-4">Thank You!</h1>
                <p class="text-gray-500 text-lg mb-8">Your appointment request has been received successfully. Our team will contact you within <strong class="text-darkSlate">24 hours</strong>.</p>

                <!-- What Happens Next -->
                <div class="bg-bgLight rounded-2xl p-6 md:p-8 text-left mb-8">
                    <h2 class="font-bold text-lg mb-4 flex items-center gap-2">
                        <i class="fas fa-clipboard-list text-medicalTeal"></i> What Happens Next?
                    </h2>
                    <ul class="ty-steps space-y-4 text-gray-600">
                        <li class="flex items-start gap-3">
                            <span class="flex-shrink-0 w-7 h-7 bg-medicalTeal/10 text-medicalTeal rounded-full flex items-center justify-center text-xs font-bold mt-0.5">1</span>
                            <span>Our team will review your details and <strong>call you</strong> to discuss your requirements.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="flex-shrink-0 w-7 h-7 bg-medicalTeal/10 text-medicalTeal rounded-full flex items-center justify-center text-xs font-bold mt-0.5">2</span>
                            <span>We'll schedule a <strong>free consultation</strong> with our expert dermatologist at a time convenient for you.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="flex-shrink-0 w-7 h-7 bg-medicalTeal/10 text-medicalTeal rounded-full flex items-center justify-center text-xs font-bold mt-0.5">3</span>
                            <span>Get a <strong>personalised treatment plan</strong> designed specifically for your hair or skin concern.</span>
                        </li>
                    </ul>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="index.php" class="inline-flex items-center justify-center gap-2 bg-medicalTeal text-white px-8 py-4 rounded-full font-bold hover:bg-teal-600 transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                        <i class="fas fa-home"></i> Back to Home
                    </a>
                    <a href="https://wa.me/918178330800" target="_blank" class="inline-flex items-center justify-center gap-2 bg-[#25D366] text-white px-8 py-4 rounded-full font-bold hover:bg-[#1fb855] transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                        <i class="fab fa-whatsapp text-xl"></i> Chat on WhatsApp
                    </a>
                </div>

                <p class="text-gray-400 text-xs mt-8">Need urgent help? Call us directly at <a href="tel:+918178330800" class="text-medicalTeal font-bold hover:underline">+91 8178330800</a></p>
            </div>
        </div>
    </section>

    <?php include "includes/footer.php"; ?>
    <?php include "includes/scripts.php"; ?>
</body>
</html>
