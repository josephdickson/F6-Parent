<?php
$current_post_ID = get_the_ID(); // the post's id is assigned to $current_post_ID
$the_query = new WP_Query( 'post_type=page&post_parent=' . $current_post_ID ); // current post ID provides childen if any

echo '<div class="row small-up-1 medium-up-2 large-up-3 orientation-tiles">';

// The Loop
if ( $the_query->have_posts() ) {

	echo '<div class="row small-up-1 medium-up-2 large-up-3 orientation-tiles">';
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			echo '<div class="column">';
				if ( has_post_thumbnail() ) {
					echo '<a href="'. get_permalink() . '">';
					the_post_thumbnail('thumbnail');
					echo '</a>';
				} 
			echo '<a class="button expanded" href="'. get_permalink() . '">' . get_the_title() . '</a>';
			echo '</div>';
		}
	echo '</div>';
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();