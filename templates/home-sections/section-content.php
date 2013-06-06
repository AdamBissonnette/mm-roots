<?php
	global $MM_Roots;

	$post = get_post($postID);
	$tagline = $MM_Roots->get_post_meta($post->ID, "tagline", true);
?>

<section id="<?php echo $post->post_name; ?>" style="background-position: 50% 70px;">
	<?php get_template_part('templates/home-sections/section', 'header'); ?>


</section>

<section id="reviews-section" style="background-position: 50% 70px;">
  
  <div class="container">
      <div class="row-fluid">
   		<?php echo $post->post_content; ?>	
      </div>  
  </div>
</section>