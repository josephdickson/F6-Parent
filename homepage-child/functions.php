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

/**
 * Register our sidebars and widgetized areas.
 *
 */
function events_widgets_init() {

	register_sidebar( array(
		'name'          => 'Events',
		'id'            => 'events',
		'before_widget' => '<div class="homepage-events">',
		'after_widget'  => '</div>',
		'before_title'  => '<strong class="rounded">',
		'after_title'   => '</strong>',
	) );

}
add_action( 'widgets_init', 'events_widgets_init' );