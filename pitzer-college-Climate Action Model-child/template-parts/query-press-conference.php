<?php

$args = array(
	'post_type'	 =>	'attachment',
	'post_status'	 =>	'inherit',
	'post_mime_type' =>	'image',
	'posts_per_page' =>	-1,
	'post__in' 	 =>	array( 23, 24, 21, 22, 25 ),
	'orderby'	=>	'post__in',
);
// The Query
$the_query = new WP_Query( $args );

// The Loop of images
if ( $the_query->have_posts() ) {

	echo '<div class="row small-up-1 medium-up-3 large-up-5">';

	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<div class="column">';

			echo '<div class="callout">';

			echo '<a href="' . wp_get_attachment_url() . '" target="_blank">';

			// get thumbnail url
			echo '<img src="' .  wp_get_attachment_thumb_url() . '">';

			// display caption
			echo wp_get_attachment_caption();

			echo '</a>';

			get_template_part( 'template-parts/edit-post-link' ); 
			echo '</div>';
		echo '</div>';
	}

	echo '</div>';

	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}
?>
