<?php
/**
 * Template Name: Staff
 */

get_header(); ?>

	<div id="primary" class="content-area">
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

				<?php get_template_part( 'template-parts/wp-query-staff' ); ?>

			</div>
            <div class="small-12 large-3 columns">

		      <?php get_template_part('template-parts/sidebar-menu-walker'); ?>

	       </div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
