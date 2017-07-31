<?php
/****

Slideshow

*****/
if( have_rows('slideshow') ): ?>

<div class="orbit" role="region" aria-label="Slideshow" data-orbit data-use-m-u-i="false">
	<ul class="orbit-container" style="margin-bottom:1em;">
	  <button class="orbit-previous show-for-medium" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
	  <button class="orbit-next show-for-medium" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>

	<?php while( have_rows('slideshow') ): the_row();

		// vars
		$image = get_sub_field('image');
		$caption = get_sub_field('caption');
		$page = get_sub_field('page');

		?>

			<?php if( $image ): ?>
			<li class="orbit-slide">
					<div>
			<?php endif; ?>

			<?php if( $page ): ?>
				<a href="<?php echo $page; ?>">
			<?php endif; ?>

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			<?php if ( $caption ): ?>
				<figcaption class="orbit-caption"><?php echo $caption; ?></figcaption>
			<?php endif; ?>

			<?php if( $page ): ?>
				</a>
			<?php endif; ?>

			<?php if( $image ): ?>
				</div>
			</li>
			<?php endif; ?>

	<?php endwhile; ?>

	</ul>
</div>

<?php endif; ?>
