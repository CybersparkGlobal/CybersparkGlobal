@extends('layouts.frontend.app')
@section('content')
    <!-- start page title -->
    <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0" data-parallax-background-ratio="0.5" style="background-image: url({{ asset('https://cybersparkglobal.com/images/slider/testimonial%20banner.jpg') }})">
        <div class="opacity-extra-medium bg-blue-whale"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-8 position-relative text-center page-title-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">Customer stories</h1>
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
    <section id="down-section" class="position-relative">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 md-mb-60px" data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <figure class="position-relative m-0 text-center text-md-center">
                        <img src="{{ asset('/images/demo-corporate-customer-stories-01.jpg') }}" alt="">
                        <figcaption class="position-absolute bg-white right-0px left-0px m-auto border-radius-6px p-25px xs-p-10px box-shadow-double-large bottom-minus-20px w-350px xs-w-290px text-start last-paragraph-no-margin">
                            <div class="row align-items-center justify-content-center text-dark-gray">
                                <div class="col-4 col-sm-5 pe-25px text-end border-end border-color-extra-medium-gray xs-pe-15px">
                                    <h2 class="mb-0 fs-50 fw-800 ls-minus-4px lh-40">4.9</h2>
                                </div>
                                <div class="col-7 ps-25px text-star last-paragraph-no-margin xs-ps-15px">
                                    <div class="review-star-icon fs-20 lh-22 d-inline-block text-gradient-orange-sky-blue xs-fs-16">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <span class="fs-16 lh-22 fw-600 d-block">Best rated agency</span>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-6 ps-6 md-ps-15px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <img src="images/demo-corporate-services-06.png" alt="" class="mb-20px">
                    <h3 class="text-dark-gray fw-700 ls-minus-1px w-85 lg-w-100">Exceeded all my expectations.</h3>
                    <p class="w-85 lg-w-100 mb-30px sm-mb-25px">We strive to develop real-world web solutions that are ideal for small to large projects with bespoke project requirements. We create compelling web designs, which are the right-fit for your target.</p>
                    <div class="icon-with-text-style-08">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon feature-box-icon-rounded w-75px h-75px rounded-circle bg-light-red me-20px">
                                <i class="fa-brands fa-twitter d-inline-block icon-very-medium text-base-color"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-inline-block fw-700 text-dark-gray fs-19">Alexander Johnson</span>
                                <span class="d-block fs-15 lh-24">Themezaa, Member</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row position-relative clients-style-08 mt-8 sm-mt-11" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 800, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 3000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false, "pauseOnMouseEnter": false}, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 5 }, "768": { "slidesPerView": 3 }, "576": { "slidesPerView": 2 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/logo-walmart-dark-blue.svg') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/logo-netflix-dark-blue.svg') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/logo-invision-dark-blue.svg') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/logo-yahoo-dark-blue.svg') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/logo-amazon-dark-blue.svg') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/logo-walmart-dark-blue.svg') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/logo-netflix-dark-blue.svg') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/logo-invision-dark-blue.svg') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/logo-yahoo-dark-blue.svg') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/logo-amazon-dark-blue.svg') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-gradient-quartz-white border-radius-6px lg-border-radius-0px">
        <div class="container background-no-repeat background-position-center-bottom" style="background-image: url('https://via.placeholder.com/1126x630')">
            <div class="row justify-content-center align-items-center mb-2" data-anime='{ "el": "childs", "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-4 col-lg-2 col-sm-3 xs-mb-25px">
                    <div class="swiper rounded-circle" data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 1000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "fade" }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="border-radius-50 w-100" src="{{ asset('images/demo-corporate-services-07.jpg') }}" alt=""/>
                            </div>
                            <div class="swiper-slide">
                                <img class="border-radius-50 w-100" src="{{asset('images/demo-corporate-services-09.jpg')}}" alt=""/>
                            </div>
                            <div class="swiper-slide">
                                <img class="border-radius-50 w-100" src="{{ asset('images/demo-corporate-services-07.jpg') }}" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-7 text-center text-sm-start">
                    <h5 class="alt-font text-dark-gray lh-40 fw-500 ls-minus-1px mb-0 ms-10px lg-ms-0" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 500, "staggervalue": 300, "easing": "easeOutQuad" }'>Trusted by <span class="fw-800 text-base-color text-decoration-line-bottom-medium">500+</span> happy customers are using our softwares</h5>
                </div>
                <div class="col-xl-2 offset-xl-2 col-lg-3 offset-lg-1 col-sm-4 md-mt-35px text-center text-lg-start">
                    <h2 class="alt-font text-dark-gray fw-800 ls-minus-3px mb-5px" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "delay": 300, "staggervalue": 100, "easing": "easeOutQuad" }'>10+</h2>
                    <span class="text-dark-gray fw-500 lh-24 d-inline-block w-90 lg-w-80 sm-w-100" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "delay": 400, "staggervalue": 100, "easing": "easeOutQuad" }'>Creative team to care for projects.</span>
                </div>
                <div class="col-lg-2 col-sm-4 ps-40px md-ps-15px md-mt-35px text-center text-lg-start">
                    <h2 class="alt-font text-dark-gray fw-800 ls-minus-3px mb-5px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>4.9</h2>
                    <div class="review-star-icon fs-17 lh-20 d-block" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "delay": 200, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <span class="text-dark-gray fw-500" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "delay": 300, "staggervalue": 100, "easing": "easeOutQuad" }'>1,940 Rating</span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="swiper slider-one-slide magic-cursor dark" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 25, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 3 }, "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper pt-30px pb-30px">
                            <!-- start review item -->
                            <div class="swiper-slide review-style-07">
                                <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                    <div class="mb-20px">
                                        <img src="{{ asset('/images/avtar-24.jpg') }}" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                        <div class="d-inline-block align-middle">
                                            <div class="text-dark-gray fs-18 fw-600">Alex sanchez</div>
                                            <div class="lh-24 fs-16">Google design</div>
                                        </div>
                                    </div>
                                    <p class="mb-15px md-w-85 sm-w-100">Excellent content and assignments that build on your knowledge, reinforce and then expand.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-block me-auto">
                                            <div class="text-dark-gray fw-700 float-start fs-15 me-10px">4.5</div>
                                            <div class="review-star-icon float-start">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                                            </div>
                                        </div>
                                        <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">30 Nov</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide review-style-07">
                                <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                    <div class="mb-20px">
                                        <img src="{{ asset('/images/avtar-27.jpg') }}" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                        <div class="d-inline-block align-middle">
                                            <div class="text-dark-gray fs-18 fw-600">Matthew taylor</div>
                                            <div class="lh-24 fs-16">Microsoft word</div>
                                        </div>
                                    </div>
                                    <p class="mb-15px md-w-85 sm-w-100">I liked that the course included step-by-step exercises and tutorials plus assignments.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-block me-auto">
                                            <div class="text-dark-gray fw-700 float-start fs-15 me-10px">5.0</div>
                                            <div class="review-star-icon float-start">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">28 Nov</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide review-style-07">
                                <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                    <div class="mb-20px">
                                        <img src="{{ asset('/images/avtar-24.jpg') }}" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                        <div class="d-inline-block align-middle">
                                            <div class="text-dark-gray fs-18 fw-600">Leonel mooney</div>
                                            <div class="lh-24 fs-16">Apple store</div>
                                        </div>
                                    </div>
                                    <p class="mb-15px md-w-85 sm-w-100">I have taken many online courses. None have offered teleconference as part of the course.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-block me-auto">
                                            <div class="text-dark-gray fw-700 float-start fs-15 me-10px">5.0</div>
                                            <div class="review-star-icon float-start">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">26 Nov</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide review-style-07">
                                <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                    <div class="mb-20px">
                                        <img src="{{ asset('/images/avtar-25.jpg') }}" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                        <div class="d-inline-block align-middle">
                                            <div class="text-dark-gray fs-18 fw-600">Jacob kalling</div>
                                            <div class="lh-24 fs-16">System design</div>
                                        </div>
                                    </div>
                                    <p class="mb-15px md-w-85 sm-w-100">Got almost immediate responses when I turned in assignments and she had wonderful feedback!</p>
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-block me-auto">
                                            <div class="text-dark-gray fw-700 float-start fs-15 me-10px">5.0</div>
                                            <div class="review-star-icon float-start">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">20 Nov</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide review-style-07">
                                <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                    <div class="mb-20px">
                                        <img src="{{ asset('/images/avtar-24.jpg') }}" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                        <div class="d-inline-block align-middle">
                                            <div class="text-dark-gray fs-18 fw-600">Matthew taylor</div>
                                            <div class="lh-24 fs-16">Microsoft word</div>
                                        </div>
                                    </div>
                                    <p class="mb-15px md-w-85 sm-w-100">I liked that the course included step-by-step exercises and tutorials plus assignments.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-block me-auto">
                                            <div class="text-dark-gray fw-700 float-start fs-15 me-10px">5.0</div>
                                            <div class="review-star-icon float-start">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">28 Nov</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide review-style-07">
                                <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                    <div class="mb-20px">
                                        <img src="{{ asset('/images/avtar-29.jpg') }}" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                        <div class="d-inline-block align-middle">
                                            <div class="text-dark-gray fs-18 fw-600">Leonel mooney</div>
                                            <div class="lh-24 fs-16">Apple store</div>
                                        </div>
                                    </div>
                                    <p class="mb-15px md-w-85 sm-w-100">I have taken many online courses. None have offered teleconference as part of the course.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-block me-auto">
                                            <div class="text-dark-gray fw-700 float-start fs-15 me-10px">5.0</div>
                                            <div class="review-star-icon float-start">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">26 Nov</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end review item -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="fs-24 fw-500 text-dark-gray d-inline-block align-middle ls-minus-1px me-20px lg-m-10px lg-mt-0">More than <span class="fw-700 text-decoration-line-bottom-medium">400+</span> happy customers reviews on</div>
                    <a href="https://www.trustpilot.com/" target="_blank"><img src="https://via.placeholder.com/416x44" class="d-inline-block align-middle" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
