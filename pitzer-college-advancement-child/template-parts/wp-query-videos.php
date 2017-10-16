<?php

// The Query
$the_query = new WP_Query(

	array(
		'category_name' => 'Video',
		'orderby' => 'date',
		'order' => 'ASC',
		'posts_per_page' => 2
	)

);

// The Loop
if ( $the_query->have_posts() ) {

	echo '<div class="row small-up-1 medium-up-1 large-up-2">';

		while ( $the_query->have_posts() ) {

			echo '<div class="column">';

				echo '<div class="callout">';

					$the_query->the_post();

					echo '<strong>' . get_the_title() . '</strong>';

					the_content();

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
