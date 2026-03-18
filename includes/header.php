<?php $basePath = (isset($currentPage) && $currentPage == 'blog') ? '../' : ''; ?>

<!-- ===== MOBILE-FIRST HEADER ===== -->
<header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-lg border-b border-gray-100 transition-shadow duration-300" id="mainHeader">
    <div class="flex items-center justify-between px-4 h-[60px] max-w-screen-xl mx-auto">

        <!-- Logo -->
        <a href="<?php echo $basePath; ?>index.php" class="flex items-center font-display font-bold text-[21px] leading-none shrink-0">
            <span class="text-gray-400">DENCE</span><span class="text-red-600">SPOT</span>
            <span class="text-darkSlate text-sm font-light ml-1.5 hidden sm:inline opacity-50">Clinic</span>
        </a>

        <!-- Desktop Nav (lg+) -->
        <nav class="hidden lg:flex items-center gap-7 font-medium text-sm text-darkSlate">
            <a href="<?php echo $basePath; ?>index.php" class="nav-link">Home</a>
            <div class="dropdown">
                <a href="#" class="nav-link flex items-center gap-1">Treatments <i class="fas fa-chevron-down text-[10px] opacity-40 ml-0.5"></i></a>
                <div class="dropdown-content">
                    <div class="sub-dropdown">
                        <a href="<?php echo $basePath; ?>hair-transplant-in-gurgaon.php" class="dropdown-item flex justify-between items-center">Hair Treatments <i class="fas fa-chevron-right text-[8px] opacity-30"></i></a>
                        <div class="sub-dropdown-content">
                            <a href="<?php echo $basePath; ?>hair-transplant-in-gurgaon.php" class="dropdown-item">Hair Transplant</a>
                            <a href="<?php echo $basePath; ?>hair-prp-treatment-in-gurgaon.php" class="dropdown-item">Hair PRP Treatment</a>
                            <a href="<?php echo $basePath; ?>beard-transplant-gurgaon.php" class="dropdown-item">Beard Transplant</a>
                            <a href="<?php echo $basePath; ?>hair-microneedling-in-gurgaon.php" class="dropdown-item">Microneedling</a>
                            <a href="<?php echo $basePath; ?>hair-led-therapy-in-gurgaon.php" class="dropdown-item">LED Therapy</a>
                            <a href="<?php echo $basePath; ?>dandruff-treatment-in-gurgaon.php" class="dropdown-item">Dandruff Treatment</a>
                        </div>
                    </div>
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
                            <a href="<?php echo $basePath; ?>mole-wart-removal-in-gurgaon.php" class="dropdown-item">Mole &amp; Wart Removal</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?php echo $basePath; ?>about-us.php" class="nav-link">About</a>
            <a href="<?php echo $basePath; ?>gallery.php" class="nav-link">Gallery</a>
            <a href="<?php echo $basePath; ?>blog/" class="nav-link">Blog</a>
            <a href="<?php echo $basePath; ?>contact.php" class="nav-link">Contact</a>
        </nav>

        <!-- Right Controls -->
        <div class="flex items-center gap-2">
            <!-- Desktop: Book Consultation -->
            <a href="<?php echo $basePath; ?>contact.php" class="hidden lg:flex items-center bg-medicalTeal text-white px-5 py-2.5 rounded-full font-semibold text-sm hover:bg-teal-600 transition-all shadow-md">
                Book Consultation
            </a>
            <!-- Mobile: Phone icon (click-to-call) -->
            <a href="tel:+918178330800" class="lg:hidden w-11 h-11 flex items-center justify-center rounded-xl bg-medicalTeal/10 text-medicalTeal" aria-label="Call DenceSpot Clinic">
                <i class="fas fa-phone-alt text-[17px]"></i>
            </a>
            <!-- Mobile: Hamburger -->
            <button onclick="openDrawer()" class="lg:hidden w-11 h-11 flex items-center justify-center rounded-xl bg-darkSlate text-white" aria-label="Open navigation menu">
                <i class="fas fa-bars text-[18px]"></i>
            </button>
        </div>
    </div>
</header>

<!-- ===== DRAWER OVERLAY ===== -->
<div id="drawerOverlay"
     onclick="closeDrawer()"
     class="fixed inset-0 bg-black/60 backdrop-blur-sm z-[150] opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden"></div>

<!-- ===== RIGHT-SIDE DRAWER ===== -->
<aside id="mobileDrawer"
       aria-hidden="true"
       class="fixed top-0 right-0 h-full w-[290px] max-w-[85vw] bg-darkSlate text-white z-[200] translate-x-full flex flex-col lg:hidden"
       style="transition: transform 350ms cubic-bezier(0.22, 1, 0.36, 1);">

    <!-- Drawer Header -->
    <div class="flex items-center justify-between px-5 py-4 border-b border-white/10 shrink-0">
        <span class="font-display font-bold text-[17px] leading-none">
            <span class="text-gray-400">DENCE</span><span class="text-red-400">SPOT</span>
            <span class="text-white/40 text-sm font-light ml-1">Clinic</span>
        </span>
        <button onclick="closeDrawer()" aria-label="Close menu"
                class="w-11 h-11 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 transition-colors text-[18px]">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <!-- Drawer Nav Links -->
    <nav class="flex flex-col px-3 py-3 gap-0.5 flex-1 overflow-y-auto">

        <a href="<?php echo $basePath; ?>index.php" class="drawer-nav-link">
            <i class="fas fa-home drawer-icon"></i> Home
        </a>

        <!-- Treatments Accordion -->
        <div>
            <button onclick="toggleAccordion(this)" aria-expanded="false"
                    class="drawer-nav-link w-full flex items-center justify-between text-left">
                <span class="flex items-center gap-3"><i class="fas fa-spa drawer-icon"></i> Treatments</span>
                <i class="fas fa-chevron-down text-xs opacity-50 accordion-chevron" style="transition: transform 300ms ease;"></i>
            </button>
            <div class="accordion-body overflow-hidden" style="max-height: 0; transition: max-height 350ms ease-in-out;">
                <div class="flex flex-col pb-2 pl-2">
                    <p class="drawer-category-label">Hair</p>
                    <a href="<?php echo $basePath; ?>hair-transplant-in-gurgaon.php" class="drawer-sub-link">Hair Transplant</a>
                    <a href="<?php echo $basePath; ?>beard-transplant-gurgaon.php" class="drawer-sub-link">Beard Transplant</a>
                    <a href="<?php echo $basePath; ?>hair-prp-treatment-in-gurgaon.php" class="drawer-sub-link">Hair PRP</a>
                    <a href="<?php echo $basePath; ?>hair-microneedling-in-gurgaon.php" class="drawer-sub-link">Microneedling</a>
                    <a href="<?php echo $basePath; ?>dandruff-treatment-in-gurgaon.php" class="drawer-sub-link">Dandruff Treatment</a>
                    <p class="drawer-category-label mt-1">Skin</p>
                    <a href="<?php echo $basePath; ?>hydrafacial-in-gurgaon.php" class="drawer-sub-link">HydraFacial</a>
                    <a href="<?php echo $basePath; ?>carbon-facial-in-gurgaon.php" class="drawer-sub-link">Carbon Facial</a>
                    <a href="<?php echo $basePath; ?>botox-treatment-in-gurgaon.php" class="drawer-sub-link">Botox</a>
                    <a href="<?php echo $basePath; ?>laser-hair-removal-in-gurgaon.php" class="drawer-sub-link">Laser Hair Removal</a>
                    <a href="<?php echo $basePath; ?>skin-treatment-in-gurgaon.php" class="drawer-sub-link drawer-sub-link--accent">View All Skin →</a>
                </div>
            </div>
        </div>

        <a href="<?php echo $basePath; ?>about-us.php" class="drawer-nav-link">
            <i class="fas fa-user-md drawer-icon"></i> About Us
        </a>
        <a href="<?php echo $basePath; ?>gallery.php" class="drawer-nav-link">
            <i class="fas fa-images drawer-icon"></i> Gallery
        </a>
        <a href="<?php echo $basePath; ?>blog/" class="drawer-nav-link">
            <i class="fas fa-newspaper drawer-icon"></i> Blog
        </a>
        <a href="<?php echo $basePath; ?>contact.php" class="drawer-nav-link">
            <i class="fas fa-map-marker-alt drawer-icon"></i> Contact
        </a>

    </nav>

    <!-- Drawer Footer CTA -->
    <div class="px-4 pb-6 pt-4 border-t border-white/10 shrink-0 space-y-3">
        <a href="https://api.whatsapp.com/send/?phone=%2B918178330800&text=Hi%2C+I+want+to+book+a+consultation&type=phone_number"
           target="_blank" rel="noopener"
           class="flex items-center justify-center gap-2.5 w-full bg-[#25D366] hover:bg-[#20ba5a] text-white py-3.5 rounded-2xl font-semibold text-sm transition-colors">
            <i class="fab fa-whatsapp text-xl"></i> Chat on WhatsApp
        </a>
        <p class="text-center text-white/30 text-[11px]">C Block, Sector 39, Gurgaon · +91 8178330800</p>
    </div>
</aside>

<!-- ===== BOTTOM NAVIGATION BAR (mobile only) ===== -->
<nav id="bottomNav"
     class="fixed bottom-0 left-0 right-0 z-40 bg-white/95 backdrop-blur-lg border-t border-gray-200 lg:hidden"
     style="padding-bottom: env(safe-area-inset-bottom, 0px);"
     aria-label="Quick navigation">
    <div class="grid grid-cols-4 h-[56px]">
        <a href="<?php echo $basePath; ?>index.php"
           class="bottom-tab <?php echo (isset($currentPage) && $currentPage == 'home') ? 'bottom-tab--active' : ''; ?>">
            <i class="fas fa-home text-[20px] leading-none"></i>
            <span>Home</span>
        </a>
        <a href="<?php echo $basePath; ?>hair-transplant-in-gurgaon.php" class="bottom-tab">
            <i class="fas fa-spa text-[20px] leading-none"></i>
            <span>Treatments</span>
        </a>
        <a href="tel:+918178330800" class="bottom-tab">
            <i class="fas fa-phone-alt text-[20px] leading-none"></i>
            <span>Call</span>
        </a>
        <a href="<?php echo $basePath; ?>contact.php"
           class="bottom-tab <?php echo (isset($currentPage) && $currentPage == 'contact') ? 'bottom-tab--active' : ''; ?>">
            <i class="fas fa-calendar-check text-[20px] leading-none"></i>
            <span>Book</span>
        </a>
    </div>
</nav>

<script>
    // Cache drawer elements once to avoid repeated DOM lookups
    var _drawer, _overlay;
    function _getDrawerEls() {
        if (!_drawer)  _drawer  = document.getElementById('mobileDrawer');
        if (!_overlay) _overlay = document.getElementById('drawerOverlay');
    }

    function openDrawer() {
        _getDrawerEls();
        _drawer.style.transform  = 'translateX(0)';
        _drawer.setAttribute('aria-hidden', 'false');
        _overlay.style.opacity        = '1';
        _overlay.style.pointerEvents  = 'auto';
        document.body.style.overflow  = 'hidden';
    }
    function closeDrawer() {
        _getDrawerEls();
        _drawer.style.transform  = 'translateX(100%)';
        _drawer.setAttribute('aria-hidden', 'true');
        _overlay.style.opacity        = '0';
        _overlay.style.pointerEvents  = 'none';
        document.body.style.overflow  = '';
    }

    // ===== ACCORDION =====
    function toggleAccordion(btn) {
        const body   = btn.nextElementSibling;
        const icon   = btn.querySelector('.accordion-chevron');
        const isOpen = btn.getAttribute('aria-expanded') === 'true';
        body.style.maxHeight = isOpen ? '0px' : body.scrollHeight + 'px';
        btn.setAttribute('aria-expanded', String(!isOpen));
        icon.style.transform = isOpen ? '' : 'rotate(180deg)';
    }

    // ===== ESCAPE KEY =====
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeDrawer();
    });
    // Note: header scroll shadow is handled in scripts.php to keep one listener
</script>
