<?php

// Adds a custom dropdown with a set of months given the conditional if-else statement within the function.  
add_filter('gform_pre_render_1', 'two_month_dropdown');
function two_month_dropdown($form){
	
	foreach($form['fields'] as &$field){
		
		if($field['type'] != 'select' || strpos($field['cssClass'], 'two-month-dropdown') === false)
			continue;
		
		$month_arr = array();
		/*$month_arr[] = array(array('text' => 'Select a month', 'value' => ''));*/
		$month_arr[] = array('text' => date('F', strtotime(date('Y-m')." -2 month")), 'value' => date('F Y', strtotime(date('Y-m')." -2 month")) ); 
		$month_arr[] = array('text' => date('F', strtotime(date('Y-m')." -1 month")), 'value' => date('F Y', strtotime(date('Y-m')." -1 month")), 'isSelected' => 1 ); 
		$month_arr[] = array('text' => date('F', strtotime(date('Y-m'))), 'value' => date('F Y', strtotime(date('Y-m'))) );

		
		// Added month drop down restriction
		// Condition: Set cut off date when to move the next set of months available.
		/*if ( date('j') < 21) {
			$month_arr[] = array('text' => date('F', strtotime(date('Y-m')." -2 month")), 'value' => date('F Y', strtotime(date('Y-m')." -2 month")) ); 
			$month_arr[] = array('text' => date('F', strtotime(date('Y-m')." -1 month")), 'value' => date('F Y', strtotime(date('Y-m')." -1 month")), 'isSelected' => 1 ); 
		}
		else {
			$month_arr[] = array('text' => date('F', strtotime(date('Y-m')." -1 month")), 'value' => date('F Y', strtotime(date('Y-m')." -1 month")) ); 
			$month_arr[] = array('text' => date('F', strtotime(date('Y-m'))), 'value' => date('F Y', strtotime(date('Y-m'))), 'isSelected' => 1 ); 
		}*/
		
		$field->choices = $month_arr;
	}
	return $form;
}

// Calculates the total amt of dates entered and total amt for each mode of transportation
// 	 and saves each amt into an hidden input field (Admin can only see).
add_action( 'gform_pre_submission_1', 'pre_submission_handler' );
function pre_submission_handler( $form ) {

	$input_id_list = array(53,57,59,61,63); // list of IDs of date inputs 
	$count_list = array(65,66,67,68,69); // list of IDs of the count inputs
	$total = 0;
	
	for ($i = 0; $i<count($input_id_list); $i++) {
		$temp_date_list = array(); // Empty out the array
		if ( rgpost('input_' . $input_id_list[$i]) != ''  ) {
			$temp_date_list = explode(",", rgpost('input_' . $input_id_list[$i]));
			$_POST['input_' . $count_list[$i] ] = count($temp_date_list);
			$total += count($temp_date_list); 
			
			sort($temp_date_list);
			$_POST['input_'. $input_id_list[$i]] = implode(",", $temp_date_list);
		}
		//print_r ($temp_date_list); // For testing 
		
	}
	$_POST['input_44'] = $total; // Input 44 is the overall total input field
}


// This function will prepopulate the form title to input field id 48 just before submission
add_action( 'gform_pre_submission_1', 'prepopulate_form_title' );
function prepopulate_form_title( $form ) {
	$_POST['input_48'] = $_POST['input_46'];
	
	return $form;
}


// This function will calculate the reimbursement, participation and the total of the two. 
add_action( 'gform_pre_submission_1', 'calculate_incentive' );
function calculate_incentive( $form ) {
	// Set Participation Rate
	//* If you make change to the rate, you must change it over in the update_incentive_amt function 
	$first_time_rate = 3.5;
	$regular_rate = 1.75;
	
	// Get input 49, convert into string, do string replace to remove $ and commas, convert back to float value.
	$reimburse_amt = str_replace("$","", strval($_POST['input_49']));
	$reimburse_amt = floatval(str_replace (",","", $reimburse_amt));
	
	// Adjust the reimburse if passed $50
	if ($reimburse_amt > 50 ) {
		$_POST['input_93'] = 50.00;
	}
	else {
		$_POST['input_93'] = number_format($reimburse_amt, 2);
	}
	
	// Check First Time input chosen. If yes, then multiple participation rate by 3.5. If not, then 1.75 
    if (isset($_POST['input_79_1']) ) {
		$_POST['input_94'] = number_format(($_POST['input_44']* $first_time_rate), 2);
	}
	else {
		$_POST['input_94'] = number_format(($_POST['input_44']* $regular_rate), 2);
	}
	// Add the reimbursement and participation
	$_POST['input_95'] = number_format(( $_POST['input_93'] + $_POST['input_94'] ), 2);
	
	return $form;
}


/* Function: render_admin_datepicker()
   Param: $form, not used in this instance. 
   Description: This function renders the datepicker for all dates fields in admin entry editor page. 
	  Also it will update the total counts of each mode of transportation and total overall dates participated
	  when the focusout event listener is called. However, the user must press 'Update' button to save the save the
	  changes.
 */
add_filter("gform_admin_pre_render_1", "render_admin_datepicker");
function render_admin_datepicker($form){
	
	 ?>

		 
    <script type='text/javascript'>
		jQuery(document).ready(function(){
			
			jQuery("#input_53, #input_57, #input_59, #input_61, #input_63, #input_55").datepick({  
			multiSelect: 999,
			changeMonth: true, 
			monthsToShow: 2,
			onClose: update_date_counts,
			showTrigger: '#calImg' });
			
			
			// Recalculate the total incentive if these values change
			jQuery("#input_83, #input_85, #input_93").focusout(function(){
				update_incentive_amt();
			});
			
			// Recalculate the total incentive if First Time checkbox value changes
			jQuery("#choice_79_1").change(function(){
				update_incentive_amt();
			});
			
			//This function calculates the total for each mode of transportation and total amt participated
			function update_date_counts()
			{
				var temp_date_list = [];
				var input_id_list = [53,57,59,61,63];
				var count_list = [65,66,67,68,69];
				var total = 0;

				for (i = 0; i<input_id_list.length; i++)
				{
					temp_date_list.length = 0; // Empty out the array
					if ( jQuery("#input_" + input_id_list[i]).val() != ''  ) {
						temp_date_list = jQuery("#input_" + input_id_list[i] ).val().split(",");
						jQuery("#input_" + count_list[i]).val(temp_date_list.length);
						total += temp_date_list.length; 
					}
					else {
						jQuery("#input_" + count_list[i]).val("");
						//alert(input_id_list[i]);
					}
				}
				jQuery("#input_44").val(total);
				
				update_incentive_amt();
			}
			
			//This function updates the dollar amount earned 
			function update_incentive_amt()
			{
				// Set Participation Rate
				//* If you make change to the rate, you must change it over in the calculate_incentive function
				var first_time_rate = 3.5;
				var regular_rate = 1.75;
				
				// Check if the First Time is checked with Yes
				if (jQuery("#choice_79_1:checked").val() != 'Yes') {
				
					jQuery("#input_94").val( (jQuery("#input_44").val() * regular_rate).toFixed(2) );
				}
				else {
				
					jQuery("#input_94").val( (jQuery("#input_44").val() * first_time_rate).toFixed(2) );
				}
				
				jQuery("#input_95").val( (parseFloat(jQuery("#input_94").val()) + parseFloat(jQuery("#input_93").val())).toFixed(2) );

			}
			
		});
    </script>
    <?php
	
	return $form;
}
