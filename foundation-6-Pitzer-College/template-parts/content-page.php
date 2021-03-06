<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foundation-6-parent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				echo '<div class="row">';
				echo '<div class="small-12 featured-image">';
				the_post_thumbnail();
				echo '<span class="featured-caption">' . get_post(get_post_thumbnail_id())->post_excerpt . '</span>'; // Grabs Caption associated with the Media File / Image
				echo '</div>';
				echo '</div>';
			}

			else { // Do nothing, you can place code here for a fallback when there isn't a featured image set on the page

			}
			?>


			<?php

				/* If a static front page don't display yoast plugin's bread crumbs */
				if ( is_front_page() ) {

					// Does nothing

				}

				else {
					// not a static front page - display breadcrumbs
					if ( function_exists('yoast_breadcrumb') ) { 
						yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					}
				}
				
			?>


			<header id="content" class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">


				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'foundation-6-parent' ),
						'after'  => '</div>',
					) );
				?>

			<?php 	// Requires Advanced Custom Fields
				get_template_part( 'acf/acf' , 'flexible-fields' ); 

				get_template_part( 'template-parts/acf' , 'gallery' );

			?>

			</div><!-- .entry-content -->

	<?php	// Edit link added to end of post
		get_template_part( 'template-parts/edit-post-link' ); 
	?>

</article><!-- #post-## -->
