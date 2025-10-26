@extends('layouts.frontend.app')
@section('content')
   @include('frontend.slider')
    <!-- start section -->
    <section class="p-0 border-bottom border-color-extra-medium-gray">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 justify-content-center"
                 data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 500, "easing": "easeOutQuad" }'>
                <!-- start content box item -->
                <div
                    class="col pt-35px pb-35px md-pb-0 text-dark-gray border-end border-color-extra-medium-gray sm-border-end-0">
                    <div
                        class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center text-lg-start">
                        <div class="flex-shrink-0 me-15px md-me-0">
                            <h2 class="mb-0 fw-800">99<sup class="fs-24">%</sup></h2>
                        </div>
                        <div>
                            <span class="lh-24 fw-600 d-block">Track and analyze <br />business reports.</span>
                        </div>
                    </div>
                </div>
                <!-- end content box item -->
                <!-- start content box item -->
                <div
                    class="col pt-35px pb-35px md-pb-0 text-dark-gray border-end border-color-extra-medium-gray sm-border-end-0">
                    <div
                        class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center text-lg-start">
                        <div class="flex-shrink-0 me-15px md-me-0">
                            <h2 class="mb-0 fw-800 ls-minus-3px">4.98</h2>
                        </div>
                        <div>
                            <div class="review-star-icon fs-20 d-inline-block text-gradient-orange-sky-blue">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <span class="lh-24 fw-600 d-block">Best rated agency</span>
                        </div>
                    </div>
                </div>
                <!-- end content box item -->
                <!-- start content box item -->
                <div class="col pt-35px pb-35px text-dark-gray">
                    <div
                        class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center text-lg-start">
                        <div class="flex-shrink-0 me-15px md-me-0">
                            <h2 class="mb-0 fw-800">98<sup class="fs-24">%</sup></h2>
                        </div>
                        <div>
                            <span class="lh-24 fw-600 d-block">Genuine repeated <br />happy customers.</span>
                        </div>
                    </div>
                </div>
                <!-- end content box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-6 sm-pb-9">
                <div class="col-lg-6 col-md-9 position-relative md-mb-15 text-center text-lg-start"
                     data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 15, "easing": "easeOutQuad" }'>
                    <div class="absolute-middle-center z-index-9 counter-style-02 text-center">
                        <span class="fs-160 fw-800 text-dark-gray ls-minus-10px xs-ls-minus-5px position-relative lg-fs-130 xs-fs-75">28<sub class="align-top fs-80 lg-fs-70 text-dark-gray position-relative top-minus-3px">+</sub></span>
                        <span class="d-block mx-auto fs-20 fw-500 lh-26 w-70 text-center text-dark-gray xs-w-100">Years working experience</span>
                    </div>
                    <img src="{{ asset('images/demo-corporate-03.png') }}" alt="">
                    <img src="https://craftohtml.themezaa.com/images/demo-corporate-01.png" class="position-absolute top-50 left-minus-100px lg-left-minus-40px sm-left-minus-30px lg-w-50 sm-w-55" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-220px)" alt="">
                    <img src="{{ asset('images/demo-corporate-02.png') }}" class="position-absolute top-0px xl-top-minus-10px w-170px right-20px md-right-40px xs-w-40" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt="">
                </div>
                <div class="col-lg-6 ps-6 text-center text-lg-start lg-ps-15px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Creative approach</span>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px">Powerful Agency for Digital Business.</h3>
                    <p class="w-80 xl-w-90 lg-w-100 mb-40px sm-mb-25px">We research your niche to build great and solid service experiences that convert! We create compelling web designs, which are the right-fit for your target groups and also deliver optimized.</p>
                    <a href="demo-corporate-about.html" class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-box-shadow btn-rounded me-25px xs-me-0">
                                <span>
                                    <span class="btn-text">Read about us</span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                    </a>
                    <span class="text-dark-gray fw-700 ls-minus-05px d-block d-sm-inline-block sm-mt-15px"><a href="tel:1800222000"><i class="feather icon-feather-phone-call me-10px"></i>1 800 222 000</a></span>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 justify-content-center counter-style-07 ps-3 pe-3" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start counter item -->
                <div class="col text-center sm-mb-30px">
                    <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0" data-to="4586">
                        <span class="text-highlight position-absolute bottom-9px w-100"><span class="bg-gradient-flamingo-amethyst-green h-10px opacity-2"></span></span>
                    </h2>
                    <span class="d-block fs-14 fw-700 text-uppercase text-dark-gray">Telephonic talk</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center sm-mb-30px">
                    <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0" data-to="583">
                        <span class="text-highlight position-absolute bottom-9px w-100"><span class="bg-gradient-flamingo-amethyst-green h-10px opacity-2"></span></span>
                    </h2>
                    <span class="d-block fs-14 fw-700 text-uppercase text-dark-gray">Cases solved</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center sm-mb-30px">
                    <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0" data-to="6548">
                        <span class="text-highlight position-absolute bottom-9px w-100"><span class="bg-gradient-flamingo-amethyst-green h-10px opacity-2"></span></span>
                    </h2>
                    <span class="d-block fs-14 fw-700 text-uppercase text-dark-gray">Cofee cups</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center">
                    <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0" data-to="836">
                        <span class="text-highlight position-absolute bottom-9px w-100"><span class="bg-gradient-flamingo-amethyst-green h-10px opacity-2"></span></span>
                    </h2>
                    <span class="d-block fs-14 fw-700 text-uppercase text-dark-gray">Happy clients</span>
                </div>
                <!-- end counter item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="overflow-hidden bg-regal-blue position-relative border-radius-6px lg-border-radius-0px z-index-0">
        <img src="{{ asset('images/demo-corporate-bg-01.png') }}" class="position-absolute top-minus-150px left-minus-30px z-index-minus-1 opacity_minimum" data-bottom-top="transform: rotate(0deg) translateY(0)"  data-top-bottom="transform:rotate(-20deg) translateY(0)" alt="" />
        <div class="container">
            <div class="row align-items-center mb-6 sm-mb-9 text-center text-lg-start">
                <div class="col-lg-5 md-mb-20px">
                    <span class="ps-25px pe-25px mb-10px text-uppercase text-white fs-13 lh-42px fw-600 border-radius-100px bg-gradient-blue-whale-transparent d-inline-block">Creative approach</span>
                    <h3 class="text-white fw-700 mb-0 ls-minus-1px">Exclusive services</h3>
                </div>
                <div class="col-lg-5 last-paragraph-no-margin md-mb-20px">
                    <p class="w-85 md-w-100">We strive to develop real world web solutions that are ideal for small to large projects with bespoke your custom project requirements.</p>
                </div>
                <div class="col-lg-2 d-flex justify-content-center justify-content-lg-end">
                    <!-- start slider navigation -->
                    <div class="slider-one-slide-prev-1 icon-extra-medium text-white swiper-button-prev slider-navigation-style-04 border border-1 border-color-transparent-white-light">
                        <i class="feather icon-feather-chevron-left"></i>
                    </div>
                    <div class="slider-one-slide-next-1 icon-extra-medium text-white swiper-button-next slider-navigation-style-04 border border-1 border-color-transparent-white-light">
                        <i class="feather icon-feather-chevron-right"></i>
                    </div>
                    <!-- end slider navigation -->
                </div>
            </div>
            <div class="row align-items-center mb-6">
                <div class="col-12">
                    <div class="outside-box-right-25 sm-outside-box-right-0">
                        <div class="swiper magic-cursor slider-one-slide" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                        <img src="{{ asset('images/demo-corporate-slider-img-01.jpg') }}" alt="" />
                                        <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="hover-label-icon position-relative z-index-9">
                                                <div class="label bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 ls-05px">Creativity</div>
                                                <i class="line-icon-Medal-2 text-white icon-extra-large"></i>
                                            </div>
                                            <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                <span class="text-white fw-600 fs-20">Web Designing and Development</span>
                                                <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Build and decorate your web identity with raw coded magic spell</span>
                                                <a href="{{ route('services.index') }}" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore services</a>
                                                <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="{{ route('services.index') }}" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                        </div>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                        <img src="{{ asset('images/demo-corporate-slider-img-02.jpg') }}" alt="" />
                                        <div class="opacity-very-light bg-slate-blue"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="hover-label-icon position-relative z-index-9">
                                                <div class="label bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 ls-05px">Flexible</div>
                                                <i class="line-icon-Archery-2 text-white icon-extra-large"></i>
                                            </div>
                                            <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                <span class="text-white fw-600 fs-20">Optimal SEO Services</span>
                                                <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px"> Confirm your position with modern days SEO includes AEO, GEO. Increase sale and clicks </span>
                                                <a href="{{ route('services.index') }}" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore services</a>
                                                <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="{{ route('services.index') }}" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                        </div>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                        <img src="{{ asset('images/demo-corporate-slider-img-03.jpg') }}" alt="" />
                                        <div class="opacity-very-light bg-slate-blue"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="hover-label-icon position-relative z-index-9">
                                                <div class="label bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 ls-05px">Discover</div>
                                                <i class="line-icon-Financial text-white icon-extra-large"></i>
                                            </div>
                                            <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                <span class="text-white fw-600 fs-20">Optimized Content Writing</span>
                                                <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Let your brand speak with professional tone. Impact your audience with our powerful quality contents</span>
                                                <a href="{{ route('services.index') }}" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore services</a>
                                                <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="{{ route('services.index') }}" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                        </div>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                        <img src="{{ asset('images/demo-corporate-slider-img-04.jpg') }}" alt="" />
                                        <div class="opacity-very-light bg-slate-blue"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="hover-label-icon position-relative z-index-9">
                                                <div class="label bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 ls-05px">Modern</div>
                                                <i class="line-icon-Money-Bag text-white icon-extra-large"></i>
                                            </div>
                                            <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                <span class="text-white fw-600 fs-20">Audience Analysis</span>
                                                <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Competitors research and audience behaviour analysis</span>
                                                <a href="{{ route('services.index') }}" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore services</a>
                                                <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="{{ route('services.index') }}" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                        </div>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                        <img src="{{ asset('images/demo-corporate-slider-img-01.jpg') }}" alt="" />
                                        <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="hover-label-icon position-relative z-index-9">
                                                <div class="label bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 ls-05px">Creativity</div>
                                                <i class="line-icon-Medal-2 text-white icon-extra-large"></i>
                                            </div>
                                            <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                <span class="text-white fw-600 fs-20">Social Media Management</span>
                                                <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Actively communicate and attached with your customers and attract latest audiences. Convert them with exclusive contents with our upgrated management</span>
                                                <a href="{{ route('services.index') }}" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore services</a>
                                                <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="{{ route('services.index') }}" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                        </div>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                        <img src="{{ asset('images/demo-corporate-slider-img-02.jpg') }}" alt="" />
                                        <div class="opacity-very-light bg-slate-blue"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="hover-label-icon position-relative z-index-9">
                                                <div class="label bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 ls-05px">Flexible</div>
                                                <i class="line-icon-Archery-2 text-white icon-extra-large"></i>
                                            </div>
                                            <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                <span class="text-white fw-600 fs-20">UI/UX Designing</span>
                                                <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Our UI/UX design approach combines aesthetic appeal with intuitive functionality, making your digital platform both qualified and easy to use</span>
                                                <a href="{{ route('services.index') }}" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore services</a>
                                                <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="{{ route('services.index') }}" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                        </div>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->

                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                        <img src="{{ asset('images/demo-corporate-slider-img-03.jpg') }}" alt="" />
                                        <div class="opacity-very-light bg-slate-blue"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="hover-label-icon position-relative z-index-9">
                                                <div class="label bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 ls-05px">Discover</div>
                                                <i class="line-icon-Financial text-white icon-extra-large"></i>
                                            </div>
                                            <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                <span class="text-white fw-600 fs-20">IOS and Android App Development</span>
                                                <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Expand your business reach with high performance, intuitive iOS and Android apps crafted to deliver an exceptional user experience and foster customer loyalty</span>
                                                <a href="{{ route('services.index') }}" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore services</a>
                                                <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="{{ route('services.index') }}" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                        </div>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <i class="bi bi-envelope text-white d-inline-block align-middle icon-extra-medium me-10px md-m-5px"></i>
                    <div class="fs-18 text-white d-inline-block align-middle">Save your precious time and effort spent for finding a solution. <a href="demo-corporate-contact.html" class="text-white text-decoration-line-bottom">Contact us now</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container position-relative">
            <div class="row align-items-center mb-7">
                <div class="col-xxl-4 col-lg-5 md-mb-15 sm-mb-20 text-center text-lg-start">
                    <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Simple process</span>
                    <h3 class="text-dark-gray fw-700 ls-minus-2px mb-40px">Let's chase your business goal.</h3>
                    <div class="row row-cols-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-light-red fw-700 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">01</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                    <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                </div>
                                <div class="process-content ps-30px last-paragraph-no-margin mb-30px">
                                    <span class="d-block fw-700 text-dark-gray mb-5px fs-18">Discussion of your Needs</span>
                                    <p class="w-90 lg-w-100 lh-32">We will understand your vision and explore your goal.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->
                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-light-red fw-700 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">02</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                    <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                </div>
                                <div class="process-content ps-30px last-paragraph-no-margin mb-30px">
                                    <span class="d-block fw-700 text-dark-gray mb-5px fs-18">Research and apply</span>
                                    <p class="w-90 lg-w-100 lh-32">From development to conversation we apply the best.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->
                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box xs-mb-30px">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-light-red fw-700 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">03</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                </div>
                                <div class="process-content ps-30px last-paragraph-no-margin">
                                    <span class="d-block fw-700 text-dark-gray mb-5px fs-18">Convert, sell and gain</span>
                                    <p class="w-90 lg-w-100 lh-32">Convert your audiences into real customers, reach your goal.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->
                    </div>
                </div>
                <div class="col-lg-7 offset-xxl-1 position-relative md-mb-30px sm-mb-15"
                     data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <img src="{{ asset('images/demo-corporate-10.png') }}" class="position-relative z-index-9 top-40px" alt="">
                    <img src="{{ asset('images/demo-corporate-03.png') }}" class="absolute-middle-center xs-w-95" alt="">
                    <img src="{{ asset('images/demo-corporate-07.png') }}" class="position-absolute top-50px left-0px xs-left-15px"
                         data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)"
                         alt="">
                    <img src="{{ asset('images/demo-corporate-05.png') }}" class="position-absolute top-150px left-30"
                         data-bottom-top="transform: translateY(30px)" data-top-bottom="transform: translateY(-30px)"
                         alt="">
                    <img src="{{ asset('images/demo-corporate-05.png') }}" class="position-absolute top-50px right-30"
                         data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)"
                         alt="">
                    <img src="{{ asset('images/demo-corporate-05.png') }}"
                         class="position-absolute top-100px right-0px xs-right-15px"
                         data-bottom-top="transform: translateY(30px)" data-top-bottom="transform: translateY(-30px)"
                         alt="">
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-12 text-center align-items-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="bg-base-color fw-700 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-5px d-inline-block align-middle">hurray</div>
                    <div class="fs-18 fw-500 text-dark-gray d-inline-block align-middle">Let's make something great work together. <a href="demo-corporate-contact.html" class="text-dark-gray text-decoration-line-bottom fw-700">Got a project in mind?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-gradient-quartz-white border-radius-6px lg-border-radius-0px">
        <div class="container background-no-repeat background-position-top"
             style="background-image: url( {{ asset('images/demo-corporate-bg-02.png') }})">
            <div class="row justify-content-center mb-3">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px">Trusted by the world's fastest growing companies</h3>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mb-6 sm-mb-8" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-12 position-relative ps-8 pe-8 lg-ps-15px lg-pe-15px">
                    <div class="swiper magic-cursor testimonials-style-06" data-slider-options='{ "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav", "effect": "fade" } }'>
                        <div class="swiper-wrapper">
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-8 col-md-4 col-sm-6 text-center md-mb-30px">
                                        <img alt="" src="{{ asset('/images/demo-corporate-testimonials-01.png') }}">
                                    </div>
                                    <div class="col-lg-5 col-md-7 last-paragraph-no-margin text-center text-md-start">
                                        <a href="#" class="mb-15px d-block"><img src="images/logo-monday-dark-blue-01.svg" class="h-35px" alt=""></a>
                                        <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">CybersparkGlobal is always there when you need them. In today’s fast-paced business world, the ability to quickly adapt and test new ideas, as well as design websites for products and ads, is more crucial than ever. We needed a company that could keep up with our constant requests, often with tight deadlines, and they consistently deliver high-quality work on time. I’ve worked with several other web design companies, but none come close to CybersparkGlobal. They truly are the best in the business!</span>
                                        <span class="fs-15 text-uppercase fw-800 text-base-color ls-1px">Herman miller, Monday</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-8 col-md-4 col-sm-6 text-center md-mb-30px">
                                        <img alt="" src="{{ asset('/images/demo-corporate-testimonials-02.png') }}">
                                    </div>
                                    <div class="col-lg-5 col-md-7 last-paragraph-no-margin text-center text-md-start">
                                        <a href="#" class="mb-15px d-block"><img src="images/logo-loitech-dark-blue.svg" class="h-35px" alt=""></a>
                                        <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">I started working with CybersparkGlobal about a year ago, and honestly, I can’t imagine running my businesses without them now. They’ve become an essential part of our operations, offering amazing service at an affordable price. If you’re looking for web design, app development, modern SEO, or anything related to web services, I truly believe they’re the only choice you should make.</span>
                                        <span class="fs-15 text-uppercase fw-800 text-base-color ls-1px">Leonel mooney, Logitech</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-8 col-md-4 col-sm-6 text-center md-mb-30px">
                                        <img alt="" src="{{ asset('/images/demo-corporate-testimonials-03.png') }}">
                                    </div>
                                    <div class="col-lg-5 col-md-7 last-paragraph-no-margin text-center text-md-start">
                                        <a href="#" class="mb-15px d-block"><img src="images/logo-invision-dark-blue.svg" class="h-35px" alt=""></a>
                                        <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">I’ve been working with CybersparkGlobal for two years now, and they’ve consistently delivered exceptional work. The team is also incredibly easy to communicate with. Thank you!</span>
                                        <span class="fs-15 text-uppercase fw-800 text-base-color ls-1px">Matthew taylor, invision</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                        </div>
                        <!-- start slider navigation -->
                        <div class="swiper-button-previous-nav swiper-button-prev md-left-0px"><i class="feather icon-feather-arrow-left icon-extra-medium text-dark-gray"></i></div>
                        <div class="swiper-button-next-nav swiper-button-next md-right-0px"><i class="feather icon-feather-arrow-right icon-extra-medium text-dark-gray"></i></div>
                        <!-- end slider pagination -->
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 justify-content-center mb-6 md-mb-8 sm-mb-45px" data-anime='{ "el": "childs", "willchange": "transform", "perspective": [1200,1200], "translateY": [0, 0], "scale": [1.1, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 1000, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col sm-mb-30px">
                    <div class="bg-white h-100 border-radius-6px text-center box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="pt-10 pb-10">
                            <img src="images/logo-monday-dark-gray-02.svg" class="h-40px md-h-35px sm-h-40px" alt="" />
                        </div>
                        <div class="border-top fs-16 p-15px last-paragraph-no-margin">
                            <p>Project management - <span class="fw-600 text-dark-gray">275% Growth</span></p>
                        </div>
                    </div>
                </div>
                <div class="col sm-mb-30px">
                    <div class="bg-white h-100 border-radius-6px text-center box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="pt-10 pb-10">
                            <img src="images/logo-dropbox-dark-gray-02.svg" class="h-40px md-h-35px sm-h-40px" alt="" />
                        </div>
                        <div class="border-top fs-16 border-1 border-color-extra-medium-gray p-15px last-paragraph-no-margin">
                            <p>Team management - <span class="fw-600 text-dark-gray">195% Growth</span></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-white h-100 border-radius-6px text-center box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="pt-10 pb-10">
                            <img src="images/logo-slack-dark-gray-02.svg" class="h-40px md-h-35px sm-h-40px" alt="" />
                        </div>
                        <div class="border-top fs-16 border-1 border-color-extra-medium-gray p-15px last-paragraph-no-margin">
                            <p>Secure storage - <span class="fw-600 text-dark-gray">235% Growth</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 clients-style-06 justify-content-center ps-3 pe-3 xs-mt-40px" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <a href="#"><img src="images/logo-walmart-dark-blue.svg" class="h-45px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <a href="#"><img src="images/logo-netflix-dark-blue.svg" class="h-45px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <a href="#"><img src="images/logo-invision-dark-blue.svg" class="h-45px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center sm-mb-40px">
                    <a href="#"><img src="images/logo-yahoo-dark-blue.svg" class="h-45px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center">
                    <a href="#"><img src="images/logo-amazon-dark-blue.svg" class="h-45px" alt=""></a>
                </div>
                <!-- end client item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="p-0">
        <div class="container">
            <div class="row justify-content-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-12">
                    <div class="border-radius-6px h-450px md-h-350px sm-h-400px d-flex flex-wrap align-items-center justify-content-center overflow-hidden cover-background box-shadow-quadruple-large pt-15" style="background-image: url('{{ asset('/images/demo-corporate-video-img.jpg') }}')">
                        <div class="opacity-full-dark bg-gradient-regal-blue-transparent"></div>
                        <div class="row justify-content-center m-0">
                            <div class="col-lg-7 col-md-8 z-index-1 text-center text-md-start sm-mb-20px">
                                <h3 class="text-white mb-0 fw-400 fancy-text-style-4">We make the creative solutions for <span class="fw-600" data-fancy-text='{ "effect": "rotate", "string": ["business!", "problems!", "brands!"] }'></span>
                                </h3>
                            </div>
                            <div class="col-md-2 position-relative z-index-1 text-center sm-mb-20px">
                                <a href="https://www.youtube.com/watch?v=8qchy6fouRA" class="position-relative d-inline-block text-center border border-2 border-color-white rounded-circle video-icon-box video-icon-large popup-youtube">
                                            <span>
                                                <span class="video-icon">
                                                    <i class="fa-solid fa-play fs-20 text-white"></i>
                                                </span>
                                            </span>
                                </a>
                            </div>
                        </div>
                        <div class="w-100 text-center position-relative mt-auto pt-20px pb-25px ps-15px pe-15px border-top border-color-transparent-white-light">
                            <div class="fs-14 text-uppercase text-white fw-600 ls-05px">Let's make something great work together. <a href="demo-corporate-contact.html" class="text-decoration-line-bottom text-white">Got a project in mind?</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="bg-gradient-quartz-white border-radius-6px lg-border-radius-0px pb-0">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-7 text-center"
                     data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px">Interesting articles</h3>
                </div>
            </div>
            <div class="row mb-5 sm-mb-7">
                <div class="col-12">
                    <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                <div class="blog-image">
                                    <a href="demo-corporate-blog-single-clean.html" class="d-block"><img src="{{ asset('images/demo-corporate-blog-01.jpg') }}" alt="" /></a>
                                    <div class="blog-categories">
                                        <a href="demo-corporate-blog.html" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase fw-700">Agency</a>
                                    </div>
                                </div>
                                <div class="card-body p-12 lg-p-10">
                                    <a href="demo-corporate-blog-single-clean.html" class="card-title mb-15px fw-700 fs-19 text-dark-gray d-inline-block w-90 md-w-100">Why Laravel is the Best Framework for Modern Web Development?</a>
                                    <p>It simplifies complex tasks like routing, authentication, and....</p>
                                    <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                        <div class="me-auto">
                                            <span class="blog-date d-inline-block fw-700 text-dark-gray">30 August 2021</span>
                                            <div class="d-inline-block author-name fw-700 text-dark-gray">By <a href="demo-corporate-blog.html" class="text-dark-gray text-decoration-line-bottom">Den viliamson</a></div>
                                        </div>
                                        <div class="like-count">
                                            <a href="#"><i class="fa-regular fa-heart text-red"></i><span class="text-dark-gray align-middle fw-700">25</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div
                                class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                <div class="blog-image">
                                    <a href="demo-corporate-blog-single-clean.html" class="d-block"><img
                                            src="{{ asset('images/demo-corporate-blog-02.jpg') }}" alt="" /></a>
                                    <div class="blog-categories">
                                        <a href="demo-corporate-blog.html"
                                           class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase fw-700">Luxurious</a>
                                    </div>
                                </div>
                                <div class="card-body p-12 lg-p-10">
                                    <a href="demo-corporate-blog-single-clean.html" class="card-title mb-15px fw-700 fs-19 text-dark-gray d-inline-block w-90 md-w-100">From Concept to Launch, The Ultimate iOS App Development!</a>
                                    <p>It covers every step of the process, from brainstorming...</p>
                                    <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                        <div class="me-auto">
                                            <span class="blog-date d-inline-block fw-700 text-dark-gray">28 August 2021</span>
                                            <div class="d-inline-block author-name fw-700 text-dark-gray">By <a href="demo-corporate-blog.html" class="text-dark-gray text-decoration-line-bottom">Hugh macleod</a></div>
                                        </div>
                                        <div class="like-count">
                                            <a href="#"><i class="fa-regular fa-heart text-red"></i><span class="text-dark-gray align-middle fw-700">58</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div
                                class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                <div class="blog-image">
                                    <a href="demo-corporate-blog-single-clean.html" class="d-block"><img src="{{ asset('images/demo-corporate-blog-03.jpg') }}" alt="" /></a>
                                    <div class="blog-categories">
                                        <a href="demo-corporate-blog.html" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase fw-700">Business</a>
                                    </div>
                                </div>
                                <div class="card-body p-12 lg-p-10">
                                    <a href="demo-corporate-blog-single-clean.html" class="card-title mb-15px fw-700 fs-19 text-dark-gray d-inline-block w-90 md-w-100">The Role of User Intent in SEO Content Writing, That You Need to Know!</a>
                                    <p>It explains how identifying whether a user is looking for information...</p>
                                    <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                        <div class="me-auto">
                                            <span class="blog-date d-inline-block fw-700 text-dark-gray">26 August 2021</span>
                                            <div class="d-inline-block author-name fw-700 text-dark-gray">By <a href="demo-corporate-blog.html" class="text-dark-gray text-decoration-line-bottom">Walton smith</a></div>
                                        </div>
                                        <div class="like-count">
                                            <a href="#"><i class="fa-regular fa-heart text-red"></i><span class="text-dark-gray align-middle fw-700">75</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                    </ul>
                </div>
            </div>
            <div class="row mb-7 sm-mb-9" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col text-center">
                    <div class="fs-26 sm-fs-22 sm-lh-30 fw-600 ls-minus-1px text-dark-gray d-inline-block align-middle me-20px md-m-10px md-mt-0">What do people say about our services?</div>
                    <a href="https://www.trustpilot.com/" target="_blank"><img src="{{ asset('images/trastpilot-review.png') }}" class="d-inline-block align-middle" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
