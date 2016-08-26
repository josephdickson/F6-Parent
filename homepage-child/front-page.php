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

			<div id="alert" class="row">
				<div class="small-12 columns">
					<?php get_template_part('template-parts/alert-wp-query'); ?>
				</div>
			</div>

			<div id="warning" class="row">
				<div class="small-12 columns">
					<?php get_template_part('template-parts/warning-wp-query'); ?>
				</div>
			</div>

			<div id="notice" class="row">
				<div class="small-12 columns">
					<?php get_template_part('template-parts/notice-wp-query'); ?>
				</div>
			</div>


			<div id="carousel" class="row">
				<div class="small-12 columns">
					<?php get_template_part('template-parts/carousel-wp-query'); ?>
				</div>
			</div>

			<div id="news">
				<div class="row" style="margin-bottom:0.9375rem;">
					<div class="small-12 medium-8 columns">
                        <p><strong style="margin-left:0.75em;">Featured News</strong></p>
                        <hr style="margin-left:0.75em;">
						<?php get_template_part('template-parts/news-wp-query'); ?>
                        <p><strong style="margin-left:0.75em;">Events</strong></p>
                        <?php get_template_part('template-parts/events-wp-query'); ?>
                    </div>
					<div class="small-12 medium-3 medium-offset-1 columns">
						<?php get_template_part('template-parts/tiles-vertical-wp-query'); ?>
					</div>
				</div>
            </div>
			<div id="tiles" class="row" style="margin:1.5em 0;border-top:1px solid #f7941d;padding:1.5em 0;">
				    <?php get_template_part('template-parts/tile-wp-query'); ?>
			</div>

	</main><!-- #main -->

<?php
get_footer();
