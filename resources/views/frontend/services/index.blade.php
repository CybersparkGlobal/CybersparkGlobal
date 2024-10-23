@extends('layouts.frontend.app')
@section('content')
    <!-- start page title -->
    <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0" data-parallax-background-ratio="0.5" style="background-image: url(https://via.placeholder.com/1920x1080)">
        <div class="opacity-extra-medium bg-blue-whale"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-8 position-relative text-center page-title-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">Market research</h1>
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
    <section id='down-section'>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pe-5 order-2 order-lg-1 lg-pe-3 md-pe-15px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="bg-solitude-blue border-radius-6px p-45px lg-p-30px mb-25px">
                        <span class="fs-19 alt-font text-dark-gray fw-700 mb-20px d-inline-block">Corporate services</span>
                        <ul class="p-0 m-0 list-style-02 fw-500">
                            <li class="pb-10px mb-10px border-bottom border-color-transparent-dark"><a href="demo-corporate-services-details.html">Business planing</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                            <li class="pb-10px mb-10px border-bottom border-color-transparent-dark text-dark-gray"><a href="demo-corporate-services-details.html" class="text-dark-gray text-dark-gray-hover">Market research</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                            <li class="pb-10px mb-10px border-bottom border-color-transparent-dark"><a href="demo-corporate-services-details.html">Business consulting</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                            <li class="pb-10px mb-10px border-bottom border-color-transparent-dark"><a href="demo-corporate-services-details.html">Audience analysis</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                            <li><a href="demo-corporate-services-details.html">Business research</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                        </ul>
                    </div>
                    <div class="bg-dark-gray border-radius-6px ps-35px pb-25px pt-25px mb-25px">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon feature-box-icon-rounded w-65px h-65px lg-w-50px lg-h-50px me-20px lg-me-15px rounded-circle bg-base-color rounded-box">
                                <i class="bi bi-telephone-outbound icon-extra-medium text-white"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="lh-22 mb-10px d-block text-white opacity-6 fw-300">Customer care?</span>
                                <span class="text-white fs-20 fw-500 lh-22 d-block"><a href="tel:+12345678910">+1 234 567 8910</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-solitude-blue border-radius-6px p-40px lg-p-30px">
                        <span class="fs-19 alt-font text-dark-gray fw-700 mb-25px sm-mb-20px d-inline-block">Get a free consultation?</span>
                        <div class="contact-form-style-01 mt-0">
                            <!-- start contact form -->
                            <form action="email-templates/contact-form.php" method="post">
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                    <input type="text" name="name" class="form-control border-white fs-16 box-shadow-large required" placeholder="Your name*" />
                                </div>
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="email" class="form-control border-white fs-16 box-shadow-large required" placeholder="Your email address*" />
                                </div>
                                <div class="position-relative form-group form-textarea">
                                    <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                    <textarea placeholder="Your message" name="comment" class="form-control border-white fs-16 box-shadow-large" rows="3"></textarea>
                                    <input type="hidden" name="redirect" value="">
                                    <button class="btn btn-small btn-round-edge btn-base-color btn-box-shadow mt-20px submit w-100 text-transform-none" type="submit">Send message</button>
                                    <div class="form-results mt-20px d-none"></div>
                                </div>
                            </form>
                            <!-- end contact form -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-1 order-lg-2 md-mb-50px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h4 class="text-dark-gray fw-700 alt-font mb-20px d-block">Business consulting services</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <img src="https://via.placeholder.com/785x435" class="mt-30px md-mt-15px mb-60px md-mb-40px border-radius-6px" alt="">
                    <div class="row row-cols-1 row-cols-md-2 mb-30px md-mb-15px">
                        <div class="col">
                            <span class="fs-24 ls-minus-05px alt-font text-dark-gray fw-700 mb-10px d-block">Strategic development</span>
                            <p class="w-90 sm-w-100">Lorem ipsum dolor sit amet conseetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                        <div class="col">
                            <span class="fs-24 alt-font text-dark-gray fw-700 mb-10px d-block">Grow your business</span>
                            <p class="w-90 sm-w-100">Lorem ipsum dolor sit amet conseetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="cover-background p-7 border-radius-6px mb-60px md-mb-40px d-flex justify-content-end align-items-end sm-h-500px" style="background-image: url(https://via.placeholder.com/785x435)">
                        <div class="opacity-light bg-gradient-regal-blue-transparent"></div>
                        <div class="bg-white box-shadow-quadruple-large border-radius-4px w-50 lg-w-60 sm-w-100 overflow-hidden z-index-1">
                            <div class="p-40px lg-p-30px last-paragraph-no-margin">
                                <span class="fs-24 ls-minus-05px alt-font text-dark-gray fw-700 mb-10px d-block">Investment advice</span>
                                <p class="w-95 lg-w-100">Lorem ipsum dolor sit amet conseetur adipiscing elit sed do eiusmod tempor incididunt ut labore magna aliqua.</p>
                            </div>
                            <div class="bg-dark-gray p-15px text-center">
                                <a href="demo-corporate-contact.html" class="text-white text-white-hover fw-500"><i class="feather icon-feather-mail me-10px"></i>Talk with our team</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-dark-gray fw-700 alt-font mb-40px lg-mb-30px d-block">Benefits of working with us</h4>
                    <div class="border border-color-extra-medium-gray border-radius-6px mb-40px xs-mb-30px overflow-hidden">
                        <p class="ps-30px pe-30px pt-25px pb-25px border-bottom border-1 border-color-extra-medium-gray mb-0"><span class="fw-700 text-dark-gray">Great client service: </span>We genuinely care about our customers lives and the experience we give them. That's why we put your best interests first.</p>
                        <p class="ps-30px pe-30px pt-25px pb-25px border-bottom border-1 border-color-extra-medium-gray mb-0 bg-solitude-blue"><span class="fw-700 text-dark-gray">Investment strategy: </span>You can expect our advisors to keep your needs in the forefront and focus on your overall experience before creating a plan.</p>
                        <p class="ps-30px pe-30px pt-25px pb-25px mb-0"><span class="fw-700 text-dark-gray">Internal expertise: </span>Our team of investment advisors has advanced knowledge of the most current markets and the ability to navigate them effortlessly.</p>
                    </div>
                    <div class="row align-items-center justify-content-center g-0">
                        <div class="col-12 d-block d-sm-flex align-items-center text-center text-sm-start">
                            <img src="https://via.placeholder.com/152x68" alt="" />
                            <div class="lh-28 last-paragraph-no-margin text-dark-gray ps-15px xs-ps-0 xs-mt-15px">
                                <p>Save your time and effort spent for finding a solution. <a href="demo-corporate-contact.html" class="text-decoration-line-bottom fw-700 text-dark-gray">Contact us now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
