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

	<div id="primary" class="content-area columns small-12">
		<main id="main" class="site-main" role="main">


				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page-alt' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>


			<div class="row">

				<div class="small-12 large-9 columns">

				<?php
				// News Loop

				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				// the array for $the_query
				$args = array(
				    'category_name'	=>	'featured-news-item, video',
				    'paged'		=>	$paged
				);
				 
				// The query
				$the_query = new WP_Query( $args );
				 
				// Pagination fix - set 
				//  $temp_query = $wp_query; // What does this actually do?
				    $wp_query	= NULL;
				    $wp_query	= $the_query;
				?>

				<?php if ( $the_query->have_posts() ) : ?>

					<!-- pagination here -->
					<article>

					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'excerpt' ); ?>

					<?php endwhile; ?>
					<!-- end of the loop -->

					</article>
					<!-- pagination here -->

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>


				<?php
				// News Loop

				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				// the array for $the_query
				$args = array(
				    'name'	=>	'media-contact',

				);
				 
				// The query
				$the_query = new WP_Query( $args );
				 
				// Pagination fix - set 
				//  $temp_query = $wp_query; // What does this actually do?
				    $wp_query	= NULL;
				    $wp_query	= $the_query;
				?>

				<?php if ( $the_query->have_posts() ) : ?>

					<!-- pagination here -->
					<article>

					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php the_title(); ?>
					<?php the_content(); ?>

					<?php endwhile; ?>
					<!-- end of the loop -->

					</article>
					<!-- pagination here -->

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

				</div>



				<div class="small-12 large-3 columns">

					<?php get_template_part('template-parts/sidebar-menu-walker') ?>

				</div>

			</div><!-- end .row -->

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
