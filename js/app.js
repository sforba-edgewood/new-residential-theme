
$(document).ready(function() {
    console.log('hello world');

    $(function(){
        let lastScrollTop = 0, delta = 5;
        $(window).scroll(function(){
            let nowScrollTop = $(this).scrollTop();
            const top_banner = $(".top-banner");
            const contact_banner = $(".contact-banner");
            const header = $("#header");
            if(Math.abs(lastScrollTop - nowScrollTop) >= delta){
                if (nowScrollTop > lastScrollTop){
                    // ACTION ON SCROLLING DOWN 
                    console.log("scroll down ", nowScrollTop );
                    if(nowScrollTop > 5) {
                        top_banner.addClass("scroll-hide");
                        contact_banner.addClass("scroll-hide");
                        header.addClass("scroll");
                    }
                } else {
                    // ACTION ON SCROLLING UP 
                    console.log("scroll up ", nowScrollTop );
                    if(nowScrollTop <5) {
                        top_banner.removeClass("scroll-hide");
                        contact_banner.removeClass("scroll-hide");
                        header.removeClass("scroll");
                    }

               }
            lastScrollTop = nowScrollTop;
            }
        });
    });

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
        $('html, body').toggleClass('disable-scroll');
        
        slideOutMenu.toggleClass('active');
        hamburgerMenu.toggleClass('active');
    }

    $('body').on('click', '#hamburgerMenu',animateHamburgerMenu);

    function animateMobileSubNav (e){
        e.preventDefault();
        console.log("Test");
        const button =$(this);
        const subnav = button.next();

        button.toggleClass('active');
        subnav.toggleClass('active');
    }

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
    const gallery_count  = $('.gallery__thumb-list li').length - 1;
    
    console.log(gallery_count);
    $('.gallery__main-list').slick({
        dots: false,
        infinite: true,
        arrows: true,
        draggable: true,
        speed: 500,
        fade: true,
        centerMode: true,
        asNavFor: '.gallery__thumb-list',
    });

    $('.gallery__thumb-list').slick({
        dots: false,
        infinite: true,
        arrows: true,
        draggable: true,
        centerMode: true,
        slidesToShow: gallery_count,
        speed: 500,
        fade: false,
        asNavFor: '.gallery__main-list',
    });
})
