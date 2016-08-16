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
                    <?php get_template_part('template-parts/front-page-carousel'); ?>
                </div>
                <div class="small-12 large-3 columns">
                    <p><strong>Updates</strong></p>
                    <?php get_template_part('template-parts/front-page-note'); ?>
                    <p></p><strong>Upcoming Dates &amp; Deadlines</strong></p>
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
                    Admission Unpeeled Tile
                </div>
                <div class="small-12 large-6 columns">
                    Drop down list
                </div>
                <div class="small-12 large-3 columns">
                    Social Media plugin
                </div>
            </div><!-- .row -->
            <div class="row">
                <div class="small-12 columns">
                    Admission Unpeeled Content
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();