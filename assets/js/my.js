// jquery script for FoliSimple theme for GetSimple CMS
//
// this script make the two <a> links in the header toggle the visibility of their related content divs

$(document).ready(function() {		
		
		$('#projects-toggle').toggle(function() {
			$('#projects-content').fadeIn();			
		}, function() {
			$('#projects-content').fadeOut();			
		});
		
		
		$('#about-toggle').toggle(function() {
			$('#about-content').fadeIn();			
		}, function() {
			$('#about-content').fadeOut();			
		});

});