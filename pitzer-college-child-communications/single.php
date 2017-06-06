<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package presidential-transition
 */

get_header(); ?>
<div class="row">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div id="content">
				<div class="columns small-12 large-9 columns">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' , get_post_format() );

						//the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.

					?>

					<?php 	// Requires Advanced Custom Fields
						get_template_part( 'acf/acf' , 'flexible-fields' ); ?>

					
					<?php	// Loops for custom boiler plates
						get_template_part( 'template-parts/boiler-plates' ); ?>


					<?php 	// Display all tags for the post
						the_tags('<p class="tags">Tags: ',', ','</p>') ; ?>

				</div><!-- .columns .large-9 -->

		<div class="small-12 large-3 columns">

			<?php get_template_part('template-parts/sidebar-menu-walker') ?>

		</div>

	<?php 	// Display Summer 2017 Participant content
		if ( in_category( 'summer-2017' )) {
			echo '<div class="row related participant summer-2017">';
				get_template_part('participant/related-summer-2017');
			echo '</div>';
		}
	?>

	<?php	// Show last modified date at bottom of page
		the_modified_date('F j, Y', '<p><span class="published-date"> Page last updated on ', '</span></p>'); ?>

        </div><!-- #content -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .row -->
<?php get_footer(); ?>
