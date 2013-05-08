<section class="section-content section-services" id="section-services">
	<div class="container">
	  <div class="row">
		<div class="span3">
		  <h2 class="section-title">
		  	<?php $page = get_page(34);
		  		echo $page->post_title;
		  		
		  		$description = get_post_meta($page->ID, "tagline", true);
		  	?>	
		  	<small><?php echo $description; ?></small>
		  </h2>
		  <p>
			<a class="btn btn-small btn-primary" href="<?php echo get_permalink($page->ID); ?>">
			  <i class="icon-search"></i>
			  View all
			</a>
		  </p>
		</div>
		<div class="span9">
		  <div class="row">
		  <?php
		  global $MM_Roots_Optical;
		  	
		  $services = get_posts( "category=" . $MM_Roots_Optical->_settings["mm_op_service_category"] . "&numberposts=3" );
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
		</div>
	  </div>
	</div>
</section>