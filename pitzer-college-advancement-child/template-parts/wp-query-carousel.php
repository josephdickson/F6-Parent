<?php
// Query Posts of Category "Slideshow"
$the_query = new WP_Query(

	array(
			'category_name' => 'Carousel',
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => 4,
		)

);

// The Loop
if ( $the_query->have_posts() ) {
?>
	<div class="orbit" role="region" aria-label="Slideshow" data-orbit data-use-m-u-i="false">
        <ul class="orbit-container" style="margin-bottom:1em;">
          <button class="orbit-previous show-for-medium" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
          <button class="orbit-next show-for-medium" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
<?php
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
			echo ' <li class="orbit-slide">
			            <div>';
			// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {

				// check if redirect is set
				$redirect = get_field('redirect_to_url');
				if ( '' != $redirect ) {
					echo '<a href="' . $redirect . '">';
				}
				the_post_thumbnail('full', array( 'class' => 'orbit-image' ));

				if ( '' != $redirect ) {
					echo '</a>';
				}
			}
			$my_excerpt = get_the_excerpt();
			if ( '' != $my_excerpt ) {
				echo '<figcaption class="orbit-caption">' . $my_excerpt . '</figcaption>';
			}
			echo '</div>
		          </li>';
			}

			/* Restore original Post Data */
			wp_reset_postdata();
?>
        </ul>
      </div>
<?php


	} else {
	// no posts found
	}
