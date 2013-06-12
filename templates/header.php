<?php
global $MM_Roots;
$logo = $MM_Roots->get_setting("brand_logo");

  ?>



  <nav class="nav-top" id="nav">
    <div class="navbar navbar-fixed-top" id="topnavbar"> 
      <div class="navbar-inner navbar-scroll" id="navbartop">
        <div class="container">
          <div class="row">
            <div class="">
              <a class="brand" href="<?php echo home_url(); ?>"> 
                <img id="brand-logo" src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>" />
              </a>
            </div>
            <div>
              <div id="main-nav" class="scroller-spy">
                <nav class="nav-collapse collapse" role="navigation">
                    <?php
                      if (has_nav_menu('header_menu')) :
                        wp_nav_menu(array('theme_location' => 'header_menu', 'menu_class' => 'nav primary-nav'));
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