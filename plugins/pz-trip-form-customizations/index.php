<?php
/*
Plugin Name:  TRiP Form Customizations
Plugin URI:   https://www.pitzer.edu
Description:  Customizations for the Gravity Forms TRiP form
Version:      20171025
Author:       Joseph Dickson
Author URI:   https://www.pitzer.edu
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

// Enqueue Scripts and Styles

function pz_trip_form_scripts() {
	wp_enqueue_style( 'trip-form-customizations-datepick-jquery-css', plugins_url() . '/pz-trip-form-customizations/datepick/jquery.datepick.css' );
	wp_enqueue_style( 'trip-form-customizations-custom-css', plugins_url() . '/pz-trip-form-customizations/datepick/custom_style.css' );
	wp_enqueue_script( 'trip-form-customizations-datepick-plugin-js', plugins_url() . '/pz-trip-form-customizations/datepick/jquery.plugin.js', array(), '1.0.0', true );
	wp_enqueue_script( 'trip-form-customizations-datepick-jquery-js', plugins_url() . '/pz-trip-form-customizations/datepick/jquery.datepick.js', array(), '1.0.0', true );
	wp_enqueue_script( 'trip-form-customizations-datepick-ext-js', plugins_url() . '/pz-trip-form-customizations/datepick/jquery.datepick.ext.js', array(), '1.0.0', true );
	wp_enqueue_script( 'trip-form-customizations-kw-datepicker-js', plugins_url() . '/pz-trip-form-customizations/custom_kw_datepicker.js', array(), '1.0.0', true );
	wp_enqueue_script( 'trip-form-customizations-form-functions-js', plugins_url() . '/pz-trip-form-customizations/form_function.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'pz_trip_form_scripts' );

// Will call the function class file
require 'calendar_function_class.php';

// In Development - This method will identify first time participants from text file based on the CXID.
//	If not match found, then first participant question will be marked as 'Yes'
add_filter("gform_pre_render_1", "render_first_time");
function render_first_time($form){

	$first_time_applicant = 'Yes';
	
	// Allows access to current user profile information
	global $current_user;
	get_currentuserinfo();
	
	// Run a search in existing Trip Form entries and check if user has submitted an entry
	// Search by ID in the created_by field
	$search_criteria['field_filters'][] = array( 'key' => 'created_by', value => $current_user->ID );
	$count = GFAPI::count_entries( $form_id, $search_criteria );
	
	// If count greater than 0, then person has at least 1 existing entry submitted
	if ($count > 0) {
		$first_time_applicant = 'No';
	}
	else {
		// Open text file to read existing applicants provided by HR.
		$file_handle = fopen("wp-content/themes/Pitzer-College-trip-form-child/existing_applicants.txt","r");
		
		// Loop thru file and fetch the IDs
		while (!feof($file_handle) ) {
			$line_of_text = fgets($file_handle);
			$parts = explode(',', $line_of_text);

			//print $parts[0] . " | " . $parts[1]. "<br />"; // Testing to show the file output
			
			//check if user Pitzer ID is found in the file.
			if (strcmp( get_the_author_meta( 'pitzerID', $current_user->ID ),  $parts[0]) == 0) {
				//print "matched - not first time <br/>"; // Testing to show case scenario for first timers
				$first_time_applicant = 'No';			 
				break;
			}
		}
			
		// If determined as a first timer, then mark their application as a first time participant.
		if (strcmp( $first_time_applicant,  'Yes') == 0) {
			//print "no match - first time <br/>"; // Testing to show case scenario for first timers
			
			// Inject jQuery to check the first-time participant checkbox
			?>
			<script type='text/javascript'>
				jQuery(document).ready(function(){
					jQuery("#choice_1_79_1").prop("checked", true );
				});
			</script>
			<?php
		}
		
		fclose($file_handle);
	}
	
	return $form;
}
