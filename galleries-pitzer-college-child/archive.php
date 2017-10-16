<?php get_header(); ?>

<!-- Row for main content area - archive.php  -->
	<div class="small-12 large-9 columns" role="main">
	<header>
		<h1 class="entry-title"><?php wp_title(); ?></h1>
	</header>
		<div class="small-12 columns">	

	<?php if ( have_posts() ) : ?>
	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			


		<?php /* custom loop for archive.php content */
			

			echo '<ul class="no-bullet">';
				if ( has_post_thumbnail() ) {

					echo '<a href="'. get_permalink() . '" target="_blank">';
					the_post_thumbnail('large');
					echo '</a>';
				}
					echo '<li><a href="'. get_permalink() . '"><strong>' . get_the_title() .'</strong></a>';
					echo '<br /><span class="extra-small">' . the_content() . '</span><br />';

					$tag = get_the_tags(); if (!$tag) { } else { the_tags('<span class="extra-small">Tags: ',', ','</span>') ; }
			
					echo '</li>';
				echo '</ul>';

		?>

		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
	<?php endif; // end have_posts() check ?>
			
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>

		</nav>
	<?php } ?>
	</div>
	</div>

                 <div class="small-12 large-3 columns menu accordion-menu small active">
			<?php dynamic_sidebar("section-menu"); ?>
			<?php echo '<strong>Follow ' . get_bloginfo( 'name' ) . '</strong>'; ?>
				<?php // get social networks 
				 get_template_part( 'acf' , 'social-networks' );?>
                </div>
		
<?php get_footer(); ?>
