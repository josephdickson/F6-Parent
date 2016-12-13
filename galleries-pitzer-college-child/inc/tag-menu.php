<?php
// Current Exhibitions
	$current = new WP_Query( 'tag=current' );
		echo '<h3>Current Exhibitions</h3>';
		echo '<ul class="menu">';
	while ( $current->have_posts() ) {
		$current->the_post();
			echo '<li><a href="' . get_post_permalink() . '">' . get_the_title() . '</a></li>';
	}
		echo '</ul>';
wp_reset_postdata();



// Upcoming Exhibitions
	$upcoming = new WP_Query( 'tag=upcoming' );
		echo '<h3>Upcoming Exhibtions</h3>';
		echo '<ul class="menu">';
	while ( $upcoming->have_posts() ) {
		$upcoming->the_post();
			echo '<li><a href="' . get_post_permalink() . '">' . get_the_title() . '</a></li>';
	}
		echo '</ul>';
wp_reset_postdata();
?>
