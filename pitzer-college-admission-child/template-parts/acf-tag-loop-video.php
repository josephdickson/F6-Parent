<?php
$args = array(
	'post_type'	=> 'post',
	'tag'		=> 'webinar', 'video',
	'post_status'	=> array( 'future' , 'publish' ),
	'order'   	=> 'ASC'
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>
<?php echo '<div class="row small-up-1 medium-up-2 large-up-3">'; ?>
	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post();
			if ( has_post_thumbnail() ) { 
                
                echo '<div class="column">';
				echo '<a href="' . get_permalink() . '">';
					the_post_thumbnail('large');
                    the_title('<strong>','</strong>');
                echo '</a>';
                
                the_excerpt();
                get_template_part('template-parts/edit-post-link');
                echo '</div>';
			 }	?>




	<?php endwhile; ?>
	<!-- end of the loop -->
<?php echo '</div>'; ?>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	<!-- pagination here -->

	<?php wp_reset_postdata();