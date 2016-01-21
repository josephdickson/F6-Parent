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
				the_post_thumbnail( 'full' , array( 'class' => 'center' ) );
				echo '</div>';
				echo '</div>';
			}

			else { // Do nothing, you can place code here for a fallback when there isn't a featured image set on the page

			}
			?>

	<div class="row">

		<div class="small-12">

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<?php the_date('F j, Y', '<span class="published-date"> Announcement | ', '</span>'); ?>

			<div class="entry-content">
				<?php   
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'foundation-6-parent' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

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
