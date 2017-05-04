<?php 
/* 

	Checks category for appropraite boiler plates

*/

// WP Query for Press Releases
if ( in_category( 'press-release' ) ) {

	// The Query
	$the_query = new WP_Query( array( 'name' => 'about-pitzer-college' ) );

	// The Loop
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			echo '<p><strong>' . get_the_title() . '</strong></p>';
			the_content();
			get_template_part( 'template-parts/edit-post-link' );
		}
		/* Restore original Post Data */
		wp_reset_postdata();

		} else {
			// no posts found
	}



	// WP Query for posts in category sagehen athletics or tagged Sagehens
	if ( in_category( 'sagehen-athletics' ) || has_tag( 'sagehens' ) ) {

		// The Query
		$the_query = new WP_Query( array( 'name' => 'about-sagehen-athletics' ) );

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<p><strong>' . get_the_title() . '</strong></p>';
				the_content();
				get_template_part( 'template-parts/edit-post-link' );
			}
			/* Restore original Post Data */
			wp_reset_postdata();

			} else {
				// no posts found
		}
	}


	// WP Query in category Pitzer Art Galleries or tagged for pitzer college art galleries
	if ( in_category( 'pitzer-art-galleries' ) || has_tag( 'pitzer-college-art-galleries' ) ) {

		// The Query
		$the_query = new WP_Query( array( 'name' => 'pitzer-art-galleries' ) );

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<p><strong>' . get_the_title() . '</strong></p>';
				the_content();
				get_template_part( 'template-parts/edit-post-link' );
			}
			/* Restore original Post Data */
			wp_reset_postdata();

			} else {
				// no posts found
		}
	}


	// WP Query in category Keck or tagged keck
	if ( in_category( 'keck' ) || has_tag( 'keck' ) ) {

		// The Query
		$the_query = new WP_Query( array( 'name' => 'w-m-keck-science-department' ) );

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<p><strong>' . get_the_title() . '</strong></p>';
				the_content();
				get_template_part( 'template-parts/edit-post-link' );
			}
			/* Restore original Post Data */
			wp_reset_postdata();

			} else {
				// no posts found
		}
	}


	// WP Query for Press Releases for Media contact
	if ( in_category( 'press-release' ) ) {

		// The Query
		$the_query = new WP_Query( array( 'name' => 'media-contact' ) );

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<p><strong>' . get_the_title() . '</strong></p>';
				the_content();
				get_template_part( 'template-parts/edit-post-link' );
			}
			/* Restore original Post Data */
			wp_reset_postdata();

			} else {
				// no posts found
		}
	}
}

// WP Query for In the News Redirect
if ( in_category( 'in-the-news' ) ) {

	// Check if Advanced Custom Fields has a redirect for this post
	if (get_field('redirect_to_url') ) {

	// check if the post has a Post Thumbnail assigned to it.
	if ( has_post_thumbnail() ) {

		the_post_thumbnail( array(100,100, 'class' => ' alignleft') );

		}

		echo '<div class="entry-content">';

		if (get_field('publication_name')) { echo 'Read the article at<br /><strong><em><a href="'. get_field('redirect_to_url') . '" target="_blank">' . get_field('publication_name') . '</a></em></strong>';}

		echo '</div><!-- .entry-content -->';

	} else { // no posts found

	}
}
?>
