<?php

$posts = array( 8744 ); // Order manually by $posts order

// The Query
$the_query = new WP_Query(
	array(
		'category_name' => 'fall-2017',
		'post__in' => $posts,
		'orderby' => 'post__in', // Order manually by $posts order
	 )
);

// The Loop
if ( $the_query->have_posts() ) {

	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$posttags = get_the_tags();

		echo '<div class="column">';

		echo '<strong class="entry-title pst-la-la">PST: LA/LA</strong>';

		echo '<div class="callout special-item">';

		// check if the post has a Post Thumbnail assigned to it.
		if ( has_post_thumbnail() ) {
			echo '<a href="' . get_permalink() . '">';
			the_post_thumbnail('400x400');
			echo '</a>';
		}

		// Checks for Post Tag and displays it in the flag
		if ($posttags) {
			foreach($posttags as $tag) {

			echo '<strong class="pst-la-la">' . $tag->name . ' ' . '</strong>';

			}
		}

		echo '<h1><a href="' . get_permalink() . '">' . get_the_title() . '</a></h1>';

		the_excerpt();

		// Edit link added to end of post
		get_template_part( 'template-parts/edit-post-link' );

		echo '<div class="social-icons">';
		echo '<ul class="social-icons twenty">';
		echo '<li><span class="share-on">Share on</span></li>';
		echo '<li class="Facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=' . get_permalink() . '&title=' . get_the_title() . '" target="_blank"><span>Facebook</span></a></li>';
		echo '<li class="Linkedin"><a href="https://www.linkedin.com/sharing/share-offsite?mini=true&url=' . get_permalink() . '&title=' . get_the_title() . '&source=Pitzer College" target="_blank"><span>LinkedIn</span></a></li>';
		echo '<li class="Twitter"><a href="http://twitter.com/share?text=Check out this post from @PitzerCollege &url=' . get_permalink() . '&hashtags=PitzerCollege" target="_blank"><span>Twitter</span></a></li>';
		echo '</ul>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	echo '</div>';
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}
