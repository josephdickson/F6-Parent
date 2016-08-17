<?php switch_to_blog(56); ?>

			<?php
				// The Query
				query_posts( 'posts_per_page=4' ); ?>
			
					<div class="row small-up-1 medium-up-2 large-up-4">
						<?php
						// The Loop
						while ( have_posts() ) : the_post(); ?>
					
							<div class="column"><a href="<?php the_permalink(); ?>"><div class="callout"><?php
							if ( has_post_thumbnail() ) { // Display Featured Image
							echo '<div class="crop">';
							echo get_the_post_thumbnail( $post->ID, 'large' );
							echo '</div>';

							}
							else { // Do nothing
							}
						?><h1 class="normal justified"><?php the_title(); ?></h1>
							<?php the_excerpt(); ?></div></a></div>
			
						<?php
						endwhile;
						?>
					</ul>
			<?php
				// Reset Query
				wp_reset_query();
			?> 
<?php restore_current_blog(); ?>