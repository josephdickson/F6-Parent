<?php get_header(); ?>
<!-- Row for main content area -- category.php -->
	<div class="small-12 profile columns" role="main">
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
            	<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
           
            <div class="row">
			
            	<div class="small-12 large-9 columns">
						<?php the_content(); ?>
				</div>
                <div class="small-12 large-3 columns menu">
                    <?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'right')); ?>
                </div>
			
            </div>
			<footer>
				
				<p><?php the_tags(); ?></p>
			</footer>
			

		</article>
	<?php endwhile; // End the loop ?>
    
    
    <?php if (is_category('sagehen-athletics')) : ?>
<p>This is the text to describe sagehen</p>
<?php elseif (is_category('faculty')) : ?>
<p>This is the text to describe faculty</p>
<?php else : ?>
<p>This is some generic text to describe all other category pages, 
I could be left blank</p>
<?php endif; ?>
		</div>
<?php get_footer(); ?>
