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
</head>
