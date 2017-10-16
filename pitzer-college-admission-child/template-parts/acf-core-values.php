<?php 

$image = get_field('core_values_background_image');
$opacity = get_field('core_values_background_image_opacity');

if( !empty($image) ): ?>

	<div class="background-image" role="main" style="float:right;background-image:url('<?php echo $image['url']; ?>'); width:<?php echo $image['width']; ?>px; height:<?php echo $image['height']; ?>px; margin-top:-<?php echo $image['height']; ?>px; opacity:0.<?php echo $opacity ?>;"></div>

<?php endif; ?>
