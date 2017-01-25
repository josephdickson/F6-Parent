<?php

// The Query
$the_query = new WP_Query( array(
		'category_name' => 'events',
		'tag' => 'thursday'
	) );

// The Loop
if ( $the_query->have_posts() ) {

	echo '<div class="row small-up-1 medium-up-2 large-up-3">';

						while ( $the_query->have_posts() ) {

							$the_query->the_post();

								echo '<div class="column">';


							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

					the_post_thumbnail();
					echo '<span class="featured-caption">' . get_post(get_post_thumbnail_id())->post_excerpt . '</span>'; // Grabs Caption associated with the Media File / Image

				}

							else { // Do nothing, you can place code here for a fallback when there isn't a featured image set on the page

							}

							echo '<h1 class="entry-title">' . get_the_title() . '</h1>';

							echo the_content();

							get_template_part( 'template-parts/edit-post-link' );

					echo '</div>';

			}

	echo '</div>';

	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}
