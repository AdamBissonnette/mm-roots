<?php
/*
Template Name: Portfolio Template
*/
?>
<div class="wrap container section-content" role="document">	
	<div class="content row">
	  <?php if (roots_display_sidebar()) : ?>
	  <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
		<?php get_template_part('templates/portfolio/page', 'header'); ?>
	  </aside><!-- /.sidebar -->
	  <?php endif; ?>
	  <div class="main <?php echo roots_main_class(); ?>" role="main">
		<?php get_template_part('templates/portfolio/page', 'content'); ?>
	  </div><!-- /.main -->
	</div><!-- /.content -->
</div><!-- /.wrap -->

<?php if ($MM_Roots->get_setting('testimonial_category')) get_template_part('templates/content', 'testimonials'); ?>