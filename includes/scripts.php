<a href="contact.php" class="fixed bottom-8 right-8 z-[100] group flex items-center gap-4">
        <div class="bg-darkSlate text-white text-[10px] px-4 py-2 rounded-full opacity-0 group-hover:opacity-100 transition-all font-bold shadow-xl border border-gray-800">Book Appointment</div>
        <div class="w-16 h-16 bg-medicalTeal rounded-full flex items-center justify-center text-3xl text-white shadow-3xl hover:scale-110 transition-all"><i class="fas fa-calendar-check"></i></div>
    </a>

    <!-- Swiper.js & Logic -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('mainHeader');
            if (window.scrollY > 20) {
                header.classList.add('shadow-xl', 'py-2');
                header.classList.remove('py-4');
            } else {
                header.classList.remove('shadow-xl', 'py-2');
                header.classList.add('py-4');
            }
        });

        // Result Swiper
        const resultSwiper = new Swiper('.resultSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.result-next',
                prevEl: '.result-prev',
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

        // Testimonial Swiper
        const testimonialSwiper = new Swiper('.testimonialSwiper', {
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
    </script>
</body>
