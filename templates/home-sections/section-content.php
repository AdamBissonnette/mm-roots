<?php
	global $MM_Roots;

	$sectionID = $MM_Roots->get_post_meta(get_the_ID(), "sectionID", true);
?>

<section id="<?php echo $sectionID; ?>" class="home-section" style="background-position: 50% 70px;">
	<?php get_template_part('templates/home-sections/section', 'header'); ?>

	<div class="container content">
      <div class="row-fluid">
   		<?php the_content(); ?>	
      </div>  
  </div>
</section>