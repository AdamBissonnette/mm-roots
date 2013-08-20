<?php
	global $MM_Roots;
	$brand_logo = $MM_Roots->get_setting("brand_logo");
?>

<header class="navbar transparent navbar-fixed-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <a class="brand" href="index.html">
            <?php bloginfo('name'); ?>
        </a>
        <nav class="nav-collapse collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>