<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
    
  ?>
  <?php include roots_template_path(); ?>

  <?php get_template_part('templates/footer');
  
  		global $MM_Roots;
  		$animation = $MM_Roots->_settings["mm_roots_jumbotron_animation"];
  		if ($animation != '')
  		{
	  		$animation = sprintf('animation: "%s", ', $animation);
  		}
  		
  		$jumbotron = $animation;
  		
  		$mapPosition = $MM_Roots->_settings["mm_roots_map_position"];
  		$mapZoom = $MM_Roots->_settings["mm_roots_zoom_level"];
  ?>

  <script type="text/javascript">  
  	jQuery().ready(function($) {
		// ------------------------------------
		// FlexSlider
		// ------------------------------------
		$('.flexslider').flexslider({
			<?php echo $jumbotron; ?>
		});
	
		// ------------------------------------
		// Google Maps
		// ------------------------------------
		$('#map_canvas').gmap({'scrollwheel': false}).bind('init', function() {
			$('#map_canvas').gmap('addMarker', {'position': '<?php echo $mapPosition; ?>', 'bounds': true}).click(function() {});
			$('#map_canvas').gmap('option', 'zoom', <?php echo $mapZoom; ?>);
		});
	
		// ------------------------------------
		// FitVids
		// ------------------------------------
		$(".fitvids").fitVids();
	});
  </script>

</body>
</html>
