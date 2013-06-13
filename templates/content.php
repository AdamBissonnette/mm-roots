<?php 
global $MM_Roots;
$postID = get_the_ID();

/* $icon = $MM_Roots->get_post_meta($postID, "icon", true);
$image = $MM_Roots->get_post_meta($postID, "image", true);

if (!$image)
{
	if (has_post_thumbnail())
	{
		$thumb =  wp_get_attachment_image_src(get_post_thumbnail_id( $postID), 'full');
		$image = $thumb[0];
	}
	else if (!$icon)
	{
		$icon = $MM_Roots->get_setting("icon_default");
	} 
}*/
?>

<article <?php post_class(); ?>>
  <div class="entry-summary">
  	<div class="row">
  		
		<div class="span4">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php get_template_part('templates/entry-meta'); ?>
		    <?php the_excerpt(); ?>
		</div>
   	</div>
  </div>
  <div class="post-footer">
    <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
  </div>
</article>

<hr />
