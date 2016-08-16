<?php
/**
 * The default template for displaying Tiles
 * modified by Joseph Dickson 08/15/16
 */


$args = array(
    'category_name' => 'Front Page',
	'posts_per_page' => 4,
	'orderby' => 'ID',
	'order'   => 'ASC',
	'tag' => 'tile',
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div class="columns tiles">
				<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
						<a href="<?php the_field('redirect_to_url'); ?>">
							<?php the_post_thumbnail( 'large', array( 'class' => 'aligncenter' ) );
						echo '</a>';
				} ?>

			<strong><a class="button flat orange expanded" href="<?php the_field('redirect_to_url'); ?>"><?php the_title(); ?></a></strong>
	</div>
		<?php endwhile; ?>
		<!-- end of the loop -->

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	<!-- pagination here -->

	<?php wp_reset_postdata();