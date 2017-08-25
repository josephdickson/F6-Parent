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

				<?php
					if ( function_exists('yoast_breadcrumb') ) {

						echo yoast_breadcrumb('<p id="breadcrumbs">','</p>');

					}
				?>


				<?php

					if ( in_category('News') ) {

						// do nothing - this is handled by news-categories.php
					}

					else {	
						echo '<header id="content" class="entry-header">';

						the_title( '<h1 class="entry-title">', '</h1>' );

						echo '</header>';
					}
				?>

			<div class="entry-content">


				<?php
					if ( in_category('News, Featured News') ) { 
						get_template_part('template-parts/news', 'categories');
					}

					else the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'foundation-6-parent' ),
						'after'  => '</div>',
					) );
				?>

			<?php 	// Requires Advanced Custom Fields

				get_template_part( 'acf/acf' , 'flexible-fields' ); 

			?>

			</div><!-- .entry-content -->

	<?php	// Edit link added to end of post
		get_template_part( 'template-parts/edit-post-link' ); 
	?>

</article><!-- #post-## -->
