<?php get_header(); ?>

<!-- Row for main content area - category.php -->
	<div class="small-12 columns" role="main">

	<div class="cover">

		<?php
			// Participant Cover
			get_template_part('/participant/participant-plus-wp-query-cover-2017');

		?>

	</div>

	<strong>Inauguration</strong>
	<?php	
		// Inauguration
		get_template_part('/participant/summer-2017-video'); 
		get_template_part('/participant/summer-2017-inauguration-photos'); 

	?>
	<strong>Commencement</strong>
	<?php
		// Commencement
		get_template_part('/template-parts/wp-query-2017-commencement'); 

	?>

	<strong>Around the Mounds</strong>
	<?php
		// Around the Mounds
		get_template_part('/participant/participant-plus-wp-query-2017-around-the-mounds'); 
	?>		
	</div>
    
 <?php // If user is logged in a post archive menu will appear ?>
    <?php if ( is_user_logged_in() ) { ?>
    <div class="small-12 large-3 columns menu small">
    
 		 <?php get_sidebar('subnav'); ?>    

    </div>
    <?php } ?>
		
<?php get_footer(); ?>
