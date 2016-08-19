<?php 
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package presidential-transition
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="small-12 large-10 columns">


<?php 

$post = $wp_query->post;
			// To hide featured image on post
			if ( in_category('remove-featured-image-on-post') ) {

				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'no-featured-image' , get_post_format() );

				endwhile; // End of the loop.
			}

			elseif ( in_category('redirect') ) {

				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/redirect', get_post_format() );

				endwhile; // End of the loop.
			}

			else {
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' , get_post_format() );

				endwhile; // End of the loop.
			}
?>

			</div><!-- small-12 large-8 columns -->
			<div class="small-12 large-2 columns">
				<?php get_template_part('inc/sidenav-wp-query'); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
