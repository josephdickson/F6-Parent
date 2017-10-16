<?php
/*
Template Name: Landing page
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 profile" role="main">
	<?php
		remove_filter( 'the_content', 'wpautop' );
		remove_filter( 'the_excerpt', 'wpautop' );
	 ?>
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
            	<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
				<div class="small-12">
					<?php the_content(); ?>
				</div>
			<footer>
				
				<?php the_tags(); ?>
			</footer>
			
			
		</article>
	<?php endwhile; // End the loop ?>

	</div>
<?php get_footer(); ?>

