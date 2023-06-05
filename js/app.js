
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
    
    function animateHamburgerMenu() {
        const hamburgerMenu = $("#hamburgerMenu");
        const slideOutMenu = $("#mobileNav");
        
        slideOutMenu.toggleClass('active');
        hamburgerMenu.toggleClass('active');
    }

    $('body').on('click', '#hamburgerMenu',animateHamburgerMenu);
    $('body').on('click', '.mobile-subnav-button', function(e){
        e.preventDefault();
        console.log("Test");
        const button =$(this);
        const subnav = button.next();

        button.toggleClass('active');
        subnav.toggleClass('active');
    });

    //FEATURE CARDS JS
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        disableScrolling: true,
        maxWidth: 1200,
    });


    //Photo Gallery JS
    $('.gallery__main-list').slick({
        dots: false,
        infinite: true,
        arrows: true,
        draggable: true,
        speed: 500,
        fade: false,
        centerMode: true,
        asNavFor: '.gallery__thumb-list',
    });

    $('.gallery__thumb-list').slick({
        dots: false,
        infinite: true,
        arrows: true,
        draggable: true,
        centerMode: false,
        slidesToShow: 5,
        speed: 500,
        fade: false,
        asNavFor: '.gallery__main-list',
    });
})
