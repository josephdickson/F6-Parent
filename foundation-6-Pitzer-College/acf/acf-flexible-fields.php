<?php
if(function_exists('get_field')){
// Requires the Advanced Custom Fields plugin to function
// check if the flexible content field has rows of data
if( have_rows('flexible_content') ):

	$count = 0;

     // loop through the rows of data
    while ( have_rows('flexible_content') ) : the_row();
		// Accordion
		$headline = get_sub_field('headline');
		$content = get_sub_field('content');
		// Profile
        	$image = get_sub_field('image');
		$content = get_sub_field('content');
		// Additional Content ( wysiwyg )
		$additional = get_sub_field('wysiwyg');
		// Columns
		$number_columns = get_sub_field('number_of_columns');
		// Counter for repeated items
		$count++;

	// Accordion Output


        if( get_row_layout() == 'accordion' ):


	echo '<ul class="accordion" data-accordion data-allow-all-closed="true">
	  <li class="accordion-item" data-accordion-item>
	    <a href="#" class="accordion-title">' . $headline . '</a>
	    <div class="accordion-content" data-tab-content>
		' . $content . '
	    </div>
	  </li>
	</ul>';

	// Profile Output
        elseif( get_row_layout() == 'profile' ): 
		
		echo '<div class="row">';
		echo '<div class="small-12 large-4 columns profile counter-' . $count . '">
			<img src="'. $image['url'] .'" alt="' . $image['alt'] . '" />
		</div>';
		echo '<div class="small-12 large-8 columns profile">' . $content . '</div>' ;
		echo '</div>';
	// Additional Content
	elseif( get_row_layout() == 'additional_content' ):
		echo '<div class="small-12 clear counter-' . $count . '">' . $additional . '</div>' ;

	// check current row layout
       elseif( get_row_layout() == 'columns' ):

		// check if the nested repeater field has rows of data
        	if( have_rows('column_repeater') ):

			 	echo '<div class="small-up-1 large-up-' . $number_columns . '">';

			 	// loop through the rows of data
			    while ( have_rows('column_repeater') ) : the_row();

				$content = get_sub_field ('column_content');

					echo '<div class="column">' . $content . '</div>';

				endwhile;

				echo '</div>';

			endif;


        endif;

    endwhile;

else :

    // no layouts found

endif;
}
?>