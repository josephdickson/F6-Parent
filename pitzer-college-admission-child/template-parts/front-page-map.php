<?php
$current_post_ID = get_the_ID(); // the post's id is assigned to $current_post_ID

// Query Posts of Category "Front Page"
$the_query = new WP_Query( array( 
	'category_name' => 'Front Page',
	'orderby' => 'date',
	'order' => 'ASC',
    'tag' => 'map',
    'posts_per_page' => 1,
) );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						echo '<div class="callout">'; ?>
                        <a href="<?php the_field('redirect_to_url'); ?>" target="_blank">
                        <?php the_post_thumbnail( 'medium', array( 'class' => 'aligncenter' ) );
						echo the_content();
                        echo '</a>';
                        get_template_part('template-parts/edit-post-link');
                        echo '</div>';
				} ?>
	<?php endwhile; ?>
	<!-- end of the loop -->

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	<!-- pagination here -->

<?php wp_reset_postdata();