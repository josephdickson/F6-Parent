<?php
/**
 * The default template for displaying excerpts. Based on content.php
 * @subpackage Reverie
 * @since Reverie 4.0
 * modified by Joseph Dickson 05/22/14
 */


$args = array(
	'post_type' => 'post',
	'posts_per_page' => 2,
	'orderby' => 'date',
	'order'   => 'DESC',
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : 

	echo '<h2>Alumni News</h2>';
?>
	
	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); ?>
				<h2 class="post-title" style="display:inline;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt();
			} 
		?>

		<?php  ?>
	<?php endwhile; ?>
	<!-- end of the loop -->

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	<!-- pagination here -->

	<?php wp_reset_postdata();
