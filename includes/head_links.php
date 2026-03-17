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
    </style>

    <!-- Robots Tag -->
    <meta name="robots" content="index, follow">


    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
