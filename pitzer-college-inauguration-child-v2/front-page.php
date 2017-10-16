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

			<div class="events" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/background-image-students-on-mounds-in-front-of-benson-auditorium.jpg');background-repeat:repeat-y;">

				<div class="row">

					<div class="small-12 large-9 columns">

						<h2 id="events" class="text-center">Schedule</h2>

						<strong class="text-center block">Thursday, March 23, 2017</strong>

						<?php get_template_part( 'template-parts/query-event', 'thursday' ); ?>

						<strong class="text-center block">Friday, March 24, 2017</strong>

						<?php get_template_part( 'template-parts/query-event', 'friday' ); ?>

						<strong class="text-center block">Saturday, March 25, 2017</strong>

						<?php get_template_part( 'template-parts/query-event', 'saturday' ); ?>

					</div>

			</div>

		</div>



			<div id="map" class="map">

					<?php get_template_part( 'template-parts/query', 'map' ); ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
