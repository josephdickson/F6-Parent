<?php

// The Query
$the_query = new WP_Query( array( 'category_name' => 'biography' ) );

// The Loop
if ( $the_query->have_posts() ) {

	echo '<div class="row small-up-1 medium-up-2 large-up-2">';

	while ( $the_query->have_posts() ) {
		$the_query->the_post();

		echo '<div class="biography column">';

			echo '<h1 class="text-center entry-title">' . get_the_title() . '</h1>';

			echo '<span class="block serif text-center">' . get_the_excerpt() . '</span>';

				get_template_part( 'acf/acf' , 'flexible-fields' );

				get_template_part('template-parts/edit-post-link');

		echo '</div>';
	}

	echo '</div>';

	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}
