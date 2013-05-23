<?php 
global $MM_Roots_Optical;
$icon = get_post_meta($post->ID, "icon", true);
$image = get_post_meta($post->ID, "image", true);

if (!$image && !$icon)
{
	if (has_post_thumbnail())
	{
		$thumb =  wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID), 'full');
		$image = $thumb[0];
	}
	else
	{
		$icon = $MM_Roots_Optical->_settings["mm_op_service_icon_default"];
	}
}
?>

<div class="span3">
	<figure>
	  <a href="<?php the_permalink(); ?>">
	  <?php if ($image) { ?>
	  	<div class="service-image" style="background-image: url('<?php echo $image; ?>');""></div>
	  <?php } else {  ?>
		<i class="icon-<?php echo $icon; ?> icon-8x icon-border"></i>
	  <?php } ?>
	  </a>
	</figure>
	<h4>
	  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h4>
	<p><?php echo the_excerpt(); ?></p>
	<p>
	  <a class="btn btn-small btn-primary" href="<?php the_permalink(); ?>">
		<i class="icon-search"></i>
		read more
	  </a>
	</p>
</div>