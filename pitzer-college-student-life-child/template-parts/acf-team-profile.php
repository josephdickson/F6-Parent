<?php

// check if the flexible content field has rows of data
if( have_rows('team_profile') ):

		$count = 0;

	echo '<div class="row small-up-2 medium-up-3 large-up-5 team-profile">';
	     // loop through the rows of data
	while ( have_rows('team_profile') ) : the_row();

		$name = get_sub_field('name');
		$affiliation = get_sub_field('title_or_affiliation');
		$email = get_sub_field('email');
		$biography = get_sub_field('biography');
		$portrait = get_sub_field('portrait');
		$count++;


			// vars
			$url = $portrait['url'];
			$title = $portrait['title'];
			$alt = $portrait['alt'];
			$caption = $portrait['caption'];

			// thumbnail
			$size = 'thumbnail';
			$thumb = $portrait['sizes'][ $size ];
			$width = $portrait['sizes'][ $size . '-width' ];
			$height = $portrait['sizes'][ $size . '-height' ];

			// medium
			$medium_size ='medium';
			$medium = $portrait['sizes'][ $medium_size ];
			$medium_width = $portrait['sizes'][ $medium_size . '-width' ];
			$medium_height = $portrait['sizes'][ $medium_size . '-height' ];


            echo '<div class="column">';
			echo '<a data-toggle="Bio' . $count . '">';
			if ($thumb != NULL) {echo '<img src="' . $medium . '" title="' . $title . '"><br />'; }
			echo '<strong>' . $name . '</strong>';
			if ($affiliation != NULL) {echo '<br /><strong>' . $affiliation . '</strong>';}
			echo '</a>';
				// Modal information to be displayed 
				echo '<div class="tiny reveal" id="Bio' . $count . '" data-reveal>';
				if ($thumb != NULL) {echo '<img class="aligncenter" src="' . $medium . '">';}
				echo '<strong>' . $name . '</strong>';
				if ($affiliation != NULL) {echo '<br /><strong>' . $affiliation . '</strong>';}
				echo '</a>';
				echo $biography;
				echo '<button class="close-button" data-close aria-label="Close modal" type="button">
                    <span aria-hidden="true">&times;</span>
                    </button>';

			echo '</div>';
            echo '</div>';


	endwhile;

	echo '</div>';

else :

    // no layouts found

endif;

?>