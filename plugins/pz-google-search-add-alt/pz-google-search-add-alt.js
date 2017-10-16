/*
	JQuery to add alt text to Google Custom Search (CSE) button for accessibility compliance - Joseph Dickson
*/
jQuery(document).ready(function($) {

	$('input.gsc-search-button').attr('alt', 'Submit Google Search Query');
	$('input.gsc-search-button').last().addClass('last');

})
