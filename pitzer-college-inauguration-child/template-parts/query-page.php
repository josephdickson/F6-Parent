<?php

// The Query
$the_query = new WP_Query( array( 'category_name' => 'uncategorized' ) );

// The Loop
if ( $the_query->have_posts() ) {

	while ( $the_query->have_posts() ) {
		$the_query->the_post();

		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			echo '<div class="small-12 featured-image">';
			the_post_thumbnail();
			echo '<span class="featured-caption">' . get_post(get_post_thumbnail_id())->post_excerpt . '</span>'; // Grabs Caption associated with the Media File / Image
			echo '</div>';
		}

		else { // Do nothing, you can place code here for a fallback when there isn't a featured image set on the page

		}

		get_template_part('template-parts/menu');

		echo '<h1 class="entry-title text-center">' . get_the_title() . '</h1>';

		echo the_content();

		get_template_part( 'template-parts/edit-post-link' );
	}

	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}
