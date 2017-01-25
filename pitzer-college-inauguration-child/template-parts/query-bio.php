<?php

// The Query
$the_query = new WP_Query( array( 'category_name' => 'biography' ) );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();

		echo '<div class="row biography">';

			echo '<div class="small-12 medium-8 small-centered">';

				echo '<h1 class="entry-title">' . get_the_title() . '</h1>';

				echo the_content();

				get_template_part( 'acf/acf' , 'flexible-fields' );

				get_template_part('template-parts/edit-post-link');

			echo '</div>';

		echo '</div>';
	}

	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}
