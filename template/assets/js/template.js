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

// TEMPLATE SINGLE BACKGROUND IMAGE
// jQuery(function ($) {
//     if ($(".related-story .background").length) {
//         $(".related-story .background").each(function () {
//             var backgroundImage = $(this).data("background");
//             $(this).css("background", "url(" + backgroundImage + ")");
//             $(this).css("--background-image", "url(" + backgroundImage + ")");
//         });
//     }
// });
