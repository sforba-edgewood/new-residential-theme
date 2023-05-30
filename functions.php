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
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );
}

function vendor_enqueue() {
	wp_register_style('slick-css', get_template_directory_uri() .'/vendor/slick-slider/slick.css');
	wp_register_style('slick-theme-css', get_template_directory_uri() .'/vendor/slick-slider/slick-theme.css');
    wp_enqueue_script('slick-min-js', get_template_directory_uri().'/vendor/slick-slider/slick.min.js');

    wp_enqueue_style('slick-css');
	wp_enqueue_style('slick-theme-css');
}


function edgewood_enqueue() {
    wp_enqueue_style('theme-css', get_stylesheet_directory_uri() . "/dist/app.css", null, 'all');
    wp_enqueue_script('theme-js', get_stylesheet_directory_uri() . "/js/theme-js.js");
}

add_action( 'wp_enqueue_scripts', 'init_enqueue' );
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
