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
			</header>
                    <div class="row">
			    <?php // get_template_part('inc/acf', 'video'); ?>
                            <?php the_content(); ?>
			    <?php get_template_part( 'acf/acf' , 'flexible-fields' ); ?>
                    </div>
				</div>
		<div class="small-12 large-3 columns">
					
            <?php get_template_part('template-parts/sidebar-menu-walker') ?>
            <?php get_template_part('template-parts/sidebar-menu-walker-2') ?>
            <?php get_template_part('template-parts/sidebar-menu-walker-3') ?>
            <?php get_template_part('template-parts/sidebar-menu-walker-4') ?>
            <?php get_template_part('template-parts/sidebar-menu-walker-5') ?>
            <?php get_template_part('template-parts/sidebar-menu-walker-6') ?>
            <?php get_template_part('template-parts/sidebar-menu-walker-7') ?>

        </div>

		
            </div>
			<footer>
				
				<p><?php the_tags(); ?></p>
			</footer>
	</article>	
	<?php endwhile; // End the loop ?>


<?php get_footer(); ?>
	</div>
