<?php
	global $MM_Roots;		  		  	
	$pageTitle = $MM_Roots->get_setting("news_title");
	$pageTagline = $MM_Roots->get_setting("news_tagline");
	$category_id = $MM_Roots->get_setting("news_category");
	$news = get_posts( "category=" . $category_id . "&numberposts=3" );
	$newsLink = get_category_link($category_id);
?>
<section class="section-content section-news" id="section-news">
	<div class="container">
	  <div class="row">
		<div class="span3">
		  <h2 class="section-title">
		  	<?php
		  		echo $pageTitle;
		  	?>	
		  	<small><?php echo $pageTagline; ?></small>
		  </h2>
		  <p>
			<a class="btn btn-small btn-primary" href="<?php echo $newsLink; ?>">
			  <i class="icon-search"></i>
			  View all
			</a>
		  </p>
		</div>
		<div class="span9 news-content">
		  <div class="row">
		  <?php
		  foreach ($news as $post) :  setup_postdata($post);  {
		  ?>
			<?php get_template_part('templates/news/post', 'listing'); ?>
			<?php } endforeach; ?>
		  </div>
		</div>
	  </div>
	</div>
</section>