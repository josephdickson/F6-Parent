<?php
/**
 * @package remove_foundation_jquery
 * @version 1.0
 */
/*
Plugin Name: Filter Bar & Foundaiton 6 conflict fix
Plugin URI: https://www.pitzer.edu
Description: Foundation 6's jQuery conflicts with the Events Calendar Filter Bar, this plugin dequeues Foundation 6's jQuery if it appears on a Events Calendar Page. This plugin should only be activated on sites using Events Calendar Pro.
Author: Joseph Dickson
Version: 1.0
Author URI: https://www.pitzer.edu
*/

function remove_foundation_jquery() {
	// Checks if the page uses an Events Calendar template
	if( tribe_get_current_template () ) {
			wp_dequeue_script( 'foundation-jquery' );
			wp_deregister_script( 'foundation-jquery' );
	}
}
add_action( 'wp_print_scripts', 'remove_foundation_jquery', 100 );
?>
