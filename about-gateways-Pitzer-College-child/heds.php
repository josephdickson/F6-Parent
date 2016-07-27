<?php 
	if (is_page( 'Title IX' )) {
		$args = array(
			'post_type' => 'post',
			'tag' => 'heds-survey',
			'post_status' => 'publish'
		 );

		$query = new WP_Query($args); // display custom 

			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '<div class="small-12 large-10 large-centered columns small heds-blurb">';
					echo '<a href="' . get_permalink() . '">' . '<div class="panel white radius">';
					echo '<h3>' . get_the_title() . '</h3>';
					echo the_excerpt();
					echo '</div></a>' ;
					echo '</div>';
				}
			} else {
				// no posts found
			}
			/* Restore original Post Data */
			wp_reset_postdata();		
		
	} else { // do nothing

	}
	
?>
