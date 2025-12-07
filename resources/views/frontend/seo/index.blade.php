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
                background:#4784da;
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
                background:#4784da;
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
                    <h1>The Best <span style="color:#6597ee">SEO</span> Company Delivering<br>Top SEO Services in <span style="color:#f7b70f">South Africa</span> <span style="color:#6597ee">.</span></h1>
                    <p>
                        As the best SEO company for South Africa, we deliver the top SEO services you need to bring targeted traffic that converts across Mzansi.
                        Our specialized approach includes essential Technical SEO and targeted local SEO services South Africa to ensure your business is visible exactly where it matters.
                    </p>

                    <div class="mt-4 d-flex align-items-center">
                        <a href="https://www.facebook.com/jubair.khan.ariyan/" class="btn btn-primary me-4"> Get a free SEO audit </a>
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
                                 alt="Seo services for south africa ">
                        </div>

                        <!-- MAIN BIG MOCKUP IMAGE -->
                        <div class="mockup-card">
                            <img class="device"
                                 src="https://cybersparkglobal.com/images/slider/SEO%20services%20for%20South%20Africa%20.webp"
                                 alt="google Seo services for south africa">
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
                        <img src="https://cybersparkglobal.com/images/slider/Helal%20ahmed%20in%20official%20vibe.webp" alt="helal ahmed official image">
                    </div>
                </div>

                <!-- right content -->
                <div style="flex:1 1 1px; min-width:260px;">
                    <h2>Search Engine Optimization.</h2>
                    <p class="lead">
                        Search Engine Optimization is how we boost your visibility across South African search results—ensuring you attract high-quality Mzansi visitors who actually convert. Our local technical, on-page, and off-page expertise drives higher rankings and sales.
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
                            <p>Our process starts with a deep dive analysis of your website, followed by a customised step-by-step plan. This strategy ensures your site effectively communicates its value and target keywords to search engines.</p>
                        </div>

                        <div class="result-card">
                            <h3>On-Page & Off-Page Optimization</h3>
                            <span class="url">cybersparkglobal.com/seo/on-page-off-page</span>
                            <p>The primary goal of our on-page and off-page optimisation is to make your website and its signals perfectly align with what your target audience is searching for. We ensure you rank high when customers look for your services.</p>
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
                <div class="icon">📍</div>
                <h3>Local Entity SEO</h3>
                <p>We ensure Google accurately maps your business as a trusted, official entity within its Knowledge Graph. This confirms local authority and boosts visibility for all your South African locations (Mzansi).</p>
            </div>

            <!-- card 2 -->
            <div class="how-card">
                <div class="icon">💡</div>
                <h3>Information Gain Optimisation</h3>
                <p>We upgrade your content to provide unique, meaningful value that goes beyond what competitors offer. This strategy helps your pages rank higher by demonstrating superior, in-depth knowledge.</p>
            </div>

            <!-- card 3 -->
            <div class="how-card">
                <div class="icon">⚡</div>
                <h3>Page Experience (Core Web Vitals)</h3>
                <p>We optimize the technical performance of your site, guaranteeing rapid loading times, flawless mobile responsiveness, and stability. A superior user experience is non-negotiable for modern ranking success.</p>
            </div>

            <!-- card 4 -->
            <div class="how-card">
                <div class="icon">🌳</div>
                <h3>Topical Authority & Clustering</h3>
                <p>We build interconnected content clusters around your core services, establishing your website as the definitive expert (authority) in your industry for the South African market.</p>
            </div>

        </div>
    </section>
    <!-- END: HOW WE DO SECTION -->


    <!-- Start Section of team members -->

    <style>
        /* --- Team Section Base Styles --- */
        .team-section {
            padding: 60px 0;
            background-color: #f5f7f8; /* Light background for contrast */
            font-family: "Plus Jakarta Sans", sans-serif; /* Applied new font */
        }

        .container {
            max-width: 1200px; /* Max width for central alignment */
            margin: 0 auto;
            padding: 0 15px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2em;
            color: #000000; /* Darker title color */
        }

        /* --- The Core Responsive Grid (Flexbox) --- */
        .team-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        /* --- Team Member Card Styling --- */
        .team-member-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
            flex: 1 1 calc(33.333% - 20px);
            max-width: 350px;
            position: relative; /* Needed for absolute positioning of the icon */
        }

        .team-member-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .member-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 2px solid #0b2530; /* Changed border color to deep dark */
        }

        .member-name {
            font-size: 1.5em;
            color: #0b2530; /* Changed name color to deep dark */
            margin-bottom: 5px;
        }

        .member-title {
            font-size: 1em;
            color: #0b1236;
            margin-bottom: 15px;
            font-style: italic;
        }

        .member-bio {
            font-size: 0.7em;
            color: #0E2231;
            line-height: 1.5;
            margin-bottom: 30px; /* Added space for the social icon */
        }

        /* --- Facebook Icon Styling --- */
        .facebook-link {
            display: block;
            position: absolute;
            bottom: 10px; /* Positioned near the bottom center */
            left: 50%;
            transform: translateX(-50%);
            font-size: 24px;
            color: #0b2530; /* Icon color (deep dark) */
            transition: color 0.2s ease;
        }

        .facebook-link:hover {
            color: #1877f2; /* Standard Facebook blue on hover */
        }

        /* --- Mobile Responsiveness (Media Query) --- */
        @media (max-width: 768px) {
            .team-member-card {
                flex: 1 1 90%;
                max-width: 90%;
            }
        }
    </style>

    <section class="team-section">
        <div class="container">
            <h2 class="section-title"><b>Meet Your Dedicated SEO Experts Team for South Africa</b></h2>

            <div class="team-grid">

                <div class="team-member-card">
                    <img src="{{ asset('images/slider/Jubair Khan Ariyan@web developer and SEO Expert .jpg') }}" alt="Web developer and seo specialist" class="member-image">
                    <h3 class="member-name">Ar jubair Khan</h3>
                    <p class="member-title">SEO Specialist & Web Developer</p>
                    <p class="member-bio">Web Developer and SEO Specialist, always dedicated and available to provide immediate support. He specializes in web development, Technical SEO, and expert SEO analysis, specifically examining competitor performance and customer behavior for the South African market.</p>
                    <a href="https://www.facebook.com/jubair.khan.ariyan/" target="_blank" class="facebook-link" aria-label="Ar jubair Khan on Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>

                <div class="team-member-card">
                    <img src="{{ asset('images/slider/Fahim islam.JPG') }}" alt="Fahim islam" class="member-image">
                    <h3 class="member-name">Fahim Islam</h3>
                    <p class="member-title">SEO Expert & Content Writer</p>
                    <p class="member-bio">Dedicated SEO Expert and high-quality Content Writer, always available to provide prompt support. He specializes in content analysis, expertly examining competitor strategies and customer needs specifically for the South African market.</p>
                    <a href="https://www.facebook.com/fahimislam.nipun" target="_blank" class="facebook-link" aria-label="Fahim Islam on Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>

                <div class="team-member-card">
                    <img src="{{ asset('images/slider/Aktarozzaman Shohag.jpg') }}" alt="Aktarozzaman Shohag" class="member-image">
                    <h3 class="member-name">Md Aktarozzaman</h3>
                    <p class="member-title">Senior Web and Software Developer</p>
                    <p class="member-bio">Senior Web and Software Developer who is always dedicated and available for prompt support. He specializes in web development, bug fixing, and building high-speed, healthy websites, alongside creating specialized support software for clients in South Africa.</p>
                    <a href="https://www.facebook.com/ar.aktr" target="_blank" class="facebook-link" aria-label="Md Aktarozzaman on Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- End Section of team members -->



<!-- start of 6 line content-->
    <style>
        /* -------------------------------
           BASE LAYOUT (DESKTOP)
        --------------------------------*/
        .seo-timeline {
            padding: 70px 20px;
            --accent: #07b6d5;
            --title: #0f2435;
            max-width: 1000px; /* Reduced max-width for better text flow */
            margin: 0 auto;
            font-family: "Plus Jakarta Sans", sans-serif; /* Using the preferred font */
        }

        .seo-timeline .timeline-title {
            text-align: center;
            margin-bottom: 40px;
            color: var(--title);
        }
        .seo-timeline .timeline-title h2 {
            margin: 0;
            font-size: 30px;
            font-weight: 700;
        }

        .seo-timeline .timeline-grid {
            position: relative;
            display: grid;
            /* Two columns for text content, removing the center column */
            grid-template-columns: 1fr 1fr;
            gap: 50px; /* Gap between the left and right columns */
            align-items: start;
        }

        /* -- Vertical dashed line (desktop) -- */
        .seo-timeline .timeline-grid::before {
            content: "";
            position: absolute;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
            width: 4px;
            height: 100%;
            background-image: linear-gradient(
                to bottom,
                var(--accent) 0,
                var(--accent) 8px,
                transparent 8px,
                transparent 16px
            );
            background-size: 100% 24px;
            background-repeat: repeat-y;
            z-index: 2;
        }

        /* -- Timeline Items Container -- */
        .timeline-item-container {
            padding: 20px 0; /* Vertical spacing between items in the column */
        }
        .timeline-item-container:not(:last-child) {
            margin-bottom: 20px;
        }

        /* -- Content Box Styling -- */
        .timeline-item .content-box {
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            border-left: 5px solid var(--accent); /* Accent border for emphasis */
        }

        .timeline-item h3 {
            font-size: 20px;
            margin: 0 0 8px;
            color: var(--title);
        }
        .timeline-item p {
            font-size: 15px;
            line-height: 1.5;
            margin: 0;
            color: #555;
        }

        /* Desktop positioning */
        .left-col { text-align: right; }
        .left-col .timeline-item .content-box {
            border-left: none;
            border-right: 5px solid var(--accent);
        }

        /* -------------------------------------
            MOBILE LAYOUT (STACKED FULL WIDTH)
        --------------------------------------*/
        @media(max-width: 768px){

            /* Collapse to 1 column */
            .seo-timeline .timeline-grid {
                grid-template-columns: 1fr;
                gap: 10px; /* Reduced gap for mobile */
            }

            /* Move dashed line to far left */
            .seo-timeline .timeline-grid::before {
                left: 20px;
                transform: none;
            }

            /* Reset all item alignment to left */
            .left-col,
            .right-col {
                text-align: left;
            }

            /* Re-introduce the dot for each item on mobile */
            .timeline-item-container {
                padding-left: 50px; /* Space for the line and dot */
                position: relative;
            }

            .timeline-item-container::before {
                content: "";
                position: absolute;
                left: 14px;
                top: 30px; /* Vertically align the dot */
                width: 12px;
                height: 12px;
                border-radius: 50%;
                background: var(--accent);
                border: 4px solid #fff;
                box-shadow: 0 6px 14px rgba(0, 0, 0, 0.1);
                z-index: 5;
            }

            /* Ensure all content boxes are left-aligned and use the left border */
            .left-col .timeline-item .content-box {
                border-right: none;
                border-left: 5px solid var(--accent);
            }
        }
    </style>

    <section class="seo-timeline" aria-label="SEO Services Process">

        <div class="timeline-title">
            <h2>Our 6-Step SEO Domination Process</h2>
            <p style="margin:8px 0 0;color:#5f6e73;font-size:14px;">
                A complete, transparent process for sustainable growth in South Africa
            </p>
        </div>

        <div class="timeline-grid">

            <div class="left-col">
                <div class="timeline-item-container">
                    <div class="timeline-item">
                        <div class="content-box">
                            <h3>1. In-Depth Website Analysis</h3>
                            <p>We start with a thorough audit of your current online presence, identifying quick wins and long-term strategies tailored specifically to the South African search landscape.</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item-container">
                    <div class="timeline-item">
                        <div class="content-box">
                            <h3>3. Technical SEO & Speed Audit</h3>
                            <p>Our experts optimize your site's structure and performance. We focus on fixing bugs and improving loading speeds to ensure a flawless experience for every Mzansi visitor.</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item-container">
                    <div class="timeline-item">
                        <div class="content-box">
                            <h3>5. Performance Reporting & Trust</h3>
                            <p>Gain complete clarity with our transparent monthly reports. We detail the traffic, rankings, and sales generated, proving the Return on Investment (ROI) of your SEO partnership.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="right-col">
                <div class="timeline-item-container">
                    <div class="timeline-item">
                        <div class="content-box">
                            <h3>2. Content Strategy & Topical Authority</h3>
                            <p>We go beyond keywords, crafting content that answers user intent deeply and uniquely. This establishes your business as the definitive expert (authority) in your specific field.</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item-container">
                    <div class="timeline-item">
                        <div class="content-box">
                            <h3>4. Local & Entity Authority Building</h3>
                            <p>We secure your presence in local listings and map your business to Google's Knowledge Graph, essential steps for local recognition and driving foot traffic across major SA cities.</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item-container">
                    <div class="timeline-item">
                        <div class="content-box">
                            <h3>6. Accelerated Paid Growth (Optional)</h3>
                            <p>For immediate visibility, we combine organic SEO efforts with powerful paid campaigns (PPC). This approach accelerates traffic and ensures you capture leads while rankings mature.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- end of 6 line content-->








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


    <!-- start carousel section -->
    <section class="pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 text-center mb-1" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="text-dark-gray fw-700 fs-15 text-uppercase border-1 pb-5px border-bottom border-color-extra-medium-gray text-dark-gray">Join 170+ users gain benefit from Semantic SEO</span>
                </div>
            </div>
            <div class="row position-relative clients-style-08 mt-25px" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 800, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 3000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false, "pauseOnMouseEnter": false}, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 5 }, "768": { "slidesPerView": 3 }, "576": { "slidesPerView": 2 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-walmart-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-netflix-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-invision-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-yahoo-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-amazon-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-walmart-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-netflix-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-invision-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-yahoo-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-invision-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end carousel section -->



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
