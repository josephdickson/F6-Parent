<?php

// The Query --- Manually Loop in pages by page_id number
$args = array(

	'post_type'	=> 'page',
	'post__in'	=> array(2712, 2720, 2105, 1881, 1874, 2110, 3182),
	'orderby' => 'post__in', // Order manually by post__in
	
);

$the_query = new WP_Query($args); // Assign $args to $the_query as an array

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