<?php
/*
Template Name: Centered Content
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 profile" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
            <div class="small-12 large-8 large-centered columns">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
            </div>
			</header>
				<div class="small-12 large-8 large-centered columns">
					<?php the_content(); ?>
				</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<?php the_tags(); ?>
			</footer>
			
			<div class="row">
			<div class="small-11 small-centered columns comments">
            	<div class="small-8 small-centered columns">
			<?php comments_template(); ?>
            	</div>
			</div>
            </div>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>