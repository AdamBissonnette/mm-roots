<?php
	global $MM_Roots;
	$brand_logo = $MM_Roots->get_setting("brand_logo");
?>
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
