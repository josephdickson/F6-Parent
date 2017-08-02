<?php
/*
Template Name: Landing Page
*/
get_header(); ?>

<!-- Row for main content area - landing-page.php -->
	<div class="small-12 profile columns" role="main">
    
    <?php // Enable shortcodes in widgets
		add_filter('widget_text', 'do_shortcode'); 
	?>
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">	
           
			
            	<div class="small-12 large-9 columns">
                
			<header>

				<h1 class="entry-title hide"><?php the_title(); ?></h1>

			</header>
                    <div class="row">
                            <?php the_content(); ?>
				<?php get_template_part( 'acf' , 'homepage-tiles' ); ?>

				<?php get_template_part( 'acf/acf' , 'flexible-fields' ); ?>

				<?php get_template_part ( 'acf' , 'social-networks' );?>

                    </div>

                            <?php if ( is_user_logged_in() ) { ?>
			 <div class="row">
                            <p class="small">Last modified by <?php the_modified_author(); ?>, on <?php the_modified_date( $d, $echo ); ?>.</p>
			</div>
                            <?php } ?>

		</div>


			<div class="small-12 large-3 columns">

				<?php get_template_part('template-parts/sidebar-menu-walker') ?>

		       </div>

		</article>
			
            </div>
            

			<footer>
				
				<?php the_tags(); ?>
			</footer>
		
	<?php endwhile; // End the loop 
	?>

<?php get_footer(); ?>
