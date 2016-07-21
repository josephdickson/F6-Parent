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

	<div class="row">

		<div class="small-12">

				<?php
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					}
				?>

			<header class="entry-header">
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
				get_template_part( 'acf/acf' , 'flexible-fields' ); ?>
			
			</div><!-- .entry-content -->

			<?php the_modified_date('F j, Y', '<span class="published-date"> Page last updated on ', '</span>'); ?>

		</div><!-- .small-12 -->

	</div>

			<footer class="entry-footer row">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'foundation-6-parent' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
			</footer><!-- .entry-footer -->

</article><!-- #post-## -->
