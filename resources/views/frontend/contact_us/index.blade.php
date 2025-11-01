@extends('layouts.frontend.app')
@section('content')
    <!-- start page title -->
    <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0" data-parallax-background-ratio="0.5" style="background-image: url({{ asset('https://cybersparkglobal.com/images/slider/blog%20page%20image.png') }})">
        <div class="opacity-extra-medium bg-blue-whale"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-8 position-relative text-center page-title-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">Contact us</h1>
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
    <section id="down-section">
        <div class="container">
            <div class="row align-items-end justify-content-center mb-6 text-center text-lg-start sm-mb-8">
                <div class="col-xl-5 col-lg-7 col-md-10 md-mb-25px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">How can help you?</span>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px mb-0">Have a project in mind? Get in touch!</h3>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-5 col-md-10 last-paragraph-no-margin">
                    <p class="w-90 lg-w-100" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>We're here to help and answer any question you might have. We look forward to hearing from you. Any need help you please contact us or meet to office with coffee.</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 mb-6 sm-mb-8" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col md-mb-30px text-center text-sm-start">
                    <span class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i class="feather icon-feather-map-pin d-inline-block icon-small me-10px"></i>Office location</span>
                    <div class="last-paragraph-no-margin">
                      <a href="https://www.google.com/maps/place/Cyberspark+Global/@22.8186038,89.5535084,785m/data=!3m1!1e3!4m12!1m5!8m4!1e1!2s107233019083693037884!3m1!1e1!3m5!1s0x39ff91a2dbbae23b:0x82c0108415dfda8c!8m2!3d22.8186038!4d89.5535084!16s%2Fg%2F11v3tpvg2r?entry=ttu&g_ep=EgoyMDI1MTAyMC4wIKXMDSoASAFQAw%3D%3D"><p>3th floor, R-Amin trade center,<br>17 KDA Ave, Khulna 9100</p></a>

                    </div>
                </div>
                <div class="col md-mb-30px text-center text-sm-start">
                    <span class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i class="feather icon-feather-mail d-inline-block icon-small me-10px"></i>Send a message</span>
                    <a href="mailto:cybersparkglobal@gmail.com">cybersparkglobal@gmail.com</a> <br>
                    <a href="mailto:contact@cybersparkglobal.com">contact@cybersparkglobal.com</a>
                </div>
                <div class="col xs-mb-30px text-center text-sm-start">
                    <span class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i class="feather icon-feather-phone d-inline-block icon-small me-10px"></i>Call us directly</span>
                    <a href="tel:+880 1749-369514">+880 1749-369514</a><br>
                    <a href="tel:+1 307-312-2095">+1 307-312-2095</a>
                </div>
                <div class="col text-center text-sm-start">
                    <span class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i class="feather icon-feather-users d-inline-block icon-small me-10px"></i>Join our team</span>
                    <a href="https://www.facebook.com/Cybersparkglobal/">@facebook</a><br>
                    <a href="https://www.linkedin.com/in/helal-ahmed-53b562183/">@linkedin</a>
                </div>
            </div>
            <div class="row justify-content-center g-0" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-auto text-center last-paragraph-no-margin icon-with-text-style-08 pt-20px pb-20px ps-8 pe-8 md-ps-30px md-pe-30px bg-gradient-flamingo-amethyst-green border-radius-100px xs-border-radius-30px">
                    <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                        <div class="feature-box-icon me-10px">
                            <i class="bi bi-chat-text fs-24 icon-very-medium text-white"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin text-white text-uppercase fs-15 fw-600 ls-05px xs-lh-24">
                            Let's make something great work together. <a href="https://cybersparkglobal.com/services" class="text-white text-decoration-line-bottom-medium">Got a project in mind?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="position-relative one-half-screen sm-small-screen overflow-hidden border border-radius-top-lr lg-border-radius-0px" data-parallax-background-ratio="0.5" style="background-image: url({{ asset('images/demo-corporate-contact-parallax-img.jpg') }})">
        <div class="opacity-light bg-dark-gray"></div>
        <div class="fs-225 ls-minus-10px alt-font text-gradient-orange-sky-blue fw-600 position-absolute  sm-ls-minus-5px sm-bottom-minus-20px sm-fs-200 xs-left-minus-10px xs-fs-130">contact</div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-gradient-quartz-white position-relative z-index-0 sm-pt-0">
        <div class="container-fluid overlap-section p-0">
            <div class="row g-0 justify-content-end overlap-section-one-fourth">
                <div class="col-md-6">
                    <div id="map" class="map" data-map-options='{ "lat": -37.805688, "lng": 144.962312, "style": "Silver", "marker": { "type": "HTML", "color": "#3e31cb" }, "popup": { "defaultOpen": true, "html": "<div class=infowindow><strong class=\"mb-3 d-inline-block alt-font\">Crafto Corporate</strong><p class=\"alt-font\">16122 Collins street, Melbourne, Australia</p></div><div class=\"google-maps-link alt-font\"> <a aria-label=\"View larger map\" target=\"_blank\" jstcache=\"31\" href=\"https://maps.app.goo.gl/wy569xr4QoAeuYRW6" jsaction=\"mouseup:placeCard.largerMap\">VIEW LARGER MAP</a></div>" } }'></div>
                </div>
            </div>
        </div>

        <div class="container-fluid overflow-hidden position-relative pt-6 sm-pt-40px">
            <img src="https://via.placeholder.com/605x580" class="position-absolute top-0 left-minus-300px z-index-minus-1" data-bottom-top="transform: rotate(0deg) translateY(0)" data-top-bottom="transform:rotate(-15deg) translateY(0)" alt=""/>
            <div class="row justify-content-center mb-2 sm-mb-3">
                <div class="col-lg-6 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="ps-25px pe-25px mb-15px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-quartz-light-transparent d-inline-block">Get in touch with us</span>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px">How we can help you?</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-11">
                    <form action="email-templates/contact-form.php" method="post" class="contact-form-style-03">
                        <div class="row justify-content-center" data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0">Enter your name*</label>
                                <div class="position-relative form-group mb-25px">
                                    <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                    <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="exampleInputEmail1" type="text" name="name" placeholder="What's your good name?" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0">Email address*</label>
                                <div class="position-relative form-group mb-25px">
                                    <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                    <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="exampleInputEmail2" type="email" name="email" placeholder="Enter your email address" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0">Phone number</label>
                                <div class="position-relative form-group mb-25px">
                                    <span class="form-icon"><i class="bi bi-telephone"></i></span>
                                    <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" id="exampleInputEmail3" type="tel" name="phone" placeholder="Enter your phone number" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0">Subject</label>
                                <div class="position-relative form-group mb-25px">
                                    <span class="form-icon"><i class="bi bi-journals"></i></span>
                                    <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" id="exampleInputEmail4" type="text" name="subject" placeholder="How can we help you?" />
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0">Your message</label>
                                <div class="position-relative form-group form-textarea mb-0">
                                    <textarea class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" name="comment" placeholder="Describe about your project" rows="4"></textarea>
                                    <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-lg-7 col-md-8">
                                <p class="mb-0 fs-14 lh-24 text-center text-md-start">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                            </div>
                            <div class="col-xxl-6 col-lg-5 col-md-4 text-center text-md-end sm-mt-25px">
                                <input id="exampleInputEmail5" type="hidden" name="redirect" value="">
                                <button class="btn btn-medium btn-dark-gray btn-box-shadow btn-round-edge text-transform-none primary-font submit" type="submit">Send message</button>
                            </div>
                            <div class="col-12">
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
