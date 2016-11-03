<?php

// The Query
$the_query = new WP_Query(
    array( 
        'post_type' => 'attachment',
        'post_status' => 'inherit',
        'p' => 554
    )
);

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		  echo '<img src="' . wp_get_attachment_url() . '" alt="Office of College Advancement" />';
	}
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}

/**
This could also be used

<?php wp_get_attachment_url( 554 ); ?>
**/
