$(document).ready(function() {

    "use strict";

    /* ========================================================================= */
    /*  Navigation Bar
    /* ========================================================================= */

    $(window).scroll(function() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });

    // Navbar Smoothscroll js
    $(function() {
        $('.sec-nav a, #home a').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 70
            }, 1000);
            event.preventDefault();
        });
    });

    // Navbar ScollSpy
    $("body").scrollspy({

        target: ".navbar-collapse",
        offset: 95

    });

    /* ========================================================================= */
    /*  Phone Carousel Header
    /* ========================================================================= */

    // Phone Carousel Header
	$('.inner').owlCarousel({
		loop: true,
        margin: 0,
        autoplay: true,
        rtl: true,
        dots: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
	});

    /* ========================================================================= */
    /*  Header Parallax
    /* ========================================================================= */

    // Parallax
    var $layerParallax = $('.layer-parallax');
		if ( ! Modernizr.touch ) {
			if ( $layerParallax.length > 0 ) {
		    $layerParallax.parallax();
			}
		}
    

    /* ========================================================================= */
    /*  Change Photo On Mobile Services
    /* ========================================================================= */

    $('.features-slider').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        dots: false,
        nav: false,
        rtl: true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    /* Change Button */

    var b = $(".features-slider"),
        k = $(".nav-pills li");
    b.on('changed.owl.carousel', function(event) {
        var n = (event.item.index + 1) - event.relatedTarget._clones.length / 2;
        var o = event.item.count;
        if (n > o || n == 0) {
            n = o - (n % o);
        }

        (n > o || 0 == n) && (n = o - n % o), n--;
        var t = $(".nav-pills li:nth(" + n + ")");
        a(t)

    }), k.on("click", function() {
        var e = $(this).data("owl-item");
        b.trigger("to.owl.carousel", e), a($(this));
    });

    function a(e) {
        k.removeClass("active-icon");
        e.addClass("active-icon");
    }

    /* Change Text */
    var b = $(".features-slider"),
        i = $(".tab-pane");
    b.on('changed.owl.carousel', function(event) {
        var h = (event.item.index + 1) - event.relatedTarget._clones.length / 2;
        var v = event.item.count;
        if (h > v || h == 0) {
            h = v - (h % v);
        }

        (h > v || 0 == h) && (h = v - h % v), h--;
        var w = $(".tab-pane:nth(" + h + ")");
        c(w)

    }), $(".nav-pills li").on("click", function() {
        return false;
        var y = $(this).data("owl-item");
        b.trigger("to.owl.carousel", y), c($(".tab-pane"));
    });

    function c(y) {
        i.removeClass("active");
        y.addClass("active");
    }

    /* ========================================================================= */
    /*  Change Photo On Mobile Services [Homepage Style 02]
    /* ========================================================================= */

    $('.features-slider02').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        dots: false,
        nav: false,
        rtl: true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    /* Change Button */

    var s = $(".features-slider02"),
        q = $(".icon-ser");
    s.on('changed.owl.carousel', function(event) {
        var m = (event.item.index + 1) - event.relatedTarget._clones.length / 2;
        var p = event.item.count;
        if (m > p || m == 0) {
            m = p - (m % p);
        }

        (m > p || 0 == m) && (m = p - m % p), m--;
        var w = $(".icon-ser:nth(" + m + ")");
        x(w)

    }), q.on("click", function() {
        var f = $(this).data("owl-item");
        s.trigger("to.owl.carousel", f), x($(this));
    });

    function x(f) {
        q.removeClass("active-service");
        f.addClass("active-service");
    }

    /* ========================================================================= */
    /*  screenshot Carousel
    /* ========================================================================= */

    $(".screenshot").owlCarousel({
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 2
            },
            600: {
                items: 2
            },
            991: {
                items: 3
            }
        },
        loop: true,
        center: true,
        dots: false,
        nav: true,
        rtl: true,
        navText: ["<i class='fa fa-long-arrow-right'></i>", "<i class='fa fa-long-arrow-left'></i>"],
        autoplay: true

    });

    /* ========================================================================= */
    /*  Testimonial Carousel
    /* ========================================================================= */

    $('.testimonials-style').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 10,
        dots: true,
        nav: false,
        rtl: true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            700: {
                items: 2
            },
            1000: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });

    /* ========================================================================= */
    /*  Statistic Counter
    /* ========================================================================= */

    $('.statis-number').each(function() {
        $(this).appear(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        }, {
            accX: 0,
            accY: 0
        });
    });

    /* ========================================================================= */
    /*  Recent News Carousel
    /* ========================================================================= */

    $('.blog-slider').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 40,
        dots: true,
        nav: false,
        rtl: true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    });

    /* ========================================================================= */
    /*  Recent News Carousel [Homepage Style 02]
    /* ========================================================================= */

    $('.blog-slider02').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 40,
        dots: true,
        rtl: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    /* ========================================================================= */
    /*  Single Post Slider
    /* ========================================================================= */

    $('.slider-post').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 0,
        nav: true,
        navText: ["<i class='fa fa-hand-o-left'></i>", "<i class='fa fa-hand-o-right'></i>"],
        dots: false,
        rtl: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    /* ========================================================================= */
    /*  WOW Plugin
    /* ========================================================================= */

    var wow = new WOW({
        offset: 70, // distance to the element when triggering the animation (default is 0)
        mobile: false // trigger animations on mobile devices (true is default)
    });
    wow.init();

    // End
});

/* ========================================================================= */
/*  Preloader
/* ========================================================================= */

$(window).on("load", function() {
    $(".loader").fadeOut(function() {
        $("#loading-mask").fadeOut("slow");
    });
});

/* ========================================================================= */
/*  Back To Top
/* ========================================================================= */

$(window).on('scroll', function() {
    if ($(this).scrollTop() >= 800) {
        $("#scroll-top").addClass("show");
    } else {
        $("#scroll-top").removeClass("show");
    }
});
$("#scroll-top").on('click', function() {
    $("html, body").animate({
        scrollTop: 0
    }, 1500);
});