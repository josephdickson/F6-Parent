<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<!-- Row for main content area - page-home.php -->
	
    
    <?php // Enable shortcodes in widgets
		add_filter('widget_text', 'do_shortcode'); 
	?>
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">	
           
	<div class="row landing">
			<header class="hide">
				<h1 class="entry-title hide"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
            	<div class="small-12">
               <?php // Orbit Slideshow for Foundation 4
			get_template_part( 'acf-slideshow' ); ?>
			
		</div>
		<div class="small-8 columns small">
		<?php the_content(); ?>
		</div>

		<div class="small-4 columns">
		<?php get_template_part( 'acf-flexible-fields-promotional-tiles' ); ?>
		</div>
	</div>
                    <div class="row">

	<div class="small-12 small">

		<?php get_template_part('acf', 'flexible-fields' ); ?>

	</div>





                            
                    </div>
				</div>
               

		</article>
			
            

			<footer>
				
				<?php the_tags(); ?>
			</footer>
		
	<?php endwhile; // End the loop ?>

<?php get_footer(); ?>
