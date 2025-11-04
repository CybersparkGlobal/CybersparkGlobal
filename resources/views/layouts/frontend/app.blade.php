<!doctype html>
<html class="no-js" lang="en">

<head>
    <!--tags-->
    <meta name="google-site-verification" content="QEj2pCEY2DrHGGdbp00spLKoxo-RLji0ZJbnorCjdSw" />
    <!--tags end-->

    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
    @include('layouts.frontend.header')
    @stack('styles')
  <meta name="google-site-verification" content="GrfzS9EkAfi4gne_Suc3NLj4rOaA8O26PoRh6c7pbOA" />
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TC2RVJJ4');</script>
<!-- End Google Tag Manager -->
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KFTWDK0023"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KFTWDK0023');
</script>
</head>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#242E45">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TC2RVJJ4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="box-layout">
    <!-- start header -->
    @include('layouts.frontend.navbar')
    @yield('content')
    <!-- end header -->

    <!-- start footer -->
    @include('layouts.frontend.footer')
    <!-- end footer -->
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
</div>
<!-- javascript libraries -->
<script type="text/javascript" src="{{ asset('js/frontend/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/vendors.min.js') }}"></script>
<!-- slider revolution core javaScript files -->
<script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- Slider's main "init" script -->
<script>
    var tpj = jQuery;
    var revapi7;
    var $ = jQuery.noConflict();
    tpj(document).ready(function () {
        if (tpj("#demo-corporate-slider").revolution == undefined) {
            revslider_showDoubleJqueryError("#demo-corporate-slider");
        } else {
            revapi7 = tpj("#demo-corporate-slider").show().revolution({
                sliderType: "standard",
                /* sets the Slider's default timeline */
                delay: 9000,
                /* options are 'auto', 'fullwidth' or 'fullscreen' */
                sliderLayout: 'fullscreen',
                /* RESPECT ASPECT RATIO */
                autoHeight: 'off',
                /* options that disable autoplay */
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                navigation: {
                    keyboardNavigation: 'on',
                    keyboard_direction: 'horizontal',
                    mouseScrollNavigation: 'off',
                    mouseScrollReverse: 'reverse',
                    onHoverStop: 'off',
                    arrows: {
                        enable: true,
                        style: 'hesperiden',
                        rtl: false,
                        hide_onleave: false,
                        hide_onmobile: true,
                        hide_under: 500,
                        hide_over: 9999,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        left: {
                            container: 'slider',
                            h_align: 'left',
                            v_align: 'center',
                            h_offset: 50,
                            v_offset: 0
                        },
                        right: {
                            container: 'slider',
                            h_align: 'right',
                            v_align: 'center',
                            h_offset: 50,
                            v_offset: 0
                        }
                    },
                    bullets: {

                        enable: true,
                        style: 'hermes',
                        tmp: '',
                        direction: 'horizontal',
                        rtl: false,

                        container: 'layergrid',
                        h_align: 'center',
                        v_align: 'bottom',
                        h_offset: 0,
                        v_offset: 30,
                        space: 12,

                        hide_onleave: false,
                        hide_onmobile: true,
                        hide_under: 0,
                        hide_over: 500,
                        hide_delay: true,
                        hide_delay_mobile: 500

                    },
                    touch: {
                        touchenabled: 'on',
                        touchOnDesktop: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: 'horizontal',
                        drag_block_vertical: true
                    }
                },
                responsiveLevels: [1240, 1024, 768, 480],
                visibilityLevels: [1240, 1024, 768, 480],
                gridwidth: [1240, 1024, 768, 480],
                gridheight: [930, 850, 900, 850],
                /* Lazy Load options are "all", "smart", "single" and "none" */
                lazyType: "smart",
                spinner: "spinner0",
                parallax: {
                    type: "scroll",
                    origo: "slidercenter",
                    speed: 400,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 5],
                },
                shadow: 0,
                shuffle: "off",
                fullScreenAutoWidth: "on",
                fullScreenAlignForce: "on",
                fullScreenOffsetContainer: "nav",
                fullScreenOffset: "",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
</script>
<script type="text/javascript" src="{{ asset('js/frontend/main.js') }}"></script>
@stack('script')
</body>

</html>
