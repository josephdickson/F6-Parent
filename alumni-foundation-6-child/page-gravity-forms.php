<?php
/**
 * Template Name: Gravity Form
 *
 * This template for displaying Gravity Forms pages.
 *
 * This template disables Foundation's jquery which conflicts with Gravity Forms
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package presidential-transition
 */

get_header(); 

?>

	<div id="primary" class="content-area columns small-12">
		<main id="main" class="site-main" role="main">
			<div class="columns small-12 large-9">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>

			<div class="small-12 large-3 columns">

		      <?php get_template_part('template-parts/sidebar-menu-walker') ?>

	       </div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();



/**
 * Dequeue the jQuery Script from Foundation.
 *
 * Hooked to the wp_print_scripts action, with a late priority (100),
 * so that it is after the script was enqueued.
 */
function wpdocs_dequeue_script() {
	wp_dequeue_script( 'foundation-jquery' );
	wp_deregister_script( 'foundation-jquery' );
}
add_action( 'wp_print_scripts', 'wpdocs_dequeue_script', 100 );
