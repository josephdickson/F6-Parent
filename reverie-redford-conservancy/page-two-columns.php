<?php
/*
Template Name: Two Columns - right nav
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 profile columns" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
           
            <div class="row">
			
            	<div class="small-12 large-9 columns">
                
                        <header>
                            <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                            <?php reverie_entry_meta(); ?>
                        </header>
                        
						<?php the_content(); ?>
				</div>
                <div class="small-12 large-3 columns menu">
                    <?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'right')); ?>
                </div>
			
            </div>
			<footer>
				<?php the_tags(); ?>
			</footer>
			

		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>