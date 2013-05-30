<?php
  global $MM_Roots;
  $description = $MM_Roots->get_post_meta(get_the_ID(), "tagline", true);
  $postid = $MM_Roots->get_post_meta(get_the_ID(), "readmoreid", true);

?>

<div class="services-header">
  <h2 class="section-title">
    <?php echo roots_title(); ?>

  	<small><?php echo $description; ?></small>
  </h2>


	<?php
	 
	 if ($postid) {
	 
	 $post = get_post($postid);
	 ?>  
  <p>
  		<?php
  			$blurb = $MM_Roots->get_post_meta($postid, "blurb", true);
  		
  			if ($blurb)
  			{
  				echo $blurb;
  			}
  			else
  			{
  				echo $post->post_excerpt;
  			}  		
  		?>
  </p>
  	
	<a class="btn btn-small btn-primary" href="<?php echo get_permalink($post->ID); ?>">
	<i class="icon-search"></i>
	Read more
	</a>
	<?php } ?>
</div>