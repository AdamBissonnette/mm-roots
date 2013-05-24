
<div class="row">
	<?php
	global $MM_Roots;

	$services = get_posts( "category=" . $MM_Roots->get_setting("service_category") . "&numberposts=9" );
	foreach ($services as $post) :  setup_postdata($post);  {
	?>

	<?php get_template_part('templates/services/post', 'listing'); ?>
	<?php } endforeach; ?>
</div>