<?php
/**
 * Template Name: Holiday 2017
 *
 */

get_header(); ?>

	<div id="primary" class="content-area columns small-12">
		<main id="main" class="site-main" role="main">
			<div class="columns small-12">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				<?php 	// Requires Advanced Custom Fields
					get_template_part( 'acf/acf' , 'flexible-fields' ); ?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
