<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package presidential-transition
 */

get_header(); ?>
<div class="row">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div id="content">
				<div class="columns small-12 columns">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'single' , get_post_format() );

						//the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.

					?>
				</div><!-- .columns -->
            </div><!-- #content -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .row -->

<?php

/**
 *  dequeue the foundation version of jquery for wordpress, this will break search and quicklinks etc.
 */

function dequeue_jquery_script() {
//    wp_dequeue_script( 'jquery' );
    wp_dequeue_script( 'foundation-jquery' );
    wp_dequeue_script( 'app-js' );
}
add_action( 'wp_print_scripts', 'dequeue_jquery_script', 100 );

get_footer(); ?>
