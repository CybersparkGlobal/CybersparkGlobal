@extends('layouts.frontend.app')
@section('content')

    <section class="seo-hero" style="padding:80px 0; background:#0b2530;">

        <style>
            /* HERO SECTION BASE */
            .seo-hero h1 {
                font-size: 55px;
                font-weight: 800;
                color: #ffffff;
                line-height: 1.2;
            }
            .seo-hero p {
                color: #b7c4cc;
                font-size: 18px;
                margin-top: 18px;
            }
            .seo-hero .btn-primary {
                background:#06b3c9;
                border:none;
                padding:14px 28px;
                border-radius:8px;
                font-size:18px;
            }

            /* IMAGE CONTAINER */
            .mockup-wrap {
                position: relative;
                width: 100%;
                max-width: 560px;
                margin-top: 45px; /* SPACE SO IT DOES NOT TOUCH HEADER */
            }

            /* MAIN BIG CARD */
            .mockup-card {
                background: #ffffff;
                border-radius: 18px;
                padding: 18px;
                width: 100%;
                box-shadow: 0 20px 50px rgba(4,19,26,0.45);
                overflow: hidden;
            }

            .mockup-card img.device {
                width: 100%;
                border-radius: 12px;
                display: block;
            }

            /* SMALL SEO BADGE — MOVED BOTTOM RIGHT */
            .feature-badge {
                position: absolute;
                bottom: -25px;
                right: -50px;
                width: 130px;
                height: 130px;
                border-radius: 22px;
                background: #ffffff;
                box-shadow: 0 15px 40px rgba(4,19,26,0.4);
                display: flex;
                justify-content: center;
                align-items: center;
                animation: floatBadge 4.5s ease-in-out infinite;
            }

            /* BADGE ICON BOX */
            .feature-badge .icon {
                width: 80px;
                height: 80px;
                background:#07a9be;
                color:#ffffff;
                font-size:22px;
                font-weight:700;
                border-radius:18px;
                display:flex;
                align-items:center;
                justify-content:center;
            }

            /* ANIMATION */
            @keyframes floatBadge {
                0% { transform: translateY(0); opacity:1; }
                50% { transform: translateY(-12px); opacity:0.75; }
                100% { transform: translateY(0); opacity:1; }
            }

            /* RESPONSIVE */
            @media(max-width:992px){
                .seo-hero h1 { font-size: 40px; }
                .feature-badge { right: -20px; bottom: -20px; }
            }
            @media(max-width:768px){
                .mockup-wrap { margin: 40px auto 0 auto; }
                .feature-badge { width:100px; height:100px; }
                .feature-badge .icon { width:60px; height:60px; font-size:18px; }
            }
        </style>

        <div class="container">
            <div class="row d-flex align-items-center">

                <!-- LEFT SIDE -->
                <div class="col-lg-6">
                    <h1>The Best SEO Company Delivering<br>Top SEO Services in South Africa<span style="color:#09bfd3">.</span></h1>
                    <p>
                        As the best SEO company for South Africa, we deliver the top SEO services you need to bring targeted traffic that converts across Mzansi.
                        Our specialized approach includes essential Technical SEO and targeted local SEO services South Africa to ensure your business is visible exactly where it matters.
                    </p>

                    <div class="mt-4 d-flex align-items-center">
                        <a href="https://www.facebook.com/jubair.khan.ariyan/" class="btn btn-primary me-4">Get a free SEO audit</a>
                        <a href="https://cybersparkglobal.com/contact_us" style="color:#bfcbd1; text-decoration:underline;">Contact us</a>
                    </div>
                </div>

                <!-- RIGHT SIDE -->
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="mockup-wrap">

                        <!-- FLOATING BADGE (bottom-right) -->
                        <div class="feature-badge">
                            <img class="device"
                                 src="https://cybersparkglobal.com/images/slider/google%20seo.png"
                                 alt="SEO Mockup">
                        </div>

                        <!-- MAIN BIG MOCKUP IMAGE -->
                        <div class="mockup-card">
                            <img class="device"
                                 src="https://cybersparkglobal.com/images/slider/SEO%20services%20for%20South%20Africa%20.webp"
                                 alt="SEO Mockup">
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>



    <!-- START: SEO DETAILS / RESULT BOX SECTION (paste below hero) -->
    <section class="seo-details-section" style="padding:70px 0; background:transparent;">
        <style>
            /* ---- base layout ---- */
            .seo-details-section .row { align-items: center; }
            .seo-details-section .left-img {
                max-width: 360px;
                width:100%;
                margin: 0 auto;
                box-shadow: 0 18px 40px rgba(6,18,28,0.15);
                border-radius: 12px;
                overflow: hidden;
            }
            .seo-details-section .left-img img { display:block; width:100%; height:auto; }

            /* heading/intro */
            .seo-details-section h2 {
                font-size: 34px;
                line-height:1.15;
                color: #0f2430;
                margin-bottom:14px;
                font-weight:700;
            }
            .seo-details-section p.lead {
                color: #6e7e87;
                font-size:16px;
                margin-bottom:24px;
            }

            /* search-like pill */
            .search-pill {
                display:inline-flex;
                align-items:center;
                width:100%;
                max-width:780px;
                margin:28px auto;
                background:#fff;
                border-radius:44px;
                padding:18px 26px;
                box-shadow: 0 10px 28px rgba(6,18,28,0.08);
                border: 1px solid rgba(6,18,28,0.03);
            }
            .search-pill .text { flex:1; font-size:18px; color:#0f2430; font-weight:600; padding-left:8px; }
            .search-pill .mic {
                width:36px; height:36px; border-radius:50%;
                background:linear-gradient(90deg,#06b3c9,#07a6c2);
                display:flex; align-items:center; justify-content:center; color:#fff; margin-left:12px;
                box-shadow:0 6px 18px rgba(6,18,28,0.12);
            }

            /* result boxes */
            .result-grid { margin-top:28px; display:grid; grid-template-columns: 1fr 1fr; gap:22px; }
            .result-card {
                background:#ffffff;
                border-radius:10px;
                padding:20px;
                box-shadow: 0 6px 18px rgba(6,18,28,0.06); /* shallow box shadow */
                border: 1px solid rgba(6,18,28,0.03);
            }
            .result-card h3 {
                margin:0 0 8px 0;
                color:#0c3140;
                font-size:18px;
                font-weight:700;
            }
            .result-card .url {
                color:#1a8c6b;
                font-size:13px;
                margin-bottom:10px;
                display:block;
            }
            .result-card p { color:#6e7e87; margin:0; font-size:14px; line-height:1.5; }

            /* spacing & container */
            .container--narrow { max-width:1180px; margin:0 auto; padding:0 18px; }

            /* responsive */
            @media(max-width:991px){
                .seo-details-section h2 { font-size:28px; }
                .result-grid { grid-template-columns: 1fr; }
                .left-img { max-width:300px; margin-bottom:20px; }
                .search-pill { padding:14px 18px; }
            }
            @media(max-width:520px){
                .seo-details-section h2 { font-size:22px; }
                .search-pill .text { font-size:16px; }
            }
        </style>

        <div class="container--narrow">
            <div class="row" style="display:flex; gap:30px; flex-wrap:wrap;">

                <!-- left image -->
                <div style="flex:0 0 360px; max-width:360px;">
                    <div class="left-img">
                        <img src="https://cybersparkglobal.com/images/slider/about%20us%20page%20%20set1.jpg" alt="SEO image">
                    </div>
                </div>

                <!-- right content -->
                <div style="flex:1 1 1px; min-width:260px;">
                    <h2>Search Engine Optimization.</h2>
                    <p class="lead">
                        Search Engine Optimization is the process of improving your site's visibility in search results —
                        getting the right visitors who convert. Our technical, on-page and off-page work helps sites rank and drive sales.
                    </p>

                    <!-- search pill -->
                    <div style="display:block; text-align:center;">
                        <div class="search-pill" role="search">
                            <div class="text">Take your business to the next level</div>
                            <div class="mic" aria-hidden="true">🔍</div>
                        </div>
                    </div>

                    <!-- result-like boxes -->
                    <div class="result-grid">
                        <div class="result-card">
                            <h3>Analyze a web site</h3>
                            <span class="url">cybersparkglobal.com/seo/analyze-a-web-site</span>
                            <p>We first analyze a web site, followed by a step-by-step plan to help the website communicate keywords more effectively to search engines.</p>
                        </div>

                        <div class="result-card">
                            <h3>On-Page & Off-Page Optimization</h3>
                            <span class="url">cybersparkglobal.com/seo/on-page-off-page</span>
                            <p>The goal of on-page and off-page optimisation is to make your site and its signals consistent with your target keywords so it ranks when customers search.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END: SEO DETAILS / RESULT BOX SECTION -->


    <!-- START: HOW WE DO SECTION -->
    <section class="how-we-do" style="padding:70px 0; background:#0f2435;">
        <style>
            .how-we-do .section-title {
                text-align:center;
                color:#ffffff;
                margin-bottom:45px;
            }
            .how-we-do .section-title span {
                display:block;
                font-size:14px;
                opacity:0.7;
                margin-bottom:6px;
            }
            .how-we-do .section-title h2 {
                font-size:34px;
                font-weight:700;
            }

            /* grid */
            .how-grid {
                max-width:1250px;
                margin:0 auto;
                display:grid;
                grid-template-columns: repeat(4, 1fr);
                gap:22px;
                padding:0 18px;
            }

            /* cards */
            .how-card {
                background:#ffffff;
                border-radius:10px;
                padding:28px 22px;
                text-align:center;
                box-shadow:0 8px 20px rgba(6,18,28,0.12);
                border:1px solid rgba(255,255,255,0.04);
                transition:0.25s;
            }
            .how-card:hover {
                transform:translateY(-6px);
                box-shadow:0 12px 26px rgba(6,18,28,0.18);
            }

            .how-card .icon {
                width:65px; height:65px;
                background:#07b6d5;
                border-radius:50%;
                display:flex; align-items:center; justify-content:center;
                margin:0 auto 18px auto;
                color:#fff;
                font-size:28px;
            }

            .how-card h3 {
                font-size:15px;
                font-weight:700;
                color:#0f2435;
                margin-bottom:10px;
            }

            .how-card p {
                font-size:14px;
                line-height:1.5;
                color:#606b75;
            }

            /* responsive */
            @media(max-width:991px){
                .how-grid { grid-template-columns: repeat(2,1fr); }
            }
            @media(max-width:600px){
                .how-grid { grid-template-columns: 1fr; }
                .how-we-do .section-title h2 { font-size:28px; }
            }
        </style>

        <div class="section-title">
            <span>Feed Your Mind With</span>
            <h2>How We Do</h2>
        </div>

        <div class="how-grid">

            <!-- card 1 -->
            <div class="how-card">
                <div class="icon">🔍</div>
                <h3>KEYWORD RESEARCH</h3>
                <p>Keyword density tells you how often a search term appears in a text in relation to the total number of words it contains.</p>
            </div>

            <!-- card 2 -->
            <div class="how-card">
                <div class="icon">🌐</div>
                <h3>ONSITE OPTIMIZATION</h3>
                <p>On-page optimization includes all measures taken directly within the website to improve its search engine ranking.</p>
            </div>

            <!-- card 3 -->
            <div class="how-card">
                <div class="icon">🔗</div>
                <h3>LINK BUILDING</h3>
                <p>Link building increases the number and quality of inbound links to improve website authority and rankings.</p>
            </div>

            <!-- card 4 -->
            <div class="how-card">
                <div class="icon">💻</div>
                <h3>REPORTING AND ANALYSIS</h3>
                <p>We review your content, linking structure, social signals, and overall SEO health to guide improvements.</p>
            </div>

        </div>
    </section>
    <!-- END: HOW WE DO SECTION -->




    <!-- START: Alternating Timeline Section -->
    <section class="seo-timeline" aria-label="SEO Services Timeline">
        <style>

            /* -------------------------------
               BASE LAYOUT (DESKTOP)
            --------------------------------*/
            .seo-timeline {
                padding:70px 20px;
                --accent:#07b6d5;
                --title:#0f2435;
                max-width:1200px;
                margin:0 auto;
                font-family:Arial, Helvetica, sans-serif;
            }

            .seo-timeline .timeline-title {
                text-align:center;
                margin-bottom:40px;
                color:var(--title);
            }
            .seo-timeline .timeline-title h2 {
                margin:0;
                font-size:30px;
                font-weight:700;
            }

            .seo-timeline .timeline-grid {
                position:relative;
                display:grid;
                grid-template-columns: 1fr 70px 1fr;
                gap:30px;
                align-items:start;
            }

            /* -- Vertical dashed line (desktop) -- */
            .seo-timeline .timeline-grid::before {
                content:"";
                position:absolute;
                left:50%;
                top:0;
                transform:translateX(-50%);
                width:4px;
                height:100%;
                background-image:linear-gradient(
                    to bottom,
                    var(--accent) 0,
                    var(--accent) 8px,
                    transparent 8px,
                    transparent 16px
                );
                background-size:100% 24px;
                background-repeat:repeat-y;
                z-index:2;
            }

            /* -- Dots (desktop only) -- */
            .seo-timeline .center-col {
                position:relative;
                display:flex;
                flex-direction:column;
                align-items:center;
                z-index:3;
            }
            .seo-timeline .dot {
                width:18px;
                height:18px;
                border-radius:50%;
                background:#fff;
                border:6px solid var(--accent);
                box-shadow:0 6px 18px rgba(11,24,30,0.1);
                margin:24px 0;
            }

            /* -- Timeline Items -- */
            .timeline-item {
                display:flex;
                gap:22px;
                padding:18px;
                align-items:center;
            }

            .timeline-item .thumb {
                width:230px;
                border-radius:10px;
                overflow:hidden;
                box-shadow:0 8px 26px rgba(0,0,0,0.08);
            }
            .timeline-item .thumb img {
                width:100%;
                height:100%;
                object-fit:cover;
            }

            .timeline-item .content {
                max-width:520px;
            }
            .timeline-item h3 {
                font-size:22px;
                margin:0 0 10px;
                color:var(--title);
            }
            .timeline-item p {
                font-size:15px;
                line-height:1.55;
                margin-bottom:12px;
            }
            .timeline-item .cta {
                color:var(--accent);
                font-size:15px;
                font-weight:700;
                text-decoration:none;
                display:inline-flex;
                gap:8px;
                align-items:center;
            }
            .timeline-item .cta .arrow {
                width:30px;
                height:30px;
                border-radius:50%;
                background:var(--accent);
                color:#fff;
                display:flex;
                align-items:center;
                justify-content:center;
            }

            /* Desktop positioning */
            .left-item { justify-content:flex-end; text-align:right; }
            .left-item .content { text-align:right; }
            .right-item { justify-content:flex-start; text-align:left; }

            /* -------------------------------------
                MOBILE LAYOUT (IMAGES FIRST, FULL WIDTH)
            --------------------------------------*/
            @media(max-width:900px){

                /* Collapse to 1 column */
                .seo-timeline .timeline-grid {
                    grid-template-columns:1fr;
                }

                /* Move dashed line to far left */
                .seo-timeline .timeline-grid::before {
                    left:20px;
                    transform:none;
                    height:100%;
                }

                /* Remove desktop dots column */
                .seo-timeline .col-center { display:none; }

                .timeline-item {
                    flex-direction:column;          /* stack image + text */
                    align-items:flex-start;
                    padding:20px 0 34px 50px;      /* space for line & dot */
                    position:relative;
                }

                /* Dot for each item */
                .timeline-item::before {
                    content:"";
                    position:absolute;
                    left:14px;
                    top:22px;
                    width:12px;
                    height:12px;
                    border-radius:50%;
                    background:var(--accent);
                    border:4px solid #fff;
                    box-shadow:0 6px 14px rgba(0,0,0,0.1);
                    z-index:5;
                }

                /* Always show image first, then text */
                .timeline-item .thumb {
                    order:0;
                    width:100%;
                    max-width:260px;
                    min-width:0;
                    height:auto;
                    border-radius:10px;
                    margin-bottom:12px;
                }
                .timeline-item .thumb img {
                    width:100%;
                    height:auto;
                    object-fit:cover;
                }

                /* Text takes full card width */
                .timeline-item .content {
                    order:1;
                    padding-left:0;
                    max-width:100%;
                }

                /* Smaller text for mobile */
                .timeline-item h3 {
                    font-size:18px;
                    margin-bottom:6px;
                }
                .timeline-item p {
                    font-size:14px;
                    line-height:1.45;
                    margin-bottom:10px;
                }
                .timeline-item .cta {
                    font-size:14px;
                }

                /* Reset alignment hints */
                .left-item,
                .right-item {
                    justify-content:flex-start;
                    text-align:left;
                }
            }

        </style>

        <!-- TITLE -->
        <div class="timeline-title">
            <h2>What we do for SEO</h2>
            <p style="margin:8px 0 0;color:#5f6e73;font-size:14px;">
                Complete process — analysis, on-page, off-page and paid growth
            </p>
        </div>

        <div class="timeline-grid">

            <!-- ITEM 1 -->
            <div class="col-left">
                <div class="timeline-item left-item">
                    <div class="content">
                        <h3>Analyze a web site</h3>
                        <p>We first analyze a website, then produce a step-by-step plan so the site communicates keywords more effectively to search engines and human visitors.</p>
                        <a class="cta" href="#analyze">Read more <span class="arrow">→</span></a>
                    </div>
                </div>
            </div>
            <div class="col-center center-col"><div class="dot"></div></div>

            <!-- ITEM 2 -->
            <div class="col-right">
                <div class="timeline-item right-item">
                    <div class="thumb"><img src="https://cybersparkglobal.com/images/slider/about%20us%20page%20%20set1.jpg" alt=""></div>
                </div>
            </div>

            <!-- ITEM 3 -->
            <div class="col-left">
                <div class="timeline-item left-item">
                    <div class="thumb"><img src="https://cybersparkglobal.com/images/slider/about%20us%20page%20%20set1.jpg" alt=""></div>
                </div>
            </div>
            <div class="col-center center-col"><div class="dot"></div></div>

            <!-- ITEM 4 -->
            <div class="col-right">
                <div class="timeline-item right-item">
                    <div class="content">
                        <h3>SEO Paid Advertisements</h3>
                        <p>Paid search and social advertising accelerate visibility. We combine paid ads with organic efforts for maximum ROI and faster results.</p>
                        <a class="cta" href="#paid">Start paid campaigns <span class="arrow">→</span></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END -->










    <!-- START: Scoped "Why SEO is Beneficial" Section -->
    <section class="seo-benefits-section">
        <style>
            .seo-benefits-section {
                --accent: #17c0d6;
                --dark-bg: #0f2435;       /* deep background for LEFT BOX */
                --panel:#39464e;
                --card:#ffffff;
                --muted:#9aa7ad;
                max-width:1300px;
                margin:0 auto;
                padding:60px 20px;
            }

            .seo-benefits-section .row {
                display:grid;
                grid-template-columns: 1fr 540px;
                gap:40px;
                align-items:stretch;
            }

            /* LEFT BOX WITH DARK BACKGROUND */
            .seo-benefits-section .left {
                background:var(--dark-bg);
                padding:50px 40px;
                border-radius:6px;
                display:flex;
                align-items:center;         /* vertical centering */
                justify-content:flex-start;
            }

            .seo-benefits-section .left .inner {
                max-width:420px;
                color:#ffffff;
            }

            .seo-benefits-section .eyebrow {
                font-size:13px;
                color:#a7b6c5;
                margin-bottom:12px;
                letter-spacing:1px;
                text-transform:uppercase;
            }

            .seo-benefits-section .headline {
                font-size:42px;
                font-weight:800;
                line-height:1.1;
                margin-bottom:18px;
                color:#ffffff;
            }
            .seo-benefits-section .headline .accent {
                color:var(--accent);
            }

            .seo-benefits-section .lead {
                color:#c9d5dc;
                line-height:1.6;
                margin-bottom:22px;
            }

            .seo-benefits-section .cta {
                display:inline-flex;
                align-items:center;
                gap:12px;
                padding:12px 18px;
                border-radius:50px;
                text-decoration:none;
                color:var(--accent);
                border:2px solid rgba(23,192,214,0.3);
                font-weight:700;
                background:transparent;
            }

            .seo-benefits-section .cta .dot {
                width:34px;
                height:34px;
                background:var(--accent);
                border-radius:50%;
                display:flex;
                align-items:center;
                justify-content:center;
                color:#fff;
                font-weight:800;
            }

            /* RIGHT PANEL */
            .seo-benefits-section .right-panel {
                background:var(--panel);
                padding:36px;
                border-radius:6px;
                box-shadow:0 12px 40px rgba(0,0,0,0.28);
            }

            .seo-benefits-section .cards {
                width:420px;
                margin:0 auto;
                display:flex;
                flex-direction:column;
                gap:18px;
            }

            .seo-benefits-section .card {
                background:var(--card);
                padding:14px 16px;
                border-radius:6px;
                display:grid;
                grid-template-columns:56px 1fr;
                gap:14px;
                align-items:center;
                box-shadow:0 6px 18px rgba(3,18,22,0.12);
            }

            .seo-benefits-section .card .icon {
                width:56px;
                height:56px;
                border-radius:50%;
                background:#eef7fb;
                display:flex;
                align-items:center;
                justify-content:center;
                font-size:20px;
            }

            .seo-benefits-section .card h4 {
                font-size:14px;
                margin-bottom:6px;
                color:#0f2b33;
                font-weight:700;
            }

            .seo-benefits-section .card p {
                margin:0;
                font-size:13px;
                color:#566a75;
                line-height:1.45;
            }

            /* RESPONSIVE */
            @media(max-width:900px){
                .seo-benefits-section .row {
                    grid-template-columns:1fr;
                }
                .seo-benefits-section .cards {
                    width:100%;
                }
            }
        </style>

        <div class="row">
            <!-- LEFT BOX -->
            <div class="left">
                <div class="inner">
                    <div class="eyebrow">WHY SEO IS</div>

                    <h2 class="headline">
                        Why SEO is<br>
                        Beneficial For<br>
                        Your Business<span class="accent">?</span>
                    </h2>

                    <p class="lead">
                        As experts in the search engine optimization and marketing industries,
                        the management and employees have a proven track record for crafting
                        effective internet marketing strategies with measurable, long-term results.
                    </p>

                    <a class="cta" href="#">
                        GET A WEB DESIGN QUOTE TODAY
                        <span class="dot">→</span>
                    </a>
                </div>
            </div>

            <!-- RIGHT CARDS -->
            <div class="right-panel">
                <div class="cards">

                    <div class="card">
                        <div class="icon">🌐</div>
                        <div>
                            <h4>Ranking Importance</h4>
                            <p>This year research shows that approximately 85% of all websites are found via search engines.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="icon">🔍</div>
                        <div>
                            <h4>Effective strategy</h4>
                            <p>SEO allows you the ability to choose keyword phrases for searches performed by potential customers.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="icon">👥</div>
                        <div>
                            <h4>Bring Visitors</h4>
                            <p>Solid SEO and search-friendly web design will help bring visitors to your website.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="icon">G</div>
                        <div>
                            <h4>Major Search Engines</h4>
                            <p>Most users begin their web search through a major search engine (Google, Bing, Yahoo, AOL).</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="icon">📈</div>
                        <div>
                            <h4>342 billion Search Results</h4>
                            <p>More than 17.5 billion searches were performed with 342 billion search results.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="icon">🏆</div>
                        <div>
                            <h4>Consumer Perception</h4>
                            <p>The higher a site ranks, the more trustworthy it appears to users.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- END: Scoped section -->


    <!-- START: Full-Width Infinite Logo Carousel (Right → Left, Full-bleed) -->
    <section class="inf-carousel-fullwidth" aria-label="Full width partners carousel">
        <style>
            /* Scoped styles */
            .inf-carousel-fullwidth { padding:18px 0; } /* vertical spacing only */
            /* make section full-bleed regardless of parent */
            .inf-carousel-fullwidth .inf-viewport {
                width:100vw;
                margin-left: calc(50% - 50vw);
                overflow:hidden;
                position:relative;
                box-sizing:border-box;
                background: transparent;
                padding: 12px 0;
            }

            .inf-carousel-fullwidth .inf-track {
                display:flex;
                align-items:center;
                gap:28px;
                will-change:transform;
                transform:translateX(0);
                /* ensure track height doesn't collapse */
                padding: 6px 16px;
            }

            .inf-carousel-fullwidth .inf-slide {
                flex:0 0 auto;
                width:140px;
                height:48px;
                display:flex;
                align-items:center;
                justify-content:center;
                box-sizing:border-box;
            }

            .inf-carousel-fullwidth .inf-slide img {
                max-width:100%;
                max-height:100%;
                object-fit:contain;
                filter:grayscale(1) opacity(.85);
                display:block;
            }

            /* responsive */
            @media (max-width:900px){
                .inf-carousel-fullwidth .inf-slide { width:120px; height:44px; }
                .inf-carousel-fullwidth .inf-track { gap:20px; }
            }
            @media (max-width:640px){
                .inf-carousel-fullwidth .inf-slide { width:96px; height:40px; }
                .inf-carousel-fullwidth .inf-track { gap:16px; padding:6px 10px; }
            }
        </style>

        <div class="inf-viewport" id="infViewportFW" role="region" aria-roledescription="carousel" aria-label="Partner logos">
            <div class="inf-track" id="infTrackFW" role="list">
                <!-- Add as many slides as you like -->
                <div class="inf-slide" role="listitem"><img src="https://cybersparkglobal.com/images/slider/about%20us%20page%20%20set1.jpg" alt="logo 1"></div>
                <div class="inf-slide" role="listitem"><img src="https://cybersparkglobal.com/images/slider/about%20us%20page%20%20set1.jpg" alt="logo 2"></div>
                <div class="inf-slide" role="listitem"><img src="https://cybersparkglobal.com/images/slider/about%20us%20page%20%20set1.jpg" alt="logo 3"></div>
                <div class="inf-slide" role="listitem"><img src="https://cybersparkglobal.com/images/slider/about%20us%20page%20%20set1.jpg" alt="logo 4"></div>
                <div class="inf-slide" role="listitem"><img src="https://cybersparkglobal.com/images/slider/about%20us%20page%20%20set1.jpg" alt="logo 5"></div>
                <div class="inf-slide" role="listitem"><img src="https://cybersparkglobal.com/images/slider/about%20us%20page%20%20set1.jpg" alt="logo 6"></div>
                <!-- end original set -->
            </div>
        </div>

        <script>
            (function(){
                const viewport = document.getElementById('infViewportFW');
                const track = document.getElementById('infTrackFW');
                if(!track) return;

                const slides = Array.from(track.children);
                if(slides.length === 0) return;

                // duplicate the slide set to create a seamless loop
                slides.forEach(s => track.appendChild(s.cloneNode(true)));

                // compute original set width (including gap)
                function computeOriginalWidth(){
                    let w = 0;
                    const gap = parseFloat(getComputedStyle(track).gap || 0) || 0;
                    for(let i=0;i<slides.length;i++){
                        const r = slides[i].getBoundingClientRect();
                        w += Math.ceil(r.width) + gap;
                    }
                    return w;
                }

                let originalWidth = computeOriginalWidth();

                // recalc on resize (debounced)
                let resizeTimer;
                window.addEventListener('resize', ()=>{
                    clearTimeout(resizeTimer);
                    resizeTimer = setTimeout(()=>{
                        originalWidth = computeOriginalWidth();
                    },120);
                });

                // animation state
                let offset = 0;             // current translateX offset (px)
                const pxPerSecond = 90;     // speed: pixels per second (increase to go faster)
                let lastTimestamp = null;
                let isPaused = false;

                // Start with offset = 0 and scroll leftwards (logos move from right to left).
                // If you want initial content to appear fully from the right edge, we could set offset = 0,
                // and because track overflows viewport, it will appear filling the viewport with content from left->right order.
                // The continuous scroll effect (leftwards) is achieved below.

                function step(ts){
                    if(!lastTimestamp) lastTimestamp = ts;
                    const dt = (ts - lastTimestamp) / 2300;
                    lastTimestamp = ts;

                    if(!isPaused){
                        // move leftwards (negative)
                        offset -= pxPerSecond * dt;

                        // reset offset to keep it within one originalWidth for seamless loop
                        if(Math.abs(offset) >= originalWidth){
                            offset += originalWidth;
                        }

                        track.style.transform = `translateX(${offset}px)`;
                    }

                    requestAnimationFrame(step);
                }

                // pause on hover/focus
                viewport.addEventListener('mouseenter', ()=> isPaused = true);
                viewport.addEventListener('mouseleave', ()=> isPaused = false);
                viewport.addEventListener('focusin', ()=> isPaused = true);
                viewport.addEventListener('focusout', ()=> isPaused = false);

                // kick off
                requestAnimationFrame(step);

                // optional: ensure the track starts visually centered across the viewport width by adjusting
                // the initial offset slightly if desired. Commented out by default.
                // offset = 0; track.style.transform = `translateX(${offset}px)`;

            })();
        </script>
    </section>
    <!-- END: Full-Width Infinite Logo Carousel -->


    <!-- START: Last section -->
    <section class="cta-help-section">
        <style>
            /* Fully Scoped Styles */
            .cta-help-section {
                background:#f5f7f8;
                padding:60px 20px;
                margin:0;
            }

            .cta-help-section .help-container {
                max-width:1300px;
                margin:0 auto;
                display:grid;
                grid-template-columns:1fr 520px;
                align-items:center;
                gap:40px;
            }

            /* LEFT SIDE */
            .cta-help-section .eyebrow {
                font-size:14px;
                font-weight:700;
                color:#00b4d8;
                text-transform:uppercase;
                letter-spacing:0.5px;
                margin-bottom:10px;
            }

            .cta-help-section .headline {
                font-size:48px;
                font-weight:800;
                color:#0f2435;
                margin-bottom:18px;
                line-height:1.1;
            }

            .cta-help-section .headline .accent {
                color:#00c2e8;
            }

            .cta-help-section .desc {
                font-size:16px;
                color:#55646b;
                margin-bottom:26px;
                max-width:480px;
                line-height:1.55;
            }

            .cta-help-section .btn {
                display:inline-flex;
                align-items:center;
                gap:12px;
                padding:14px 22px;
                border-radius:50px;
                background:#00c2e8;
                color:#fff;
                font-weight:700;
                text-decoration:none;
                font-size:14px;
                box-shadow:0 8px 20px rgba(0,194,232,0.25);
            }

            .cta-help-section .btn .arrow {
                width:32px;
                height:32px;
                border-radius:50%;
                background:#fff;
                color:#00c2e8;
                display:flex;
                align-items:center;
                justify-content:center;
                font-weight:700;
            }

            /* RIGHT SIDE IMAGE */
            .cta-help-section .help-img {
                width:100%;
                display:block;
                object-fit:contain;
            }

            /* RESPONSIVE */
            @media (max-width:900px){
                .cta-help-section .help-container {
                    grid-template-columns:1fr;
                    text-align:center;
                }
                .cta-help-section .desc {
                    margin-left:auto;
                    margin-right:auto;
                }
                .cta-help-section .btn {
                    margin-left:auto;
                    margin-right:auto;
                }
            }
        </style>

        <div class="help-container">

            <!-- LEFT TEXT -->
            <div>
                <div class="eyebrow">WE'RE HERE TO HELP</div>
                <h2 class="headline">
                    Not sure where to start<span class="accent">?</span>
                </h2>

                <p class="desc">
                    Our team of digital and business experts will guide you to the right direction.
                </p>

                <a href="#" class="btn">
                    LET’S HAVE A TALK ABOUT YOUR PROJECT
                    <span class="arrow">→</span>
                </a>
            </div>

            <!-- RIGHT IMAGE -->
            <div>
                <img class="help-img" src="https://cybersparkglobal.com/images/slider/about%20us%20page%20%20set1.jpg" alt="Devices mockup">
            </div>

        </div>
    </section>

    <!-- END: Last section -->


@endsection
