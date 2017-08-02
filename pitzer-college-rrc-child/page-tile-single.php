<?php
/*
Template Name: Single Tile
*/
get_header(); ?>

<!-- Row for main content area - page-tile-single.php -->
	<div class="small-12 profile columns" role="main">
    
    <?php // Enable shortcodes in widgets
		add_filter('widget_text', 'do_shortcode'); 
	?>
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">	
           
			
            	<div class="small-12 large-10 columns">
                
			<header>
            	<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
                    <div class="row">
                            <?php the_content(); ?>

				<?php get_template_part( 'acf' , 'flexible-fields' ); ?>

				<div class="small-10 large-6 small-centered columns">
					<?php get_template_part( 'acf' , 'promotional-tiles' ); ?>
				</div>

				<?php get_template_part ( 'acf' , 'social-networks' );?>

                    </div>

                            <?php if ( is_user_logged_in() ) { ?>
			 <div class="row">
                            <p class="small">Last modified by <?php the_modified_author(); ?>, on <?php the_modified_date( $d, $echo ); ?>.</p>
			</div>
                            <?php } ?>

				</div>
		<div class="small-12 large-2 columns menu small">
			<?php dynamic_sidebar("sidebar"); ?>
		</div>

                <div class="small-12 large-2 columns menu accordion-menu small active">
					
			<?php dynamic_sidebar("section-menu"); ?>
			<?php dynamic_sidebar("sidebar-subnav"); ?>

                </div>

                <div class="small-12 large-2 columns menu accordion-menu small">
					
			
			
			<?php dynamic_sidebar("sidebar-secondary-subnav"); ?>

                </div>

		</article>
			
            </div>
            

			<footer>
				
				<?php the_tags(); ?>
			</footer>
		
	<?php endwhile; // End the loop 
	?>

<?php get_footer(); ?>
