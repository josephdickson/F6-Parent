<?php
$current_post_ID = get_the_ID(); // the post's id is assigned to $current_post_ID

$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'order'   => 'DESC',
	'category_name' => 'tile',
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<?php if ( has_post_thumbnail() ) { ?>

				<div class="small-12 columns">

					<a href="<?php the_field('redirect_to_url'); ?>">

						<?php the_post_thumbnail('medium'); ?>

					</a>

						<?php echo get_template_part('template-parts/edit-post-link'); ?>

				</div>

			<?php }	?>

	<?php endwhile; ?>
	<!-- end of the loop -->

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php wp_reset_postdata();
