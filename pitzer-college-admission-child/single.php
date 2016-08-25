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

				<div class="columns small-12 large-9">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'no-featured-image' , get_post_format() );

						//the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.

					?>
				</div><!-- .columns .large-9 -->
                <div class="small-12 large-3 columns">

        <?php get_template_part('template-parts/sidebar-menu-walker') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-2') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-3') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-4') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-5') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-6') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-7') ?>

	           </div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .row -->

<?php get_footer(); ?>
