<?php // check if the post has a Post Thumbnail assigned to it.

		$tag = 'catalogue'; // checks for catalogue tag
		// $catalog_file = get_field('catalogue_pdf'); // Requires Advanced Custom Fields

		if (has_tag( $tag ) ) {
		//	echo '<a href="'. $catalog_file . '" target="_blank">';
			the_post_thumbnail('large');
		//	echo 'View Catalogue PDF</a>'; ?>

<p><strong class="small"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></strong></p>
		<?php } else {
			the_post_thumbnail('large'); ?>
<p><strong class="small"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></strong></p>
		<?php } 
?>
