<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package foundation-6-parent
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'foundation-6-Pitzer-College' ); ?></a>

<div id="page" class="site">

	<header id="masthead" class="site-header row" role="banner">

		<div class="medium-4 columns show-for-medium logo">

			<a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/pitzer_logo_sans_colleges_orange.gif" alt="Pitzer College Logo" width="250" height="96" /></a>

		</div>

		<div class="medium-8 columns show-for-medium">

			<div class="row">
				<?php get_template_part('template-parts/quicklinks-menu-walker') ?>

				<div class="medium-6 columns float-right">
					<?php get_template_part('template-parts/widget-google-search'); ?>
					<?php echo do_shortcode( '[wp_google_searchbox]' ); ?>
				</div>
			</div>

		</div>

	</header><!-- #masthead -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="row">
					<?php get_template_part('template-parts/top-nav'); ?>
				</div>
			</nav>

			<!-- nav ends in footer.php -->
			<nav id="site-navigation" role="navigation">
					<?php get_template_part('template-parts/mobile-nav'); ?>

    <!-- original content goes in this container -->
    <div class="off-canvas-content" data-off-canvas-content>
      <div class="row">
		<?php
		/*
		  	for global variables, since it is being changed or updated from time to time,
			please refer to Related Resources for more information
			https://codex.wordpress.org/WPMU_Functions/restore_current_blog
		*/

			global $switched;
			switch_to_blog(1); // Switch to another blog by ID#
			// The following uses WP_Query to check for Global notifications.
			get_template_part('template-parts/alert-wp-query');
			restore_current_blog(); // Switch back to current blog


		?>
