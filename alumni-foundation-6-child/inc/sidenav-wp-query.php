<?php
/**
 * The default template for displaying excerpts. Based on content.php
 * @subpackage Reverie
 * @since Reverie 4.0
 * modified by Joseph Dickson 05/22/14
 */


$args = array(
	'post_type' => 'post',
	'posts_per_page' => 6,
	'orderby' => 'date',
	'order'   => 'ASC',
	'category_name' => 'Tile',
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="tiles">
				<?php if 

					( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						echo '<a href="' . get_permalink() . '">';
							the_post_thumbnail( 'large', array( 'class' => 'aligncenter' ) );
						echo '</a>';
					} 
				?>

			<strong><a class="button flat orange expand" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong>
			</div>
		<?php endwhile; ?>
		<!-- end of the loop -->

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	<!-- pagination here -->

	<?php wp_reset_postdata();
