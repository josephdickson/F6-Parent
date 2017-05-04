<?php
/**
 * 
 * Template Name: 2017 Summer Participant
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

				<?php   // Participant WP Query
					get_template_part( 'template-parts/wp-query-2017-summer-participant' ); ?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
