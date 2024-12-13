// INDEX ================================================
// INDEX NOTICE
jQuery(function ($) {
    $(".index-notice .close-btn").click(function () {
        $(".index-notice").fadeOut();
    });
});

// INDEX PICKUP PRODUCT
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

// PRODUCT SINGLE ================================================
jQuery(function ($) {
    // Product Carousel
    if (!$(".product-carousel .swiper").length == 0) {
        let galleryThumbs;
        let isSmallScreen = window.innerWidth < 991;
        let activeSlideIndex = 0;

        function updateActiveThumbnail(index) {
            $(".product-thumbs-grid .thumb").removeClass("active");
            $(".product-thumbs-grid .thumb").eq(index).addClass("active");
        }

        function initializeSwiper() {
            const currentIsSmallScreen = window.innerWidth < 991;

            if (currentIsSmallScreen !== isSmallScreen || !galleryThumbs) {
                isSmallScreen = currentIsSmallScreen;

                if (galleryThumbs) {
                    activeSlideIndex = galleryThumbs.realIndex;
                    galleryThumbs.destroy(true, true);
                }

                const swiperEffect = isSmallScreen ? "slide" : "fade";

                galleryThumbs = new Swiper(".product-carousel .swiper", {
                    effect: swiperEffect,
                    speed: 800,
                    slidesPerView: "auto",
                    navigation: {
                        nextEl: ".product-carousel-swiper-button-next",
                        prevEl: ".product-carousel-swiper-button-prev",
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    watchSlidesVisibility: true,
                    watchSlidesProgress: true,
                    on: {
                        slideChange: function () {
                            updateActiveThumbnail(this.realIndex);
                        },
                    },
                });

                galleryThumbs.slideToLoop(activeSlideIndex, 0);
                updateActiveThumbnail(activeSlideIndex);
            }
        }

        onWindowResize(initializeSwiper, (delay = 500));

        $(".product-thumbs-grid .thumb").on("click", function () {
            var slideIndex = $(this).data("slide");
            galleryThumbs.slideToLoop(slideIndex);
            updateActiveThumbnail(slideIndex);
        });
    }

    // Zoom On Hover
    function initEzPlus() {
        if (window.innerWidth > 991 && !("ontouchstart" in window)) {
            $(".zoom-on-hover").ezPlus();
        } else {
            $(".zoom-on-hover").each(function () {
                var $this = $(this);
                if ($this.data("ezPlus")) {
                    $this.data("ezPlus").destroy();
                }
            });
        }
    }

    onWindowResize(initEzPlus);

    //Fancy Box
    function initFancybox() {
        const fancyboxSelector = "[data-fancybox='gallery']";

        if (window.innerWidth <= 991) {
            if (!Fancybox.getInstance()) {
                Fancybox.bind(fancyboxSelector, {
                    Toolbar: {
                        display: {
                            left: ["infobar"],
                            middle: [],
                            right: ["thumbs", "close"],
                        },
                    },
                });
            }
        } else {
            Fancybox.close();
            Fancybox.unbind(fancyboxSelector);
        }
    }

    onWindowResize(initFancybox, 500);
});

// TEMPLATE ================================================
// MATCH HEIGHT CONTENT CARD
jQuery(function ($) {
    if ($(".content-card .title").length) {
        function matchHeightContentCard() {
            $(".content-card .title").matchHeight({
                byRow: true,
            });
        }
        onWindowResize(matchHeightContentCard);
    }
});

// SHOP MAP ================================================
jQuery(function ($) {
    $(".filter-out-shop").on("click", function () {
        $(this).toggleClass("active");
    });
});

// SHOP SINGLE ================================================
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
