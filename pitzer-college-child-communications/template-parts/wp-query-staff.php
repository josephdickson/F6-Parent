<?php 



$posts = array( 7273, 7275, 7277, 7287, 7281, 7285, 7283, 7279 );

$args = array(
	'post_type' => 'post',

	'post__in' => $posts,

	'orderby' => 'post__in', // Order manually by $posts order

	'category_name' => 'staff-office-of-communications',
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->
	<article>
		<div class="row small-up-1 medium-up-2">
	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


			<div class="column">
				<?php // check if the post has a Post Thumbnail assigned to it.
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( array( 100, 100 ), array( 'class' => 'alignleft' ) );
				} ?>

				<strong><?php the_title(); ?></strong>

				<?php the_content(); ?>

				<?php get_template_part( 'template-parts/edit-post-link' ); ?>
			</div>
	<?php endwhile; ?>
	<!-- end of the loop -->

	</article>
	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
