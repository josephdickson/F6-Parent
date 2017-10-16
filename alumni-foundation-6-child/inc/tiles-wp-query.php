<?php
/**
 * The default template for displaying excerpts. Based on content.php
 * @subpackage Reverie
 * @since Reverie 4.0
 * modified by Joseph Dickson 05/22/14
 */

/*
 * This array $posts sets manual order of posts based in ID number
 */

$posts = array( 120, 122, 14, 118, 124, 116 );

$args = array(
	'post_type' => 'post',
	'posts_per_page' => 6,
	'post__in' => $posts,
	'orderby' => 'post__in', // Order manually by $posts order
	'category_name' => 'Tile',
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div class="small-12 medium-4 columns tiles">
				<?php if

					( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						echo '<a href="' . get_permalink() . '">';
							the_post_thumbnail( 'large', array( 'class' => 'aligncenter' ) );
						echo '</a>';
					}
				?>

			<strong><a class="button flat orange expanded" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong>

			<?php get_template_part('template-parts/edit-post-link'); ?>
	</div>
		<?php endwhile; ?>
		<!-- end of the loop -->

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	<!-- pagination here -->

	<?php wp_reset_postdata();
