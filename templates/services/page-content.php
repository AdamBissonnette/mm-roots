
<div class="row">
	<?php
	global $MM_Roots_Optical;

	$services = get_posts( "category=" . $MM_Roots_Optical->_settings["mm_op_service_category"] . "&numberposts=9" );
	foreach ($services as $post) :  setup_postdata($post);  {
	?>

	<?php get_template_part('templates/services/post', 'listing'); ?>
	<?php } endforeach; ?>
</div>