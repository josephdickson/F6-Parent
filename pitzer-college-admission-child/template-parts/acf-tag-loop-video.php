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
<?php echo '<div class="row small-up-1 medium-up-2 large-up-1">'; ?>
	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post();
			if ( has_post_thumbnail() ) { 
                
                echo '<div class="column callout">';
			if (get_post_status ( $ID ) == 'future'){

				// Check if Advanced Custom Fields has a redirect for this post
				if (get_field('redirect_to_url') ) {
					echo '<div class="row">';
					echo '<div class="small-12 columns"><a href="' . get_field('redirect_to_url') . '"><h1 class="entry-title">' . get_the_title() . '</h1></a></div>';
					echo '<div class="large-7 columns">';
				        echo '</a>';
				        the_excerpt();					
					echo '</div>';
					echo '<div class="large-5 columns">';
					the_post_thumbnail('large');
					echo '</div>';
					echo '<div class="small-12 columns"><a class="button expanded flat" href="' . get_field('redirect_to_url') . '"><strong>Click Here to Register</strong></a></div>'; ?>
					<div class="small-12 columns"><p>This webinar is scheduled for <?php the_time('l, F jS, Y, h:i a') ?> Pacific Time.</p></div>
					<?php echo '</div>';
				}
			}

			else {
				echo '<div class="row">';
				echo '<div class="small-12 columns"><a href="' . get_permalink() . '"><h1 class="entry-title">' . get_the_title() . '</h1></a></div>';

				echo '<div class="large-7 columns">';
		                echo '</a>';
		                the_excerpt(); ?>
				<p>This webinar was recorded on <?php the_time('l, F jS, Y') ?>.</p>
				<?php echo '</div>';
				echo '<div class="large-5 columns">';
				the_post_thumbnail('large');
				echo '</div>';
				echo '</div>';
			}
			// check to see if the post is future or published and customize the message
			if (get_post_status ( $ID ) == 'future'){  ?>
				

			<?php }

			else { ?>
				

			<?php }

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
