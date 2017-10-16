<div class="row">
	<div class="small-12 large-6 columns">
	<?php	// Requires Advanced Custom Fields Plugin
	if(get_field('button')) { ?>
		<a href="<?php echo the_field('button'); ?>"><img src="<?php echo the_field('image'); ?>"></a><a href="<?php echo the_field('button'); ?>" class="button orange flat expanded radius"><?php echo the_field('button_text'); ?></a>
						
	<?php }	?>
	</div>

	<div class="small-12 large-6 columns">
	<?php	// Requires Advanced Custom Fields Plugin
	if(get_field('button_3')) { ?>
		<a href="<?php echo the_field('button_3'); ?>"><img src="<?php echo the_field('image_3'); ?>"></a><a href="<?php echo the_field('button_3'); ?>" class="button orange flat expanded radius"><?php echo the_field('button_text_3'); ?></a>
	<?php }	?>
	</div>
</div>

<div class="row">
	<div class="small-12 large-6 columns">
	<?php	// Requires Advanced Custom Fields Plugin
	if(get_field('button_2')) { ?>
		<a href="<?php echo the_field('button_2'); ?>"><img src="<?php echo the_field('image_2'); ?>"></a><a href="<?php echo the_field('button_2'); ?>" class="button orange flat expanded radius"><?php echo the_field('button_text_2'); ?></a>
				
	<?php }	?>
	</div>

	<div class="small-12 large-6 columns">
	<?php	// Requires Advanced Custom Fields Plugin
	if(get_field('button_4')) { ?>
		<a href="<?php echo the_field('button_4'); ?>"><img src="<?php echo the_field('image_4'); ?>"></a><a href="<?php echo the_field('button_4'); ?>" class="button orange flat expanded radius"><?php echo the_field('button_text_4'); ?></a>

	<?php }	?>
	</div>
</div>
