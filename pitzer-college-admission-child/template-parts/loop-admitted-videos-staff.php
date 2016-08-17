<?php
// The Query : Set limiter in WP_Query below
$the_query = new WP_Query('category_name=staff-video');

echo '<h3>More About Pitzer</h3>';

echo '<ul class="admitted-videos small-block-grid-1 large-block-grid-2">';

// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();
		$link = get_permalink();
		echo '<li><a href="' . $link . '">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('large');
		echo the_title() . '</a>';
		echo '</li>';
		}

		else {
			// do nothing
		}

}

echo '</ul>';

wp_reset_postdata();

?>
