<?php
	global $MM_Roots;

	//$tagline = $MM_Roots->get_post_meta(get_the_ID(), "tagline", true);
?>

<section id="<?php echo $get_the_name(); ?>" style="background-position: 50% 70px;">
	<?php get_template_part('templates/home-sections/section', 'header'); ?>


</section>

<section id="reviews-section" style="background-position: 50% 70px;">
  
  <div class="container">
      <div class="row-fluid">
   		<?php the_content(); ?>	
      </div>  
  </div>
</section>