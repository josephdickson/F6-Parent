<?php
// acf-deadlines.php

if( have_rows('admitted_students') ):

 	// loop through the rows of data
    while ( have_rows('admitted_students') ) : the_row();

		// check current row layout :: Date Layout
        if( get_row_layout() == 'date_layout' ):

        	// check if the nested repeater field has rows of data
        	if( have_rows('deadlines_repeater') ):

			 	echo '<strong>Important Dates to Remember</strong>
<table width="100%">';

			 	// loop through the rows of data
			    	while ( have_rows('deadlines_repeater') ) : the_row();
					$date = get_sub_field ('date');
					$description = get_sub_field ('description');
					echo '<tr><td>' . $date . '</td><td>' .  $description .'</td></tr>';

				endwhile;

				echo '</table>';

		endif;
	endif;
endwhile;
endif;
?>
