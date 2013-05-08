<div class="services-header">
  <h2 class="section-title">
    <?php echo roots_title(); ?>
	<?php
		$description = get_post_meta(get_the_ID(), "tagline", true);
	?>
  	<small><?php echo $description; ?></small>
  </h2>
  
  <p>
  		Blurb about commitment to service post / quality etc...
  	</p>
  	
		<a class="btn btn-small btn-primary" href="#">
		<i class="icon-search"></i>
		Read more
		</a>
</div>