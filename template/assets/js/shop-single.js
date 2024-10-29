// SHOP SINGLE SWIPER
jQuery(function ($) {
    if ($(".swiper.shop-images").length) {
        var swiper = new Swiper(".swiper.shop-images", {
            effect: "fade",
            speed: 800,
            slidesPerView: "auto",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });
    }
});

// MATCH HEIGHT CONTENT CARD
jQuery(function ($) {
    if ($(".shop-single .content-card .title").length) {
        $(".shop-single .content-card .title").matchHeight({
            byRow: true,
        });
    }
});
