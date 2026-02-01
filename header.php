<?php
if (!isset($page_title)) {
    $page_title = 'Best Hair Transplant Clinic in Gurugram | DenceSpot';
}
if (!isset($page_desc)) {
    $page_desc = 'DenceSpot Clinic is a trusted hair transplant & skin care clinic in Gurugram offering advanced aesthetic treatments by expert doctors.';
}
if (!isset($active_page)) {
    $active_page = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta Tags -->
    <title>
        <?php echo $page_title; ?>
    </title>
    <meta name="description" content="<?php echo $page_desc; ?>">
    <link rel="canonical" href="https://dencespot.com/">

    <!-- Google Fonts for New Design -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Open+Sans:wght@400;600&family=Poppins:wght@500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <header>
        <div class="container navbar">
            <a href="index.php" class="logo">
                <span style="color: var(--primary-color);">Dence</span>Spot
            </a>

            <div class="hamburger" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </div>

            <nav class="nav-links" id="navLinks">
                <a href="index.php" class="<?php echo ($active_page == 'home') ? 'active' : ''; ?>">Home</a>
                <a href="index.php#about">About Us</a>
                <a href="hair-transplant-in-gurgaon.php"
                    class="<?php echo ($active_page == 'hair-transplant') ? 'active' : ''; ?>">Hair Transplant</a>
                <a href="index.php#services">Skin Treatments</a>
                <a href="index.php#doctors">Our Doctors</a>
                <a href="index.php#contact" class="btn btn-secondary">Contact Us</a>
            </nav>
        </div>
    </header>