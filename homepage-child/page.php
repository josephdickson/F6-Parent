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
<div class="row">
	<div id="primary" class="content-area columns small-12">
		<main id="main" class="site-main" role="main">
            <div class="expanded button-group" style="margin-top:0.9375rem">
                <a href="/events/" class="button">Pitzer College Events Calendar</a>
                <a href="/events/community/add" class="button">Add Your Event</a>
                <a href="/event-submission-policy/" class="button secondary">Event Submission Policy</a>
            </div>
            <div id="content" class="columns">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page-alt' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
            </div><!-- #content.columns -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .row -->
<?php get_footer();