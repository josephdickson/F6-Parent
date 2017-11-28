<?php 
/*

Plugin Name: PZ Google Services
Plugin URI: pitweb.pitzer.edu
Description: Google Analytics Implementation for Pitzer College
Version: 2.0
Author: Joseph Dickson
Author URI: www.pitzer.edu
Date Created: July 14, 2014
Modified: November 28, 2017
*/

/*
 * enqueue script in footer
 */

function pz_google_services() {
  	wp_enqueue_script( 'pz-analytics', plugins_url() . '/pz-google-services/pz-analytics.js', array ('jquery'),'',true );
	wp_enqueue_script( 'google-scripts', 'https://www.google.com/jsapi', '', '', true );
}


add_action( 'wp_enqueue_scripts', 'pz_google_services');
?>
