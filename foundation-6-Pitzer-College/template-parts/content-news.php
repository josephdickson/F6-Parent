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

				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<div id="breadcrumbs">','</div>');
				} ?>


				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<?php the_modified_date('F j, Y', '<span class="published-date"> Updated on ', '</span>'); ?>

				<div class="entry-content">
					<?php   
						the_content();

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'foundation-6-parent' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->


			<footer class="entry-footer">
				<div class="row columns">
				<?php get_template_part('inc/edit-post-link'); ?>

				<?php get_template_part('inc/news-query'); ?>
				</div>
			</footer><!-- .entry-footer -->


</article><!-- #post-## -->
