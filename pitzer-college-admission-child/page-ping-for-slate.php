<?php
/**

Template Name: Ping for Slate

 */

get_header(); ?>
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

<script type="text/javascript" async="async" src="https://connect.pitzer.edu/ping"></script>
<noscript>The preceeding script collects basic analytics for the Slate email campaign to this page.</noscript>

<?php
// get_sidebar();
get_footer();
