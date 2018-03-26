    var swiper1 = new Swiper('.hero-slide-container', {
        slidesPerView: 4,
        spaceBetween: 5,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.hero-slide-pagination',
            clickable: true,
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 5,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 5,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 5,
            }
        }
    });

    var swiper2 = new Swiper('.blog-slide-container', {
        slidesPerView: 5,
        spaceBetween: 5,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.blog-slide-pagination',
            clickable: true,
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 5,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 5,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 5,
            }
        }
    });

    var swiper3 = new Swiper('.gallery-slide-container', {
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.gallery-slide-pagination',
            clickable: true,
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 5,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 5,
            }
        }
    });


    jarallax(document.querySelectorAll('.jarallax'), {
        speed: 0.2
    });


    var js_countdown = jQuery('#countdown').data('countdown');
    jQuery('#countdown').countdown(js_countdown, function (event) {
        jQuery(this).html(event.strftime('<ul class="countdown_timer text-center text-metallics">'
            + '<li class="col-3 col-lg-3"><div class="shape-countdown"><span class="time"> %D </span><span class="meta"> days </span></div></li>'
            + '<li class="col-3 col-lg-3"><div class="shape-countdown"><span class="time"> %H </span><span class="meta"> Hours </span></div></li>'
            + '<li class="col-3 col-lg-3"><div class="shape-countdown"><span class="time"> %M </span><span class="meta"> Mins </span></div></li>'
            + '<li class="col-3 col-lg-3"><div class="shape-countdown"><span class="time"> %S </span><span class="meta"> Second </span></div></li>'
            + '</ul>'));
    });


