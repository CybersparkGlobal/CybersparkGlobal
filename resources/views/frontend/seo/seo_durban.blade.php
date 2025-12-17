@extends('layouts.frontend.app')

<title>Reliant SEO Services Durban | Local Experts & Affordable Pricing</title>
<meta name="description" content="Stop losing customers to competitors! Get affordable, results driven SEO services in Durban designed for local business success. Contact your expert SEO consultant today.
">
<link rel="canonical" href="https://cybersparkglobal.com/seo-durban">
<meta name="robots" content="index, follow">
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
                    <h1> <span style="color:#f7b70f">SEO Durban</span> Reliant Local Experts &<br> Affordable Pricing <span style="color:#6597ee">.</span></h1>
                    <p>
                        Dominate your local market & beat Durban competitors with specialized Durban SEO services. Just having a beautiful website is not enough, you need to be visible. If your Durban business isn't showing up on the first page of Google, you’re losing customers to competitors who are already there.
                        We help businesses like yours cut through the noise, climb the rankings, and convert local searchers into loyal customers.

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
                                 alt="google Seo services for south africa">
                        </div>

                        <!-- MAIN BIG MOCKUP IMAGE -->
                        <div class="mockup-card">
                            <img class="device"
                                 src="https://cybersparkglobal.com/images/slider/SEO%20services%20for%20South%20Africa%20.webp"
                                 alt="Seo services for south africa, seo durban image ">
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
                        <img src="https://cybersparkglobal.com/images/slider/durban%20seo%20south%20africa.webp" alt="3d durban map south africa, seo durban">
                    </div>
                </div>

                <!-- right content -->
                <div style="flex:1 1 1px; min-width:260px;">
                    <h2>So, What is Durban SEO?</h2>
                    <p class="lead">
                        Durban SEO is how we ensure your business dominates local search results across South Africa, capturing high intent Mzansi visitors who are ready to convert. Our specialized local knowledge in technical, on-page, and off-page strategies is engineered to drive superior rankings, visibility, and sales specifically for the Durban market.
                    </p>

                    <!-- search pill -->
                    <div style="display:block; text-align:center;">
                        <div class="search-pill" role="search">
                            <div class="text">Take your durban business to the next level</div>
                            <div class="mic" aria-hidden="true">🔍</div>
                        </div>
                    </div>

                    <!-- result-like boxes -->
                    <div class="result-grid">
                        <div class="result-card">
                            <h3>Analyze the Durban Digital Landscape</h3>
                            <span class="url">cybersparkglobal.com/seo-durban</span>
                            <p>Our process begins with a deep-dive analysis of your current website and local competitors in Durban. We craft a bespoke, step-by-step strategy based on this data, ensuring your site perfectly communicates its unique value and target keywords to search engines, building the foundation for Durban success.</p>
                        </div>

                        <div class="result-card">
                            <h3>On & Off Page Optimization for Durban</h3>
                            <span class="url">cybersparkglobal.com/seo-durban</span>
                            <p>The core of our Durban SEO service is aligning your website's signals with what your local KZN audience is searching for. We apply specialized on-page and off-page techniques, including local citation building, content optimization, and technical performance boosts, so you rank high when Durban customers look for your services.</p>
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
            <span>Grow Your Business With</span>
            <h2>SEO Services in Durban</h2>
        </div>

        <div class="how-grid">

            <!-- card 1 -->
            <div class="how-card">
                <div class="icon">📍</div>
                <h3>Local SEO For Durban</h3>
                <p>We ensure Google officially maps your business as a trusted, authoritative entity within its Knowledge Graph, confirming local authority. This boosts visibility for critical searches and ensures your Durban storefront or service area is always found by nearby customers (Mzansi).</p>
            </div>

            <!-- card 2 -->
            <div class="how-card">
                <div class="icon">💡</div>
                <h3>Information Authority</h3>
                <p>We go beyond basic content, upgrading your pages to provide unique, in-depth value that your local competitors overlook. This content strategy helps your pages rank higher by demonstrating superior, authentic knowledge relevant to the South African market and local Durban customer needs.</p>
            </div>

            <!-- card 3 -->
            <div class="how-card">
                <div class="icon">⚡</div>
                <h3>Technical SEO, Speed</h3>
                <p>We optimize the technical performance of your site, guaranteeing rapid loading times, flawless mobile responsiveness, and stability on all networks. A superior user experience is non-negotiable for modern ranking success in South Africa, keeping Durban customers engaged and preventing bounce.</p>
            </div>

            <!-- card 4 -->
            <div class="how-card">
                <div class="icon">👑</div>
                <h3>Holistic Strategy, Dominance</h3>
                <p>We build interconnected content clusters around your core services, establishing your website as the definitive, unchallengeable expert authority in your industry for the entire South African market. This broad strategy protects your rankings and dominates all long-tail searches in Durban.</p>
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
            <h2 class="section-title"><b>Talk With Your Own SEO Consultant in Durban</b></h2>

            <div class="team-grid">

                <div class="team-member-card">
                    <img src="{{ asset('images/slider/Jubair Khan Ariyan@web developer and SEO Expert .jpg') }}" alt="Web developer and seo specialist" class="member-image">
                    <h3 class="member-name">Ar jubair Khan</h3>
                    <p class="member-title">SEO Specialist & Web Developer</p>
                    <p class="member-bio">Web Developer and SEO Specialist, always dedicated and available to provide immediate support. He specializes in web development, Technical SEO, and expert SEO analysis, specifically examining competitor performance and customer behavior for the Durban market.</p>
                    <a href="https://www.facebook.com/jubair.khan.ariyan/" target="_blank" class="facebook-link" aria-label="Ar jubair Khan on Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>

                <div class="team-member-card">
                    <img src="{{ asset('images/slider/Fahim islam.JPG') }}" alt="Fahim islam" class="member-image">
                    <h3 class="member-name">Fahim Islam</h3>
                    <p class="member-title">SEO Expert & Content Writer</p>
                    <p class="member-bio">Dedicated SEO Expert and high-quality Content Writer, always available to provide prompt support. He specializes in content analysis, expertly examining competitor strategies and customer needs specifically for the Durban market.</p>
                    <a href="https://www.facebook.com/fahimislam.nipun" target="_blank" class="facebook-link" aria-label="Fahim Islam on Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>

                <div class="team-member-card">
                    <img src="{{ asset('images/slider/Aktarozzaman Shohag.jpg') }}" alt="Aktarozzaman Shohag" class="member-image">
                    <h3 class="member-name">Md Aktarozzaman</h3>
                    <p class="member-title">Senior Web and Software Developer</p>
                    <p class="member-bio">Senior Web and Software Developer who is always dedicated and available for prompt support. He specializes in web development, bug fixing, and building high-speed, healthy websites, alongside creating specialized support software for clients in Durban.</p>
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
            <h2>Our 6-Step Local SEO Services for Durban</h2>
            <p style="margin:8px 0 0;color:#5f6e73;font-size:14px;">
                A complete, transparent process for sustainable growth in Durban
            </p>
        </div>

        <div class="timeline-grid">

            <div class="left-col">
                <div class="timeline-item-container">
                    <div class="timeline-item">
                        <div class="content-box">
                            <h3>1. Comprehensive Competitor Analysis</h3>
                            <p>We dive deep into the Durban digital landscape to dissect exactly what your competitors are doing. By identifying gaps in the local market, we build a strategic roadmap designed to position your brand ahead of other players in KZN.</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item-container">
                    <div class="timeline-item">
                        <div class="content-box">
                            <h3>3. Geo-Targeted Keyword Integration</h3>
                            <p>We move beyond generic terms by targeting high-intent keywords specific to your area. Whether you are targeting clients in Umhlanga, Westville, or Durban North, our content strategy connects you directly with the people actively looking for you.</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item-container">
                    <div class="timeline-item">
                        <div class="content-box">
                            <h3>5. Trust-Building Review Strategy</h3>
                            <p>In a close-knit community like Durban, reputation is everything. We help you implement systems to generate authentic 5-star reviews. This social proof not only boosts your local rankings but is the deciding factor for potential clients comparing you to others.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="right-col">
                <div class="timeline-item-container">
                    <div class="timeline-item">
                        <div class="content-box">
                            <h3>2. Google Business Profile Enhancement</h3>
                            <p>Your digital storefront matters. We fully optimize your Google profile with accurate details and geo-tagged updates, ensuring you appear prominently in the "Map Pack" when customers search for services in Durban and surrounding suburbs.</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item-container">
                    <div class="timeline-item">
                        <div class="content-box">
                            <h3>4. Local Authority Link Building</h3>
                            <p>Authority is built on trust. We secure citations on reputable South African directories and local portals. This signals to search engines that your business is a verified, trusted entity within the KwaZulu-Natal economy, boosting your domain power.</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item-container">
                    <div class="timeline-item">
                        <div class="content-box">
                            <h3>6. Performance Analytics & Insights</h3>
                            <p>Transparency is our priority. You receive detailed monthly reports tracking your local rankings, traffic, and leads. We show you clear data on how our strategy is driving real growth and ROI for your business in the Durban market.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- end of 6 line content-->



    <!-- start of packages content-->

    <style>
        .seo-benefits-section {
            --accent: #17c0d6;
            --dark-bg: #0f2435;
            --panel:#39464e;
            --card:#ffffff;
            --muted:#9aa7ad;
            max-width:1300px;
            margin:0 auto;
            padding:60px 20px;
            font-family: "Plus Jakarta Sans", sans-serif;
        }

        .seo-benefits-section .row {
            display:grid;
            grid-template-columns: 1fr 480px;
            gap:40px;
            align-items:stretch;
        }

        /* LEFT BOX WITH DARK BACKGROUND */
        .seo-benefits-section .left {
            background:var(--dark-bg);
            padding:50px 40px;
            border-radius:6px;
            display:flex;
            align-items:center;
            justify-content:flex-start;
        }

        .seo-benefits-section .left .inner {
            max-width:100%;
            width: 100%;
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
            margin-top:20px;
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

        /* RIGHT PANEL (UNCHANGED) */
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


        /* ------------------------------------------------
           NEW STYLES FOR RESPONSIVE PACKAGES TABLE
        ------------------------------------------------ */
        .packages-table-container {
            width:100%;
            margin-bottom:15px;
        }
        .packages-table {
            width:100%;
            border-collapse:collapse;
            font-size:14px;
            color:#fff;
        }
        .packages-table th,
        .packages-table td {
            padding:10px 12px;
            text-align:left;
            border-bottom:1px solid rgba(255,255,255,0.1);
            vertical-align:top;
        }
        .packages-table th {
            background:rgba(0,0,0,0.2);
            font-weight:700;
            color:var(--accent);
        }
        .packages-table td {
            background:rgba(0,0,0,0.1);
        }
        .packages-table .package-name {
            font-weight:700;
            color:var(--accent);
        }

        .price-note {
            font-size:15px;
            color:#a7b6c5;
            margin-top:10px;
            display:block;
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

        /* STACKED TABLE STYLES FOR MOBILE/TABLET */
        @media (max-width: 650px) {
            /* CTA Button Optimization */
            .seo-benefits-section .cta {
                font-size: 14px; /* Slightly smaller text */
                padding: 10px 15px; /* Smaller padding */
                display: block; /* Make button full width on small screen */
                text-align: center;
            }
            .seo-benefits-section .cta .dot {
                width: 28px;
                height: 28px;
                font-size: 18px;
                display: none; /* Hide arrow on mobile for cleaner look */
            }

            /* Table Stacking Logic */
            .packages-table thead {
                display: none;
            }
            .packages-table, .packages-table tbody, .packages-table tr, .packages-table td {
                display: block;
                width: 100%;
            }
            .packages-table tr {
                margin-bottom: 10px;
                border: 1px solid rgba(255,255,255,0.2);
                border-radius: 4px;
                padding-bottom: 5px;
            }
            .packages-table td {
                text-align: right;
                padding-left: 50%;
                position: relative;
                border-bottom: 1px solid rgba(255,255,255,0.1);
            }
            .packages-table td:last-child {
                border-bottom: 0;
            }
            .packages-table td:before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                text-align: left;
                font-weight: 700;
                color: var(--accent);
            }
        }
    </style>

    <section class="seo-benefits-section">
        <div class="row">
            <div class="left">
                <div class="inner">
                    <div class="eyebrow">PACKAGES FOR DURBAN</div>

                    <h2 class="headline">
                        Affordable<br> SEO Services Packages<br> in Durban
                        <span class="accent">.</span>
                    </h2>

                    <div class="packages-table-container">
                        <table class="packages-table">
                            <thead>
                            <tr>
                                <th>Business Size</th>
                                <th>SEO Packages</th>
                                <th>Monthly SEO Payment</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="package-name" data-label="Business Size">Small Businesses</td>
                                <td data-label="Website & SEO Scope">3 Months SEO</td>
                                <td data-label="Monthly SEO Cost">$100</td>
                            </tr>
                            <tr>
                                <td class="package-name" data-label="Business Size">Medium Businesses</td>
                                <td data-label="Website & SEO Scope">6 Months SEO</td>
                                <td data-label="Monthly SEO Cost">$150</td>
                            </tr>
                            <tr>
                                <td class="package-name" data-label="Business Size">E-commerce Startup</td>
                                <td data-label="Website & SEO Scope">6 Months SEO</td>
                                <td data-label="Monthly SEO Cost">$200</td>
                            </tr>
                            <tr>
                                <td class="package-name" data-label="Business Size">Medium E-commerce</td>
                                <td data-label="Website & SEO Scope">6 Months SEO</td>
                                <td data-label="Monthly SEO Cost">$300</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <span class="price-note">
                Note: The actual price cost is dependent on your exact requirements and the final scope of work.
            </span>
                    <a class="cta" href="https://www.facebook.com/jubair.khan.ariyan/">
                        GET A WEB DESIGN QUOTE TODAY
                        <span class="dot">→</span>
                    </a>
                </div>
            </div>

            <div class="right-panel">
                <h3 class="headline headline-small"> Durban SEO Benefits </h3>
                <div class="cards">
                    <div class="card">
                        <div class="icon">🏆</div>
                        <div>
                            <h4>Dominate the KZN Rankings</h4>
                            <p>Research confirms that over 85% of all local business traffic in South Africa originates from Google searches. Ranking higher is the single biggest factor in being found online by customers in Umhlanga, Westville, and greater Durban.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">🎯</div>
                        <div>
                            <h4>Targeted & Effective Strategy</h4>
                            <p>SEO is the most strategic tool that allows you to directly target the exact keywords and location phrases your potential Durban customers use, whether they're searching for a service in the CBD or a product in Pinetown.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">📈</div>
                        <div>
                            <h4>Attract Qualified Durban Visitors</h4>
                            <p>Implementing smart, search-friendly web design and local SEO practices ensures you attract a steady stream of highly qualified visitors who are actively looking to buy or engage with a local provider right now in the eThekwini region.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">🗺️</div>
                        <div>
                            <h4>Conquer the Google Map Pack</h4>
                            <p>Almost all user journeys for local services begin with a major search engine like Google. Being visible in the crucial "Map Pack" is mandatory for consistent growth and securing foot traffic or service calls in your local Durban service area.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">🚀</div>
                        <div>
                            <h4>Consistent Massive Search Results</h4>
                            <p>With billions of searches performed daily globally, even a small improvement in your local Durban ranking offers a huge, continuous opportunity to capture new customers and rapidly expand your market share across the region.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">🥇</div>
                        <div>
                            <h4>Build Durban Consumer Trust</h4>
                            <p>The higher your website ranks organically for local terms, the more authoritative and trustworthy your brand appears to potential Durban consumers. High, consistent rankings signal expertise, building essential consumer confidence in your business.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end of packages content-->




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
                    Our digital and Durban business specialists are here to guide you. We’ll help you find the right direction and get things sorted.
                </p>

                <a href="https://www.facebook.com/jubair.khan.ariyan/" class="btn">
                    LET’S HAVE A TALK ABOUT YOUR PROJECT
                    <span class="arrow">→</span>
                </a>
            </div>

            <!-- RIGHT  IMAGE -->
            <div>
                <img class="help-img" src="https://cybersparkglobal.com/images/slider/south%20africa%203d%20seo%20map.webp" alt="Best South African SEO map and Service areas">
            </div>

        </div>
    </section>

    <!-- END: Last section -->


    <!-- start WhatsApp Button section -->

    <style>
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366; /* Standard WhatsApp Green */
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease, transform 0.3s ease;
            text-decoration: none;
        }

        .whatsapp-float:hover {
            background-color: #25d366;
            transform: scale(1.08);
        }

        /* Mobile Responsiveness */
        @media (max-width: 600px) {
            .whatsapp-float {
                width: 50px;
                height: 50px;
                bottom: 20px;
                right: 20px;
                font-size: 24px; /* Smaller icon size for mobile */
            }
        }
    </style>

    <a href="https://wa.me/8801332675586" target="_blank" class="whatsapp-float" aria-label="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <!-- end WhatsApp Button section -->





@endsection
