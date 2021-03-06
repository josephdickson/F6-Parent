	<?php
	$include_id = array( 7504 );
	$wp_query = new WP_Query( array( 'post__in' => $include_id, 'post_type' => 'post' , 'p' => 7504 )); // pull from include_id

	if ( $wp_query->have_posts() ) :

		while ( $wp_query->have_posts()):
			$wp_query->the_post();

				// Check if the post has a Post Thumbnail assigned to it.
				if ( has_post_thumbnail() ) { ?>
				<div class="participant-plus cover small-12 large-10 columns radius small" style="margin-bottom:0.9375em;">

					<div class="cover small-12 large-7 columns radius">

							<h1 class="entry-title"><?php the_title(); ?></h1>

							<?php the_content(); ?>

							<?php	// Edit link added to end of post
								get_template_part( 'template-parts/edit-post-link' );
							?>

					</div>

					<div class="cover small-12 large-5 columns radius">

							<?php the_post_thumbnail(); ?>
							<a href="https://issuu.com/pitzercollege/docs/2017-spring-summer-participant" target="_blank"><img class="participant-plus-icon-cover" src="<?php echo wp_get_attachment_url( 5695 ); ?>" alt="Participant Plus"></a>

						<span style="float:right;font-size:0.9em;">Supplementary multimedia content</span>

					</div>

				</div>
				<?php } ?>

		<?php endwhile; ?>

		<?php else : ?>
			<?php echo 'Sorry something went wrong, check back later'; ?>
	<?php endif; // end have_posts() check ?>

	<?php wp_reset_postdata(); ?>
