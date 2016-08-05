<?php
$current_post_ID = get_the_ID(); // the post's id is assigned to $current_post_ID


$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'order'   => 'DESC',
	'category_name' => 'events',
	'post_status' => 'future',
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>
	<ul class="events">
	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php if ( get_permalink() ) { ?>
					<li><?php the_date('F j', '<span class="published-date">', ' -</span> '); ?><a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a><?php get_template_part('template-parts/edit-post-link'); ?></li>
				<?php }	?>




	<?php endwhile; ?>
	<!-- end of the loop -->

<?php else : ?>
	<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
	</ul>

<?php endif; ?>


	<!-- pagination here -->

	<?php wp_reset_postdata();
