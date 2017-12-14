	<?php
	$include_id = array( 8727 );
	$wp_query = new WP_Query( array( 'post__in' => $include_id, 'post_type' => 'post' , 'p' => 8723 )); // pull from include_id

	if ( $wp_query->have_posts() ) :

		while ( $wp_query->have_posts()):
			$wp_query->the_post();

				// Check if the post has a Post Thumbnail assigned to it.
				if ( has_post_thumbnail() ) { ?>
				<div class="participant-plus cover small-12 columns small" style="margin-bottom:0.9375em;">

					<div class="cover small-12 columns">

							<h1 class="entry-title"><?php the_title(); ?></h1>

							<?php the_content(); ?>

							<div class="cover small-12 large-3 columns">

									<?php the_post_thumbnail('large'); ?>
									<a style="display:block;width:35%;margin-top:-34%;margin-left:-3.3rem;" class="participant-plus-icon-fall-2017" href="https://issuu.com/pitzercollege/docs/2017-spring-summer-participant" target="_blank"><img src="<?php echo wp_get_attachment_url( 5695 ); ?>" alt="Participant Plus"></a>

								<span style="float:right;font-size:0.9em;">Supplementary multimedia content</span>

									<?php	// Edit link added to end of post
										get_template_part( 'template-parts/edit-post-link' );
									?>

							</div>

				</div>
				<?php } ?>

		<?php endwhile; ?>

		<?php else : ?>
			<?php echo 'Sorry something went wrong, check back later'; ?>
	<?php endif; // end have_posts() check ?>

	<?php wp_reset_postdata(); ?>
