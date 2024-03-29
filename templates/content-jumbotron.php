<?php
global $MM_Roots;

$jumbotronCategory = $MM_Roots->get_setting("jumbotron_category");
$jumbotronCount = $MM_Roots->get_setting("jumbotron_count");
$jumbotronDefault = $MM_Roots->get_setting("jumbotron_default");

?>

<section class="section-content section-jumbotron" id="section-jumbotron">
        <div class="flexslider">

    	    <ul class="slides">
<?php

$posts = get_posts( "category=" . $jumbotronCategory . "&numberposts=" . $jumbotronCount);

foreach ($posts as $post)
{

	$blurb = get_post_meta($post->ID, "blurb", true);
		
	if ($blurb == null)
	{
		$blurb = wp_trim_words($post->post_content, 25, "...");
	}

	$readmoretext = get_post_meta($post->ID, "readmoretext", true);

	if ($readmoretext == null)
	{
		$readmoretext = "Read More";
	}

	$image = get_post_meta($post->ID, "image", true);

	if ($image == null)
	{
		if (has_post_thumbnail())
		{
			$thumb =  wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID), 'full');
			$image = $thumb[0];
		}
		else
		{
			$image = $jumbotronDefault;
		}	
	}	

?>

<li>
	<div class="container">
		<div class="row">
			<div class="span5 offset1 jumbotron-image">
				<img alt="" src="<?php echo $image; ?>">
			</div>
			<div class="span5 _offset1">
				<div class="slogan">
					<h1><?php echo $post->post_title; ?></h1>
					<p class="lead"><?php
					echo $blurb;
					?></p>
					<p>
					<a class="btn btn-large btn-primary" href="<?php echo get_permalink($post); ?>"><?php echo $readmoretext; ?></a>
					</p>
				</div>
			</div>
		</div>
	</div>
</li>
      	
      

<?php } ?>

</ul>
    </div>
</section>