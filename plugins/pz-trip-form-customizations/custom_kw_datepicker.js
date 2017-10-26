/* This JS file renders the datepicker within gravity forms. Also it customizes the datepicker to remember/capture
   the selected dates, added date and month restrictions, and customized CSS to the datepicker. 

 */
jQuery(document).bind('gform_post_render', function(){
	
	// Adds class selectors to the datepicker inputs.
	jQuery("#input_1_53, #input_1_57, #input_1_59, #input_1_61, #input_1_63").addClass("custom-datepicker");
	
	// Adds datepicker image as a background image to each datepicker input.
	jQuery(".custom-datepicker, #input_1_70").css({'background-image': 'url(wp-content/plugins/pz-trip-form-customizations/datepick/calendar-green.gif)', 'background-position': '2px','background-repeat': 'no-repeat'});
	
	var holidayList;
	// Check for any holidays listed input and save the date to holidayList array
	if  ( jQuery("#input_1_55").val() != '' && jQuery("#input_1_55").val() != undefined ) {
		// Get input value and remove any blank spaces
		var holidayStr = jQuery("#input_1_55").val().replace(/ /g, "");
		holidayList = holidayStr.split(",");
		
		// Check and correct all dates if need leading zeros in this format mm/dd/yyyy.
		var d;
		for (x in holidayList) {
			if ( holidayList[x].length <= 9 ) {
				d = new Date((holidayList[x]));
				holidayList[x] = ("0" + (d.getMonth() + 1)).slice(-2) + "/" + ("0" + (d.getDate())).slice(-2) + "/" + d.getFullYear();
			}
		}
	}
	
	//Add holidays to holiday object
	var holidayListObj=[];
	for (x in holidayList) {
		holidayListObj.push([holidayList[x], 'Holiday', 'holiday']);
	}
	
	// Instantiate datepicker for each mode of transportation 
	jQuery("#input_1_53, #input_1_57, #input_1_59, #input_1_61, #input_1_63").datepick({  
		multiSelect: 999,
		changeMonth: false, 
		monthsToShow: 1,
		alignment: 'middleRight',
		pickerClass: 'custom-style',
		showTrigger: '#calImg' });
	
	// Instantiate datepicker for Employee Signature 
	jQuery("#input_1_70").datepick({  
		changeMonth: false,
	    pickerClass: 'custom-style',		
		monthsToShow: 1, 
		showTrigger: '#calImg' });
				 
	// Make datepicker inputs to read only
	jQuery('.custom-datepicker, #input_1_70').attr('readonly', true);
	
	var month_obj = {January:1, February:2, March:3, April:4, May:5, June:6, July:7, August:8, September:9, October:10, November:11, December:12};
	update_cal_month();
	
	
	var disabledList = []; // Holds list of disabled dates
	var disabledListObj = []; // Holds the disabled date list as an object
	var selectedID;
	
	// This listener will help display all the selected dates outside of the selected datepicker. 
	jQuery('.custom-datepicker').click(function() {
		
		selectedID = jQuery(this).attr('id'); // Get the selected ID

		disabledListObj.length = 0; // Empty out array
		disabledListObj = holidayListObj.slice(); //Copy array values to disabledListObj
		
		// Loop thru each datepicker and grab all dated selected excluding the dates from the selected ID.
		jQuery('.custom-datepicker').each(function() {
			if ( jQuery(this).attr('id') != selectedID && jQuery("#" + jQuery(this).attr('id')).val() != '' ){
				disabledList = jQuery("#" + jQuery(this).attr('id')).val().split(",");
				for (y in disabledList) {
					disabledListObj.push([disabledList[y], 'Selected', 'selected-date']);
				}
			}
		});
		
		// Change the selected datepicker with function - set_disabled_dates
		jQuery("#" + selectedID).datepick('option', { onDate: set_disabled_dates} );
	});
	
	// This listener will change the datepicker to the selected month and clear out any selected dates.
	jQuery("#input_1_46").change(function() {
		update_cal_month();
		jQuery('.custom-datepicker').datepick('clear');
	});
	
	/* Function: update_cal_month()
	 * Param: NA 
	 * Description: This function is called when a month is changed by the user, so the calendars input are 
	 * 	all cleared and set new restricted to dates range to see only one month.
	 */
	function update_cal_month() {
		var mon_yr_str = jQuery("#input_1_46").val().split(" ");
		var date = new Date(), y = mon_yr_str[1], m = month_obj[mon_yr_str[0]];
		var lastDay = new Date(y, m, 0).getDate();

		jQuery('.custom-datepicker').datepick('option', { minDate: new Date(y, m-1, 1), maxDate: new Date(y, m-1, lastDay) });
	}

	/* Function: set_disabled_dates()
	 * Param: date - is a date object which contains a set of days given in a your calendar display range. 
	 * Param: inMonth - is a boolean variable return true if month is within your calendar display range.  
	 * Description: This function gathers all the selected date (except for the calendar currently selected),
	 *	the list of holidays, and the weekends, and then sets them to disabled.  
	 */
	function set_disabled_dates (date, inMonth) {

		var month, day, index; 
		if (inMonth) { 
			 
			for (i = 0; i < disabledListObj.length; i++) {
				
				if ((disabledListObj[i][0]).substring(0,1) == "0") {
					month = (disabledListObj[i][0]).substring(1,2);
				}
				else {
					month = (disabledListObj[i][0]).substring(0,2);
				}
						  
				
				index = (disabledListObj[i][0]).indexOf("/");
				if ((disabledListObj[i][0]).substring(index+1,index+2) == "0") {
					day = (disabledListObj[i][0]).substring(index+2,index+3);
				}
				else {
					day = (disabledListObj[i][0]).substring(index+1,index+3);
				}
						   
				if (date.getMonth() + 1 == month && date.getDate() == day) { 
					return {selectable: false, title: disabledListObj[i][1], dateClass: disabledListObj[i][2]}; 
				} 
			} return {selectable: (date.getDay() || 7) < 6};
		} 
		return {}; 
	}
	
}); 
