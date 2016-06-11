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

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'foundation-6-Pitzer-College' ); ?></a>

	<header id="masthead" class="site-header row" role="banner">
		<div class="medium-4 columns show-for-medium logo">
			<a href="http://www.pitzer.edu/"><img src="<?php bloginfo('template_directory'); ?>/img/pitzer_logo_sans_colleges_orange.gif" alt="Pitzer College Logo" width="250" height="96" /></a>
		</div>

		<div class="medium-8 columns show-for-medium">
			<?php get_template_part('inc/quicklinks-menu-walker') ?>
		</div>

	</header><!-- #masthead -->

			<!-- nav ends in footer.php -->
			<nav id="site-navigation" class="main-navigation" role="navigation"> 
				<div class="row">
					<?php get_template_part('inc/top-nav'); ?>
				</div>
			</nav>

    <!-- original content goes in this container -->
    <div class="off-canvas-content" data-off-canvas-content>
      <div class="row expanded">
