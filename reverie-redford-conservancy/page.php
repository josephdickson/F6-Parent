<?php
/*
Template Name: Standard - Right Nav
*/
get_header(); ?>

<!-- Row for main content area - page.php -->
	<div class="small-12 profile columns" role="main">
    
    <?php // Enable shortcodes in widgets
		add_filter('widget_text', 'do_shortcode'); 
	?>
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">	
            	<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>           
			
            	<div class="small-12 large-9 columns">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
                    <div class="row">
                            <?php the_content(); ?>
                            <?php if ( is_user_logged_in() ) { ?>
                            <p class="small">Last modified by <?php the_modified_author(); ?>, on <?php the_modified_date( $d, $echo ); ?>.</p>
                            <?php } ?>
                    </div>
				</div>
                <div class="small-12 large-3 columns menu small light-gray">
                    <?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => '')); ?>
					<?php dynamic_sidebar("Sidebar-subnav"); ?>
                </div>
		</article>
			
            </div>
            

			<footer>
				
				<?php the_tags(); ?>
			</footer>
		
	<?php endwhile; // End the loop ?>

<?php get_footer(); ?>