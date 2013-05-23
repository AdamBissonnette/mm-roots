jQuery().ready(function($) {
	// ------------------------------------
	// FlexSlider
	// ------------------------------------
	$('.flexslider').flexslider({
		animation: "slide"
	});
	
	// ------------------------------------
	// Google Maps
	// ------------------------------------
	$('#map_canvas').gmap({'scrollwheel': false}).bind('init', function() {
		$('#map_canvas').gmap('addMarker', {'position': '52.127551,-106.667151', 'bounds': true}).click(function() {
			$('#map_canvas').gmap('openInfoWindow', {'content': 'We are here!'}, this);
		});
		$('#map_canvas').gmap('option', 'zoom', 15);
	});
	
	// ------------------------------------
	// FitVids
	// ------------------------------------
	$(".fitvids").fitVids();
});