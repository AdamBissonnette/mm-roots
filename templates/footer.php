<?php
global $MM_Roots;
$footerText = $MM_Roots->get_setting("footer_text");
$footerImage = $MM_Roots->get_setting("footer_logo");

$backgroundStyle = '';

if ($footerImage)
{
  $backgroundStyle = sprintf(" style=\"background-image: url('%s')\"", $footerImage);
}

?>

<footer class="section-color-primarydark">
<div class="container"<?php echo $backgroundStyle; ?>>
  <div class="row">
	  <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</div>
</footer>

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
