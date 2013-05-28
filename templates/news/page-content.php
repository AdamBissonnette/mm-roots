
<div class="row">
	<?php
	global $MM_Roots;

	$category_id = $MM_Roots->get_setting("news_category");
	$args = array('cat' => $category_id, 'posts_per_page' => '6');
	$posts = new WP_Query($args);

	/* $services = get_posts( "category=" . $MM_Roots->get_setting("news_category") . "&numberposts=5" );
	foreach ($services as $post) :  setup_postdata($post);  {
	?>

	<?php get_template_part('templates/news/post', 'listing'); ?>
	<?php } endforeach; ?> */


	while($posts->have_posts())
	{
		$posts->the_post();
		get_template_part('templates/news/post', 'listing');
	}
 	?>


</div>