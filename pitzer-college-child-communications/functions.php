<?php
/**
 * Enqueue scripts and styles.
 */
function foundation_6_child_scripts() {

	wp_enqueue_style( 'foundation-style',  get_template_directory_uri() . '/css/foundation.min.css' );

	wp_enqueue_style( 'foundation-6-parent-style',  get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( 'foundation-app-style', get_template_directory_uri() . '/css/app.css' );

	wp_enqueue_style( 'foundation-6-child-style', get_stylesheet_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'foundation_6_child_scripts' );

function register_sidebar_menu() {

    register_nav_menu('foundation-6-sidebar',__( 'Sidebar Menu' ));

}

add_action( 'init', 'register_sidebar_menu' );

/*
 * Replace excerpt [...] with Read More
 */

function wpdocs_excerpt_more( $more ) {
    return ' <a href="' . get_the_permalink() . '" rel="nofollow">[Read More...]</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
