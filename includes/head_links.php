    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://elfsightcdn.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Icons & Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        medicalTeal: '#0EA5A4',
                        darkSlate: '#1E293B',
                        softGold: '#F59E0B',
                        softGoldHover: '#D97706',
                        bgLight: '#F8FAFC',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <style>
        .glass { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(12px); }
        .skin-pattern { background-image: radial-gradient(#0EA5A4 0.5px, transparent 0.5px); background-size: 20px 20px; opacity: 0.05; }
        .nav-link { position: relative; }
        .nav-link::after { content: ''; position: absolute; bottom: -2px; left: 0; width: 0; height: 2px; background: #0EA5A4; transition: 0.3s; }
        .nav-link:hover::after { width: 100%; }
        .treatment-card:hover { transform: translateY(-8px); }
        .concern-item:hover i { transform: scale(1.2); color: #0EA5A4; }

                        /* Dropdown Styles */
        .dropdown { position: relative; }
        .dropdown-content { 
            display: none; 
            position: absolute; 
            top: 100%; 
            left: 0;
            background: white; 
            min-width: 220px; 
            box-shadow: 0 15px 40px rgba(0,0,0,0.1); 
            border-radius: 1.25rem; 
            padding: 0.75rem; 
            z-index: 100;
            border: 1px solid #f1f5f9;
        }
        .dropdown:hover > .dropdown-content { display: block; animation: dropdownFade 0.3s ease forwards; }
        
        .sub-dropdown { position: relative; }
        .sub-dropdown-content { 
            display: none; 
            position: absolute; 
            top: 0; 
            left: 100%;
            background: white; 
            min-width: 240px; 
            box-shadow: 0 15px 40px rgba(0,0,0,0.1); 
            border-radius: 1.25rem; 
            padding: 0.75rem; 
            z-index: 101;
            border: 1px solid #f1f5f9;
            margin-left: 0.25rem;
        }
        .sub-dropdown:hover > .sub-dropdown-content { display: block; animation: dropdownFade 0.2s ease forwards; }

        @keyframes dropdownFade { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        
        .dropdown-item {
            display: block;
            padding: 0.75rem 1rem;
            color: #1E293B;
            border-radius: 0.75rem;
            transition: all 0.2s;
            font-weight: 500;
        }
        .dropdown-item:hover { background: #F8FAFC; color: #0EA5A4; padding-left: 1.25rem; }

        /* ===== DRAWER NAV ===== */
        .drawer-nav-link {
            display: flex; align-items: center; gap: 12px;
            padding: 13px 16px; border-radius: 14px;
            font-size: 15px; font-weight: 600; color: rgba(255,255,255,0.8);
            transition: background 0.18s, color 0.18s; min-height: 48px;
            -webkit-tap-highlight-color: transparent;
        }
        .drawer-nav-link:hover, .drawer-nav-link:focus { background: rgba(255,255,255,0.08); color: #fff; }
        .drawer-icon { width: 20px; text-align: center; color: #0EA5A4; font-size: 15px; flex-shrink: 0; }
        .drawer-sub-link {
            display: flex; align-items: center;
            padding: 10px 16px; border-radius: 10px;
            font-size: 14px; color: rgba(255,255,255,0.6);
            transition: background 0.15s, color 0.15s; min-height: 44px;
            -webkit-tap-highlight-color: transparent;
        }
        .drawer-sub-link:hover { background: rgba(255,255,255,0.06); color: rgba(255,255,255,0.9); }
        .drawer-category-label {
            font-size: 10px; font-weight: 700; text-transform: uppercase;
            letter-spacing: 0.12em; color: rgba(255,255,255,0.28);
            padding: 8px 16px 3px;
        }

        /* ===== BOTTOM NAVIGATION BAR ===== */
        .bottom-tab {
            display: flex; flex-direction: column; align-items: center; justify-content: center;
            gap: 2px; padding: 4px 2px; color: #9CA3AF;
            font-size: 10px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.04em;
            transition: color 0.2s; -webkit-tap-highlight-color: transparent;
        }
        .bottom-tab:hover, .bottom-tab--active { color: #0EA5A4; }
        .bottom-tab--active i { transform: translateY(-1px); }

        /* Body bottom padding so content isn't hidden behind bottom nav on mobile */
        @media (max-width: 1023px) {
            body { padding-bottom: calc(56px + env(safe-area-inset-bottom, 0px)); }
        }

        /* ===== ANTIGRAVITY ANIMATIONS ===== */
        @media (prefers-reduced-motion: no-preference) {
            .ag-float {
                opacity: 0; transform: translateY(24px);
                transition: opacity 400ms cubic-bezier(0.22, 1, 0.36, 1),
                            transform 400ms cubic-bezier(0.22, 1, 0.36, 1);
            }
            .ag-float.ag-visible { opacity: 1; transform: translateY(0); }
            .ag-float:nth-child(2) { transition-delay: 80ms; }
            .ag-float:nth-child(3) { transition-delay: 160ms; }
            .ag-float:nth-child(4) { transition-delay: 240ms; }
            .ag-float:nth-child(5) { transition-delay: 320ms; }
            .ag-float:nth-child(6) { transition-delay: 400ms; }
        }

        /* ===== BUTTON MICRO-INTERACTIONS ===== */
        .ag-btn { transition: transform 0.15s, box-shadow 0.15s; cursor: pointer; }
        .ag-btn:active { transform: scale(0.97) !important; }
        .ag-btn:hover { transform: translateY(-2px); }

        /* ===== MOBILE TYPOGRAPHY ===== */
        @media (max-width: 639px) {
            h1 { font-size: clamp(26px, 7.5vw, 32px) !important; line-height: 1.2 !important; }
            h2 { font-size: clamp(20px, 6vw, 24px) !important; line-height: 1.3 !important; }
            h3 { font-size: 18px !important; }
        }

        /* ===== MOBILE TOUCH TARGETS ===== */
        .swiper-pagination-bullet {
            width: 8px !important; height: 8px !important;
            padding: 8px !important; box-sizing: content-box !important;
            border-radius: 50% !important;
        }

        /* ===== SCROLLBAR HIDE ===== */
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
        .scrollbar-hide::-webkit-scrollbar { display: none; }

        /* ===== HORIZONTAL TREATMENT CAROUSEL (mobile) ===== */
        .treatment-carousel {
            display: flex; gap: 12px; overflow-x: auto;
            -webkit-overflow-scrolling: touch; scroll-snap-type: x mandatory;
            padding: 4px 0 16px;
        }
        .treatment-carousel::-webkit-scrollbar { display: none; }
        .tc-card {
            flex-shrink: 0; width: 150px; scroll-snap-align: start;
            background: #F8FAFC; border-radius: 20px; padding: 18px 14px;
            border: 1px solid #f1f5f9; display: flex; flex-direction: column;
            align-items: center; text-align: center; gap: 10px;
            transition: transform 0.25s, box-shadow 0.25s;
            box-shadow: 0 2px 12px rgba(0,0,0,0.04); text-decoration: none;
            -webkit-tap-highlight-color: transparent;
        }
        .tc-card:hover, .tc-card:focus { transform: translateY(-4px); box-shadow: 0 8px 24px rgba(14,165,164,0.14); }
        .tc-icon {
            width: 50px; height: 50px; background: white; border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            font-size: 21px; color: #0EA5A4; box-shadow: 0 2px 8px rgba(0,0,0,0.07);
        }
        .tc-name { font-size: 13px; font-weight: 700; color: #1E293B; line-height: 1.3; }
        .tc-arrow { font-size: 11px; color: #0EA5A4; font-weight: 700; align-self: flex-end; }

        /* ===== CONCERN CHIPS ===== */
        .concern-chips { display: flex; gap: 8px; overflow-x: auto; padding: 4px 0 8px; -webkit-overflow-scrolling: touch; }
        .concern-chips::-webkit-scrollbar { display: none; }
        .concern-chip {
            flex-shrink: 0; display: flex; align-items: center; gap: 6px;
            background: rgba(14,165,164,0.1); color: #0EA5A4;
            border: 1px solid rgba(14,165,164,0.25); border-radius: 50px;
            padding: 10px 16px; font-size: 13px; font-weight: 600; white-space: nowrap;
            cursor: pointer; transition: background 0.2s, transform 0.15s; min-height: 44px;
            -webkit-tap-highlight-color: transparent;
        }
        .concern-chip:hover, .concern-chip.active { background: #0EA5A4; color: white; border-color: #0EA5A4; transform: translateY(-1px); }

        /* ===== QUICK CONTACT CARDS ===== */
        .quick-contact-card {
            display: flex; align-items: center; gap: 14px; padding: 18px 20px;
            border-radius: 20px; font-weight: 600; font-size: 15px;
            transition: transform 0.2s, box-shadow 0.2s; min-height: 64px;
            -webkit-tap-highlight-color: transparent; text-decoration: none;
        }
        .quick-contact-card:active { transform: scale(0.98); }

        /* ===== TRUST STAT BADGES ===== */
        .trust-stat-badge { display: flex; flex-direction: column; gap: 1px; padding: 0 4px; }

        /* Accent variant for drawer sub-links (e.g. "View All") */
        .drawer-sub-link--accent { color: #0EA5A4; font-weight: 700; }
        .drawer-sub-link--accent:hover { color: #0EA5A4; }

        /* ===== MOBILE-SPECIFIC HEADER OVERRIDES ===== */
        @media (max-width: 1023px) {
            /* Hide redundant old WhatsApp floats from legacy CSS files */
            .whatsapp-float, .whatsapp-btn, .tech-whatsapp { display: none !important; }
            /* WhatsApp chat button placement above bottom nav */
            .whatsapp-chat-button { bottom: 72px !important; left: 16px !important; }
        }

        /* FAQ touch-target improvement */
        details summary { min-height: 56px; display: flex; align-items: center; }
        details summary .icon-toggle { width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
    </style>

    <!-- Robots Tag -->
    <meta name="robots" content="index, follow">


    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
