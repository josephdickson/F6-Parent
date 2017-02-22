<?php

// The Query
$the_query = new WP_Query( array( 'category_name' => 'map' ) );

// The Loop
if ( $the_query->have_posts() ) {

	while ( $the_query->have_posts() ) {
		$the_query->the_post();

		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

			echo '<div class="small-12 large-10 small-centered">';  ?>

				<a href="http://pitweb.pitzer.edu/about/interactive-pitzer-college-campus-map/" title="Pitzer College Campus Map" target="blank">
				<?php the_post_thumbnail(); ?>
				</a>
		<?php

			echo '<span class="featured-caption">' . get_post(get_post_thumbnail_id())->post_excerpt . '</span>'; // Grabs Caption associated with the Media File / Image

			echo '</div>';

		}

		else { // Do nothing, you can place code here for a fallback when there isn't a featured image set on the page

		}

		get_template_part('template-parts/edit-post-link');
	}

	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}
