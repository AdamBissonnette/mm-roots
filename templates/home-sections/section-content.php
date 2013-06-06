<?php
	global $MM_Roots, $sectionID;

	$section = get_post($sectionID);
	$tagline = $MM_Roots->get_post_meta($section->ID, "tagline", true);
?>

<section id="<?php echo $section->post_name; ?>" style="background-position: 50% 70px;">
	<?php get_template_part('templates/home-sections/section', 'header'); ?>


</section>

<section id="reviews-section" style="background-position: 50% 70px;">
  
  <div class="container">
      <div class="row-fluid">
   		<?php echo $section->post_content; ?>	
      </div>  
  </div>
</section>