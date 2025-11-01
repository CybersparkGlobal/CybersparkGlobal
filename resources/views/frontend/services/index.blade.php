@extends('layouts.frontend.app')
@section('content')
    <!-- start page title -->
    <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0" data-parallax-background-ratio="0.5" style="background-image: url({{ asset('https://cybersparkglobal.com/images/slider/service%20us%20page%20banner%20up.jpg') }})">
        <div class="opacity-extra-medium bg-blue-whale"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-8 position-relative text-center page-title-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">Service Market</h1>
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
                            <li class="pb-10px mb-10px border-bottom border-color-transparent-dark"><a href="demo-corporate-services-details.html">Web Development</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                            <li class="pb-10px mb-10px border-bottom border-color-transparent-dark text-dark-gray"><a href="demo-corporate-services-details.html" class="text-dark-gray text-dark-gray-hover">Software Development</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                            <li class="pb-10px mb-10px border-bottom border-color-transparent-dark"><a href="demo-corporate-services-details.html">UI/UX Designing</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                            <li class="pb-10px mb-10px border-bottom border-color-transparent-dark"><a href="demo-corporate-services-details.html">SEO and Marketing</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>

                            <li><a href="demo-corporate-services-details.html">Researching and Writing</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>

                        </ul>
                    </div>
                    <div class="bg-dark-gray border-radius-6px ps-35px pb-25px pt-25px mb-25px">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon feature-box-icon-rounded w-65px h-65px lg-w-50px lg-h-50px me-20px lg-me-15px rounded-circle bg-base-color rounded-box">
                                <i class="bi bi-telephone-outbound icon-extra-medium text-white"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="lh-22 mb-10px d-block text-white opacity-6 fw-300">Customer care?</span>
                                <span class="text-white fs-20 fw-500 lh-22 d-block"><a href="tel:+880 1749-369514">+880 1749-369514</a></span>
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
                    <h2 class="text-dark-gray fw-700 alt-font mb-20px d-block">Business consulting services</h2>
                    <p>Expert consulting services to help your business grow and succeed. Our team is here to assist you with practical advice and solutions that match your business needs. Whether you're looking for help with Web Development, Software Development, UI/UX Designing or SEO and Marketing, we have the experience to support you. Our services are designed to improve your processes, boost your growth and give you the tools to succeed in the long run.</p>
                    <img src="https://via.placeholder.com/785x435" class="mt-30px md-mt-15px mb-60px md-mb-40px border-radius-6px" alt="">
                    <div class="row row-cols-1 row-cols-md-2 mb-30px md-mb-15px">
                        <div class="col">
                            <span class="fs-24 ls-minus-05px alt-font text-dark-gray fw-700 mb-10px d-block">Strategic development</span>
                            <p class="w-90 sm-w-100">We'll work with you to create a clear and effective plan that helps your business grow, stay competitive and run more smoothly. Our team focuses on solutions that are practical and achievable for your business.</p>
                        </div>
                        <div class="col">
                            <span class="fs-24 alt-font text-dark-gray fw-700 mb-10px d-block">Grow your business</span>
                            <p class="w-90 sm-w-100">From identifying new opportunities to optimizing your current operations, we offer the optimal support you need to scale up. Our services are aimed to ensure your business moves forward at efficiency and profitability.</p>
                        </div>
                    </div>
                    <div class="cover-background p-7 border-radius-6px mb-60px md-mb-40px d-flex justify-content-end align-items-end sm-h-500px" style="background-image: url(https://via.placeholder.com/785x435)">
                        <div class="opacity-light bg-gradient-regal-blue-transparent"></div>
                        <div class="bg-white box-shadow-quadruple-large border-radius-4px w-50 lg-w-60 sm-w-100 overflow-hidden z-index-1">
                            <div class="p-40px lg-p-30px last-paragraph-no-margin">
                                <span class="fs-24 ls-minus-05px alt-font text-dark-gray fw-700 mb-10px d-block">Investment advice</span>
                                <p class="w-95 lg-w-100">Getting services from Syber Spark is not a cost, it's a long term investment in the growth and success of your business.</p>
                            </div>
                            <div class="bg-dark-gray p-15px text-center">
                                <a href="https://www.facebook.com/jubair.khan.ariyan/" class="text-white text-white-hover fw-500"><i class="feather icon-feather-mail me-10px"></i>Talk with our team</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-dark-gray fw-700 alt-font mb-40px lg-mb-30px d-block">Benefits of working with us</h4>
                    <div class="border border-color-extra-medium-gray border-radius-6px mb-40px xs-mb-30px overflow-hidden">
                        <p class="ps-30px pe-30px pt-25px pb-25px border-bottom border-1 border-color-extra-medium-gray mb-0"><span class="fw-700 text-dark-gray">Great client service: </span>We prioritize your business needs and are committed to delivering exceptional software development services that foster long term success.</p>
                        <p class="ps-30px pe-30px pt-25px pb-25px border-bottom border-1 border-color-extra-medium-gray mb-0 bg-solitude-blue"><span class="fw-700 text-dark-gray">Winner Packages:</span> We have the most excellent packages for you, from web development to SEO and customer purchases, all within your budget limit.</p>
                        <p class="ps-30px pe-30px pt-25px pb-25px mb-0"><span class="fw-700 text-dark-gray">Internal expertise: </span>Our team always in action, we not just do we finished with winning result, try our best to don't let you complain once</p>
                    </div>
                    <div class="row align-items-center justify-content-center g-0">
                        <div class="col-12 d-block d-sm-flex align-items-center text-center text-sm-start">
                            <img src="https://via.placeholder.com/152x68" alt="" />
                            <div class="lh-28 last-paragraph-no-margin text-dark-gray ps-15px xs-ps-0 xs-mt-15px">
                                <p>Save your time and effort spent for finding a solution. <a href="https://cybersparkglobal.com/contact_us" class="text-decoration-line-bottom fw-700 text-dark-gray">Contact us now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
