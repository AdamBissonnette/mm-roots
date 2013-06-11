<?php 
global $MM_Roots;

?>

<div class="span3">
  <h4 class="main-color-line"><i class="icon-comments-alt main-color"></i> <span>What people say</span></h4>

<?php
	echo do_shortcode("[ListReviews orderby='rand' numberposts='2' /]");
?>
</div>