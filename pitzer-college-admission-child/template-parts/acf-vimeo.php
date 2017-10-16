<?php
// check if the flexible content field has rows of data
if( have_rows('admitted_students') ):

 	// loop through the rows of data
    while ( have_rows('admitted_students') ) : the_row();


if( get_row_layout() == 'video' ): 
	$vimeo = get_sub_field ('vimeo'); ?>
		
		 <div class="small-12 columns">
            <div class="flex-video widescreen vimeo">
              <iframe src="//player.vimeo.com/video/<?php echo $vimeo ?>" frameborder="0" allowfullscreen></iframe>
            </div>
	</div> 


		<?php // check current row layout :: Four Tiles
        elseif( get_row_layout() == 'four_tiles' ):

			
        	// check if the nested repeater field has rows of data
        	if( have_rows('tile_repeater') ):

		 	echo '<div class="row small-up-2 medium-up-2 large-up-2 callout">';

			 	// loop through the rows of data
			    while ( have_rows('tile_repeater') ) : the_row();
					$image = get_sub_field('image');
					$text = get_sub_field('button_text');
					$url = get_sub_field('button_url');

					// vars
					$title = $image['title'];
					$alt = $image['alt'];
					$caption = $image['caption'];

					// thumbnail
					$size = 'large';
					$thumb = $image['sizes'][ $size ];
					$width = $image['sizes'][ $size . '-width' ];
					$height = $image['sizes'][ $size . '-height' ];

					echo '<div class="column"><a class="" href="' . $url .'" target="_blank"><img src="' . $thumb . '" alt="' . $image['alt'] . '" /><br /><strong >' . $text .'</strong></a></div>';



				endwhile;

				echo '</div>';

			endif;

        endif;


    endwhile;

else :

    // no layouts found

endif;

?>
