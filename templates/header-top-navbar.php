<?php
  ?>



  <nav class="nav-top">
    <div class="navbar navbar-fixed-top" id="topnavbar"> 
      <div class="navbar-inner navbar-scroll" id="navbartop">
        <div class="container">
          <div class="row">
            <div classs="span5">
              <a class="brand" href="<?php echo home_url(); ?>"> 
              <span style="text-transform: uppercase;"> <?php bloginfo('name'); ?></span></a>
            </div>
            <div class="span7">
              <div id="main-nav" class="scroller-spy">
                <nav class="nav-collapse collapse" role="navigation">
                    <?php
                      if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav primary-nav'));
                      endif;
                    ?>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>