<?php

// The Query
$the_query = new WP_Query(

	array(
		'category_name' => 'Tile',
		'orderby' => 'date',
		'order' => 'ASC',
		'posts_per_page' => 6
	)

);

// The Loop
if ( $the_query->have_posts() ) {

	echo '<div id="content" class="row small-up-1 medium-up-2 large-up-3 tile">';

		while ( $the_query->have_posts() ) {

			echo '<div class="column">';

				echo '<div class="callout">';

					$the_query->the_post();

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
