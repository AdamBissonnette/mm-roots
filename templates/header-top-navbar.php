<?php
  /*

<header class="banner navbar-fixed-top" role="banner">
  <div class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand span6" href="<?php echo home_url(); ?>/">
      	<img class="brand-logo" src="<?php echo $brand_logo; ?>" />
        <?php bloginfo('name'); ?>
      </a>
      <nav class="nav-collapse collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav primary-nav pull-right'));
          endif;
        ?>
      </nav>
    </div>
  </div>
  </div>
</header>

*/ ?>



  <nav class="nav-top">
    <div class="navbar navbar-fixed-top" id="topnavbar"> 
      <!-- navbar-fixed-top -->
      <div class="navbar-inner navbar-scroll" id="navbartop">
        <div class="container">
          <div class="row">
            <div classs="span5">
              <a class="brand" href="<?php echo home_url(); ?>"> 
              <span><i class="icon-circle-arrow-down"></i> <?php bloginfo('name'); ?></span></a>
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
      <!-- END HEADER headertop NAV -->


<!-- HEADER MARKETING SLOGAN-->
<header class="container">
  <div class="row-fluid">
    <div class="wrap-hero">
      <div class="hero-unit text-center hide">
        <!--LOGO-->
        <div class="logo">
          <a href="#" title="Scroll&amp;Strap">
            
          </a>
        </div>
        <!--/ LOGO-->
        
          <div class="inner-wrap-hero">
          
            <h1 class="text-center main-color"> 
              
              <span class="visible-desktop"><img src="assets/img/logo_1.png" alt="logo"></span>
              <span class="visible-desktop">Honesty | Integrity | Safety | Craftsmanship</span>
            
              
            </h1>
            
          </div>
        <!--<hr class="half">-->
      <span class="gobottom" id="nav2">
          <a href="#features-section" title="">
            <i class="icon-chevron-down icon-4x"></i>
          </a>
      </span>
        
      
      </div>  
    </div><!-- / HERO UNIT-->
  </div><!-- / HERO WRAP-->
</header><!-- / HEADER MARKETING SLOGAN container-->