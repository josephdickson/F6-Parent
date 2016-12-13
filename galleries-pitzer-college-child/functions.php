<?php

/**
 * Proper way to enqueue scripts and styles
 */
function art_galleries_scripts() {

;
//	Enqueue Stylesheets in proper order
	wp_enqueue_style( 'reverie-normalize-stylesheet', get_template_directory_uri() . '/css/normailize.css' );
	wp_enqueue_style( 'reverie-foundation-stylesheet', get_template_directory_uri() . '/css/foundation.css' );	
	wp_enqueue_style( 'pitzer-all', get_template_directory_uri() . '/main.css' );
	wp_enqueue_style( 'reverie-stylesheet', get_stylesheet_uri() );
	wp_enqueue_script( 'script-name', get_stylesheet_directory_uri() . '/js/custom-jquery.js', array(), '1.0.0', true); 

}

add_action( 'wp_enqueue_scripts', 'art_galleries_scripts' );

add_action( 'after_setup_theme_galleries', 'galleries_theme_support' );
function galleries_theme_support() {
    register_nav_menu( 'primary', __( 'Primary Menu', 'galleries' ) );
    register_nav_menu( 'utility', __( 'Utility Menu', 'galleries' ) );
}
?>