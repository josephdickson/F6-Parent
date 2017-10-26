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

	<div id="content" class="columns">

		<div id="carousel" class="row">

			<div class="small-12">

				<h1 class="hide">Pitzer College</h1>

					<?php get_template_part('template-parts/carousel-wp-query'); ?>

			</div>

		</div><!-- #carousel -->

			<div id="news">

				<div class="row">

					<div class="small-12 medium-9 columns">

						<p class="news"><strong><a href="/communications/">Featured News</a></strong></p>

						<hr />

							<div class="row small-up-1 medium-up-2 large-up-2">

								<?php get_template_part('template-parts/news-wp-query'); ?>

							</div>

					</div>

					<div class="small-12 large-3 columns news">

						<?php get_template_part('template-parts/tiles-vertical-wp-query'); ?>

					</div>

				</div><!-- .row -->

			</div><!-- #news -->

		<div class="row">

					<div class="small-12 columns events">

				        	<?php get_template_part('template-parts/widget-events'); ?>

					</div>

		</div><!-- .row -->

		<div id="tiles" class="row">

		    <?php get_template_part('template-parts/tile-wp-query'); ?>

		</div>

	</div><!-- #content.columns -->

	</main><!-- #main -->

<?php
get_footer();
