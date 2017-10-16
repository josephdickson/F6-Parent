<?php
// acf-additional-content.php

// check if the flexible content field has rows of data
if( have_rows('admitted_students') ):

 	// loop through the rows of data
    while ( have_rows('admitted_students') ) : the_row();

	if( get_row_layout() == 'additional_content' ): 

		echo the_sub_field('content');

	endif;

    endwhile;


	
	else : // Do NOTHING ^_^ Nothing ever change oh no, Nothing ever change, I'm just living a life without meaning...

endif;

?>
