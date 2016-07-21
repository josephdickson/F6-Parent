<div class="fat-footer small">
<div class="small-12 large-4 columns">

<a href="http://www.pitzer.edu/"><img src="<?php echo get_template_directory_uri(); ?>/img/pitzer_logo_sans_colleges_white-transparent.png" alt="Pitzer College Logo" width="279" height="91" /></a>
<?php
	if(function_exists('get_field')){
		// Footer Contact Information
		$office = get_field('office' , 'option');
		$location = get_field('location' , 'option');
		$phone = get_field('phone' , 'option');
		$address = get_field('address' , 'option');
		$email = get_field('email' , 'option');
	
 ?>

<ul class="contact">
    <li>Contact us</li>
    <li><strong class="text-orange"><?php if(isset( $email )) : 
		
		echo '<a href="mailto:' . $email . '">' . $office . '</a>'; 
	else :
		if(isset( $office)) echo $office; 
	endif;		

	?></strong></li>
    <li class="small"><?php if(isset( $location)) echo $location; ?></li>
    <li class="small"><?php if(isset( $phone)) echo $phone; ?></li>
    <li class="small"><?php if(isset( $address)) echo  $address; ?></li>
</ul>

<?php } //end check for get_field -- ACF ?>
	<?php get_template_part( 'acf/social-networks' ); ?>
</div>
    <div class="small-12 medium-6 large-2 columns">
	<?php get_template_part('template-parts/footer-column-1-menu-walker') ?>
    </div>
    
    <div class="small-12 medium-6 large-2 columns">
	<?php get_template_part('template-parts/footer-column-2-menu-walker') ?>
    </div>
    
    <div class="small-12 medium-6 large-2 columns">
	<?php get_template_part('template-parts/footer-column-3-menu-walker') ?>
    </div>
    <div class="small-12 medium-6 large-2 columns">
	<?php get_template_part('template-parts/footer-column-4-menu-walker') ?>
    </div>
</div><!-- .fat-footer -->
