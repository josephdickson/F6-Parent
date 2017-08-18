<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foundation-6-parent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	$include = array( 'Spotlights', 'Press Releases', 'Video', 'In the News' ); // Only display these categories on box labels
	$categories = get_the_category();
		$separator = ' | ';
		$output = '';
			if ( ! empty( $categories ) ) {
			    foreach( $categories as $category ) {
				if (in_array($category->cat_name, $include))
				$output .= '<a class="category" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
			}
			    echo trim( $output, $separator );

	}
	?>


				<?php
				// Check if Advanced Custom Fields has a redirect for this post
				if (get_field('redirect_to_url') ) {

					// check if the post has a Post Thumbnail assigned to it.
					if ( has_post_thumbnail() ) {

					the_post_thumbnail( array(200,200, 'class' => ' alignleft') );

					} 

					echo '<header id="content" class="entry-header">';
					
					// Check if URL is listed as defunct in the post - requires advanced custom fields
					if (get_field('defunct_url')) {

					echo '<a href="' . get_permalink() .'"><h1 class="entry-title"><h1 class="entry-title">' . get_the_title() . '</h1></a>' ;
					
					}

					else echo '<a href="'. get_field('redirect_to_url') . '" target="_blank"><h1 class="entry-title">' . get_the_title() . '</h1></a>' ;

					echo '</header><!-- .entry-header -->';

					echo '<div class="entry-content">';

					if (get_field('publication_name')) { echo '<em>' . get_field('publication_name') . '</em>';}

					echo '</div><!-- .entry-content -->'; 

					echo '<span class="published-date">' . get_the_time('F j, Y') . '</span>';

				?>

				<?php 

					} else {
					// otherwise link to the post as usual
					echo '<a href="' . get_permalink() .'"><h1 class="entry-title">' . get_the_title() . '</h1></a>' ;
					echo '<div class="entry-content">';
					// check if the post has a Post Thumbnail assigned to it.
					if ( has_post_thumbnail() ) {

					the_post_thumbnail( array(200,200, 'class' => ' alignleft') );

					} 

					the_excerpt('Continue reading...');

					echo '</div><!-- .entry-content -->'; 

					echo '<span class="published-date">' . get_the_time('F j, Y') . '</span>';
				} ?>


	<?php	// Edit link added to end of post excerpt
		get_template_part( 'template-parts/edit-post-link' ); 
	?>

</article><!-- #post-## -->
