$(document).ready(function() {	
	// Animations for main buttons	
	$('figure').hover(
	    function(){
	        $(this).addClass('figure_active');
	        $(this).find('div.shakeable').effect( "shake", { direction: "right", times: 2, distance: 4}, 1000 );
	    },
	    function(){
	        $(this).removeClass('figure_active');
	    }
	);
});