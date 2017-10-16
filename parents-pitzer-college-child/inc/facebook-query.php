<?php
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 1,
	'orderby' => 'date',
	'order'   => 'ASC',
	'tag' => 'facebook',
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php if ( get_the_content() ) { // check if the post has a Post Thumbnail assigned to it.
				the_content();
			} 
		?>
	<?php endwhile; ?>
	<!-- end of the loop -->

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

	<?php get_template_part('inc/edit-post'); ?>
	<!-- pagination here -->
	<?php wp_reset_postdata();
