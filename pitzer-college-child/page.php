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

		<strong style="margin-top:2.5em;display:block;">Navigation</strong>
		<ul class="vertical menu">
		  <li>
		    <a href="#">One</a>
		    <ul class="nested vertical menu">
		      <li><a href="#">One</a></li>
		      <li><a href="#">Two</a></li>
		      <li><a href="#">Three</a></li>
		      <li><a href="#">Four</a></li>
		    </ul>
		  </li>
		  <li class="active" style="border-left:3px solid #f7941d;"><a href="#" style="color:#f7941d;">Two</a></li>
		  <li><a href="#">Three</a></li>
		  <li><a href="#">Four</a></li>
		</ul>
	</div>





</div>
<?php
// get_sidebar();
get_footer();
