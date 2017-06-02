	<?php
	$include_id = array( 5646 );
	$wp_query = new WP_Query( array( 'post__in' => $include_id, 'post_type' => 'post' , 'p' => 5646 )); // pull from include_id

	if ( $wp_query->have_posts() ) : 

		while ( $wp_query->have_posts()): 
			$wp_query->the_post();
	
				// Check if the post has a Post Thumbnail assigned to it.
				if ( has_post_thumbnail() ) { ?>
				<div class="participant-plus cover small-12 columns radius small" style="margin-bottom:0.9375em;">
					<div class="cover small-12 large-5 columns radius">
						<a class="participant-plus" href="http://pitweb.pitzer.edu/communications/category/participant/spring-2016/">
							<?php the_post_thumbnail(); ?>
							<img class="participant-plus-icon-cover" src="<?php echo wp_get_attachment_url( 5695 ); ?>" alt="Participant Plus">
						</a>
					<span style="float:right;padding-right:1.4em;">Supplementary multimedia content</span>
					</div>
					<div class="cover small-12 large-7 columns radius">
						<a class="participant-plus" href="http://pitweb.pitzer.edu/communications/category/participant/spring-2016/">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</a>
							<?php the_content(); ?>
						
					</div>

				</div>
				<?php } ?>

		<?php endwhile; ?>

		<?php else : ?>
			<?php echo 'Sorry something went wrong, check back later'; ?>
	<?php endif; // end have_posts() check ?>

	<?php wp_reset_postdata(); ?>
