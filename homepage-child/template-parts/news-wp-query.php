<?php
$current_post_ID = get_the_ID(); // the post's id is assigned to $current_post_ID


$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'order'   => 'DESC',
	'category_name' => 'news',
	'posts_per_page' => 6,
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- the wp_Query loop starts  -->

	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<?php // If no thumbnail is assigned to the post will not display. A thumbnail is required!
		if ( has_post_thumbnail() ) { ?>

				<div class="column news-item">

					<a href="<?php the_field('redirect_to_url'); ?>">

						<div class="small-8 medium-5 large-9 columns">

							<?php
								// Display the post tag above the .entry-title / headline
								$posttags = get_the_tags();
									$count=0;
									if ($posttags) {
										foreach($posttags as $tag) {
										$count++;
											if (1 == $count) {
											echo '<span class="tag">' . $tag->name . '</span><br />';
											}
										}
									}

								// Display the title
								the_title( '<strong class="entry-title">', '</strong>' );

								// Display the content of the post
								the_content();

								// add edit link if logged in
								get_template_part('template-parts/edit-post-link'); 
							?>

						</div>

						<div class="small-4 medium-5 large-3 columns">

							<?php the_post_thumbnail( 'thumbnail' ); ?>

						</div>

					</a>

			<?php } ?>

			</div>

	<?php endwhile; ?>
	<!-- end of the WP_query loop -->

	<?php else : ?>

		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

	<?php endif; ?>

	<?php wp_reset_postdata();
