jQuery(function ($) {
    // Product Carousel
    if (!$(".product-carousel .swiper").length == 0) {
        var galleryThumbs = new Swiper(".product-carousel .swiper", {
            effect: "slide",
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
            breakpoints: {
                991: {
                    effect: "fade",
                },
            },
        });

        $(".product-thumbs-grid .thumb").on("click", function () {
            var slideIndex = $(this).data("slide");
            galleryThumbs.slideToLoop(slideIndex);
            updateActiveThumbnail(slideIndex);
        });

        function updateActiveThumbnail(index) {
            $(".product-thumbs-grid .thumb").removeClass("active");
            $(".product-thumbs-grid .thumb").eq(index).addClass("active");
        }
        updateActiveThumbnail(0);
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
        if (window.innerWidth <= 991) {
            Fancybox.bind("[data-fancybox='gallery']", {
                Toolbar: {
                    display: {
                        left: ["infobar"],
                        middle: [],
                        right: ["thumbs", "close"],
                    },
                },
            });
        } else {
            Fancybox.close();
        }
    }

    onWindowResize(initFancybox);
});
