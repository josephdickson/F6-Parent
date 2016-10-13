<?php
/**
 * The template for displaying all category pages.
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
	<div id="primary" class="content-area columns small-12 large-9">
		<main id="main" class="site-main" role="main">
            <div class="yoast">
                <?php
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					}
				?>
            </div>
            <div id="content">
                <h1 class="category"><?php echo single_cat_title(); ?></h1>
				<?php get_template_part( 'template-parts/wp-query', 'staff-order' ); ?>
            </div>
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
	</div>

<?php
// get_sidebar();
get_footer();