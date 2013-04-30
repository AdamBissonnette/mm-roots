<header class="banner" role="banner">
  <div class="container">
  	<a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
  	  <i class="icon-reorder"></i>
    </a>
    <a class="brand span3" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    <nav class="nav-main" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
        endif;
      ?>
    </nav>
  </div>
</header>