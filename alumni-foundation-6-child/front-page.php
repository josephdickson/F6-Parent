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

				<?php get_template_part('inc/slideshow-wp-query'); ?>

			<div class="row expanded">

				<?php get_template_part('inc/tiles-wp-query'); ?>

			</div>

			<div id="primary" class="row">

				<div class="small-12 medium-7 columns">

					<?php get_template_part('inc/excerpt-most-recent'); ?>

				</div>

				<div class="small-12 medium-5 columns margin-top">

					<div class="callout">

						<?php get_template_part('inc/promotional-query'); ?>

					</div>

				</div>

			</div><!-- #primary -->

				<!-- .font-page-lists -->
				<?php // get_template_part('inc/menu-connected'); ?>

	</main><!-- #main -->

<?php
get_footer();
