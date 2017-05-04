<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foundation-6-parent
 */

?>


<?php
$sticky = get_option( 'sticky_posts' );

$args2 = array(
	'tag_name'=> 'student-awards-2017',	
	'posts_per_page' => 1,
	'post__in'  => $sticky,
	'ignore_sticky_posts' => 1
);
$the_query = new WP_Query( $args2 );
if ( isset($sticky[0]) ) {

echo '<article id="post-' . get_the_ID() . '" class="category-press-release">' ;


// Label with Category Name
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

	while ( $the_query->have_posts() ) {
		$the_query->the_post();

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
	
			// Edit link added to end of post excerpt
			get_template_part( 'template-parts/edit-post-link' );

	}
	echo '</article>';
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// Do nothing	
}

?>



<?php

// Query the rest of the tag group
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$sticky = get_option( 'sticky_posts' );
$args = array(
	'tag'		=> 'student-awards-2017',
	'post__not_in'		=> $sticky,
	'paged'			=> $paged,
);
$query = new WP_Query( $args );


if ( $query->have_posts() ) {

	while ( $query->have_posts() ) {
		$query->the_post();


// Label with Category Name
$include = array( 'Spotlights', 'Press Releases', 'Video', 'In the News' ); // Only display these categories on box labels
$categories = get_the_category();
	$separator = ' | ';
	$output = '';
		if ( ! empty( $categories ) ) {
		    foreach( $categories as $category ) {
			if (in_array($category->cat_name, $include))
				$output .= '<a class="category" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
			}

	}

			// otherwise link to the post as usual
			echo '<article id="post-' . get_the_ID() . '" class="category-press-release">' ;
			echo trim( $output, $separator );
			echo '<a href="' . get_permalink() .'"><h1 class="entry-title">' . get_the_title() . '</h1></a>' ;
			echo '<div class="entry-content">';

				// check if the post has a Post Thumbnail assigned to it.
				if ( has_post_thumbnail() ) {

				the_post_thumbnail( array(200,200, 'class' => ' alignleft') );
				} 

			the_excerpt('Continue reading...');

			echo '</div><!-- .entry-content -->'; 

			echo '<span class="published-date">' . get_the_time('F j, Y') . '</span>';

			// Edit link added to end of post excerpt
			get_template_part( 'template-parts/edit-post-link' );

			echo '</article>';



	}

	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// Do nothing	
}

?>
