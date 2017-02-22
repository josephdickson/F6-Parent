<div class="row">

			<?php
				// The Query
				$the_query = new WP_Query( array( 'category_name' => 'uncategorized' ) );

				// The Loop
				if ( $the_query->have_posts() ) {

					while ( $the_query->have_posts() ) {
						$the_query->the_post();

						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							echo '<div class="small-12 featured-image">';
							the_post_thumbnail();
							echo '<span class="featured-caption">' . get_post(get_post_thumbnail_id())->post_excerpt . '</span>'; // Grabs Caption associated with the Media File / Image
							echo '</div>';
						}

						else {
							// display fallback image
							echo '<img src="' . get_stylesheet_directory_uri() . '/img/16_Inauguration_March-25-10am.png">' ;
						}


							echo '<div class="small-12 large-9 columns query-page">';

							echo '<h1 class="hide entry-title text-center">' . get_the_title() . '</h1>';

							echo the_content();

							get_template_part( 'template-parts/edit-post-link' );

							echo '</div>';
						}

						/* Restore original Post Data */
						wp_reset_postdata();
					} else {}
					?>



			<div class="small-12 large-3 columns sidebar">

				<?php get_template_part('template-parts/sidebar-menu-walker') ?>

			</div>
</div>
