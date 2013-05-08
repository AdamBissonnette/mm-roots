
<div class="row">
	<?php
	global $MM_Roots_Optical;

	$services = get_posts( "category=" . $MM_Roots_Optical->_settings["mm_op_service_category"] . "&numberposts=9" );
	foreach ($services as $post) :  setup_postdata($post);  {

	$icon = get_post_meta($post->ID, "icon", true);

	if (!$icon)
	{
	$icon = "cloud";
	}
	?>

	<div class="span3">
		<div class="text-center">
		<figure>
		  <a href="#">
			<i class="icon-<?php echo $icon; ?> icon-8x icon-border"></i>
		  </a>
		</figure>
		<h4>
		  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h4>
		<p><?php echo the_excerpt(); ?></p>
		</div>
	</div>
	<?php } endforeach; ?>
</div>