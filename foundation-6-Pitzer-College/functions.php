<?php
/**
 * foundation-6-parent functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package foundation-6-parent
 */

if ( ! function_exists( 'foundation_6_parent' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function foundation_6_parent() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on foundation-6-parent, use a find and replace
	 * to change 'foundation-6-parent' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'foundation-6-parent', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'foundation-6-parent' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'foundation_6_parent_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'foundation_6_parent' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function foundation_6_parent_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'foundation_6_parent_content_width', 640 );
}
add_action( 'after_setup_theme', 'foundation_6_parent_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function foundation_6_parent_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'foundation-6-parent' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'foundation_6_parent_widgets_init' );

/**
 * Register Global Navigation. Secondary, Quicklinks, Footer Columns
 */
register_nav_menus( array(
	'secondary' => esc_html__( 'Secondary', 'foundation-6-child' ),
	'quicklinks' => esc_html__( 'Quicklinks', 'foundation-6-child' ),
	'footer_column_1' => esc_html__( 'Footer Column 1', 'foundation-6-child' ),
	'footer_column_2' => esc_html__( 'Footer Column 2', 'foundation-6-child' ),
	'footer_column_3' => esc_html__( 'Footer Column 3', 'foundation-6-child' ),
	'footer_column_4' => esc_html__( 'Footer Column 4', 'foundation-6-child' ),
) );

/**
 * Unregister Sidebar Menu for use on child themes
 */

unregister_nav_menu( 'sidebar' ); 

/**
 * Quicklinks for Mobile
 */

class Foundation_Quicklinks_Mobile extends Walker_Nav_Menu {
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);

		// add the dropdown CSS class
		$output .= "\n$indent<ul class=\"nested vertical menu\">\n";
	}

	public function display_element( $element, &$children_elements, $max_depth, $depth = 0, $args, &$output ) {

		//add 'not-click' class to the list item
		$element->classes[] = 'not-click';

		// if element is current or is an ancestor of the current element, add 'active' class to the list item
		$element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';

		// if it is a root eleemtn and the menu is not flat, add 'has-dropdown' class
		// from https://core.trac.wordpress.org/browser/trunk/src/wp-includes/class-wp-walker.php#L140
		$element->has_children = ! empty( $children_elements[ $element->ID ] );
		$element->classes[] = ( $element->has_children && 1 !== $max_depth ) ? 'has-dropdown' : '';

		// call parent method
		parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}

} // end Walker_Nav_Menu

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Custom Walker to extend functionality
 */
require get_template_directory() . '/custom_nav.php';

/**
 * Enqueue scripts and styles.
 */
function foundation_6_parent_scripts() {

	wp_enqueue_style( 'foundation-style',  get_template_directory_uri() . '/css/foundation.min.css' );
    
    wp_enqueue_style( 'foundation-6-parent-style', get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( 'google-web-font-eb-garamond', 'https://fonts.googleapis.com/css?family=EB+Garamond' );

	wp_enqueue_style( 'foundation-app-style', get_template_directory_uri() . '/css/app.css' );

	wp_enqueue_script( 'foundation-6-parent-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'foundation-6-parent-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'foundation-jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '20151221', true );

	wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/js/foundation.js', array(), '20151221', true );

	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array(), '20151221', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'foundation_6_parent_scripts' );


/**
 * A fallback when no navigation is selected by default, otherwise it throws some nasty errors in your face.
 */

function foundation_menu_fallback() {
	echo '<div class="alert-box navigation">';
	// Translators 1: Link to Menus, 2: Link to Customize
  	printf( __( 'Please assign a menu to the primary menu location under %1$s or %2$s the design.', 'foundation' ),
  		sprintf(  __( '<a href="%s">Menus</a>', 'foundation' ),
  			get_admin_url( get_current_blog_id(), 'nav-menus.php' )
  		),
  		sprintf(  __( '<a href="%s">Customize</a>', 'foundation' ),
  			get_admin_url( get_current_blog_id(), 'customize.php' )
  		)
  	);
  	echo '</div>';
}


/* Foundation Shortcodes */
require get_template_directory() . '/inc/foundation-shortcodes/foundation-shortcodes.php';

/**
 * Disable the emoji's
 * https://wordpress.org/plugins/disable-emojis/
 * See Plugin for GPL License and readme.txt version 1.5.1
 */

require get_template_directory() . '/inc/disable-emojis.php';

/**
 * The following Requires the Advanced Custom Fields plugin to display
 * Visit http://advancedcustomfields.com/ for more information
 */

/* Social Networks */
require get_template_directory() . '/inc/social-networks.php';

/* Options Page - Requires Advanced Custom Fields */
require get_template_directory() . '/inc/options-page.php';

/* Flexible Content - Requires Advanced Custom Fields */
require get_template_directory() . '/inc/flexible-content.php';