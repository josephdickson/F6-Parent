<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// the array for $the_query
$args = array(
    'category_name'	=>	'in-the-news,press-release,video',
    'posts_per_page'	=>	10,
    'paged'		=>	$paged
);
 
// The query
$the_query = new WP_Query( $args );
 
// Pagination fix - set 
//  $temp_query = $wp_query; // What does this actually do?
    $wp_query	= NULL;
    $wp_query	= $the_query;
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->
	<article>

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<?php get_template_part( 'template-parts/content', 'excerpt' ); ?>

	<?php endwhile; ?>
	<!-- end of the loop -->

	</article>
	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
