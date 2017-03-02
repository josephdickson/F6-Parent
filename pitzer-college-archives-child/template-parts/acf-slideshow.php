<?php

// check if the repeater field "Slideshow" has rows of data
if( have_rows('slideshow') ):
?>
	<div class="orbit" role="region" aria-label="Slideshow" data-orbit data-use-m-u-i="false">
        <ul class="orbit-container" style="margin-bottom:1em;">
          <button class="orbit-previous show-for-medium" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
          <button class="orbit-next show-for-medium" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
<?php

 	// loop through the rows of data
    while ( have_rows('slideshow') ) : the_row();

	// assign fields to objects 
	$image = get_sub_field('image');  
	$caption = get_sub_field('caption');
	$page = get_sub_field('page');

	// build slideshow
	?>

		<li class="orbit-slide">
            <div>
			<a href="<?php echo $page; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
			<div class="orbit-caption"><?php echo $caption; ?></div>
            </div>
		</li>

	<?php
    endwhile; ?>
            
      </ul>
    </div>
<?php else :

    // no rows found

endif;

?>
