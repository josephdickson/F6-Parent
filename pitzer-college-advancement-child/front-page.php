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

			<div id="primary" class="row expanded">

				<div class="small-12">

					<h1 style="display:none;">Office of College Advancement</h1>
                    <?php get_template_part('template-parts/wp-query-banner'); ?>

				</div>

				<div class="small-12">

					<?php get_template_part('template-parts/wp-query-carousel'); ?>

				</div>
                    <h2 style="display:none;">Giving to Pitzer College</h2>
					<?php get_template_part('template-parts/wp-query-tiles'); ?>

				<div class="small-12">

					<?php get_template_part('template-parts/wp-query-banner-downpage'); ?>

				</div>

				<div class="small-12">
					<?php get_template_part('template-parts/wp-query-videos'); ?>

				</div>

			</div><!-- #primary -->

	</main><!-- #main -->

<?php get_footer();
