<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header-link.php'; ?>
</head>

<body>

    <header>
        <div class="container navbar">
            <a href="./" class="logo">
                <span style="color: var(--primary-color);">Dence</span>Spot
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
                <a href="./#contact" class="btn btn-secondary">Contact Us</a>
            </nav>
        </div>
    </header>

    <main>