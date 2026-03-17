<?php $basePath = (isset($currentPage) && $currentPage == 'blog') ? '../' : ''; ?>
<header class="fixed top-0 w-full z-50 transition-all duration-300 glass border-b border-gray-100" id="mainHeader">
        <nav class="container mx-auto px-6 py-4 flex items-center justify-between">
            <a href="<?php echo $basePath; ?>index.php" class="text-2xl font-display font-bold flex items-center gap-2">
                <span class="text-gray-400">DENCE</span><span class="text-red-600">SPOT</span> <span class="text-darkSlate text-lg font-light">Clinic</span>
            </a>
            
            <div class="hidden lg:flex items-center gap-8 font-medium text-sm">
                <a href="<?php echo $basePath; ?>index.php" class="nav-link">Home</a>
                
                <div class="dropdown">
                    <a href="#" class="nav-link flex items-center gap-1">Treatments <i class="fas fa-chevron-down text-[10px] opacity-50"></i></a>
                    <div class="dropdown-content">
                        <!-- Hair Sub-menu -->
                        <div class="sub-dropdown">
                            <a href="<?php echo $basePath; ?>hair-transplant-in-gurgaon.php" class="dropdown-item flex justify-between items-center">Hair Treatments <i class="fas fa-chevron-right text-[8px] opacity-30"></i></a>
                            <div class="sub-dropdown-content">
                                <a href="<?php echo $basePath; ?>hair-transplant-in-gurgaon.php" class="dropdown-item">Hair Transplant</a>
                                <a href="<?php echo $basePath; ?>hair-prp-treatment-in-gurgaon.php" class="dropdown-item">Hair PRP Treatment</a>
                                <a href="<?php echo $basePath; ?>beard-transplant-gurgaon.php" class="dropdown-item">Beard Transplant</a>
                                <a href="<?php echo $basePath; ?>hair-microneedling-in-gurgaon.php" class="dropdown-item">Hair Microneedling</a>
                                <a href="<?php echo $basePath; ?>hair-led-therapy-in-gurgaon.php" class="dropdown-item">Hair LED Therapy</a>
                                <a href="<?php echo $basePath; ?>dandruff-treatment-in-gurgaon.php" class="dropdown-item">Dandruff Treatment</a>
                            </div>
                        </div>
                        
                        <!-- Skin Sub-menu -->
                        <div class="sub-dropdown">
                            <a href="<?php echo $basePath; ?>skin-treatment-in-gurgaon.php" class="dropdown-item flex justify-between items-center">Skin Treatments <i class="fas fa-chevron-right text-[8px] opacity-30"></i></a>
                            <div class="sub-dropdown-content">
                                <a href="<?php echo $basePath; ?>hydrafacial-in-gurgaon.php" class="dropdown-item">HydraFacial</a>
                                <a href="<?php echo $basePath; ?>carbon-facial-in-gurgaon.php" class="dropdown-item">Carbon Facial</a>
                                <a href="<?php echo $basePath; ?>botox-treatment-in-gurgaon.php" class="dropdown-item">Botox Treatment</a>
                                <a href="<?php echo $basePath; ?>laser-hair-removal-in-gurgaon.php" class="dropdown-item">Laser Hair Removal</a>
                                <a href="<?php echo $basePath; ?>tattoo-removal-in-gurgaon.php" class="dropdown-item">Tattoo Removal</a>
                                <a href="<?php echo $basePath; ?>chemical-peel-treatment-in-gurgaon.php" class="dropdown-item">Chemical Peels</a>
                                <a href="<?php echo $basePath; ?>face-prp-treatment-in-gurgaon.php" class="dropdown-item">Face PRP</a>
                                <a href="<?php echo $basePath; ?>mole-wart-removal-in-gurgaon.php" class="dropdown-item">Mole & Wart Removal</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="<?php echo $basePath; ?>about-us.php" class="nav-link">About Us</a>
                <a href="<?php echo $basePath; ?>gallery.php" class="nav-link">Gallery</a>
                <a href="<?php echo $basePath; ?>blog/" class="nav-link">Blog</a>
                <a href="<?php echo $basePath; ?>contact.php" class="nav-link">Contact</a>
            </div>

            <a href="<?php echo $basePath; ?>contact.php" class="hidden md:block bg-medicalTeal text-white px-6 py-2.5 rounded-full font-semibold hover:bg-teal-700 transition-all shadow-lg hover:shadow-teal-200">
                Book Consultation
            </a>

            <button class="lg:hidden text-2xl text-darkSlate" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>

        <!-- Mobile Menu Overlay -->
        <div id="mobileMenu" class="fixed inset-0 bg-darkSlate text-white z-[60] flex flex-col items-center justify-center gap-8 -translate-y-full transition-transform duration-500 lg:hidden">
            <button id="closeMenuBtn" class="absolute top-8 right-8 text-3xl"><i class="fas fa-times"></i></button>
            <a href="<?php echo $basePath; ?>index.php" class="text-2xl font-bold">Home</a>
            <a href="<?php echo $basePath; ?>hair-transplant-in-gurgaon.php" class="text-2xl font-bold">Hair Treatments</a>
            <a href="<?php echo $basePath; ?>skin-treatment-in-gurgaon.php" class="text-2xl font-bold">Skin Treatments</a>
            <a href="<?php echo $basePath; ?>about-us.php" class="text-2xl font-bold">About Us</a>
            <a href="<?php echo $basePath; ?>gallery.php" class="text-2xl font-bold">Gallery</a>
            <a href="<?php echo $basePath; ?>contact.php" class="text-2xl font-bold bg-medicalTeal px-8 py-3 rounded-full">Book Now</a>
        </div>
    </header>