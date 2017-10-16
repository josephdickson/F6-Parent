<?php
/*
Template Name: 3 Columns - Redford Conservancy
*/
 get_header(); ?>

<!-- Row for main content area -->
	<div class="row">
		<div class="small-12 large-12 columns">
		
	</div>
		<div class="small-12 large-2 columns" role="main">
			<?php get_sidebar(); ?>
			
				
		</div>

        <div class="small-12 large-8 columns" role="main">
	<?php get_sidebar('redford-banner'); ?>
 <?php wp_insert_post( $post, $wp_error ); ?> 


        <?php /* Start loop */ ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php reverie_entry_meta(); ?>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <footer>
                    <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
                    <?php the_tags(); ?>
                </footer>
            </article>
        <?php endwhile; // End the loop ?>
    
        </div>
	<div class="small-12 large-2 columns" role="main">
<?php get_sidebar('right'); ?>
	</div>
		
<?php get_footer(); ?>