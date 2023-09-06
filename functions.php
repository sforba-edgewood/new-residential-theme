<?php
add_filter( 'get_comments_number', 'blankslate_comment_count', 0 );
function blankslate_comment_count( $count ) {
    if ( !is_admin() ) {
        global $id;
        $get_comments = get_comments( 'status=approve&post_id=' . $id );
        $comments_by_type = separate_comments( $get_comments );
        return count( $comments_by_type['comment'] );
    } else {
        return $count;
    }
}

function init_enqueue() {

		// Deregister the jquery version bundled with WordPress.
		wp_deregister_script( 'jquery' );

		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1',  array('strategy' => 'defer', 'in_footer' => true) );
}

function vendor_enqueue() {
    //Font Awesome
    wp_enqueue_script( 'load-fa', 'https://kit.fontawesome.com/c2421f5429.js',array(), false,  array('strategy' => 'defer')  );

    wp_enqueue_script('shuffle-js', get_template_directory_uri().'/vendor/shuffle/shuffle.min.js', array(), false,  array('strategy' => 'defer'));

    // The core GSAP library
    wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js', array(), '1.0',  array('strategy' => 'defer', 'in_footer' => true) );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js', array('gsap-js'), false, array('strategy' => 'defer') );
     // Your animation code file - with gsap.js passed as a dependency
	wp_register_style('slick-css', get_template_directory_uri() .'/vendor/slick-slider/slick.css');
	wp_register_style('slick-theme-css', get_template_directory_uri() .'/vendor/slick-slider/slick-theme.css');
    wp_enqueue_script('slick-min-js', get_template_directory_uri().'/vendor/slick-slider/slick.min.js', array(), false,  array('strategy' => 'defer'));

    wp_register_style('lightbox-min-css', get_template_directory_uri() .'/vendor/lightbox/css/lightbox.min.css');
    wp_enqueue_script('lightbox-min-js', get_template_directory_uri().'/vendor/lightbox/js/lightbox.min.js', array(), '1.0', array('strategy' => 'defer', 'in_footer' => true));

    wp_enqueue_style('slick-css');
	wp_enqueue_style('slick-theme-css');
    wp_enqueue_style('lightbox-min-css');
}


function edgewood_enqueue() {
    wp_enqueue_style('theme-css', get_stylesheet_directory_uri() . "/dist/app.css", null, 'all');
    wp_enqueue_script('app-js', get_stylesheet_directory_uri() . "/js/app.js", array('gsap-js'), '1.0.0', array('strategy' => 'defer', 'in_footer' => true));
}

function fonts_enqueue() {
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap', false ); 
}

add_action( 'wp_enqueue_scripts', 'init_enqueue' );
add_action( 'wp_enqueue_scripts', 'fonts_enqueue' );
add_action( 'wp_enqueue_scripts', 'vendor_enqueue' );
add_action( 'wp_enqueue_scripts', 'edgewood_enqueue' );


if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Global Settings',
        'menu_title'    => 'Global Settings',
        'menu_slug'     => 'global-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'dashicons-admin-site',
    ));
}
