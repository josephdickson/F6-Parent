<?php switch_to_blog(56); ?>

			<?php
				// The Query
				query_posts( 'posts_per_page=4' ); ?>
			
					<ul class="large-block-grid-4">
						<?php
						// The Loop
						while ( have_posts() ) : the_post(); ?>
					
							<li><a href="<?php the_permalink(); ?>"><div class="panel white radius tile"><?php
							if ( has_post_thumbnail() ) { // Display Featured Image
							echo '<div class="crop">';
							echo get_the_post_thumbnail( $post->ID, 'large' );
							echo '</div>';

							}
							else { // Do nothing
							}
						?><h1 class="normal justified"><?php the_title(); ?></h1>
							<?php the_excerpt(); ?></div></a></li>
			
						<?php
						endwhile;
						?>
					</ul>
			<?php
				// Reset Query
				wp_reset_query();
			?> 
<?php restore_current_blog(); ?>