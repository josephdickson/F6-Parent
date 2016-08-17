<?php get_header(); ?>


<!-- Row for main content area - single.php -->

	<div class="small-12 profile columns" role="main">
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>


				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
           
			
            	<div class="small-12 large-9 columns">
                
			<header>
            	<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
                    <div class="row">
			    <?php // get_template_part('inc/acf', 'video'); ?>
                            <?php the_content(); ?>
			    <?php get_template_part( 'acf' , 'flexible-fields' ); ?>
                    </div>
				</div>
		<div class="small-12 large-3 columns menu accordion-menu small">
					
			<?php dynamic_sidebar("section-menu"); ?>

                </div>

		
            </div>
			<footer>
				
				<p><?php the_tags(); ?></p>
			</footer>
	</article>	
	<?php endwhile; // End the loop ?>


<?php get_footer(); ?>
	</div>
