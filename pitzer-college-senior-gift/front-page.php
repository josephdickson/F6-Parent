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

	  <a class="twitter-timeline" height="400"
	  data-dnt="true" href="https://twitter.com/SustainablePZ" data-widget-id="577596371110273025">Tweets by @SustainablePZ</a>
	  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

   </div>

</div>
<?php
// get_sidebar();
get_footer();
