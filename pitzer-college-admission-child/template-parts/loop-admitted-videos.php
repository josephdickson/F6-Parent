<?php
// The Query : Set limiter in WP_Query below
$args = array(
	'category_name' => 'admitted-students-videos',
	'category__not_in' => '40'
);
$the_query = new WP_Query( $args );

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