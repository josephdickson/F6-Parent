<?php
	// Loop through categories with these slugs
	$args = array(
		'post_type'			=>	'post',
		'category_name'		=>	'messages-to-the-community',
	);
	$query = new WP_Query( $args );

				// The Query
				$the_query = new WP_Query( $args );
				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						get_template_part( 'template-parts/content-messages' );
					}
				} else {
					// no posts found
				}
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
