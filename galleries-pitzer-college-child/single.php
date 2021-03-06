<?php get_header(); ?>

<!-- Row for main content area - single.php -->
	<div class="small-12 profile" role="main">
    
    <?php // Enable shortcodes in widgets
		add_filter('widget_text', 'do_shortcode'); ?>
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">	

	<div class="row">           
			
            	<div class="small-12 large-9 columns">


			<?php get_template_part('post-thumbnail'); ?>
                
			<header>
            	<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
                    <div class="row">

				<?php // Orbit Slideshow for Foundation 4
				get_template_part( 'acf-slideshow'); ?>


                            <?php the_content(); ?>

		<?php get_template_part('acf', 'flexible-fields' ); ?>
		<?php get_template_part( 'acf' , 'gallery' ); ?>
		<p>Last modified by <?php the_modified_author(); ?>, on <?php the_modified_date( $d, $echo ); ?>.</p>

                    </div>
				</div>
                <div class="small-12 large-3 active columns menu accordion-menu small">
			<?php dynamic_sidebar("section-menu"); ?>
			<?php echo '<strong>Follow ' . get_bloginfo( 'name' ) . '</strong>'; ?>
				<?php // get social networks 
				 get_template_part( 'acf' , 'social-networks' );?>
                </div>


				            <?php if ( is_user_logged_in() ) { ?>


				            <?php } ?>



		</article>
			
            </div>

            

			<footer>
				
				<p><span class="small"><?php the_tags(); ?></span></p>
			</footer>
		
	<?php endwhile; // End the loop 
	?>

<?php get_footer(); ?>
