<?php
/**
 * font-page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foundation-6-parent
 */

get_header(); ?>
	<main id="main" class="site-main" role="main">

		<img id="content" class="banner aligncenter" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Parent_Relations_Banner.gif" alt="Parent Relations" width="842" height="76" />

			<?php get_template_part('inc/slideshow-wp-query'); ?>

			<?php get_template_part('inc/promotional-query'); ?>

			<div id="primary" class="row small-up-2 medium-up-3 large-up-4">
				<?php get_template_part('inc/tiles-wp-query'); ?>
			</div><!-- #primary -->



	</main><!-- #main -->

<?php
get_footer();
