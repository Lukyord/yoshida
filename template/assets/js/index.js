// INDEX NOTICE
jQuery(function ($) {
    if ($(".index-butler").length) {
        $(".index-butler").hide();
    }

    if ($(".index-notice").length) {
        $(".index-notice").hide();

        $(".index-notice .close-btn").click(function () {
            $(".index-notice").fadeOut();
        });
    }
});

// INDEX PICKUP PERODUCT
jQuery(function ($) {
    if ($(".swiper.pickup-product").length) {
        $(".swiper.pickup-product").each(function () {
            var _this = $(this);
            var swiper = new Swiper(_this[0], {
                slidesPerView: "auto",
                slidesPerGroup: 1,
                navigation: {
                    nextEl: ".pickup-product-swiper-button-next",
                    prevEl: ".pickup-product-swiper-button-prev",
                },
                effect: "slide",
                loop: false,
                speed: 800,
                slidesPerView: "auto",
                watchSlidesProgress: true,
                watchSlidesVisibility: true,
                centeredSlides: true,
                breakpoints: {
                    768: {
                        slidesPerGroup: 3,
                        centeredSlides: false,
                    },
                    992: {
                        slidesPerGroup: 5,
                        centeredSlides: false,
                    },
                },
            });
        });
    }
});
