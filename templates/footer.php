<?php
global $MM_Roots;
$footerText = $MM_Roots->get_setting("footer_text");

if (is_active_sidebar( 'sidebar-footer' )) {
?>

<footer class="section-color-primarydark">
<div class="container">
  <div class="row">
	  <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</div>
</footer>

<?php } ?>

<div class="post-footer section-content section-content-mini section-color-graydark">
    <div class="container">
      <p class="pull-right">
        <?php
        echo stripslashes($footerText);
        
        ?>
      </p>
      <p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?> - All rights reserved</p>
    </div>
  </div>

<?php wp_footer(); ?>
