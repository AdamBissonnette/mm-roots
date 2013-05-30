<?php
	global $MM_Roots;
	$description = $MM_Roots->get_post_meta(get_the_ID(), "tagline", true);
?>

<div class="page-header">
  <h2 class="section-title">
    <?php echo roots_title(); ?>
    <small><?php echo $description; ?></small>
  </h2>
</div>