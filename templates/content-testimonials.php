<?php 
global $MM_Roots;

$title = $MM_Roots->get_setting('testimonial_title');
$tagline = $MM_Roots->get_setting('testimonial_tagline');
$category_ID = $MM_Roots->get_setting('testimonial_category');

?>


<section class="section-content section-testimonials section-color-white" id="section-testimonials">
  <div class="container">
      <h2 class="section-title">
        <?php echo $title; ?>
        <small><?php echo $tagline; ?></small>
      </h2>

      <div class="row">
        <?php
        $testimonials = get_posts( "category=" . $category_ID . "&numberposts=4" );
        foreach ($testimonials as $post) :  setup_postdata($post);  {
        ?>
        <?php get_template_part('templates/testimonials/post', 'listing'); ?>
        <?php } endforeach; ?>
      </div>
  </div>
</section>