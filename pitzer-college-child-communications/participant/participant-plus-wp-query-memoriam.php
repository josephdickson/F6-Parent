<?php
$exclude_ids = array( 5646 ); // Exclude ID Number
$query = new WP_Query( array( 'post__not_in' => $exclude_ids, 'category_name' => 'spring-2016', 'tag' => 'memoriam' ) ); // pull from category minus exclusion
if ( $query->have_posts() ) : 
?>
<?php // Display Flag under section header
$image_attributes = wp_get_attachment_image_src( $attachment_id = 6064, $size='medium' );
if ( $image_attributes ) : ?>
<div class="row">
	<div class="small-12 columns">
		<span id="Faculty" class="flag serif" style="background:url('<?php echo $image_attributes[0]; ?>') #A7A9AC right no-repeat;color:#fff;height:<?php echo $image_attributes[2]; ?>px;">In Memoriam</span>
	</div>
</div>
<?php endif; ?>

<?php /* Start the Loop */ ?>
	<?php 	while ( $query->have_posts() ) :
			$query->the_post(); ?>
				<?php 
				// Check if the post has a Post Thumbnail assigned to it.
				if ( has_post_thumbnail() ) { ?>
				<div class="participant-plus small-12 small large-3 columns radius left">
					<div class="tile">
						<a class="participant-plus" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
							<?php the_excerpt(); ?>
						</a>

					<?php
						edit_post_link(
							sprintf(
								/* translators: %s: Name of current post */
								esc_html__( 'Edit %s', 'foundation-6-parent' ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							),
							'<span class="edit-link button flat orange radius">',
							'</span>'
						);
					?>

					</div>
				</div>
				<?php } ?>

		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; // end have_posts() check ?>

<?php wp_reset_postdata(); ?>
