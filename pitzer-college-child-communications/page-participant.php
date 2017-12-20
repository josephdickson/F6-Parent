<?php
/**
* Template Name: Participant
* This page is mostly populated by custom WP_Query loops to help automatically
* rotate the previous post into the magazine listing at the bottom of the page.
*/

get_header(); ?>

<div id="primary" class="content-area columns small-12">
	<main id="main" class="site-main" role="main">
		<div class="columns small-12 large-9">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				}
				?>

				<header id="content" class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->



				<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

					the_post_thumbnail( 'medium', array( 'class' => 'alignright' ) );
					echo '<span class="featured-caption">' . get_post(get_post_thumbnail_id())->post_excerpt . '</span>'; // Grabs Caption associated with the Media File / Image

				}

				else { // Do nothing, you can place code here for a fallback when there isn't a featured image set on the page

				}
				?>

				<?php
				// Display the most recent post
				get_template_part('participant/participant-most-recent-wp-query');
				?>

			</article>

			<?php
			// Display the remainings posts exluding the most recent
			get_template_part('participant/participant-index-wp-query');

			while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'image-participant' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.

		?>

		<?php 	// Requires Advanced Custom Fields
		get_template_part( 'acf/acf' , 'flexible-fields' ); ?>
	</div>
	<div class="small-12 large-3 columns">

		<?php get_template_part('template-parts/sidebar-menu-walker') ?>

	</div>
</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
