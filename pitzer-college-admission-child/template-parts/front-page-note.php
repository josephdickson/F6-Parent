<?php
$current_post_ID = get_the_ID(); // the post's id is assigned to $current_post_ID

// Query Posts of Category "Front Page"
$the_query = new WP_Query( array( 
	'category_name' => 'Front Page',
    'tag' => 'note',
	'orderby' => 'date',
    'post_status' => 'future',
	'order' => 'ASC',
	'posts_per_page' => 5,
) );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php if ( get_permalink() ) { ?>
				    <?php the_content(); ?> <?php get_template_part('template-parts/edit-post-link'); ?>
				<?php }	?>
	<?php endwhile; ?>
	<!-- end of the loop -->

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	<!-- pagination here -->

	<?php wp_reset_postdata();