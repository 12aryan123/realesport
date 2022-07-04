(function() {
    "use strict";

    document
        .querySelector('[data-toggle="offcanvas"]')
        .addEventListener("click", function() {
            document.querySelector(".offcanvas-collapse").classList.toggle("open");
        });
})();
// video slider
jQuery(document).ready(function($) {
    var $owl = $('.video-slider');
    $owl.children().each(function(index) {
        $(this).attr('data-position', index);
    });

    $owl.owlCarousel({
        stagePadding: 50,
        loop: true,
        dots: true,
        center: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
                margin: 5
            },
            600: {
                items: 2
            },
            1000: {
                items: 3.7,
                margin: 0
            }
        }
    });
    //  menu navbar toggle
    $('.navbar-toggler').on('click', function() {
        $(this).toggleClass('change')
    });
    // Aos Animation
    AOS.init({
        easing: 'ease-out',
        duration: 1000,
        offset: 0,
        //startEvent: 'load',
        disable: 'mobile',
    });
});
// owl click event
jQuery(document).on('click', '.owl-item>div', function($) {
    var $speed = 300;
    $owl.trigger('to.owl.carousel', [$(this).data('position'), $speed]);
});