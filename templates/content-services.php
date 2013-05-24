<section class="section-content section-services" id="section-services">
	<div class="container">
	  <div class="row">
		<div class="span3">
		  <h2 class="section-title">
		  	<?php
		  		global $MM_Roots;		  	
		  	
		  		$page = get_page($MM_Roots->get_setting("service_page"));
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
		  global $MM_Roots;
		  	
		  $services = get_posts( "category=" . $MM_Roots->get_setting("service_category") . "&numberposts=3" );
		  foreach ($services as $post) :  setup_postdata($post);  {
		  ?>
		  
			<?php get_template_part('templates/services/post', 'listing'); ?>
			<?php } endforeach; ?>

		  </div>
		</div>
	  </div>
	</div>
</section>