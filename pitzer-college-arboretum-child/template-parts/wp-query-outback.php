<?php

// The Query
$the_query = new WP_Query( array( 'category_name' => 'video'  ) );

// The Loop
if ( $the_query->have_posts() ) {

	while ( $the_query->have_posts() ) {
		$the_query->the_post();

		the_content();

		// Edit link added to end of post
		get_template_part( 'template-parts/edit-post-link' );

	}

	wp_reset_postdata();

} else {
	// no posts found
}
