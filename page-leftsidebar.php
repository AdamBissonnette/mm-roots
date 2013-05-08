<?php
/*
Template Name: Left Sidebar Template
*/
?>
<div class="wrap container section-content" role="document">
	<div class="content row">
		<div class="main span12" role="main">
			<?php get_template_part('templates/page', 'header'); ?>
		</div>
	</div>
	<div class="content row">
	  <?php if (roots_display_sidebar()) : ?>
	  <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
		<?php include roots_sidebar_path(); ?>
	  </aside><!-- /.sidebar -->
	  <?php endif; ?>
	  <div class="main <?php echo roots_main_class(); ?>" role="main">
		<?php get_template_part('templates/content', 'page'); ?>
	  </div><!-- /.main -->
	</div><!-- /.content -->
</div><!-- /.wrap -->
