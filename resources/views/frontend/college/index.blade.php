@extends('layouts.frontend.app')

<title>Advanced College Management Software in BD</title>
<meta name="description" content="Automate Your Entire Campus with Bangladesh's Most Comprehensive Digital Platform. An advanced College Management System designed to streamline every academic and administrative process.">
<link rel="canonical" href="">
<meta name="robots" content="index, follow">


@section('content')

    <!-- Start Hero  -->

    <style>
        /* Full Wide & Margin Update */
        .hero-full-wide {
            width: 100vw;
            position: relative;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
            margin-top: 30px; /* Requested 30px upper margin */
            background: #051926; /* Deep Black Brand Color */
            padding: 100px 0;
            color: white;
            overflow: hidden;
        }

        /* Strict Sky Blue & Black Button Styling */
        .btn-sky-blue {
            background-color: #00ccff !important;
            color: #051926 !important; /* Black text on sky blue button */
            border: none;
            transition: all 0.3s ease;
        }

        .btn-sky-blue:hover {
            background-color: #ffffff !important; /* White shift for clarity */
            color: #ffffff !important;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 204, 255, 0.4);
        }

        .btn-outline-sky {
            background-color: transparent;
            border: 2px solid #00ccff !important;
            color: #00ccff !important;
            transition: all 0.3s ease;
        }

        .btn-outline-sky:hover {
            background-color: #00ccff !important;
            color: #ffffff !important; /* Swaps to black text on sky blue hover */
        }

        .badge-sky {
            background-color: #00ccff !important;
            color: #051926 !important;
            font-weight: bold;
        }

        /* Responsive Font Adjustments */
        @media (max-width: 768px) {
            .display-4 { font-size: 2.5rem; }
            .hero-full-wide { padding: 60px 0; }
        }
    </style>

    <section class="hero-full-wide">
        <div class="container text-center">
            <span class="badge rounded-pill badge-sky mb-3 px-3 py-2">ALL-IN-ONE SOLUTION</span>

            <h1 class="display-4 fw-bold mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                Advanced Institution Management System
            </h1>

            <p class="lead mb-5 opacity-75 mx-auto" style="max-width: 800px;">
                Automate Your Entire Campus with <strong>Bangladesh's</strong> Most Comprehensive Digital Platform. An advanced College Management System designed to streamline every academic and administrative process. From Student Admissions to Online Fee Collection, manage everything in one secure dashboard.
            </p>

            <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                <a href="https://demo.cybersparkglobal.com/" class="btn btn-sky-blue btn-lg rounded-pill px-5 fw-bold">Request Demo</a>
                <a href="https://forms.gle/agf5KmUjSZtxNans9" class="btn btn-outline-sky btn-lg rounded-pill px-5 fw-bold">Get Started</a>
            </div>
        </div>
    </section>
    <!-- End Hero  -->




    <!-- Start first gif  -->
    <section class="management-details py-5" style="background-color: #ffffff;">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">

                <div class="col-lg-6 text-center">
                    <div class="image-wrapper p-2" style="border: 2px solid #00ccff; border-radius: 20px;">
                        <img src="http://cybersparkglobal.com/images/slider/College%20Graduating%20.gif"
                             alt="College Management System"
                             class="img-fluid rounded-4 shadow-lg"
                             style="max-height: 500px; width: 100%; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ps-lg-4">
                        <h6 class="text-uppercase fw-bold mb-3" style="color: #00ccff; letter-spacing: 2px;">Bangladesh's Best</h6>
                        <h2 class="display-6 fw-bold mb-4" style="color: #051926; font-family: 'Plus Jakarta Sans', sans-serif;">
                            College Management System for Modern Institutions
                        </h2>
                        <p class="text-muted mb-4 fs-5" style="line-height: 1.8;">

                        </p>

                        <ul class="list-unstyled mb-5">
                            <li class="d-flex align-items-start mb-3">
                                <i class="fas fa-check-circle me-3 mt-1" style="color: #00ccff; font-size: 1.2rem;"></i>
                                <div>
                                    <strong style="color: #051926;">Student & Faculty Management:</strong>
                                    <span class="text-muted"> Maintain accurate records and seamless communication between departments.</span>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="fas fa-check-circle me-3 mt-1" style="color: #00ccff; font-size: 1.2rem;"></i>
                                <div>
                                    <strong style="color: #051926;">Automated Fee & Finance:</strong>
                                    <span class="text-muted"> Simplified digital fee collection and transparent financial management.</span>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="fas fa-check-circle me-3 mt-1" style="color: #00ccff; font-size: 1.2rem;"></i>
                                <div>
                                    <strong style="color: #051926;">Attendance & Exam Management:</strong>
                                    <span class="text-muted"> Real-time digital tracking and instant result generation for all semesters.</span>
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check-circle me-3 mt-1" style="color: #00ccff; font-size: 1.2rem;"></i>
                                <div>
                                    <strong style="color: #051926;">Secure & Scalable System:</strong>
                                    <span class="text-muted"> A reliable, future-ready cloud solution that grows with your institution.</span>
                                </div>
                            </li>
                        </ul>

                        <a href="https://www.youtube.com/watch?v=nYs-HgZTYMw" class="btn btn-lg rounded-pill px-5 py-3 fw-bold shadow"
                           style="background-color: #00ccff; color: #ffffff; border: none; transition: 0.3s;">
                            Learn More About System
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        /* Hover effect for the professional sky blue button */
        .btn-lg:hover {
            background-color: #051926 !important; /* Changes to black on hover */
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 204, 255, 0.3) !important;
        }
    </style>

    <!-- end first gif  -->



    <!-- start feature section  -->
    <style>
        /* Section Background */
        #features {
            background-color: #f8f9fa; /* Light grey to make white cards pop */
        }

        /* Professional Card Styling */
        .feature-card {
            border: 1px solid rgba(0, 204, 255, 0.1) !important;
            border-radius: 20px !important;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1); /* Ultra smooth ease */
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        /* Smooth Hover Effect */
        .feature-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(5, 25, 38, 0.15);
            border-color: #00ccff !important;
        }

        /* Icon Styling - Strictly Sky Blue & Black */
        .icon-circle {
            width: 80px;
            height: 80px;
            background: #051926; /* Deep Black Background */
            color: #00ccff; /* Sky Blue Icon */
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 25px;
            font-size: 30px;
            transition: all 0.4s ease;
            border: 2px solid #00ccff;
        }

        .feature-card:hover .icon-circle {
            background: #00ccff; /* Swaps to Sky Blue on hover */
            color: #051926; /* Swaps to Black on hover */
            transform: rotateY(360deg); /* Modern spin effect */
        }

        /* Heading & Text Colors */
        .feature-card h4 {
            color: #051926; /* Brand Black */
            margin-bottom: 15px;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .feature-card p {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Title Highlights */
        .section-title {
            color: #051926;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            background: #00ccff;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }
    </style>

    <section id="features" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold section-title">Powerful Features for Modern Institutions</h2>
                <p class="text-muted mt-3">Streamline every department with our specialized modules.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card p-4 text-center bg-white">
                        <div class="icon-circle"><i class="fas fa-user-graduate"></i></div>
                        <h4 class="fw-bold">Student Portal</h4>
                        <p>Centralized access for students to track attendance, grades, and download materials.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card p-4 text-center bg-white">
                        <div class="icon-circle"><i class="fas fa-users-cog"></i></div>
                        <h4 class="fw-bold">Staff Management</h4>
                        <p>Automate payroll, manage leave requests, and track faculty performance effortlessly.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card p-4 text-center bg-white">
                        <div class="icon-circle"><i class="fas fa-credit-card"></i></div>
                        <h4 class="fw-bold">Online Fee Collection</h4>
                        <p>Securely integrate with top payment gateways for automated tuition collection.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card p-4 text-center bg-white">
                        <div class="icon-circle"><i class="fas fa-file-invoice"></i></div>
                        <h4 class="fw-bold">Examination Management</h4>
                        <p>Generate digital report cards and manage exams with automatic grading systems.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card p-4 text-center bg-white">
                        <div class="icon-circle"><i class="fas fa-book"></i></div>
                        <h4 class="fw-bold">Smart Library</h4>
                        <p>Track book issuance, returns, and digital resources with an easy-to-use interface.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card p-4 text-center bg-white">
                        <div class="icon-circle"><i class="fas fa-check-double"></i></div>
                        <h4 class="fw-bold">Biometric Integration</h4>
                        <p>Real-time attendance tracking with SMS alerts to parents for increased security.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end feature section  -->

    <section class="py-5 bg-white border-top">
        <div class="container text-center py-4">
            <h2 class="fw-bold mb-4">Ready to Transform Your College?</h2>
            <p class="mb-4">Join 500+ users already using our platform to scale their operations.</p>
            <a href="https://forms.gle/agf5KmUjSZtxNans9" class="btn btn-dark btn-lg rounded-pill px-5">Get Started Now</a>
        </div>
    </section>


    <!-- start image section  -->
    <div class="chase-container" style="display: flex; justify-content: center; align-items: center; width: 100%; height: 300px; padding-bottom: 20px; margin-top: -20px; position: relative; overflow: hidden;">
        <div id="funny-image" style="max-width: 200px; width: 90%; position: absolute; transition: all 0.3s ease; cursor: pointer; z-index: 10;">
            <img src="https://cybersparkglobal.com/images/slider/college%20management%20One%20man.gif"
                 alt="College System Demo"
                 style="width: 100%; height: auto; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,204,255,0.2); border: 2px solid #00ccff;">
        </div>
    </div>

    <script>
        const image = document.getElementById('funny-image');

        // Function to move the image to a random spot within the container
        image.addEventListener('mouseover', function() {
            const container = document.querySelector('.chase-container');

            // Calculate max boundaries so it stays inside the section
            const maxX = container.clientWidth - image.clientWidth;
            const maxY = container.clientHeight - image.clientHeight;

            // Generate random positions
            const randomX = Math.floor(Math.random() * maxX);
            const randomY = Math.floor(Math.random() * maxY);

            // Apply the new position
            image.style.left = randomX + 'px';
            image.style.top = randomY + 'px';
        });

        // Make it show a funny message if they actually manage to click it
        image.addEventListener('click', function() {
            alert("Ready For Your College System 🥳?");
        });
    </script>

    <!-- end image section  -->



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

    <a href="https://wa.me/8801685375652" target="_blank" class="whatsapp-float" aria-label="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <!-- end WhatsApp Button section -->


@endsection
