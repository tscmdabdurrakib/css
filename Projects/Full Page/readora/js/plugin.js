// Avoid `console` errors in browsers that lack a console.

(function ($) {
    "use strict";

    $(document).ready(function () {

        // owlCarousel
        $('.all-slider').owlCarousel({
            loop: false,
            dots: false,
            nav: false,
            margin: 10,
            navigation : true,
            autoplay: false,
            items: 4,
            autoplayTimeout: 1000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 4
                },
                768: {
                    items: 4
                }
            }
        });

    })

})(jQuery);
// Place any jQuery/helper plugins in here.