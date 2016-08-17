<?php
// The Query : Set limiter in WP_Query below
$args = array(
	'category_name' => 'admitted-students-videos',
	'category__not_in' => '40'
);
$the_query = new WP_Query( $args );

echo '<h2>The Sagehen Lens <br />Videos from Current Pitzer Students</h2>';

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
