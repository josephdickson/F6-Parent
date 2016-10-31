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
	<?php if ( is_user_logged_in() ) {
    echo '<p>To add a note here <a href="/admission/wp-admin/post-new.php">create a new post</a> then categorize it <strong>Front Page</strong> and tag it <strong>Note</strong>. Finally, <strong>schedule</strong> the post for a date and time in the future. When that date passes the post will expire.</p>';
} else ; ?>
<?php endif; ?>


	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php

?>