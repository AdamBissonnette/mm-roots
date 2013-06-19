<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?> data-spy="scroll" data-target=".scroller-spy" data-twttr-rendered="true">

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->
  <div class="main-wrapper">
      <?php
        do_action('get_header');
        // Use Bootstrap's navbar if enabled in config.php
        if (!is_front_page()) {
      ?>
        <?php
          get_template_part('templates/header');
        }
        
      ?>
      <?php include roots_template_path(); ?>
    
    <?php get_template_part('templates/footer');
    
    		global $MM_Roots;
    		//$animation = $MM_Roots->get_setting("jumbotron_animation");
        $mapPosition = $MM_Roots->get_setting("map_position");
        $mapZoom = $MM_Roots->get_setting("zoom_level");
    ?>


    <div class="modal hide fade" id="mm-dialog">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h3 id="mm-dialog-title"></h3>
      </div>
       <div class="modal-body" id="mm-dialog-message">
          <p></p>
       </div>
       <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
        </div>
    </div>
  </div>

  <div class="modal hide fade" id="mm-dialog">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 id="mm-dialog-title">Message Sent!</h3>
    </div>
     <div class="modal-body" id="mm-dialog-message">
        <p>Your message has been sent.  We will be in touch shortly!</p>
     </div>
     <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn">Close</a>
      </div>
  </div>

  <script type="text/javascript"> 
    jQuery().ready(function($) {
      // ------------------------------------
      // Google Maps
      // ------------------------------------
      jQuery(document).ready(function(){

        jQuery('#map').gMap({ address: '<?php echo $mapPosition; ?>',
                 panControl: true,
               zoomControl: true,
                 zoomControlOptions: {
          style: google.maps.ZoomControlStyle.SMALL
                 },
               mapTypeControl: true,
               scaleControl: true,
               streetViewControl: false,
               overviewMapControl: true,
                 scrollwheel: false,
                 icon: {
            image: "http://www.google.com/mapfiles/marker.png",
            shadow: "http://www.google.com/mapfiles/shadow50.png",
            iconsize: [20, 34],
            shadowsize: [37, 34],
            iconanchor: [9, 34],
            shadowanchor: [19, 34]
          },
            zoom:<?php echo $mapZoom; ?>,
                 markers: [
              { 'address' : '<?php echo $mapPosition; ?>'}
            ]
                 
                 
                 }); 
        });
    });
  </script>

</body>
</html>
