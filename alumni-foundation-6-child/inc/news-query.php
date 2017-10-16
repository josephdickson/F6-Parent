<?php
$current_post_ID = get_the_ID(); // the post's id is assigned to $current_post_ID


$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'order'   => 'DESC',
	'category_name' => 'Alumni Awards',
	'post_type' => 'post', 'post__not_in' => array( $current_post_ID ),
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php if ( get_permalink() ) { // check if the post has a Post Thumbnail assigned to it.
				echo '<hr />';
				echo '<a href="' . get_permalink() . '">';
					the_title( '<h1 class="entry-title">', '</h1>' );
				echo '</a>';
				the_content();
				get_template_part( 'template-parts/edit-post-link' );
			}
		?>

				<?php get_template_part('template-parts/edit-post-link'); ?>


	<?php endwhile; ?>
	<!-- end of the loop -->

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	<!-- pagination here -->

	<?php wp_reset_postdata();
