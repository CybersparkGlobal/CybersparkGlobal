/*!
    Crafto - Parallax Liquid Image
    Created by ThemeZaa
!*/
! function(n) {
    var t = n(window),
        o = t.height();
    t.resize(function() {
        o = t.height()
    }), n.fn.parallaxLiquidImg = function(i, scale, scaleFraction, reverse, e) {
        var l, r = n(this);
        var canScale = scale ? 1 : 0;
        var scale = scale ? scale : 1.2;
        var scaleFraction = scaleFraction ? scaleFraction : 0.001;
        var lastScrollPos = 0;
        var scrollDir = '';
        function u() {
            var e = t.scrollTop();
            
            r.each(function() {
                var t = n(this),
                    u = t.offset().top,
                    tHeight = t.outerHeight(),
                    uOffesetBottom = u + tHeight;

	            if(e > lastScrollPos) {
	            	scrollDir = 'forward';
	            } else{
	            	scrollDir = 'reverse';
	            }

				lastScrollPos = e;
                if (u < n(window).height()+e && uOffesetBottom > e) {
                	if (scrollDir == 'forward') {
                		scale = scale + scaleFraction;
                	} else {
                		scale = scale - scaleFraction;
                	}
                }

                if (reverse) {
                    if (t.attr('data-parallax-scale')) {
                        u + l(t) < e || u > e + o || (
                            n(window).width() > 1050 
                                ? (anime({targets: r[0], translateY: i / 6 * (u - e) + "px", scale: canScale ? scale : 1}))
                                : r.css("transform", "translateY(0px)")
                        )
                    } else {
                        u + l(t) < e || u > e + o || (
                            n(window).width() > 1050 
                                ? (anime({targets: r[0], translateY: i / 20 * -(u - e) + "px", scale: canScale ? scale : 1}))
                                : r.css("transform", "translateY(0px)")
                        )
                    }
                } else {
                    if (t.attr('data-parallax-scale')) {
                        u + l(t) < e || u > e + o || (
                            n(window).width() > 1050 
                                ? (anime({targets: r[0], translateY: i / 6 * -(u - e) + "px", scale: canScale ? scale : 1}))
                                : r.css("transform", "translateY(0px)")
                        )
                    } else {
                        u + l(t) < e || u > e + o || (
                            n(window).width() > 1050 
                                ? (anime({targets: r[0], translateY: i / 20 * (u - e) + "px", scale: canScale ? scale : 1}))
                                : r.css("transform", "translateY(0px)")
                        )
                    }
                }
            })
        }(arguments.length < 1 || null === i) && (i = 1), (arguments.length < 2 || null === e) && (e = !0), l = e ? function(n) {
            return n.outerHeight(!0)
        } : function(n) {
            return n.height()
        }, t.bind("scroll", u).resize(u), u()
    }
}(jQuery);
