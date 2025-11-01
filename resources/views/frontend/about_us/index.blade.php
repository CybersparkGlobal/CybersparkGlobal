@extends('layouts.frontend.app')
@section('content')


    <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0" data-parallax-background-ratio="0.5" style="background-image: url({{ asset('https://cybersparkglobal.com/images/slider/about%20us%20banner%20image%20helal%20ahhmed.jpg')}})">
        <div class="opacity-extra-medium bg-blue-whale"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-8 position-relative text-center page-title-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">About us</h1>
                </div>
                <div class="down-section text-center" data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <a href="#down-section" class="section-link">
                        <div class="text-white">
                            <i class="feather icon-feather-chevron-down icon-very-medium"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section id="down-section" class="border-bottom border-color-extra-medium-gray">
        <div class="container overlap-gap-section">
            <div class="row align-items-end justify-content-center mb-5 md-mb-40px text-center text-md-start">
                <div class="col-xl-5 col-lg-6 col-md-10 md-mb-20px text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">About company</span>
                    <h3 class="text-dark-gray fw-700 mb-0 ls-minus-1px">We are your Business's Trust and Ally.<br> Ultimate contributor </h3>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-10 offset-xl-1 text-center text-lg-start last-paragraph-no-margin">
                    <p class="w-90 xl-w-100" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> Cyberspark Global is an IT leader specializing in app and website development, helping businesses grow online. We provide customized digital strategies across industries like restaurant POS, pharmacy, optical services and school-university management, <span class="fw-600 text-dark-gray text-decoration-line-bottom">delivering innovative and cost effective solutions for your business success.</span></p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col custom-icon-with-text-style-02">
                    <div class="feature-box p-6 last-paragraph-no-margin overflow-hidden md-mb-20px">
                        <div class="feature-box-icon">
                            <img class="custom-image-icon mb-20px" src="https://via.placeholder.com/60x60" alt="" />
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block fs-19 fw-700 text-dark-gray mb-5px">Trusted company</span>
                            <p>We achieve trust by behalf your satisfaction.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col custom-icon-with-text-style-02">
                    <div class="feature-box p-6 last-paragraph-no-margin overflow-hidden md-mb-20px">
                        <div class="feature-box-icon">
                            <img class="custom-image-icon mb-20px" src="https://via.placeholder.com/60x60" alt="" />
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block fs-19 fw-700 text-dark-gray mb-5px">Professional work</span>
                            <p>Top level strategy, advanced research is everything.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col custom-icon-with-text-style-02">
                    <div class="feature-box p-6 last-paragraph-no-margin overflow-hidden xs-mb-20px">
                        <div class="feature-box-icon">
                            <img class="custom-image-icon mb-20px" src="https://via.placeholder.com/60x60" alt="" />
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block fs-19 fw-700 text-dark-gray mb-5px">Award winning</span>
                            <p>We believe in solution and we are the solution.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col custom-icon-with-text-style-02">
                    <div class="feature-box p-6 last-paragraph-no-margin overflow-hidden">
                        <div class="feature-box-icon">
                            <img class="custom-image-icon mb-20px" src="https://via.placeholder.com/60x60" alt="" />
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block fs-19 fw-700 text-dark-gray mb-5px">Help any time</span>
                            <p>We never fail for support for your business.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="py-0 sm-pt-50px" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
        <div class="container overlap-section">
            <div class="row justify-content-center g-0">
                <div class="col-auto text-center last-paragraph-no-margin icon-with-text-style-08 pt-20px pb-20px ps-8 pe-8 md-ps-30px md-pe-30px bg-white border border-color-extra-medium-gray box-shadow-medium-bottom border-radius-100px xs-border-radius-10px">
                    <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                        <div class="feature-box-icon me-10px">
                            <i class="bi bi-chat-text icon-extra-medium text-base-color"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin text-dark-gray text-uppercase fs-15 fw-700 ls-05px">
                            Let's make something great work together. <a href="https://cybersparkglobal.com/contact_us" class="text-base-color text-decoration-line-bottom-medium border-1">Got a project in mind?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="position-relative overflow-hidden">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-3">
                <div class="col-xl-5 col-lg-6 md-mb-14 sm-mb-18 xs-mb-23 position-relative" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="w-75 sm-w-80" data-animation-delay="200" data-shadow-animation="true" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img src="{{ asset('images/slider/Helal ahmed and Farid ahmed image.jpg') }}" alt="" class="border-radius-6px w-100">
                        <div class="position-absolute top-30px z-index-8 left-minus-90px lg-left-minus-25px sm-left-minus-0px lg-w-30">
                            <img src="{{ asset('images/demo-corporate-02.png') }}" alt="about us page image" />
                        </div>
                    </div>
                    <div class="w-55 overflow-hidden position-absolute right-15px xs-w-55 bottom-minus-50px" data-shadow-animation="true" data-animation-delay="100" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                        <img src="{{ asset('/images/slider/about us page  set1.jpg') }}" alt="inside image of cyber spark office's meeting room " class="border-radius-6px box-shadow-quadruple-large w-100" />
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 150, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="swiper position-relative magic-cursor" data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "effect": "slide" }'>
                        <div class="swiper-wrapper mb-10px">
                            <!-- start text slider item -->
                            <div class="swiper-slide">
                                <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Company mission</span>
                                <h3 class="text-dark-gray fw-700 ls-minus-1px mb-20px">We help to business growth and solution.</h3>
                                <p class="w-95 xl-w-100">We offer customized solutions that fuel business growth and open up new possibilities. With our expertise in web and app development, along with effective SEO strategies, we help your business succeed and reach its full potential in an ever-changing digital world.</p>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide">
                                <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Company vision</span>
                                <h3 class="text-dark-gray fw-700 ls-minus-1px mb-20px">A business plan and performance ideas.</h3>
                                <p class="w-95 xl-w-100">Creating a strategic business plan with performance driven ideas is essential for success in web and app development, enhanced by effective SEO solutions. We blend innovative technology with SEO tactics to boost your brand and accelerate growth.</p>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide">
                                <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Company value</span>
                                <h3 class="text-dark-gray fw-700 ls-minus-1px mb-20px">Simplify and quicken business tasks.</h3>
                                <p class="w-95 xl-w-100">We develop software solutions that simplify business tasks, making processes quicker and more efficient. Our tools help businesses speed up operations, enhancing productivity and saving time.</p>
                            </div>
                            <!-- end text slider item -->
                        </div>
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <!-- start slider navigation -->
                            <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 border border-color-extra-medium-gray bg-white"><i class="bi bi-arrow-left-short icon-very-medium text-dark-gray"></i></div>
                            <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 border border-color-extra-medium-gray bg-white"><i class="bi bi-arrow-right-short icon-very-medium text-dark-gray"></i></div>
                            <!-- end slider navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('/images/demo-corporate-about-bg-01.png') }}" class="position-absolute bottom-minus-50px right-minus-50px z-index-minus-1" data-bottom-top="transform: rotate(0deg) translateY(0)" data-top-bottom="transform:rotate(-15deg) translateY(0)" alt=""/>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-gradient-quartz-white border-radius-6px">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-5 col-md-7 col-lg-6 col-sm-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px">Committed staff are ready to help you</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start team member item -->

                <div class="col team-style-08 border-radius-6px md-mb-30px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-4px">
                        <img src="{{ asset('/images/slider/Farid Ahmed @CEO.jpg') }}" alt="farid ahmed image" />
                        <figcaption class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block">Farid Ahmed</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block">CEO</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.facebook.com/thefaridahmed" target="_blank" class="text-dark-gray bg-white"><i class="fa-brands fa-facebook icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- test -->
                <div class="col team-style-08 border-radius-6px md-mb-30px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-4px">
                        <img src="{{ asset('/images/slider/Helal Ahmed@Co-Founder CEO.jpg') }}" alt="helal ahmed image" />
                        <figcaption class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block">Helal Ahmed</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block"> Co-Founder </span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.facebook.com/Helalfb" target="_blank" class="text-dark-gray bg-white"><i class="fa-brands fa-facebook icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!--test end-->

                <!-- test -->
                <div  class="col team-style-08 border-radius-6px md-mb-30px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-4px">
                        <img src="{{ asset('/images/slider/Aktarozzaman Shohag.jpg') }}" alt="aktarozzaman image" />
                        <figcaption class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block">Md Aktarozzaman</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block"> Senior Web and Software Developer</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.facebook.com/ar.aktr" target="_blank" class="text-dark-gray bg-white"><i class="fa-brands fa-facebook icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!--test end-->


                <div class="col team-style-08 border-radius-6px md-mb-30px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-4px">
                        <img src="{{ asset('/images/slider/Prosen Mondal.jpg') }}" alt="prosen mondal image" />
                        <figcaption class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block">Prosen Mondal</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block">  Web and Software Developer</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.facebook.com/prosen.ray.242340" target="_blank" class="text-dark-gray bg-white"><i class="fa-brands fa-facebook icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                  <!--test-->
                <div style="padding: 12px" class="col team-style-08 border-radius-6px md-mb-30px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-4px">
                        <img src="{{ asset('/images/slider/Jubair Khan Ariyan@web developer and SEO Expert .jpg') }}" alt="Ar jubair khan image live in Khulna" />
                        <figcaption class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block">Ar jubair Khan</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block"> SEO Specialist and Web Developer</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.facebook.com/jubair.khan.ariyan/" target="_blank" class="text-dark-gray bg-white"><i class="fa-brands fa-facebook icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!--text end-->

                <!--test-->
                <div style="padding: 12px" class="col team-style-08 border-radius-6px md-mb-30px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-4px">
                        <img src="{{ asset('/images/slider/Fahim islam.JPG') }}" alt="fahim islam image" />
                        <figcaption class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block">Fahim Islam</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block">Content Writer SEO Expert</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.facebook.com/fahimislam.nipun" target="_blank" class="text-dark-gray bg-white"><i class="fa-brands fa-facebook icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!--text end-->

                <!--test-->
                <div style="padding: 12px" class="col team-style-08 border-radius-6px md-mb-30px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-4px">
                        <img src="{{ asset('/images/slider/T Jubear Araf @ Social Media Manager and Marketing Specialist.jpg') }}" alt="T Jubear Araf image" />
                        <figcaption class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block">T Jubear Araf</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block">Social Media Manager and Marketing Specialist</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.facebook.com/tjubeararaf" target="_blank" class="text-dark-gray bg-white"><i class="fa-brands fa-facebook icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!--text end-->


                <!--test-->
                <div style="padding: 12px" class="col team-style-08 border-radius-6px md-mb-30px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-4px">
                        <img src="{{ asset('/images/slider/Rubayet Raja UI UX Designer.jpg') }}" alt="Rubayet raja image" />
                        <figcaption class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block">Rubayet Raja</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block">Senior UI/UX Designer</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.facebook.com/rh.raja.35" target="_blank" class="text-dark-gray bg-white"><i class="fa-brands fa-facebook icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!--text end-->



                <!-- end team member item -->

            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 text-center mb-1" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="text-dark-gray fw-700 fs-15 text-uppercase border-1 pb-5px border-bottom border-color-extra-medium-gray text-dark-gray">Join 2,000+ users using our software</span>
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
@endsection
