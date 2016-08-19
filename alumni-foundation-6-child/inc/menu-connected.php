<div class="small-12 large-4 columns">
<?php 
// the query -- Stay Connected
$the_query = new WP_Query( array( 
	'category_name' => 'Be Connected',
) );

	if ( $the_query->have_posts() ) : ?>

	<strong>Be Connected</strong>
	<!-- pagination here -->
	<ul class="menu vertical">

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li class="block"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->
	</ul>
	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>

<div class="small-12 large-4 columns">
<?php 
// the query -- Get Involved
$the_query = new WP_Query( array( 
	'category_name' => 'Stay Involved',
) );

	if ( $the_query->have_posts() ) : ?>

	<strong>Stay Involved</strong>
	<!-- pagination here -->
	<ul class="menu vertical">

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li class="block"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->
	</ul>
	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>

<div class="small-12 large-4 columns">
<?php 
// the query -- Contact Us
$the_query = new WP_Query( array( 
	'category_name' => 'Contact Us',
) );

	if ( $the_query->have_posts() ) : ?>
	<strong>Contact Us</strong>
	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<p class="block"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php the_content(); ?></p>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>
