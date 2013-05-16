<div class="services-header">
  <h2 class="section-title">
    <?php echo roots_title(); ?>
	<?php
		$description = get_post_meta(get_the_ID(), "tagline", true);
	?>
  	<small><?php echo $description; ?></small>
  </h2>


	<?php
	 $postid =get_post_meta(get_the_ID(), "readmoreid", true);
	 if ($postid) {
	 
	 $post = get_post($postid);
	 ?>  
  <p>
  		<?php
  			if ($post->post_excerpt)
  			{
  				echo $post->post_excerpt;
  			}
  			else
  			{
  				echo get_post_meta(get_the_ID(), "blurb", true);
  			}  		
  		?>
  </p>
  	
	<a class="btn btn-small btn-primary" href="<?php echo get_permalink($post->ID); ?>">
	<i class="icon-search"></i>
	Read more
	</a>
	<?php } ?>
</div>