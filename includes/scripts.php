<?php $basePath = (isset($currentPage) && $currentPage == 'blog') ? '../' : ''; ?>
<a href="<?php echo $basePath; ?>contact.php" class="fixed bottom-8 right-8 z-[100] group hidden md:flex items-center gap-4">
        <div class="bg-darkSlate text-white text-[10px] px-4 py-2 rounded-full opacity-0 group-hover:opacity-100 transition-all font-bold shadow-xl border border-gray-800">Book Appointment</div>
        <div class="w-16 h-16 bg-medicalTeal rounded-full flex items-center justify-center text-3xl text-white shadow-3xl hover:scale-110 transition-all"><i class="fas fa-calendar-check"></i></div>
    </a>

    <!-- Swiper.js & Logic -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Header Scroll Effect — single consolidated listener (header.php defers to this)
        const _mainHeader = document.getElementById('mainHeader');
        if (_mainHeader) {
            window.addEventListener('scroll', function() {
                const scrolled = window.scrollY > 20;
                _mainHeader.classList.toggle('shadow-lg', scrolled);
            }, { passive: true });
        }

        // Result Swiper — 1.2 cards on mobile for "peek" swipeable effect
        const resultSwiper = document.querySelector('.resultSwiper') && new Swiper('.resultSwiper', {
            slidesPerView: 1.15,
            spaceBetween: 16,
            loop: true,
            centeredSlides: false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.result-next',
                prevEl: '.result-prev',
            },
            breakpoints: {
                640: { slidesPerView: 1.5, spaceBetween: 20 },
                768: { slidesPerView: 2,   spaceBetween: 20 },
                1024: { slidesPerView: 3,  spaceBetween: 24 }
            }
        });

        // Testimonial Swiper
        const testimonialSwiper = document.querySelector('.testimonialSwiper') && new Swiper('.testimonialSwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-next',
                prevEl: '.swiper-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });

        // Toggle Treatments
        const viewAllBtn = document.getElementById('viewAllBtn');
        const hiddenTreatments = document.querySelectorAll('.hidden-treatment');

        if (viewAllBtn && hiddenTreatments.length > 0) {
            viewAllBtn.addEventListener('click', () => {
                hiddenTreatments.forEach(el => {
                    if (el.classList.contains('hidden')) {
                        el.classList.remove('hidden');
                        el.classList.add('animate__animated', 'animate__fadeInUp');
                    } else {
                        el.classList.add('hidden');
                    }
                });

                if (viewAllBtn.innerText.includes('View All')) {
                    viewAllBtn.innerHTML = `Show Less <i class="fas fa-chevron-up transition-transform"></i>`;
                } else {
                    viewAllBtn.innerHTML = `View All Treatments <i class="fas fa-chevron-down transition-transform"></i>`;
                }
            });
        }
        
        // Mobile Menu Toggle - handled via onclick in header.php

        // Blog Swiper
        const blogSwiper = document.querySelector('.blogSwiper') && new Swiper('.blogSwiper', {
            slidesPerView: 1,
            spaceBetween: 16,
            loop: true,
            navigation: {
                nextEl: '.blog-next',
                prevEl: '.blog-prev',
            },
            breakpoints: {
                768: { slidesPerView: 3, spaceBetween: 24 }
            }
        });

        // ===== ANTIGRAVITY: Float-in on scroll =====
        if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            const floatObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('ag-visible');
                        floatObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });
            document.querySelectorAll('.ag-float').forEach(el => floatObserver.observe(el));
        } else {
            // Reduced motion: show immediately
            document.querySelectorAll('.ag-float').forEach(el => el.classList.add('ag-visible'));
        }

    </script>

</body>
