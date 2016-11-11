<?php
$current_post_ID = get_the_ID(); // the post's id is assigned to $current_post_ID


$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'order'   => 'DESC',
	'category_name' => 'alert'
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->
<div id="alert" class="row">
	<div class="small-12 columns">
	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php if ( get_permalink() ) { ?>
					<div class="alert callout" data-closable>
					<?php echo the_title( '<h1 class="entry-title">', '</h1>' ) ;
					echo the_content(); ?>
					<?php get_template_part('template-parts/edit-post-link'); ?>
					</div>
				<?php }	?>

	<?php endwhile; ?>
	<!-- end of the loop -->
	</div>
</div>
	<!-- pagination here -->
<?php endif; ?>

	<?php wp_reset_postdata();
