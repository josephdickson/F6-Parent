<?php
/**
 * Template Name: New Student Guide
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package presidential-transition
 */

get_header(); ?>
<div class="row">
	<div id="primary" class="content-area columns small-12 large-9">
		<main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'page' );
                // If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile; // End of the loop.
				?>
            <?php get_template_part( 'template-parts/new-student-guide' , 'tiles' ); ?>

			<?php the_modified_date('F j, Y', '<span class="published-date"> Page last updated on ', '</span>'); ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->


	<div class="small-12 large-3 columns">
		<?php get_template_part('template-parts/sidebar-menu-walker') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-2') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-3') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-4') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-5') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-6') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-7') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-8') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-9') ?>
	</div>

</div>
<?php
// get_sidebar();
get_footer();
