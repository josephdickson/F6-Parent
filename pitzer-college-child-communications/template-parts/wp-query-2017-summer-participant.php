<?php

// The Query
$the_query = new WP_Query( array( 'category_name' => '2017-summer-participant' ) );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<div class="row small-up-1 medium-up-2 large-up-3">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<div class="column" style="background-color:#f9f9f9;">';
		echo '<div style="background-color:#f7941d;width:200px;height:60px;background-position:right center;background-repeat:no-repeat;z-index:100;background-image:url(' . wp_get_attachment_url( 6064 ) . ');"></div>';
		echo '<span style="margin-top-2em;">text</span>';
		// check if the post has a Post Thumbnail assigned to it.
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('medium');
		}

		echo '<h1><a href="' . get_permalink() . '">' . get_the_title() . '</a></h1>';
		the_excerpt();

		echo '<div class="social-icons">';
		echo 'Share on <a href="http://twitter.com/share?text=Check out this post from @PitzerCollege &' . get_permalink() . '&hashtags=PitzerCollege" target="_blank">Twitter</a>';
		echo '<a href="https://www.linkedin.com/sharing/share-offsite?mini=true&url=' . get_permalink() . '&title=' . get_the_title() . '&source=Pitzer College" target="_blank">LinkedIn</a>';
		echo '</div>';

			if(has_category( '2017-summer-participant' ) ) {
				echo 'category works ';
				if(has_tag('2017-commencement')) {
							 
				      echo 'tag works ';
				 
					 
				}
			}
		echo '</div>';
	}
	echo '</div>';
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}

// Tag & Tag Description for Flag

// Featured Image

// Post Title

// Post Excerpt & Read More

// Share on Social Media via URL
// Create a javascript pop up at roughly 520px x 570px
// Twitter - http://twitter.com/share?text=text goes here&url=http://url goes here&hashtags=hashtag1,hashtag2,hashtag3
// LinkedIn - https://developer.linkedin.com/docs/share-on-linkedin - https://www.linkedin.com/sharing/share-offsite?mini=true&url=http://developer.linkedin.com&title=LinkedIn%20Developer%20Network&summary=My%20favorite%20developer%20program&source=LinkedIn
// Facebook - https://www.facebook.com/sharer/sharer.php?u=www.google.com
