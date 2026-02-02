<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta Tags -->
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Best Hair Transplant Clinic in Gurugram | DenceSpot'; ?></title>
    <meta name="description"
        content="<?php echo isset($pageDesc) ? $pageDesc : 'DenceSpot Clinic is a trusted hair transplant & skin care clinic in Gurugram offering advanced aesthetic treatments by expert doctors.'; ?>">
    <link rel="canonical" href="<?php echo isset($pageCanonical) ? $pageCanonical : 'https://dencespot.com/'; ?>">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Open+Sans:wght@400;600&family=Poppins:wght@500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=2">

    <!-- FontAwesome -->
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
                <a href="index.php" class="<?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Home</a>
                <a href="index.php#about">About Us</a>

                <div class="dropdown">
                    <a href="javascript:void(0)"
                        class="dropbtn <?php echo (in_array($currentPage, ['hair-transplant', 'beard-transplant', 'hair-prp', 'hair-microneedling', 'hair-led-therapy', 'dandruff-treatment', 'hydrafacial', 'carbon-facial', 'chemical-peel', 'botox-treatment', 'lip-blush', 'face-prp', 'tattoo-removal', 'mole-removal', 'laser-hair-removal'])) ? 'active' : ''; ?>">
                        Services <i class="fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <!-- Hair Services -->
                        <a href="hair-transplant-in-gurgaon.php">Hair Transplant</a>
                        <a href="beard-transplant-in-gurgaon.php">Beard Transplant</a>
                        <a href="hair-prp-treatment-in-gurgaon.php">Hair PRP Treatment</a>
                        <a href="hair-microneedling-in-gurgaon.php">Microneedling</a>
                        <a href="hair-led-therapy-in-gurgaon.php">LED Therapy</a>
                        <a href="dandruff-treatment-in-gurgaon.php">Dandruff Treatment</a>
                        <a href="laser-hair-removal-in-gurgaon.php">Laser Hair Removal</a>

                        <!-- Skin Services -->
                        <a href="hydrafacial-in-gurgaon.php">Hydrafacial</a>
                        <a href="carbon-facial-in-gurgaon.php">Carbon Facial</a>
                        <a href="chemical-peel-treatment-in-gurgaon.php">Chemical Peel</a>
                        <a href="botox-treatment-in-gurgaon.php">Botox Treatment</a>
                        <a href="lip-blush-in-gurgaon.php">Lip Blush</a>
                        <a href="face-prp-treatment-in-gurgaon.php">Face PRP (Vampire Facial)</a>
                        <a href="tattoo-removal-in-gurgaon.php">Tattoo Removal</a>
                        <a href="mole-wart-removal-in-gurgaon.php">Mole & Wart Removal</a>
                        <a href="skin-treatment-in-gurgaon.php">General Skin Treatments</a>
                    </div>
                </div>

                <a href="index.php#doctors">Our Doctors</a>
                <a href="index.php#contact" class="btn btn-secondary">Contact Us</a>
            </nav>
        </div>
    </header>

    <main>