<?php 
global $MM_Roots;

$args = array('post_type' => 'review', 'orderby' => 'rand', 'numberposts' => '2');
$reviews = get_posts($args);

?>

<div class="span3">
  <h4 class="main-color-line"><i class="icon-comments-alt main-color"></i> <span>What people say</span></h4>

<?php

	foreach ($reviews as $post) : setup_postdata($post);
	$ReviewerName = $MM_Roots->get_post_meta(get_the_ID(), "name", true);
	$ReviewContent = $MM_Roots->get_post_meta(get_the_ID(), "content", true);

?>
	<blockquote>
	  <p>
	  <?php echo $ReviewContent ?> 
	  </p>
	  <span class="test-caption"> <strong><?php echo $ReviewerName ?> </strong></span>
    </blockquote>

<?php 
	endforeach;
?>
</div>