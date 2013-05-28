<?php 
  global $MM_Roots;
  $category_id = $MM_Roots->get_setting("news_category");
?>

<div class="news-header">
  <h2 class="section-title">
    <?php echo roots_title(); ?>
	<?php
		$description = get_post_meta(get_the_ID(), "tagline", true);
	?>
  	<small><?php echo $description; ?></small>
  </h2>
  	
	<a class="btn btn-small btn-primary" href="<?php echo get_category_link($category_id); ?>">
	<i class="icon-search"></i>
	Visit the Archives
	</a>
</div>