<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package presidential-transition
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="intro row">

				<?php get_template_part( 'template-parts/query', 'page' ); ?>

			</div>

				<?php get_template_part( 'template-parts/query', 'bio' ); ?>

			<div class="events inner-shadow" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/background-image-students-on-mounds-in-front-of-benson-auditorium.jpg');background-repeat:no-repeat;">

				<div class="row">

					<div class="small-12 medium-10 large-8 medium-offset-1 large-offset-2">

						<h2 id="events" class="text-center">Schedule</h2>

						<strong class="text-center block">Thursday, March 23rd 2017</strong>

						<?php get_template_part( 'template-parts/query-event', 'thursday' ); ?>

					</div>

				</div>

				<div class="row">

					<div class="small-12 medium-10 large-8 medium-offset-1 large-offset-2">

						<strong class="text-center block">Friday, March 24th 2017</strong>

						<?php get_template_part( 'template-parts/query-event', 'friday' ); ?>

					</div>

				</div>


				<div class="row">

					<div class="small-12 medium-8 large-6 medium-offset-2 large-offset-3">

						<strong class="text-center block">Saturday, March 25th 2017</strong>

						<?php get_template_part( 'template-parts/query-event', 'saturday' ); ?>

					</div>

				</div>

			</div>

			<div id="map" class="map">

				<div class="small-12 medium-8 small-centered">

					<iframe src="http://www.myatlascms.com/embed.php?id=564" width="100%" height="800" frameBorder="0" scrolling="no" border="0" style="border:0px solid #fff; margin:0; padding:0;"><p>Your browser does not support iframes.</p></iframe>

					<a class="button expanded" href="javascript:void(0)" onclick="window.open('http://www.myatlascms.com/embed.php?id=564','','fullscreen=yes,scrollbars=no')">Open map in new window</a>

					<?php // get_template_part( 'template-parts/query', 'map' ); ?>

				</div>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
