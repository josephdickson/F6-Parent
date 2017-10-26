/* This JS file renders the datepicker within gravity forms. Also it customizes the datepicker to remember/capture
   the selected dates, added date and month restrictions, and customized CSS to the datepicker. 

 */

jQuery(document).bind('gform_post_render', function(){
	
	//$("#input_1_1_3, #input_1_1_6").attr({type:"hidden"});
	jQuery("#field_1_1").hide(); //hides first and last name
	
	
	jQuery("#field_1_80").hide(); // hides first time participant checkbox
	jQuery("#field_1_79").hide(); // hides first time participant heading
	
	jQuery("#field_1_29").hide(); // hides Employee Info Heading
	jQuery("#field_1_72").hide(); // hides Pitzer ID textbox
	jQuery("#field_1_73").hide(); // hides Employee ID textbox
	
});
