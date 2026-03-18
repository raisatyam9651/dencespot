<?php
$pageTitle = 'Expert Hair & Skin Blog | DenceSpot Clinic Gurgaon';
$pageDesc = 'Explore expert insights, clinical tips, and the latest updates on hair restoration and dermatology from DenceSpot Clinic.';
$pageKeywords = 'hair care blog, skin care articles, hair transplant tips, dermatology blog, gurgaon hair clinic blog';
$pageCanonical = 'https://dencespot.com/blog/';
$currentPage = 'blog';
include '../includes/head_links.php';
include '../includes/blog-posts.php';
?>
<body class="bg-bgLight font-sans text-darkSlate overflow-x-hidden">

    <?php include "../includes/header.php"; ?>

    <!-- ===== HERO ===== -->
    <section class="relative bg-darkSlate text-white overflow-hidden" style="padding-top: 80px; padding-bottom: 48px;">
        <div class="absolute inset-0 skin-pattern" style="opacity:0.04;"></div>
        <div class="absolute top-0 right-0 w-64 h-64 rounded-full blur-3xl pointer-events-none" style="background:rgba(14,165,164,0.12); transform:translate(40%,-30%);"></div>
        <div class="container mx-auto px-5 relative z-10 text-center">
            <span class="inline-block bg-medicalTeal/20 text-medicalTeal border border-medicalTeal/30 px-4 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest mb-4">Medical Insights</span>
            <h1 class="font-display font-bold text-white mb-3" style="font-size: clamp(28px, 8vw, 64px); line-height: 1.15;">
                Clinical <span class="text-medicalTeal italic">Knowledge</span>
            </h1>
            <p class="text-gray-400 font-light max-w-xl mx-auto" style="font-size: clamp(13px, 3.5vw, 17px); line-height: 1.7;">
                The latest advancements in hair restoration &amp; clinical skincare — explained by our experts.
            </p>
        </div>
    </section>

    <!-- ===== BLOG GRID ===== -->
    <section class="bg-bgLight" style="padding: 32px 0 80px;">
        <div class="container mx-auto px-4">

            <!-- ── MOBILE: full-width cards (hidden on lg+) ── -->
            <div class="flex flex-col gap-5 lg:hidden">
                <?php foreach ($blogPosts as $post):
                    $img = '../' . $post['image'];
                    $url = basename($post['url']);
                    $dateFormatted = date('M j, Y', strtotime($post['date']));
                ?>
                <article class="group bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm active:scale-[0.99] transition-transform" style="-webkit-tap-highlight-color: transparent;">
                    <a href="<?php echo htmlspecialchars($url); ?>" class="block">
                        <!-- Full-width image -->
                        <div class="relative overflow-hidden">
                            <img src="<?php echo htmlspecialchars($img); ?>"
                                 alt="<?php echo htmlspecialchars($post['title']); ?>"
                                 class="w-full object-cover"
                                 style="height: 190px;"
                                 loading="lazy">
                            <span class="absolute top-3 left-3 bg-white px-3 py-1 rounded-full text-[10px] font-bold text-medicalTeal uppercase shadow-sm">
                                <?php echo htmlspecialchars($post['category']); ?>
                            </span>
                        </div>
                        <!-- Content -->
                        <div class="p-4">
                            <span class="text-gray-400 text-[11px]"><?php echo $dateFormatted; ?></span>
                            <h2 class="font-bold text-darkSlate leading-snug mt-1 mb-2" style="font-size: 15px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                <?php echo htmlspecialchars($post['title']); ?>
                            </h2>
                            <p class="text-gray-500 text-sm mb-4 leading-relaxed" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                <?php echo htmlspecialchars($post['desc']); ?>
                            </p>
                            <span class="inline-flex items-center gap-2 bg-medicalTeal text-white text-xs font-bold px-4 py-2.5 rounded-xl">
                                Read More <i class="fas fa-arrow-right text-[10px]"></i>
                            </span>
                        </div>
                    </a>
                </article>
                <?php endforeach; ?>
            </div>

            <!-- ── DESKTOP: 3-col card grid (hidden below lg) ── -->
            <div class="hidden lg:grid lg:grid-cols-3 gap-8">
                <?php foreach ($blogPosts as $post):
                    $img = '../' . $post['image'];
                    $url = basename($post['url']);
                    $dateFormatted = date('M j, Y', strtotime($post['date']));
                ?>
                <article class="group bg-white rounded-[2rem] overflow-hidden shadow-md border border-gray-100 hover:-translate-y-2 transition-all duration-500 flex flex-col">
                    <div class="relative h-52 overflow-hidden shrink-0">
                        <img src="<?php echo htmlspecialchars($img); ?>"
                             alt="<?php echo htmlspecialchars($post['title']); ?>"
                             class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700"
                             loading="lazy">
                        <span class="absolute top-4 left-4 bg-white/90 backdrop-blur-md text-medicalTeal px-3 py-1 rounded-full text-[10px] font-bold uppercase">
                            <?php echo htmlspecialchars($post['category']); ?>
                        </span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <span class="text-gray-400 text-xs mb-2"><?php echo $dateFormatted; ?></span>
                        <h2 class="font-display font-bold text-lg leading-snug mb-3 group-hover:text-medicalTeal transition-colors flex-1">
                            <a href="<?php echo htmlspecialchars($url); ?>"><?php echo htmlspecialchars($post['title']); ?></a>
                        </h2>
                        <p class="text-gray-500 text-sm leading-relaxed mb-5" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                            <?php echo htmlspecialchars($post['desc']); ?>
                        </p>
                        <a href="<?php echo htmlspecialchars($url); ?>"
                           class="inline-flex items-center gap-2 text-medicalTeal font-bold text-xs uppercase tracking-widest group-hover:gap-4 transition-all mt-auto">
                            Read Full Article <i class="fas fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
