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

function edgewood_enqueue() {
    wp_enqueue_style('theme-css', get_stylesheet_directory_uri() . "/dist/app.css", null, 'all');
    wp_enqueue_script( 'jquery' );
}

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
