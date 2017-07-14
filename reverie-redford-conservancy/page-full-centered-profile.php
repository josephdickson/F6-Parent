<?php
/*
Template Name: Full Width - right nav
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 profile" role="main">
	
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
                	<div class="small-12 large-3 right menu">
                    <?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'left')); ?>
                    </div>
					<?php the_content(); ?>
				</div>
			<footer>
				
				<p><?php the_tags(); ?></p>
			</footer>
			
			<div class="row">
			<div class="small-11 small-centered columns comments">
            	<div class="small-12 large-8 large-centered columns">
			<?php comments_template(); ?>
            	</div>
			</div>
            </div>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>