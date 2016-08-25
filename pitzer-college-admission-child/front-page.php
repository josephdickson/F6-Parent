<?php
/**
 * The template for displaying all pages.
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
	<div id="primary" class="content-area columns small-12">
		<main id="main" class="site-main" role="main">
            <div class="row">
                <div class="small-12 columns">
                    <a href="/admission-unpeeled/"><img class="banner" src="<?php echo get_stylesheet_directory_uri(); ?>/img/admission-financial-aid.gif" alt="Admission &amp; Financial Aid" /></a><br />
                    <?php get_template_part('template-parts/front-page-carousel'); ?>
                </div>
                <div class="small-12 large-3 columns">
                    <?php // get_template_part('template-parts/front-page-note'); ?>
                    <p><strong>Upcoming Dates &amp; Deadlines</strong>
                    <?php get_template_part('template-parts/front-page-updates'); ?>
                </div>
                <div class="small-12 large-6 columns">
                    <div class="row medium-up-2">
                    <?php get_template_part('template-parts/front-page-tiles'); ?>
                    </div>
                </div>
                <div class="small-12 large-3 columns additional-information">
                    <?php get_template_part('template-parts/front-page-additional-information'); ?>
                    <?php get_template_part('template-parts/front-page-map'); ?>
                </div>
            </div><!-- .row -->
            <div class="row">
                <div class="small-12 large-3 columns">
                    <a href="/admission-unpeeled/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pitzer-admission-unpeeled.jpg" alt="Admission Unpeeled Blog" /></a>
                </div>
                <div class="small-12 large-6 columns">
                    <?php get_template_part('template-parts/front-page-recruitment-dropdown'); ?>
                </div>
                <div class="small-12 large-3 columns">
                    <?php
                        if(function_exists('get_field')) {
                            echo'<strong>Follow us:</strong>';
                            get_template_part( 'acf/social-networks' );
                    }?>
                </div>
            </div><!-- .row -->
            <div class="row">
                <div class="small-12 columns">
                    <?php get_template_part('template-parts/front-page-admission-unpeeled'); ?>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();