<?php
/**
 * @package pz_campus_connect
 * @version 1.0
 */
/*
Plugin Name: Campus Connect
Plugin URI: https://www.pitzer.edu
Description: Admission chat box plugin using www.collegeweeklive.com's service
Author: Joseph Dickson
Version: 1.0
Author URI: https://www.pitzer.edu
*/

/**
 * Enqueue script
 */

function pz_campus_connect() {
    wp_enqueue_script( 'pz-campus-connect', plugins_url( 'pz-campus-connect', '' ) . '/campus-connect.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'pz_campus_connect' );
?>
