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
			<?php
			// The Query
			$the_query = new WP_Query(

				array(
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => 9
				)

			);

			// The Loop
			if ( $the_query->have_posts() ) {

				echo '<div id="content" class="row small-up-1 medium-up-2 large-up-3 tile">';

					while ( $the_query->have_posts() ) {

						echo '<div class="column">';

							echo '<div class="callout">';

								$the_query->the_post();


									if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

											the_post_thumbnail();
										}

										else {

										}

											echo '<a href="' . get_permalink() . '">';

												echo '<header id="content" class="entry-header">';

													the_title( '<h1 class="entry-title">', '</h1>' );

												echo '</header><!-- .entry-header -->';

											echo '</a>';



								the_excerpt();

								get_template_part( 'template-parts/edit-post-link' );

							echo '</div>';

						echo '</div>';

					}

				echo '</div>';

				/* Restore original Post Data */
				wp_reset_postdata();

			} else {

				// no posts found

			}
		 ?>
		</main><!-- #main -->

	</div><!-- #primary -->

</div>

<?php get_footer();
