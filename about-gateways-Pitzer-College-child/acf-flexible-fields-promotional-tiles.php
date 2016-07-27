<?php

// check if the flexible content field has rows of data
if( have_rows('promotional_tiles') ):

     // loop through the rows of data
    while ( have_rows('promotional_tiles') ) : the_row();
		// Promotional Tiles
		$tile_image = get_sub_field('promotional_tiles_image');
		$tile_link = get_sub_field('promotional_tiles_link');

	// Promotional Tile Output
        if( get_row_layout() == 'promotional_tile' ):

		echo '<a href="' . $tile_link . '"><img src="'. $tile_image .'" /></a>';

	endif;

    endwhile;

	else :

	    // no layouts found

endif;

?>
