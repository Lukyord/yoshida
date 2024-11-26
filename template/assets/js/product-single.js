// jQuery(function ($) {
//     // Product Carousel
//     if (!$(".product-carousel .swiper").length == 0) {
//         var galleryThumbs;

//         function updateActiveThumbnail(index) {
//             $(".product-thumbs-grid .thumb").removeClass("active");
//             $(".product-thumbs-grid .thumb").eq(index).addClass("active");
//         }

//         function initializeSwiper() {
//             if (galleryThumbs) {
//                 galleryThumbs.destroy(true, true);
//             }

//             var isSmallScreen = window.innerWidth < 991;
//             var swiperEffect = isSmallScreen ? "slide" : "fade";

//             galleryThumbs = new Swiper(".product-carousel .swiper", {
//                 effect: swiperEffect,
//                 speed: 800,
//                 slidesPerView: "auto",
//                 navigation: {
//                     nextEl: ".product-carousel-swiper-button-next",
//                     prevEl: ".product-carousel-swiper-button-prev",
//                 },
//                 pagination: {
//                     el: ".swiper-pagination",
//                     clickable: true,
//                 },
//                 watchSlidesVisibility: true,
//                 watchSlidesProgress: true,
//                 on: {
//                     slideChange: function () {
//                         updateActiveThumbnail(this.realIndex);
//                     },
//                 },
//             });

//             updateActiveThumbnail(0);
//         }

//         onWindowResize(initializeSwiper, (delay = 500));

//         $(".product-thumbs-grid .thumb").on("click", function () {
//             var slideIndex = $(this).data("slide");
//             galleryThumbs.slideToLoop(slideIndex);
//             updateActiveThumbnail(slideIndex);
//         });
//     }

//     // Zoom On Hover
//     function initEzPlus() {
//         if (window.innerWidth > 991 && !("ontouchstart" in window)) {
//             $(".zoom-on-hover").ezPlus();
//         } else {
//             $(".zoom-on-hover").each(function () {
//                 var $this = $(this);
//                 if ($this.data("ezPlus")) {
//                     $this.data("ezPlus").destroy();
//                 }
//             });
//         }
//     }

//     onWindowResize(initEzPlus);

//     //Fancy Box
//     function initFancybox() {
//         const fancyboxSelector = "[data-fancybox='gallery']";

//         if (window.innerWidth <= 991) {
//             if (!Fancybox.getInstance()) {
//                 Fancybox.bind(fancyboxSelector, {
//                     Toolbar: {
//                         display: {
//                             left: ["infobar"],
//                             middle: [],
//                             right: ["thumbs", "close"],
//                         },
//                     },
//                 });
//             }
//         } else {
//             Fancybox.close();
//             Fancybox.unbind(fancyboxSelector);
//         }
//     }

//     onWindowResize(initFancybox, 500);
// });
