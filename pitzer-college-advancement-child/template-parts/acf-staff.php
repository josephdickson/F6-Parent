<?php

// check if the repeater field has rows of data
if( have_rows('staff_page') ):
?>

	<div class="row">
<?php
 	// loop through the rows of data
    while ( have_rows('staff_page') ) : the_row();

		// vars
		$image = get_sub_field('image');
		$info = get_sub_field('info');
		$department = get_sub_field('department');



        // display a sub field value
?>
<?php if( get_sub_field('department') ): ?>
	<h3><?php echo $department; ?></h3>
		
<?php endif; ?>
<div class="small-12 large-4 columns" style="min-height:350px;"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php echo $info; ?></div>

<?php 
    endwhile;
?>
	</div>
<?php
else :

    // no rows found
endif;

?>
