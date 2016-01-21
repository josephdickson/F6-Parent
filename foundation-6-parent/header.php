<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package presidential-transition
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'presidential-transition' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<a href="http://www.pitzer.edu/"><img src="<?php bloginfo('template_directory'); ?>/img/pitzer_logo_sans_colleges_orange.gif" alt="Pitzer College Logo" width="250" height="96" /></a>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="title-bar" data-responsive-toggle="primary-menu" data-hide-for="medium">
					<button class="menu-icon" type="button" data-toggle></button>
						<div class="title-bar-title">Menu</div>
				</div><!-- .title-bar -->
				<div id="primary-menu" class="top-bar">
					<?php get_template_part('inc/primary-menu-walker') ?>
				</div><!-- #primary-menu .top-bar -->
			</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
