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
	<div id="primary" class="content-area columns small-12 large-9">
		<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="small-12 large-3 columns">

		<p><strong>Recent posts from <br /> <a href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a></strong></p>

<?php
		$current_post_ID = get_the_ID(); // the post's id is assigned to $current_post_ID

		$the_query = new WP_Query( array(

			// current post is excluded from the loop
			'post_type' => 'post', 'post__not_in' => array( $current_post_ID ),
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => 6

		) );

		// The Loop
		if ( $the_query->have_posts() ) {

			echo '<div id="content" class="row small-up-1 tile">';

				while ( $the_query->have_posts() ) {

					echo '<div class="column">';

						echo '<div class="callout">';

							echo '<a href="' . get_permalink() . '">';

							$the_query->the_post();


								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

										the_post_thumbnail();
									}

									else {

									}

											echo '<header id="content" class="entry-header">';

												the_title( '<h1 class="entry-title">', '</h1>' );

											echo '</header><!-- .entry-header -->';


											the_excerpt();

							echo '</a>';

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

	</div>

</div>
<?php
// get_sidebar();
get_footer();
