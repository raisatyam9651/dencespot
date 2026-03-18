<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'DenceSpot Clinic Gurgaon'; ?></title>
    <meta name="description" content="<?php echo isset($pageDesc) ? htmlspecialchars($pageDesc) : ''; ?>">
    <?php if (isset($pageKeywords)): ?>
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>">
    <?php endif; ?>
    <?php if (isset($pageCanonical)): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($pageCanonical); ?>">
    <?php endif; ?>
    <meta name="geo.region" content="IN-HR">
    <meta name="geo.placename" content="Gurgaon">
    <?php include dirname(__FILE__) . '/head_links.php'; ?>

    <?php if (isset($currentPage) && $currentPage == 'blog'): ?>

    <?php if (isset($isBlogListing) && $isBlogListing): ?>
    <!-- CollectionPage Schema (Blog Listing) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CollectionPage",
      "name": "<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle, ENT_QUOTES) : ''; ?>",
      "description": "<?php echo isset($pageDesc) ? htmlspecialchars($pageDesc, ENT_QUOTES) : ''; ?>",
      "url": "https://dencespot.com/blog/",
      "isPartOf": {
        "@type": "WebSite",
        "name": "Dencespot Clinic",
        "url": "https://dencespot.com"
      }
    }
    </script>

    <!-- BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://dencespot.com/"
      }, {
        "@type": "ListItem",
        "position": 2,
        "name": "Blog",
        "item": "https://dencespot.com/blog/"
      }]
    }
    </script>

    <?php else: ?>
    <!-- BlogPosting Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BlogPosting",
      "headline": "<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle, ENT_QUOTES) : ''; ?>",
      "description": "<?php echo isset($pageDesc) ? htmlspecialchars($pageDesc, ENT_QUOTES) : ''; ?>",
      <?php if (isset($pageImage)): ?>
      "image": "https://dencespot.com/<?php echo htmlspecialchars($pageImage); ?>",
      <?php endif; ?>
      "url": "<?php echo isset($pageCanonical) ? htmlspecialchars($pageCanonical) : ''; ?>",
      "datePublished": "<?php echo isset($pageDate) ? htmlspecialchars($pageDate) : date('Y-m-d'); ?>",
      "dateModified": "<?php echo isset($pageDate) ? htmlspecialchars($pageDate) : date('Y-m-d'); ?>",
      "author": {
        "@type": "Organization",
        "name": "Dencespot Clinic",
        "url": "https://dencespot.com"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Dencespot Clinic",
        "url": "https://dencespot.com",
        "logo": {
          "@type": "ImageObject",
          "url": "https://dencespot.com/images/dencespot-logo.png"
        }
      },
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?php echo isset($pageCanonical) ? htmlspecialchars($pageCanonical) : ''; ?>"
      }
    }
    </script>

    <!-- BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://dencespot.com/"
      }, {
        "@type": "ListItem",
        "position": 2,
        "name": "Blog",
        "item": "https://dencespot.com/blog/"
      }, {
        "@type": "ListItem",
        "position": 3,
        "name": "<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle, ENT_QUOTES) : ''; ?>",
        "item": "<?php echo isset($pageCanonical) ? htmlspecialchars($pageCanonical) : ''; ?>"
      }]
    }
    </script>

    <?php if (isset($pageFAQs) && is_array($pageFAQs) && count($pageFAQs) > 0): ?>
    <!-- FAQPage Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        <?php foreach ($pageFAQs as $i => $faq): ?>
        {
          "@type": "Question",
          "name": "<?php echo htmlspecialchars($faq['q'], ENT_QUOTES); ?>",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "<?php echo htmlspecialchars($faq['a'], ENT_QUOTES); ?>"
          }
        }<?php echo ($i < count($pageFAQs) - 1) ? ',' : ''; ?>

        <?php endforeach; ?>
      ]
    }
    </script>
    <?php endif; ?>
    <?php endif; ?>

    <?php endif; ?>

</head>
