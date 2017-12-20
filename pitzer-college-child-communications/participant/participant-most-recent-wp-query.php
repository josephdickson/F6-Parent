<?php
/* This WP_Query loop populates the Participant page's editions and is
 * updated by category name and tag combination.
 *
 */
// The Query
$the_query = new WP_Query( array( 'category_name' => 'participant', 'tag' => 'magazine', 'posts_per_page' => 1  ) );

// The Loop
if ( $the_query->have_posts() ) {

	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$posttags = get_the_tags();

		// check if the post has a Post Thumbnail assigned to it.
		if ( has_post_thumbnail() ) {
			echo '<a href="' . get_permalink() . '">';
			the_post_thumbnail('medium', array( 'class' => 'alignright' ) );
			echo '</a>';
		}

		echo '<p><strong>' . get_the_title() . '</strong></p>';

		// display the content
		the_content();

		// Edit link added to end of post
		get_template_part( 'template-parts/edit-post-link' );

	}

	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}
