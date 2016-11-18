<?php

// The Query
$the_query = new WP_Query(

    array(
        'post_type' => 'attachment',
        'post_status' => 'inherit',
        'p' => 927
    )

);

// The Loop
if ( $the_query->have_posts() ) {

	while ( $the_query->have_posts() ) {

		$the_query->the_post();

		  echo '<img class="tile" src="' . wp_get_attachment_url() . '" alt="The Pitzer Store" />';

	}

	/* Restore original Post Data */
	wp_reset_postdata();

} else {

	// no posts found

}
