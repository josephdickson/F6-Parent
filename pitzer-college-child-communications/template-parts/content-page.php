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
						// If in Summer 2017 Participant or 2017 Commencement link to Summer 2017 Particiapnt
						if ( in_category ( array( 1075 , 1081 ) ) ) {

							$categories = get_the_category();

							echo the_title( '<p id="breadcrumbs"><a href="' . get_category_link( 1081 ) . '">' .  $categories[0]->name . '</a> » ' , '</p>' ) . '</p>';

						}

						elseif ( in_category ( array( 1143 ) ) ) {

							$categories = get_the_category();

							echo the_title( '<p id="breadcrumbs"><a href="' . get_category_link( 1143 ) . '">' .  $categories[0]->name . '</a> » ' , '</p>' ) . '</p>';

						}

						else yoast_breadcrumb('<p id="breadcrumbs">','</p>');

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
