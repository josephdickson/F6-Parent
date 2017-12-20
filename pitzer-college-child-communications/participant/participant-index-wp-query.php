<?php
/* This WP_Query loop populates the Participant page's editions and is
 * updated by category name and tag combination.
 *
 */
// The Query
$the_query = new WP_Query( array( 'category_name' => 'participant', 'tag' => 'magazine', 'offset' => 1  ) );

// The Loop
if ( $the_query->have_posts() ) {

	echo '<div class="row small-up-1 medium-up-3 large-up-4">';

	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$posttags = get_the_tags();

		echo '<div class="column">';
		echo '<div class="callout special-item">';

		// check if the post has a Post Thumbnail assigned to it.
		if ( has_post_thumbnail() ) {
			echo '<a href="' . get_permalink() . '">';
			the_post_thumbnail('400x400');
			echo '</a>';
		}

		echo '<a href="' . get_permalink() . '"><strong>' . get_the_title() . '</strong></a>';

		the_excerpt();

		// Edit link added to end of post
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
