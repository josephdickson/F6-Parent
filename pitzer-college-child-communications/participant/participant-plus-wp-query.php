<?php
$exclude_ids = array( 5646 ); // Exclude ID Number
$query = new WP_Query( array( 'post__not_in' => $exclude_ids, 'category_name' => 'spring-2016' ) ); // pull from category minus exclusion
if ( $query->have_posts() ) : 
?>

<?php /* Start the Loop */ ?>
	<?php 	while ( $query->have_posts() ) :
			$query->the_post(); ?>
				<?php 
				// Check if the post has a Post Thumbnail assigned to it.
				if ( has_post_thumbnail() ) { ?>
				<div class="participant-plus small-12 small large-3 columns radius">
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
