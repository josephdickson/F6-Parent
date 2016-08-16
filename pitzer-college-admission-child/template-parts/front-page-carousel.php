<?php
// Query Posts of Category "Front Page"
$the_query = new WP_Query( array( 
	'category_name' => 'Front Page',
    'tag' => 'carousel',
	'orderby' => 'date',
	'order' => 'ASC',
	'posts_per_page' => 5,
) );
	
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
				echo '<a href="' . get_permalink() . '">';
				the_post_thumbnail('full', array( 'class' => 'orbit-image' ));
				echo '</a>';
				} 
			
            $my_excerpt = get_post(get_post_thumbnail_id())->post_excerpt; // Grabs Caption associated with the Media File
			if (!empty($my_excerpt)) {
                echo '<figcaption class="orbit-caption">' . $my_excerpt . '</figcaption>'; // If the caption exists display a caption
            }
			echo '</div>
		          </li>';
			}
?>
        </ul>
      </div>
<?php


	} else {
        echo 'Sorry, no posts matched your criteria.'; // no posts found
	}

/* Restore original Post Data */
wp_reset_postdata();