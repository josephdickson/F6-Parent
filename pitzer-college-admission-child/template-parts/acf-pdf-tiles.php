<?php


// check if the repeater field has rows of data
if( have_rows('PDF_tiles') ):
 	// loop through the rows of data
    while ( have_rows('PDF_tiles') ) : the_row();

					$image = get_sub_field('image');
					$text = get_sub_field('button_text');
					$url = get_sub_field('link_to_pdf');

					echo '<div class="small-6 large-3 columns"><a href="' . $url['url'] .'" target="_blank"><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></a><a class="expanded flat orange button" href="' . $url['url'] .'" target="_blank">' . $text .'</a></div>';

    endwhile;

	else : // Do NOTHING ^_^ 

endif;

?>
