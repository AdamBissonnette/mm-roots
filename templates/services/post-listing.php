<?php 
$icon = get_post_meta($post->ID, "icon", true);
		  	
if (!$icon)
{
	$icon = "cloud";
}
?>

<div class="span3">
  <div class="text-center">
	<figure>
	  <a href="<?php the_permalink(); ?>">
		<i class="icon-<?php echo $icon; ?> icon-8x icon-border"></i>
	  </a>
	</figure>
	<h4>
	  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h4>
	<p><?php echo the_excerpt(); ?></p>
  </div>
</div>