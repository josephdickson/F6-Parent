<?php
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 1,
	'orderby' => 'date',
	'order'   => 'ASC',
	'category_name' => 'Promotional',
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				echo '<a href="' . get_permalink() . '">';
					the_post_thumbnail( 'large', array( 'class' => 'aligncenter' ) );
				echo '</a>';
			} 
		?>
	<?php endwhile; ?>
	<!-- end of the loop -->

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	<!-- pagination here -->

	<?php wp_reset_postdata();
