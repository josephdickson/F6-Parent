<?php
/**
 * @package pz_campus_connect
 * @version 1.0
 */
/*
Plugin Name: Google Search alt tag
Plugin URI: https://www.pitzer.edu
Description: Adds alt tag to Google CSE search button to fix accessibilty error
Author: Joseph Dickson
Version: 1.0
Author URI: https://www.pitzer.edu
*/

/**
 * Enqueue script
 */

function pz_google_search_add_alt() {
    wp_enqueue_script( 'pz-google-search-add-alt', plugins_url( 'pz-google-search-add-alt', '' ) . '/pz-google-search-add-alt.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'pz_google_search_add_alt' );
?>
