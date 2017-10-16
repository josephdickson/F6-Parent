<?php get_header(); ?>
			
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
						 <?php 
if ( in_category( 'sagehen-athletics' )) {
	// They have long trunks...
} elseif ( in_category( array( 'Tropical Birds', 'small-mammals' ) )) {
	// They are warm-blooded...
} else {
	// & c.
}
?>
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
		
<?php get_footer(); ?>
