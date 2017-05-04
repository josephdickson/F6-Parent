<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foundation-6-parent
 */

get_header(); ?>

<div id="primary" class="content-area archive row">

	<main id="main" class="site-main" role="main">

		<div class="small-12 large-9 columns">

			<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

			<?php

				if ( have_posts() ) : ?>

					<header class="page-header">
						
							<h1 class="page-title"><?php echo single_term_title(); ?></h1>
						
					</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'excerpt' );

				endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

		</div>

	</main><!-- #main -->


	<div class="small-12 large-3 columns">

	      <?php get_template_part('template-parts/sidebar-menu-walker') ?>

	</div>

</div><!-- #primary -->

	<div class="row">

		<div class="large-7 large-centered">
			<?php get_template_part( 'template-parts/pagination' ); ?>
		</div>

	</div>

<?php get_footer(); ?>
