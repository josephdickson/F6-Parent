<?php
/**
 * The default template for displaying excerpts. Based on content.php
 * @subpackage Reverie
 * @since Reverie 4.0
 * modified by Joseph Dickson 05/22/14
 */
$posts = array( '42', '89', '32', '91', '94', '96', '49', '51' );

$args = array(
	'post_type' => 'post',
	'posts_per_page' => 8,
	'category_name' => 'Tile',
	'post__in' => $posts,
	'orderby' => 'post__in', // Order manually by $posts order
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div class="columns tiles">
				<?php 
					$tile_image = get_field('homepage_tile_image');
					$featured_image = get_the_post_thumbnail();

					if ( $tile_image ) { // Display Homepage Tile if set in post
						echo '<a href="' . get_permalink() . '">';
						echo '<img src="' . $tile_image['url'] . '">' ;
						echo '</a>';
					}

					elseif (isset($featured_image)){ // Display Post Thumbnail if assigned and a Homepage Tile is not available
						echo '<a href="' . get_permalink() . '">';
							the_post_thumbnail( 'large', array( 'class' => 'aligncenter' ) );
						echo '</a>';
						}
				?>


			<strong><a class="button flat orange expanded" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong>
	</div>
		<?php endwhile; ?>
		<!-- end of the loop -->

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	<!-- pagination here -->

	<?php wp_reset_postdata();
