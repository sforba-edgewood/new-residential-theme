
$(document).ready(function() {
    console.log('hello world');

    //Handle Scroll Animations for Header Content
    $(function(){
        let lastScrollTop = 0, delta = 5;
        $(window).scroll(function(){
            let nowScrollTop = $(this).scrollTop();
            const top_banner = $(".top-banner");
            const contact_banner = $(".contact-banner");
            const header = $("#header");
            const sem = $('.sem');

            if(Math.abs(lastScrollTop - nowScrollTop) >= delta){
                if (nowScrollTop > lastScrollTop){
                    // ACTION ON SCROLLING DOWN 
                    // console.log("scroll down ", nowScrollTop );
                    if(nowScrollTop > 5) {
                        top_banner.addClass("scroll-hide");
                        contact_banner.addClass("scroll-hide");
                        header.addClass("scroll");
                        sem?.addClass('scroll');
                    }
                } else {
                    // ACTION ON SCROLLING UP 
                    // console.log("scroll up ", nowScrollTop );
                    if(nowScrollTop <5) {
                        top_banner.removeClass("scroll-hide");
                        contact_banner.removeClass("scroll-hide");
                        header.removeClass("scroll");
                        sem?.removeClass('scroll');
                    }

               }
            lastScrollTop = nowScrollTop;
            }
        });
    });

    //HERO MAIN JS
    $('.sem__hero-slider').slick({
        // dots: true,
        infinite: true,
        arrows: false,
        draggable: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });

    $('.hero-slider').slick({
        // dots: true,
        infinite: true,
        // arrows: true,
        draggable: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });
    gsap.defaults({ overwrite: true });
    let h1_tween = gsap.fromTo(".hero-slide-content h1", { y: 100, duration: 1, opacity: 0}, { y: -0, duration: 1, opacity: 1}).delay(0.1);
    let h2_tween =  gsap.fromTo(".hero-slide-content h2", { y: 100, duration: 1, opacity: 0}, { y: -0, duration: 1, opacity: 1}).delay(0.3);
    let content_tween = gsap.fromTo(".hero-slide-cta-wrap", { y: 100, duration: 1, opacity: 0}, { y: -0, duration: 1, opacity: 1}).delay(0.5);

    $('.hero-slider').on('beforeChange', function(){
        h1_tween.play(0);
        h2_tween.play(0);
        content_tween.play(0); 
    });
    
    function animateHamburgerMenu() {
        const hamburgerMenu = $("#hamburgerMenu");
        const slideOutMenu = $("#mobileNav");
        $('html, body').toggleClass('disable-scroll');
        
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
        maxHeight: 600,
    });


    // //Photo Gallery JS
    // const Shuffle = window.Shuffle;
    const Shuffle = window.Shuffle;
    const gallery_element = document.getElementById('photo-gallery');


    if(gallery_element) {

        const photoGallery = new Shuffle(gallery_element, {
            itemSelector: '.gallery-item',
            sizer: '.ep-spacer',
            filterMode: Shuffle.FilterMode.ALL,
            speed: 750,
        });

        let photo_array = [];
        $('.filter-options li').on('click', function () { 
            const t = $(this).attr("id");
            console.log(t);
            if($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                
            } else {
                $(this).addClass('selected');
            }

            if(photo_array.includes(t)) {
                
                photo_array = photo_array.filter(function(item) {
                    return item !== t;
                });
                console.log(photo_array);
            } else {
                if(t == 'all-items') {
                    photoGallery.filter(Shuffle.ALL_ITEMS);   
                    photo_array = []; 
                    $('.filter-options li').removeClass('disabled');
                    $('.filter-options li').removeClass('selected');
                } else {
                    photo_array.push(t);
                }
            }


            photoGallery.filter(photo_array);
        });
    }
    

    //Static Floorplans

    const fp_element = document.getElementById('staticFloorplans');
    if(fp_element) {
        const floorplanGallery = new Shuffle(fp_element, {
            itemSelector: '.static_floorplans__item',
            sizer: '.ep-spacer',
            filterMode: Shuffle.FilterMode.ALL,
            speed: 750,
        });
    
        let floorplan_array = [];
        $('.filter-options li').on('click', function () { 
            const t = $(this).attr("id");
            if($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                
            } else {
                $(this).addClass('selected');
            }

            if(floorplan_array.includes(t)) {
                
                floorplan_array = floorplan_array.filter(function(item) {
                    return item !== t;
                });
    
            } else {
                if(t == 'all-items') {
                    floorplanGallery.filter(Shuffle.ALL_ITEMS);   
                    floorplan_array = []; 
                    $('.filter-options li').removeClass('disabled');
                    $('.filter-options li').removeClass('selected');
                } else {
                    floorplan_array.push(t);
                }
            }


            floorplanGallery.filter(floorplan_array);
        });
    }

    //Appointment Modal
    function handleAppointmentClick(e) {
        e.preventDefault();
        e.stopPropagation();

        const modal = $("#appointmentModal");
        $('html, body').toggleClass('disable-scroll');
        modal.toggleClass('active');
    }
    //APPOINTMENT MODAL JS
    $('body').on('click', '#appointmentModalButton',  function(e) {
        handleAppointmentClick(e)
    });

    $('body').on('click', '#apppointmentCloseButton', function(e) {
        handleAppointmentClick(e)
    });

})
