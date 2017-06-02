<?php get_header(); ?>

<!-- Row for main content area - category.php -->
	<div class="small-12 columns" role="main">

	<?php	// WP_Query loops  

		// Cover and Contents
		get_template_part('/participant/participant-plus-wp-query-cover-contents'); 

		// Around Campus / Single items displays tag for flag
		get_template_part('participant/participant-plus-wp-query-singles');

		// Around the Mounds
		get_template_part('participant/participant-plus-wp-query-around-the-mounds');

		// A la Carte	
		get_template_part('participant/participant-plus-wp-query-a-la-carte');

		// Faculty 	
		get_template_part('participant/participant-plus-wp-query-faculty');

		// In Memoriam 	
		get_template_part('participant/participant-plus-wp-query-memoriam');
	?>


	</div>
    
 <?php // If user is logged in a post archive menu will appear ?>
    <?php if ( is_user_logged_in() ) { ?>
    <div class="small-12 large-3 columns menu small">
    
 		 <?php get_sidebar('subnav'); ?>    

    </div>
    <?php } ?>
		
<?php get_footer(); ?>
