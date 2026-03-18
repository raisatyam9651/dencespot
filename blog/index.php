<?php
$pageTitle = 'Expert Hair & Skin Blog | DenceSpot Clinic Gurgaon';
$pageDesc = 'Explore expert insights, clinical tips, and the latest updates on hair restoration and dermatology from DenceSpot Clinic.';
$pageKeywords = 'hair care blog, skin care articles, hair transplant tips, dermatology blog, gurgaon hair clinic blog';
$pageCanonical = 'https://dencespot.com/blog/';
$currentPage = 'blog';
include '../includes/head_links.php';
?>
<body class="bg-bgLight font-sans text-darkSlate overflow-x-hidden">

    <!-- Header -->
    <?php include "../includes/header.php"; ?>

    <!-- Blog Hero Section -->
    <section class="relative pt-32 pb-20 bg-darkSlate text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 skin-pattern"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block bg-medicalTeal/20 text-medicalTeal px-4 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest mb-6 border border-medicalTeal/30">Medical Insights</span>
            <h1 class="text-5xl lg:text-7xl font-display font-bold mb-8">Clinical <span class="text-medicalTeal uppercase italic">Knowledge</span></h1>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto font-light leading-relaxed">
                Stay updated with the latest advancements in hair restoration techniques and clinical skincare protocols.
            </p>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="py-12 md:py-20 bg-bgLight">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-12">
                
                <!-- Blog Card: PRP -->
                <article class="group bg-white rounded-[2.5rem] overflow-hidden shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-500">
                    <div class="p-6 md:p-10">
                        <h2 class="text-xl md:text-2xl font-display font-bold mb-4 group-hover:text-medicalTeal transition-all leading-tight">
                            <a href="prp-hair-treatment-natural-way-to-regrow-hair.php">PRP Treatment: Natural Hair Regrowth</a>
                        </h2>
                        <a href="prp-hair-treatment-natural-way-to-regrow-hair.php" class="inline-flex items-center gap-3 text-medicalTeal font-bold text-sm group-hover:gap-5 transition-all">
                            READ FULL ARTICLE <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Blog Card: Hydrafacial -->
                <article class="group bg-white rounded-[2.5rem] overflow-hidden shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-500">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="../images/hydrafacial.jpg" alt="Hydrafacial" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                        <div class="absolute top-4 left-4 md:top-6 md:left-6">
                            <span class="bg-white/90 backdrop-blur-md text-medicalTeal px-3 py-1 rounded-full text-[10px] font-bold uppercase">Skin Care</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-10">
                        <h2 class="text-xl md:text-2xl font-display font-bold mb-4 group-hover:text-medicalTeal transition-all leading-tight">
                            <a href="benefits-of-hydrafacial-how-it-transforms-your-skin.php">Benefits of Hydrafacial: Transform Your Skin</a>
                        </h2>
                        <a href="benefits-of-hydrafacial-how-it-transforms-your-skin.php" class="inline-flex items-center gap-3 text-medicalTeal font-bold text-sm group-hover:gap-5 transition-all">
                            READ FULL ARTICLE <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Blog Card: Botox -->
                <article class="group bg-white rounded-[2.5rem] overflow-hidden shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-500">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="../images/botox.jpg" alt="Botox" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                        <div class="absolute top-4 left-4 md:top-6 md:left-6">
                            <span class="bg-white/90 backdrop-blur-md text-medicalTeal px-3 py-1 rounded-full text-[10px] font-bold uppercase">Anti-Ageing</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-10">
                        <h2 class="text-xl md:text-2xl font-display font-bold mb-4 group-hover:text-medicalTeal transition-all leading-tight">
                            <a href="everything-you-need-to-know-about-botox-and-fillers.php">Injectables Guide: Botox & Fillers</a>
                        </h2>
                        <a href="everything-you-need-to-know-about-botox-and-fillers.php" class="inline-flex items-center gap-3 text-medicalTeal font-bold text-sm group-hover:gap-5 transition-all">
                            READ FULL ARTICLE <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Blog Card: Laser -->
                <article class="group bg-white rounded-[2.5rem] overflow-hidden shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-500">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="../images/laser-hair-removel-gurgaon.jpg" alt="Laser hair removal" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                        <div class="absolute top-4 left-4 md:top-6 md:left-6">
                            <span class="bg-white/90 backdrop-blur-md text-medicalTeal px-3 py-1 rounded-full text-[10px] font-bold uppercase">Laser</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-10">
                        <h2 class="text-xl md:text-2xl font-display font-bold mb-4 group-hover:text-medicalTeal transition-all leading-tight">
                            <a href="is-laser-hair-removal-permanent-expert-perspective.php">Is Laser Permanent? Expert Perspective</a>
                        </h2>
                        <a href="is-laser-hair-removal-permanent-expert-perspective.php" class="inline-flex items-center gap-3 text-medicalTeal font-bold text-sm group-hover:gap-5 transition-all">
                            READ FULL ARTICLE <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Blog Card: Chemical Peels -->
                <article class="group bg-white rounded-[2.5rem] overflow-hidden shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-500">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="../images/service-skin.png" alt="Chemical peels" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                        <div class="absolute top-4 left-4 md:top-6 md:left-6">
                            <span class="bg-white/90 backdrop-blur-md text-medicalTeal px-3 py-1 rounded-full text-[10px] font-bold uppercase">Skin Care</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-10">
                        <h2 class="text-xl md:text-2xl font-display font-bold mb-4 group-hover:text-medicalTeal transition-all leading-tight">
                            <a href="chemical-peels-finding-the-right-depth-for-your-skin-type.php">Chemical Peels: The Depth Guide</a>
                        </h2>
                        <a href="chemical-peels-finding-the-right-depth-for-your-skin-type.php" class="inline-flex items-center gap-3 text-medicalTeal font-bold text-sm group-hover:gap-5 transition-all">
                            READ FULL ARTICLE <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Blog Card: Transplant Myths -->
                <article class="group bg-white rounded-[2.5rem] overflow-hidden shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-500">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="../images/hair-transplant-original.jpg" alt="Hair transplant myths" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                        <div class="absolute top-4 left-4 md:top-6 md:left-6">
                            <span class="bg-white/90 backdrop-blur-md text-medicalTeal px-3 py-1 rounded-full text-[10px] font-bold uppercase">Hair Care</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-10">
                        <h2 class="text-xl md:text-2xl font-display font-bold mb-4 group-hover:text-medicalTeal transition-all leading-tight">
                            <a href="understanding-hair-transplant-myths-vs-facts.php">Transplant Myths: Separating Facts</a>
                        </h2>
                        <a href="understanding-hair-transplant-myths-vs-facts.php" class="inline-flex items-center gap-3 text-medicalTeal font-bold text-sm group-hover:gap-5 transition-all">
                            READ FULL ARTICLE <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Existing Blog Cards -->
                <!-- Hair Fall -->
                <article class="group bg-white rounded-[2.5rem] overflow-hidden shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-500">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="../images/blog/hair-fall-prevention-featured.png" alt="Hair Fall Prevention" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                        <div class="absolute top-4 left-4 md:top-6 md:left-6">
                            <span class="bg-white/90 backdrop-blur-md text-medicalTeal px-3 py-1 rounded-full text-[10px] font-bold uppercase">Hair Care</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-10">
                        <h2 class="text-xl md:text-2xl font-display font-bold mb-4 group-hover:text-medicalTeal transition-all leading-tight">
                            <a href="hair-fall-and-hair-loss-prevention.php">Hair Fall & Hair Loss Prevention</a>
                        </h2>
                        <a href="hair-fall-and-hair-loss-prevention.php" class="inline-flex items-center gap-3 text-medicalTeal font-bold text-sm group-hover:gap-5 transition-all">
                            READ FULL ARTICLE <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Hair Growth -->
                <article class="group bg-white rounded-[2.5rem] overflow-hidden shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-500">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="../images/blog/hair-growth-tips-featured.png" alt="Hair Growth Tips" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                        <div class="absolute top-4 left-4 md:top-6 md:left-6">
                            <span class="bg-white/90 backdrop-blur-md text-medicalTeal px-3 py-1 rounded-full text-[10px] font-bold uppercase">Growth</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-10">
                        <h2 class="text-xl md:text-2xl font-display font-bold mb-4 group-hover:text-medicalTeal transition-all leading-tight">
                            <a href="hair-growth-tips-and-methods.php">Methods to Grow Hair Faster</a>
                        </h2>
                        <a href="hair-growth-tips-and-methods.php" class="inline-flex items-center gap-3 text-medicalTeal font-bold text-sm group-hover:gap-5 transition-all">
                            READ FULL ARTICLE <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Hair Thickness -->
                <article class="group bg-white rounded-[2.5rem] overflow-hidden shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-500">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="../images/blog/hair-thickness-density-featured.png" alt="Hair Thickness" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                        <div class="absolute top-4 left-4 md:top-6 md:left-6">
                            <span class="bg-white/90 backdrop-blur-md text-medicalTeal px-3 py-1 rounded-full text-[10px] font-bold uppercase">Volume</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-10">
                        <h2 class="text-xl md:text-2xl font-display font-bold mb-4 group-hover:text-medicalTeal transition-all leading-tight">
                            <a href="hair-thickness-and-hair-density-improvement.php">Density Improvement Guide</a>
                        </h2>
                        <a href="hair-thickness-and-hair-density-improvement.php" class="inline-flex items-center gap-3 text-medicalTeal font-bold text-sm group-hover:gap-5 transition-all">
                            READ FULL ARTICLE <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Hair Oils -->
                <article class="group bg-white rounded-[2.5rem] overflow-hidden shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-500">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="../images/blog/best-hair-oils-featured.png" alt="Best Hair Oils" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                        <div class="absolute top-4 left-4 md:top-6 md:left-6">
                            <span class="bg-white/90 backdrop-blur-md text-medicalTeal px-3 py-1 rounded-full text-[10px] font-bold uppercase">Nourishment</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-10">
                        <h2 class="text-xl md:text-2xl font-display font-bold mb-4 group-hover:text-medicalTeal transition-all leading-tight">
                            <a href="best-hair-oils-for-growth-benefits.php">Best Oils for Hair Growth</a>
                        </h2>
                        <a href="best-hair-oils-for-growth-benefits.php" class="inline-flex items-center gap-3 text-medicalTeal font-bold text-sm group-hover:gap-5 transition-all">
                            READ FULL ARTICLE <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Vitamins -->
                <article class="group bg-white rounded-[2.5rem] overflow-hidden shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-500">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="../images/blog/vitamins-for-hair-featured.png" alt="Vitamins for Hair" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                        <div class="absolute top-4 left-4 md:top-6 md:left-6">
                            <span class="bg-white/90 backdrop-blur-md text-medicalTeal px-3 py-1 rounded-full text-[10px] font-bold uppercase">Nutrition</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-10">
                        <h2 class="text-xl md:text-2xl font-display font-bold mb-4 group-hover:text-medicalTeal transition-all leading-tight">
                            <a href="vitamins-nutrition-healthy-hair.php">Vitamins for Healthy Hair</a>
                        </h2>
                        <a href="vitamins-nutrition-healthy-hair.php" class="inline-flex items-center gap-3 text-medicalTeal font-bold text-sm group-hover:gap-5 transition-all">
                            READ FULL ARTICLE <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Dandruff -->
                <article class="group bg-white rounded-[2.5rem] overflow-hidden shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-500">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="../images/blog/dandruff-scalp-problems-featured.png" alt="Dandruff Treatment" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                        <div class="absolute top-4 left-4 md:top-6 md:left-6">
                            <span class="bg-white/90 backdrop-blur-md text-medicalTeal px-3 py-1 rounded-full text-[10px] font-bold uppercase">Scalp Care</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-10">
                        <h2 class="text-xl md:text-2xl font-display font-bold mb-4 group-hover:text-medicalTeal transition-all leading-tight">
                            <a href="dandruff-scalp-problems-treatment.php">Dandruff & Scalp Treatments</a>
                        </h2>
                        <a href="dandruff-scalp-problems-treatment.php" class="inline-flex items-center gap-3 text-medicalTeal font-bold text-sm group-hover:gap-5 transition-all">
                            READ FULL ARTICLE <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>