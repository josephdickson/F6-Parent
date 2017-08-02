<?php

// check if the flexible content field has rows of data
if( have_rows('promotional_tiles') ):

		$tiles = get_field_object('promotional_tiles'); 
		$count = count($tiles['value']);

		echo 	'<div class="row small-up-1 medium-up-2 large-up-3">';

     // loop through the rows of data
    while ( have_rows('promotional_tiles') ) : the_row();

		$image = get_sub_field('image');
		$page_link = get_sub_field('page_link');
		$button_text = get_sub_field('button_text');

        if( get_row_layout() == 'tile' ):


		echo 	'<div class="column"><a href="' . $page_link .'"><img src="'.$image['url'] . '"/></a><br />';
		echo	'<a class="button orange radius expanded flat" href="' . $page_link . '">' . $button_text . '</a></div>';

        endif;

    endwhile;

		echo	'</div>';

else :

    // no layouts found

endif;

?>
