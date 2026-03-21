<?php
$pageTitle = 'Expert Hair & Skin Blog | DenceSpot Clinic Gurgaon';
$pageDesc = 'Explore expert insights, clinical tips, and the latest updates on hair restoration and dermatology from DenceSpot Clinic.';
$pageKeywords = 'hair care blog, skin care articles, hair transplant tips, dermatology blog, gurgaon hair clinic blog';
$pageCanonical = 'https://dencespot.com/blog/';
$currentPage = 'blog';
$isBlogListing = true;
include '../includes/page_head.php';
include '../includes/blog-posts.php';

// Pagination
$postsPerPage = 12;
$totalPosts = count($blogPosts);
$totalPages = ceil($totalPosts / $postsPerPage);
$currentPageNum = isset($_GET['page']) ? max(1, min((int)$_GET['page'], $totalPages)) : 1;
$offset = ($currentPageNum - 1) * $postsPerPage;
$paginatedPosts = array_slice($blogPosts, $offset, $postsPerPage);
?>
<body class="bg-bgLight font-sans text-darkSlate overflow-x-hidden">

    <?php include "../includes/header.php"; ?>

    <!-- ===== HERO ===== -->
    <section class="blog-hero">
        <div class="absolute inset-0 skin-pattern" style="opacity:0.04;"></div>
        <div class="absolute top-0 right-0 w-64 h-64 rounded-full blur-3xl pointer-events-none deco-hide" style="background:rgba(14,165,164,0.12); transform:translate(40%,-30%);"></div>
        <div class="container mx-auto px-5 relative z-10 text-center">
            <span class="inline-block bg-medicalTeal/20 text-medicalTeal border border-medicalTeal/30 px-4 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest mb-4">Medical Insights</span>
            <h1 class="font-display font-bold text-white mb-3">
                Clinical <span class="text-medicalTeal italic">Knowledge</span>
            </h1>
            <p class="text-gray-400 font-light max-w-xl mx-auto">
                The latest advancements in hair restoration &amp; clinical skincare — explained by our experts.
            </p>
        </div>
    </section>

    <!-- ===== BLOG LISTING ===== -->
    <section class="blog-listing">
        <div class="container mx-auto px-4">
            <div class="blog-listing__grid">
                <?php foreach ($paginatedPosts as $post):
                    $img = '../' . $post['image'];
                    $url = basename($post['url']);
                    $dateFormatted = date('M j, Y', strtotime($post['date']));
                ?>
                <article class="blog-card">
                    <a href="<?php echo htmlspecialchars($url); ?>" class="flex flex-col flex-1">
                        <div class="blog-card__image">
                            <img src="<?php echo htmlspecialchars($img); ?>"
                                 alt="<?php echo htmlspecialchars($post['title']); ?>"
                                 loading="lazy">
                            <span class="blog-card__badge"><?php echo htmlspecialchars($post['category']); ?></span>
                        </div>
                        <div class="blog-card__body">
                            <span class="blog-card__date"><?php echo $dateFormatted; ?></span>
                            <h2 class="blog-card__title"><?php echo htmlspecialchars($post['title']); ?></h2>
                            <p class="blog-card__desc"><?php echo htmlspecialchars($post['desc']); ?></p>
                            <span class="blog-card__btn">Read More <i class="fas fa-arrow-right" style="font-size:10px;"></i></span>
                        </div>
                    </a>
                </article>
                <?php endforeach; ?>
            </div>

            <?php if ($totalPages > 1): ?>
            <nav class="blog-pagination" aria-label="Blog pagination">
                <?php if ($currentPageNum > 1): ?>
                    <a href="?page=<?php echo $currentPageNum - 1; ?>" class="blog-pagination__btn">
                        <i class="fas fa-chevron-left"></i> Prev
                    </a>
                <?php endif; ?>

                <?php
                // Show page numbers with ellipsis for large page counts
                $range = 2;
                $start = max(1, $currentPageNum - $range);
                $end = min($totalPages, $currentPageNum + $range);

                if ($start > 1):
                ?>
                    <a href="?page=1" class="blog-pagination__num">1</a>
                    <?php if ($start > 2): ?>
                        <span class="blog-pagination__dots">...</span>
                    <?php endif; ?>
                <?php endif; ?>

                <?php for ($i = $start; $i <= $end; $i++): ?>
                    <?php if ($i == $currentPageNum): ?>
                        <span class="blog-pagination__num blog-pagination__num--active"><?php echo $i; ?></span>
                    <?php else: ?>
                        <a href="?page=<?php echo $i; ?>" class="blog-pagination__num"><?php echo $i; ?></a>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($end < $totalPages): ?>
                    <?php if ($end < $totalPages - 1): ?>
                        <span class="blog-pagination__dots">...</span>
                    <?php endif; ?>
                    <a href="?page=<?php echo $totalPages; ?>" class="blog-pagination__num"><?php echo $totalPages; ?></a>
                <?php endif; ?>

                <?php if ($currentPageNum < $totalPages): ?>
                    <a href="?page=<?php echo $currentPageNum + 1; ?>" class="blog-pagination__btn">
                        Next <i class="fas fa-chevron-right"></i>
                    </a>
                <?php endif; ?>
            </nav>
            <?php endif; ?>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/scripts.php'; ?>
</body>
</html>
