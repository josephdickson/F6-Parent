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
$posts = array( 5366, 5132, 5119, 5130, 5222, 5236, 5123 );

$current_post_ID = get_the_ID(); // the post's id is assigned to $current_post_ID

$args = array(
    'post_type' => 'page',
    'posts_per_page' => 6,
    'post_parent' => 5236,
    'post__not_in' => array( $current_post_ID ), // Exclude Current page if in array.
	'orderby' => 'post__in' // Order manually by $posts order
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>
<div class="row small-up-1 medium-up-2 large-up-3">
	<!-- pagination here -->

		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div class="column">
				<?php if

					( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						echo '<a href="' . get_permalink() . '">';
							the_post_thumbnail( 'large', array( 'class' => 'aligncenter' ) );
						echo '</a>';
					}
				?>

			<strong><a class="button flat orange expanded" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong>
	</div>
		<?php endwhile; ?>
		<!-- end of the loop -->
</div>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	<!-- pagination here -->

	<?php wp_reset_postdata();
