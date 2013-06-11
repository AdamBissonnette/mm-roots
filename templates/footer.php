<?php
global $MM_Roots;
$footerText = $MM_Roots->get_setting("footer_text");
$footerImage = $MM_Roots->get_setting("footer_logo");
$footerBackgroundColor = $MM_Roots->get_setting("footer_background_color");
$footerStyle = "";

if ($footerBackgroundColor != "")
{
  $footerStyle = sprintf(' background-color: %s;', $footerBackgroundColor);
}

?>

<footer id="footer" class="footer">
<section id="contact-section" class="arrow_box" style="background-position: 50% 25px;<?php echo $footerStyle; ?>">
  <div class="container">
  <div class="row-fluid">
   <div class="text-center">
  <div id="foot-head">
    <div class="text-center page-header">
        
          <h3>
          <span class="white">
          <span class="main-color">CONTACT</span> INFORMATION
          </span>
          </h3>
    </div>
  </div>  
  </div>
</div>
  <div class="row-fluid">

    

    <?php get_template_part('templates/contact/section', 'reviews'); ?>


    <div class="span6">
      <span class="logo">
      <a href="#">
      <img src="<?php echo $footerImage; ?>" alt="logo">
      </a>
      </span>
      <hr>

      <?php get_template_part('templates/contact/section', 'business'); ?>

      <?php get_template_part('templates/contact/section', 'social'); ?>

    </div>


    <?php get_template_part('templates/contact/section', 'contact'); ?>


  </div>
  
  </section>
  
  <?php get_template_part('templates/contact/section', 'map'); ?>

</footer>

<?php wp_footer(); ?>