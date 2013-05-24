<?php
global $MM_Roots;
$footerText = $MM_Roots->get_setting("footer_text");

?>

<footer class="section-color-primarydark">
<div class="container" style="background-image: url('<?php echo $MM_Roots->get_setting("footer_logo"); ?>')">
  <div class="row">
	  <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</div>
</footer>

<div class="post-footer section-content section-content-mini section-color-graydark">
    <div class="container">
      <p class="pull-right">
        Designed by
        <?php
        echo stripslashes($footerText);
        
        ?>
      </p>
      <p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?> - All rights reserved</p>
    </div>
  </div>

<?php wp_footer(); ?>
