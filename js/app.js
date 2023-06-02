
$(document).ready(function() {
    console.log('hello world');
    //HERO MAIN JS
    $('.hero-slider').slick({
        // dots: true,
        infinite: true,
        // arrows: true,
        draggable: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });

    gsap.fromTo(".hero-slide-content h1", { y: 100, duration: 1, opacity: 0}, { y: -0, duration: 1, opacity: 1}).delay(0.1);
    gsap.fromTo(".hero-slide-content h2", { y: 100, duration: 1, opacity: 0}, { y: -0, duration: 1, opacity: 1}).delay(0.3);
    gsap.fromTo(".hero-slide-cta-wrap", { y: 100, duration: 1, opacity: 0}, { y: -0, duration: 1, opacity: 1}).delay(0.5);

    $('.hero-slider').on('beforeChange', function(){
        gsap.fromTo(".hero-slide-content h1", { y: 100, duration: 1, opacity: 0}, { y: -0, duration: 1, opacity: 1}).delay(0.1);
        gsap.fromTo(".hero-slide-content h2", { y: 100, duration: 1, opacity: 0}, { y: -0, duration: 1, opacity: 1}).delay(0.3);
        gsap.fromTo(".hero-slide-cta-wrap", { y: 100, duration: 1, opacity: 0}, { y: -0, duration: 1, opacity: 1}).delay(0.5);
    });
    
    $('body').on('click', '#hamburgerMenu', function() {
        gsap.from(".mobile-nav", { x: 1000, duration: 1}, { x: 0, duration: 1}).delay(0.1);
    })
    //FEATURE CARDS JS

    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        disableScrolling: true,
        maxWidth: 1200,
    });
})
