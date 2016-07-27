<?php

// check if the repeater field "Slideshow" has rows of data
if( have_rows('slideshow') ):
?>
	<ul data-orbit>
<?php

 	// loop through the rows of data
    while ( have_rows('slideshow') ) : the_row();

	// assign fields to objects 
	$image = get_sub_field('image');  
	$caption = get_sub_field('caption');
	$page = get_sub_field('page');

	// build slideshow
	?>

		<li>
			<a href="<?php echo $page; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
			<div class="orbit-caption"><?php echo $caption; ?></div>
		</li>

	<?php
    endwhile; ?>
	</ul>
<?php else :

    // no rows found

endif;

?>
