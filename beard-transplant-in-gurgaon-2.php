<?php
$pageTitle = 'Beard Transplant in Gurgaon | Best FUE Facial Hair Restoration';
$pageDesc = 'Looking for Beard Hair Reconstruction in Gurugram? Leading Beard Hair Transplant Clinic in Gurgaon.';
$pageCanonical = 'https://dencespot.com/beard-transplant-in-gurgaon-2.php';
$currentPage = 'skin-treatments';
include 'header.php';
?>

<style>
    /* Slant Design Hero Section */
    .slant-hero {
        position: relative;
        width: 100%;
        height: 550px;
        background-color: #2c3e50;
        overflow: hidden;
        display: flex;
    }

    .slant-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('images/service-beard.png');
        background-size: cover;
        background-position: right center;
        transform: scaleX(-1);
        z-index: 1;
    }

    .slant-hero-mobile-img {
        display: none;
    }

    .slant-hero-wrapper {
        position: absolute;
        top: 0;
        right: 0;
        width: 55%;
        height: 100%;
        background-color: #8A1038;
        clip-path: polygon(15% 0, 100% 0, 100% 100%, 0 100%);
        display: flex;
        align-items: center;
        padding-left: 10%;
        padding-right: 5%;
        z-index: 2;
    }

    .slant-hero-content {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        width: 100%;
        max-width: 1000px;
    }

    .slant-text-area {
        width: 100%;
        max-width: 800px;
        color: #ffffff;
    }

    .slant-text-area h1 {
        font-family: 'Outfit', 'Inter', sans-serif;
        font-size: 3.5rem;
        font-weight: 700;
        line-height: 1.15;
        margin-bottom: 25px;
        color: #ffffff;
        letter-spacing: -0.5px;
    }

    .slant-text-area p {
        font-family: 'Inter', sans-serif;
        font-size: 1.15rem;
        line-height: 1.6;
        margin: 0;
        color: #ffffff;
        opacity: 0.95;
        font-weight: 400;
    }

    /* Results Section */
    .results-section {
        background-color: #FAFAFA;
        padding: 80px 0;
    }

    .results-header-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }

    .results-title-container {
        position: relative;
        padding: 20px 0 20px 30px;
    }

    .results-title-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 80px;
        height: 80px;
        background-image: radial-gradient(#d5d5d5 2px, transparent 2px);
        background-size: 10px 10px;
        z-index: 1;
    }

    .results-title-container h2 {
        position: relative;
        z-index: 2;
        font-family: 'Outfit', 'Inter', sans-serif;
        font-size: 2.6rem;
        font-weight: 700;
        color: #000000;
        margin: 0;
    }

    .btn-view-all {
        background-color: #8A1038;
        color: #ffffff !important;
        padding: 12px 28px;
        border-radius: 6px;
        font-size: 1rem;
        font-weight: 600;
        text-decoration: none !important;
        transition: background-color 0.3s;
    }

    .btn-view-all:hover {
        background-color: #6a0b2a;
        color: #ffffff;
    }

    .results-body {
        display: flex;
        gap: 30px;
        align-items: flex-start;
    }

    /* Gallery inside Results */
    .results-gallery {
        flex: 1;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .result-card {
        background: #ffffff;
        padding-bottom: 15px;
    }

    .result-image-wrapper {
        position: relative;
        padding: 15px;
        background: #ffffff;
    }

    /* Thick Maroon Borders on Image Wrappers */
    .result-image-wrapper::before,
    .result-image-wrapper::after {
        content: '';
        position: absolute;
        width: 30px;
        height: 30px;
        z-index: 2;
    }

    .result-image-wrapper::before {
        top: 5px;
        left: 5px;
        border-top: 6px solid #8A1038;
        border-left: 6px solid #8A1038;
    }

    .result-image-wrapper::after {
        bottom: 5px;
        right: 5px;
        border-bottom: 6px solid #8A1038;
        border-right: 6px solid #8A1038;
    }

    .result-image-wrapper img {
        width: 100%;
        height: 200px;
        /* Placeholder height */
        object-fit: cover;
        display: block;
        background: #e9ecef;
    }

    .result-labels {
        display: flex;
        justify-content: center;
        gap: 40px;
        margin-top: 15px;
        position: relative;
    }

    .result-labels::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        height: 15px;
        width: 1px;
        background-color: #e0e0e0;
    }

    .result-labels span {
        font-family: 'Inter', sans-serif;
        color: #888888;
        font-style: italic;
        font-size: 1rem;
    }

    /* Sidebar CTAs */
    .results-sidebar-cta {
        width: 170px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        flex-shrink: 0;
    }

    .sidebar-btn {
        background-color: #8A1038;
        color: #ffffff !important;
        text-decoration: none !important;
        border-radius: 12px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 25px 15px;
        transition: transform 0.3s, background 0.3s;
        text-align: center;
    }

    .sidebar-btn.outline-light {
        border: 1px solid rgba(255, 255, 255, 0.4);
    }

    .sidebar-btn.outline-solid {
        border: 2px solid #ffffff;
    }

    .sidebar-btn:hover {
        transform: translateY(-3px);
        background-color: #7a0c30;
    }

    .sidebar-btn i {
        font-size: 1.8rem;
        margin-bottom: 15px;
    }

    .sidebar-btn span {
        font-size: 0.85rem;
        font-weight: 700;
        line-height: 1.4;
        letter-spacing: 0.5px;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .results-gallery {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 992px) {
        .slant-hero {
            height: auto;
            flex-direction: column;
        }

        .slant-hero::before {
            display: none;
        }

        .slant-hero-mobile-img {
            display: block;
            width: 100%;
            height: 350px;
            background-image: url('images/service-beard.png');
            background-size: cover;
            background-position: right center;
        }

        .slant-hero-wrapper {
            position: relative;
            width: 100%;
            height: auto;
            clip-path: none;
            padding: 50px 20px;
        }

        .results-body {
            flex-direction: column;
        }

        .results-sidebar-cta {
            width: 100%;
            flex-direction: row;
            justify-content: center;
        }

        .sidebar-btn {
            flex: 1;
            max-width: 200px;
        }
    }

    @media (max-width: 768px) {
        .results-gallery {
            grid-template-columns: 1fr;
        }

        .results-header-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
        }
    }

    @media (max-width: 576px) {
        .slant-text-area h1 {
            font-size: 2.2rem;
        }

        .results-title-container h2 {
            font-size: 2rem;
        }

        .sidebar-btn {
            padding: 15px 10px;
        }

        .sidebar-btn i {
            font-size: 1.5rem;
            margin-bottom: 8px;
        }

        .sidebar-btn span {
            font-size: 0.75rem;
        }
    }

    /* Intro Section Layout */
    .intro-section {
        padding: 80px 0;
        background-color: #ffffff;
    }

    .intro-container {
        display: flex;
        align-items: center;
        gap: 50px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .intro-content {
        flex: 1;
    }

    .intro-content h2 {
        font-family: 'Outfit', 'Inter', sans-serif;
        font-size: 2.8rem;
        font-weight: 300;
        color: #2D3748;
        margin-bottom: 25px;
        letter-spacing: -0.5px;
    }

    .intro-cost-badge {
        display: inline-block;
        padding: 12px 25px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 25px rgba(231, 76, 60, 0.15);
        color: #2D3748;
        font-weight: 500;
        font-size: 1.05rem;
        margin-bottom: 35px;
    }

    .intro-content p {
        font-family: 'Inter', sans-serif;
        color: #4A5568;
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 25px;
    }

    .intro-content p strong {
        font-weight: 600;
        color: #2D3748;
    }

    .red-highlight {
        color: #e74c3c;
    }

    .intro-image-wrapper {
        flex: 1;
        display: flex;
        justify-content: flex-end;
    }

    .intro-image-inner {
        background: #ffffff;
        padding: 10px;
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.08);
        border-radius: 4px;
        max-width: 100%;
    }

    .intro-image-inner img {
        width: 100%;
        height: auto;
        display: block;
    }

    @media (max-width: 992px) {
        .intro-container {
            flex-direction: column;
        }

        .intro-image-wrapper {
            justify-content: center;
            margin-top: 20px;
        }

        .intro-content h2 {
            font-size: 2.2rem;
        }
    }

    /* New Hero Section */
    .new-hero-section {
        background-color: #FAFCFF;
        padding: 50px 0 100px;
        position: relative;
        overflow: hidden;
        font-family: 'Inter', sans-serif;
    }
    .hero-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
        position: relative;
        z-index: 2;
    }
    .hero-content {
        flex: 0 0 50%;
        position: relative;
        padding-right: 40px;
    }
    .hero-content h1 {
        font-size: 4.5rem;
        font-weight: 700;
        color: #1A2E44;
        line-height: 1.1;
        margin-bottom: 25px;
        font-family: 'Outfit', sans-serif;
    }
    .hero-content p {
        font-size: 1.1rem;
        color: #555;
        line-height: 1.6;
        margin-bottom: 40px;
        max-width: 90%;
    }
    .hero-cta-btn {
        display: inline-flex;
        align-items: center;
        background-color: #8A1038;
        color: #fff !important;
        text-decoration: none !important;
        border-radius: 40px;
        padding: 16px 36px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        box-shadow: 0 10px 25px rgba(138, 16, 56, 0.2);
        position: relative;
        z-index: 2;
    }
    .hero-cta-btn:hover {
        background-color: #6a0b2a;
        transform: translateY(-2px);
    }
    .dots-pattern {
        position: absolute;
        bottom: -40px;
        left: -40px;
        width: 100px;
        height: 100px;
        background-image: radial-gradient(#d5d5d5 2px, transparent 2px);
        background-size: 15px 15px;
        z-index: 1;
    }
    .hero-image-wrapper {
        flex: 0 0 50%;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 500px;
    }
    .main-hero-img {
        max-width: 90%;
        height: auto;
        border-radius: 50%;
        position: relative;
        z-index: 2;
    }
    .wavy-lines {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 120%;
        height: 100%;
        transform: translate(-50%, -50%);
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 400"><path d="M 0 100 Q 150 0 300 100 T 600 100 T 900 100 T 1200 100" fill="none" stroke="%23A0ADB5" stroke-width="2"/><path d="M 0 150 Q 150 50 300 150 T 600 150 T 900 150 T 1200 150" fill="none" stroke="%23A0ADB5" stroke-width="2"/><path d="M 0 200 Q 150 100 300 200 T 600 200 T 900 200 T 1200 200" fill="none" stroke="%23A0ADB5" stroke-width="2"/><path d="M 0 250 Q 150 150 300 250 T 600 250 T 900 250 T 1200 250" fill="none" stroke="%23A0ADB5" stroke-width="2"/></svg>') no-repeat center center;
        background-size: cover;
        z-index: 1;
        opacity: 0.6;
    }
    .floating-circle {
        position: absolute;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        border: 5px solid #fff;
        z-index: 3;
    }
    .circle-1 {
        width: 100px;
        height: 100px;
        top: 15%;
        left: 5%;
    }
    .circle-2 {
        width: 80px;
        height: 80px;
        bottom: 15%;
        left: -5%;
    }
    .circle-3 {
        width: 110px;
        height: 110px;
        right: 0%;
        top: 45%;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .hero-container {
            flex-direction: column;
            text-align: center;
        }
        .hero-content {
            padding-right: 0;
            margin-bottom: 50px;
        }
        .hero-cta-btn {
            margin: 0 auto;
        }
        .dots-pattern {
            display: none;
        }
    }

    /* New About Section */
    .new-about-section {
        background-color: #ffffff;
        padding: 100px 0;
        font-family: 'Inter', sans-serif;
    }
    .about-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .about-top-row {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 70px;
    }
    .about-label {
        flex: 0 0 20%;
    }
    .about-label span {
        font-size: 1.1rem;
        color: #666;
        font-weight: 500;
    }
    .about-text-content {
        flex: 0 0 75%;
    }
    .about-text-content h2 {
        font-size: 3rem;
        color: #1A2E44;
        font-family: 'Outfit', sans-serif;
        font-weight: 600;
        line-height: 1.2;
        margin-bottom: 25px;
    }
    .about-text-content p {
        font-size: 1.05rem;
        color: #555;
        line-height: 1.7;
        margin-bottom: 20px;
    }
    .about-images-grid {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 20px;
        margin-bottom: 90px;
    }
    .img-col {
        display: flex;
        flex-direction: column;
        border-radius: 24px;
        overflow: hidden;
    }
    .left-col {
        flex: 0 0 35%;
        background: transparent;
    }
    .img-large {
        width: 100%;
        height: 420px;
        object-fit: cover;
        border-radius: 24px;
        margin-bottom: 25px;
    }
    .discover-btn {
        background-color: #8A1038; 
        color: #fff;
        border: none;
        border-radius: 30px;
        padding: 16px 32px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        align-self: flex-start;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: 0.3s;
    }
    .discover-btn:hover {
        background-color: #6a0b2a;
    }
    .mid-col {
        flex: 0 0 30%;
        margin-top: 100px;
    }
    .right-col {
        flex: 0 0 30%;
        margin-top: 50px;
    }
    .img-medium {
        width: 100%;
        height: 380px;
        object-fit: cover;
        border-radius: 24px;
    }

    .about-stats-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid #e1e8ed;
        padding-top: 50px;
    }
    .stat-item {
        text-align: center;
        flex: 1;
    }
    .stat-item h3 {
        font-size: 3.5rem;
        color: #1A2E44;
        font-family: 'Outfit', sans-serif;
        font-weight: 700;
        margin-bottom: 5px;
    }
    .stat-item p {
        font-size: 1rem;
        color: #777;
        font-weight: 500;
    }
    .stat-divider {
        width: 1px;
        height: 70px;
        background-color: #e1e8ed;
    }
    
    @media (max-width: 992px) {
        .about-top-row {
            flex-direction: column;
        }
        .about-label {
            margin-bottom: 20px;
        }
        .about-images-grid {
            flex-direction: column;
            gap: 30px;
        }
        .img-col {
            width: 100%;
            margin-top: 0 !important;
        }
        .about-stats-row {
            flex-wrap: wrap;
            gap: 30px;
        }
        .stat-divider {
            display: none;
        }
        .stat-item {
            flex: 0 0 45%;
        }
    }


    /* New Treatment Procedure Section */
    .new-procedure-section {
        background-color: #FAFCFF;
        padding: 100px 0;
        font-family: 'Inter', sans-serif;
    }
    .procedure-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .procedure-header {
        text-align: center;
        margin-bottom: 60px;
    }
    .procedure-header h2 {
        font-size: 3rem;
        color: #1A2E44;
        font-family: 'Outfit', sans-serif;
        font-weight: 600;
        margin-bottom: 15px;
    }
    .procedure-header p {
        color: #555;
        max-width: 700px;
        margin: 0 auto;
        font-size: 1.1rem;
        line-height: 1.6;
    }
    .procedure-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
    }
    .procedure-card {
        background: #ffffff;
        border-radius: 24px;
        padding: 40px 30px;
        text-align: center;
        box-shadow: 0 10px 40px rgba(0,0,0,0.03);
        transition: 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border: 1px solid #f1f1f1;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
    .procedure-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 50px rgba(138, 16, 56, 0.08);
        border-color: rgba(138, 16, 56, 0.2);
    }
    .procedure-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, rgba(255,255,255,0) 0%, rgba(138,16,56,0.03) 100%);
        z-index: -1;
        opacity: 0;
        transition: 0.4s ease;
    }
    .procedure-card:hover::before {
        opacity: 1;
    }
    .procedure-icon-wrapper {
        width: 85px;
        height: 85px;
        background: #fff;
        border: 2px solid rgba(138, 16, 56, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
        color: #8A1038;
        font-size: 2.2rem;
        transition: 0.4s ease;
        box-shadow: 0 8px 20px rgba(138, 16, 56, 0.05);
    }
    .procedure-card:hover .procedure-icon-wrapper {
        background: #8A1038;
        color: #ffffff;
        transform: scale(1.1);
        border-color: #8A1038;
        box-shadow: 0 12px 25px rgba(138, 16, 56, 0.2);
    }
    .procedure-card h3 {
        font-family: 'Outfit', sans-serif;
        font-size: 1.5rem;
        color: #1A2E44;
        font-weight: 600;
        margin-bottom: 15px;
        transition: 0.3s ease;
    }
    .procedure-card:hover h3 {
        color: #8A1038;
    }
    .procedure-card p {
        font-size: 0.95rem;
        color: #666;
        line-height: 1.7;
        margin: 0;
    }
    .step-number {
        position: absolute;
        top: -15px;
        right: -10px;
        font-size: 7rem;
        font-weight: 800;
        color: rgba(138, 16, 56, 0.02);
        font-family: 'Outfit', sans-serif;
        line-height: 1;
        transition: 0.4s ease;
        z-index: -1;
    }
    .procedure-card:hover .step-number {
        color: rgba(138, 16, 56, 0.05);
        transform: scale(1.05) translate(-5px, 5px);
    }
    @media (max-width: 1200px) {
        .procedure-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }
    }
    @media (max-width: 576px) {
        .procedure-grid {
            grid-template-columns: 1fr;
        }
        .procedure-header h2 {
            font-size: 2.5rem;
        }
    }

    /* Premium Results Section */
    .premium-results-section {
        background-color: #FAFCFF;
        padding: 100px 0;
        font-family: 'Inter', sans-serif;
    }
    .results-head {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        margin-bottom: 60px;
        padding: 0 20px;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }
    .results-head-text h2 {
        font-size: 3rem;
        color: #1A2E44;
        font-family: 'Outfit', sans-serif;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.2;
    }
    .results-head-text p {
        color: #555;
        font-size: 1.1rem;
        max-width: 600px;
    }
    .premium-gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .premium-result-card {
        background: #fff;
        border-radius: 20px;
        padding: 20px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.04);
        transition: 0.3s ease;
        position: relative;
    }
    .premium-result-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 45px rgba(138, 16, 56, 0.08);
    }
    .premium-img-wrap {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
    }
    .premium-img-wrap img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        display: block;
        transition: 0.5s ease;
    }
    .premium-result-card:hover .premium-img-wrap img {
        transform: scale(1.05);
    }
    .before-after-badge {
        position: absolute;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(26, 46, 68, 0.85);
        color: #fff;
        padding: 6px 18px;
        border-radius: 30px;
        font-size: 0.85rem;
        font-weight: 600;
        letter-spacing: 1px;
        backdrop-filter: blur(5px);
    }

    /* Bento Grid Why Choose Us */
    .bento-why-section {
        background-color: #ffffff;
        padding: 100px 0;
        font-family: 'Inter', sans-serif;
    }
    .bento-header {
        text-align: center;
        margin-bottom: 60px;
        padding: 0 20px;
    }
    .bento-header h2 {
        font-size: 3rem;
        color: #1A2E44;
        font-family: 'Outfit', sans-serif;
        font-weight: 700;
        margin-bottom: 15px;
    }
    .bento-header p {
        color: #666;
        font-size: 1.1rem;
        max-width: 650px;
        margin: 0 auto;
    }
    .bento-grid-wrapper {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: auto auto;
        gap: 25px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .bento-box {
        border-radius: 30px;
        padding: 40px;
        transition: 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .bento-box:hover {
        transform: translateY(-5px);
    }
    .bento-icon {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin-bottom: 25px;
    }
    .bento-box h3 {
        font-family: 'Outfit', sans-serif;
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 15px;
        line-height: 1.3;
    }
    .bento-box p {
        font-size: 1rem;
        line-height: 1.6;
        margin: 0;
    }
    
    /* Specific Bento Box Styles */
    .bento-large {
        grid-column: span 2;
        background-color: #f4f8fc;
        background-image: radial-gradient(circle at 90% 90%, rgba(138,16,56,0.05) 0%, transparent 40%);
    }
    .bento-large .bento-icon {
        background-color: #ffffff;
        color: #8A1038;
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }
    .bento-large h3, .bento-large p { color: #1A2E44; }

    .bento-maroon {
        background-color: #8A1038;
        color: #ffffff;
    }
    .bento-maroon .bento-icon {
        background-color: rgba(255,255,255,0.1);
        color: #ffffff;
    }
    .bento-maroon h3, .bento-maroon p { color: #ffffff; }

    .bento-navy {
        background-color: #1A2E44;
        color: #ffffff;
        grid-column: span 2;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }
    .bento-navy .bento-icon {
        background-color: rgba(255,255,255,0.1);
        color: #8A1038;
        margin-bottom: 0;
        margin-right: 30px;
        flex-shrink: 0;
    }
    .bento-navy h3, .bento-navy p { color: #ffffff; }

    .bento-light {
        background-color: #fbf0f3;
    }
    .bento-light .bento-icon {
        background-color: #ffffff;
        color: #8A1038;
        box-shadow: 0 10px 20px rgba(138,16,56,0.05);
    }
    .bento-light h3 { color: #1A2E44; }
    .bento-light p { color: #555; }

    @media (max-width: 992px) {
        .results-head {
            flex-direction: column;
            align-items: flex-start;
        }
        .btn-view-all {
            margin-top: 20px;
        }
        .premium-gallery {
            grid-template-columns: repeat(2, 1fr);
        }
        .bento-grid-wrapper {
            grid-template-columns: repeat(2, 1fr);
        }
        .bento-navy {
            flex-direction: column;
            align-items: flex-start;
        }
        .bento-navy .bento-icon {
            margin-bottom: 25px;
        }
    }
    @media (max-width: 768px) {
        .premium-gallery {
            grid-template-columns: 1fr;
        }
        .bento-grid-wrapper {
            grid-template-columns: 1fr;
        }
        .bento-large, .bento-navy {
            grid-column: span 1;
        }
    }

</style>



<section class="new-hero-section">
    <div class="hero-container">
        <div class="hero-content">
            <h1>Beard Hair Transplant<br>in Gurugram</h1>
            <p>Looking for Beard Hair Reconstruction in Gurugram? Our commitment to excellence, experienced beard
                transplant specialists, and focus on patient satisfaction have earned us a reputation as the leading
                Beard Hair Transplant Clinic in Gurgaon.</p>
            
            <a href="contact.php" class="hero-cta-btn">Book an Appointment <i class="fas fa-arrow-right" style="margin-left: 8px;"></i></a>
            <div class="dots-pattern"></div>
        </div>
        <div class="hero-image-wrapper">
            <div class="wavy-lines"></div>
            <img src="images/beard_hero_image.png" alt="Beard Hero" class="main-hero-img">
            <img src="images/about-new.jpg" class="floating-circle circle-1" alt="">
            <img src="images/dr-nyra-new.jpg" class="floating-circle circle-2" alt="">
            <img src="images/dr-rahul-bio.jpg" class="floating-circle circle-3" alt="">
        </div>
    </div>
</section>




<section class="new-about-section">
    <div class="about-container">
        <!-- Top Text Row -->
        <div class="about-top-row">
            <div class="about-label">
                <span>About Us</span>
            </div>
            <div class="about-text-content">
                <h2>Beard Transplant in Gurgaon</h2>
                <p>At puberty in males hormones start taking their effect and beard & moustache hairs become thicker and transform into their final forms within a few years following puberty. The genetics plays an important role in the texture and quality of the beard, and moustache. There could be various problems causing the loss of beard and moustache. Autoimmune disorders related to hormone level changes or skin diseases could show their course leading to loss of facial hair in Men. Often skin diseases called Alopecia Areata also cause hair loss in the facial region. Steroids may help reverse the condition but in many cases, <span class="red-highlight">hair transplantation</span> remains the only solution.</p>
                <p>Hair transplantation technique based on the transfer of healthy hair follicles (grafts) from the hair-bearing area to the beardless area. DenceSpot Clinic offers the best <strong>beard transplant in Gurgaon</strong>. The clinic offers you the most chosen and latest transplant technique in the world performed by Dr. Rahul (MD, Dermatology) and his team.</p>
            </div>
        </div>

        <!-- Middle Images Grid -->
        <div class="about-images-grid">
            <div class="img-col left-col">
                <img src="images/about-new.jpg" class="img-large" alt="About Image 1">
                <button class="discover-btn">Discover Our Story <i class="fas fa-chevron-right"></i></button>
            </div>
            <div class="img-col mid-col">
                <img src="images/service-beard.png" class="img-medium" alt="About Image 2">
            </div>
            <div class="img-col right-col">
                <img src="images/results-beard.jpg" onerror="this.src='images/about-new.jpg'" class="img-medium" alt="About Image 3">
            </div>
        </div>

        <!-- Bottom Stats Row -->
        <div class="about-stats-row">
            <div class="stat-item">
                <h3>12+</h3>
                <p>Year Serving NY</p>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <h3>47+</h3>
                <p>Consumers Helped</p>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <h3>98%</h3>
                <p>Success Rate</p>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <h3>98%</h3>
                <p>Record Verdicts</p>
            </div>
        </div>
    </div>
</section>


<!-- Beard Transplant Procedure Section -->

<section class="new-procedure-section">
    <div class="procedure-container">
        <div class="procedure-header">
            <h2>Our Treatment Procedure</h2>
            <p>Our advanced beard restoration process follows a systematic, minimally invasive approach to ensure dense, natural-looking results.</p>
        </div>

        <div class="procedure-grid">
            <!-- Step 1 -->
            <div class="procedure-card">
                <div class="step-number">01</div>
                <div class="procedure-icon-wrapper">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3>Consultation & Design</h3>
                <p>Detailed evaluation of your facial structure and donor area. The surgeon precisely designs your ideal beard line for a natural look.</p>
            </div>

            <!-- Step 2 -->
            <div class="procedure-card">
                <div class="step-number">02</div>
                <div class="procedure-icon-wrapper">
                    <i class="fas fa-microscope"></i>
                </div>
                <h3>Follicle Extraction</h3>
                <p>Using the advanced FUE technique, healthy hair follicles are individually extracted from the back of the scalp without creating any linear scar.</p>
            </div>

            <!-- Step 3 -->
            <div class="procedure-card">
                <div class="step-number">03</div>
                <div class="procedure-icon-wrapper">
                    <i class="fas fa-vial"></i>
                </div>
                <h3>Graft Preparation</h3>
                <p>Extracted hair follicles are thoroughly cleaned and sorted under high magnification to preserve maximum viability for facial transplantation.</p>
            </div>

            <!-- Step 4 -->
            <div class="procedure-card">
                <div class="step-number">04</div>
                <div class="procedure-icon-wrapper">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3>Precise Implantation</h3>
                <p>Grafts are strategically implanted into the beard region, aligning strictly with the natural angle and growth direction of your facial hair.</p>
            </div>
        </div>
    </div>
</section>





<section class="premium-results-section">
    <div class="results-head">
        <div class="results-head-text">
            <h2>Before and After Results</h2>
            <p>Real results from our patients. Witness the transformative power of our precise, high-density beard transplant techniques.</p>
        </div>
        <a href="#" class="hero-cta-btn">View All Results</a>
    </div>

    <div class="premium-gallery">
        <div class="premium-result-card">
            <div class="premium-img-wrap">
                <img src="images/about-new.jpg" alt="Beard Transplant Result 1">
                <div class="before-after-badge">Before & After</div>
            </div>
        </div>
        <div class="premium-result-card">
            <div class="premium-img-wrap">
                <img src="images/about-new.jpg" alt="Beard Transplant Result 2">
                <div class="before-after-badge">Before & After</div>
            </div>
        </div>
        <div class="premium-result-card">
            <div class="premium-img-wrap">
                <img src="images/about-new.jpg" alt="Beard Transplant Result 3">
                <div class="before-after-badge">Before & After</div>
            </div>
        </div>
    </div>
</section>

<!-- Bento Grid Why Choose Us Section -->
<section class="bento-why-section">
    <div class="bento-header">
        <h2>Why DenceSpot for Beard?</h2>
        <p>Beard restoration requires exceptional artistic skill and precision, far more complex than a standard scalp hair transplant.</p>
    </div>

    <div class="bento-grid-wrapper">
        <!-- Card 1 (Large Span) -->
        <div class="bento-box bento-large">
            <div class="bento-icon"><i class="fas fa-palette"></i></div>
            <h3>Artistic Design & Sculpting</h3>
            <p>We don't just fill gaps; we expertly sculpt a beard style—whether it's a Goatee, Full Beard, or Designer Stubble—that structurally enhances and complements your masculine facial features.</p>
        </div>

        <!-- Card 2 -->
        <div class="bento-box bento-maroon">
            <div class="bento-icon"><i class="fas fa-microscope"></i></div>
            <h3>Magnified Precision</h3>
            <p>Performed under high magnification to ensure absolutely no visible scarring on the face or the donor area.</p>
        </div>

        <!-- Card 3 -->
        <div class="bento-box bento-light">
            <div class="bento-icon"><i class="fas fa-sync-alt"></i></div>
            <h3>Lifetime Results</h3>
            <p>The transplanted hair is permanent and can be safely shaved, trimmed, and styled exactly like your natural beard.</p>
        </div>

        <!-- Card 4 (Navy Span) -->
        <div class="bento-box bento-navy">
            <div style="display: flex; align-items: center; margin-bottom: 20px;">
                <div class="bento-icon"><i class="fas fa-shield-alt"></i></div>
                <h3 style="margin-bottom: 0;">Safe, Fast & Painless</h3>
            </div>
            <p style="max-width: 500px;">Executed completely under local anesthesia, the procedure is virtually painless with exceptionally quick recovery times, allowing you to return to your work and social life faster.</p>
        </div>
    </div>
</section>


<!-- Doctors Section -->
<section id="doctors" class="section-padding doctors">
    <div class="container">
        <div style="text-align: center; margin-bottom: 2rem;">
            <h5 style="color: #999; letter-spacing: 2px; text-transform: uppercase; font-size: 0.9rem;">Meet Our
                Team</h5>
            <h2 style="font-size: 3rem; color: #1A2E44;">Our Experts</h2>
        </div>

        <div class="doctors-grid">
            <!-- Doctor 1 -->
            <div class="doctor-card">
                <div class="doctor-card-inner">
                    <div class="doctor-img-wrapper">
                        <img src="images/dr-rahul-bio.jpg" alt="Dr. Rahul">
                    </div>
                    <h3>Dr. Rahul</h3>
                    <p class="specialty">Hair Transplant Specialist</p>
                    <a href="dr-rahul.php" class="view-profile-btn">View Profile</a>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="doctor-card">
                <div class="doctor-card-inner">
                    <div class="doctor-img-wrapper">
                        <img src="images/dr-nyra-new.jpg" alt="Dr. Nyra">
                    </div>
                    <h3>Dr. Nyra</h3>
                    <p class="specialty">Cosmetic & Aesthetic</p>
                    <a href="dr-nyra.php" class="view-profile-btn">View Profile</a>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- Why Choose Us Section & FAQs -->
<section class="why-choose-new">
    <div class="container">
        <div class="why-choose-grid">
            <div class="why-blob-container">
                <div class="why-blob-image">
                    <img src="images/why-choose.png" alt="Clinical Excellence">
                </div>
            </div>

            <div class="why-text-content">
                <h4>DENCESPOT CLINIC</h4>
                <h2>Why Choose DenceSpot<br>Skin Clinic?</h2>

                <div class="why-list">
                    <!-- FAQ Item 1 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Who is a good candidate for beard transplant?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Men with patchy beards, facial scarring, or sparse facial hair due to genetics are ideal
                                candidates. You must have sufficient donor hair on your scalp.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How long does the procedure take?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>A beard transplant typically takes 3 to 6 hours, depending on the area to be covered and
                                the number of grafts required for desired density.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>When can I shave my new beard?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>You can gently trim your beard after 2 weeks once the scabs have fallen off. Normal
                                shaving can usually resume after 3-4 months when the skin has fully healed.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Will the results look natural?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Absolutely. We carefully angle and place each graft to match your natural growth pattern.
                                Once grown, it is indistinguishable from a natural beard.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How much does a beard transplant cost?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>The cost depends on the number of grafts needed. We offer competitive pricing and
                                flexible EMI plans. Book a consultation for a precise quote.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Booking / CTA Section -->
<section id="booking" class="app-split-container" style="margin-top: 50px;">
    <!-- Left: Appointment Form -->
    <div class="app-left-form">
        <h2>Book an<br>Appointment</h2>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="YOUR NAME*" required>
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" placeholder="PHONE NUMBER*" required>
            </div>
            <div class="form-group icon-group" style="position: relative;">
                <input type="email" class="form-control" placeholder="EMAIL ID">
                <i class="fas fa-envelope" style="position: absolute; right: 15px; top: 15px; color: #27AE60;"></i>
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="4" placeholder="Your Concern"></textarea>
            </div>
            <button type="submit" class="btn-submit-app">BOOK AN APPOINTMENT</button>
        </form>
    </div>

    <!-- Right: Video Testimonials -->
    <div class="app-right-video">
        <h2>Our Happy Faces</h2>
        <span>Video Testimonials</span>

        <div class="app-video-thumb">
            <img src="images/video-testimonial-thumb.png" alt="Patient Success Story">
            <div class="app-play-btn">
                <i class="fas fa-play"></i>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>