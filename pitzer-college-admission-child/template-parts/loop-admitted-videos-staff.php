<?php
// The Query : Set limiter in WP_Query below
$the_query = new WP_Query('category_name=staff-video');
// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();
		$link = get_permalink();
		echo '<a href="' . $link . '">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('large');
		echo the_title() . '</a>';
		}

		else {
			// do nothing
		}

}
wp_reset_postdata();