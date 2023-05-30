
$(document).ready(function() {
    console.log('hello world');
    $('.hero-slider').slick({
        // dots: true,
        infinite: true,
        // arrows: true,
        draggable: true,
        speed: 500,
        fade: false,
        cssEase: 'linear'
    });
})
