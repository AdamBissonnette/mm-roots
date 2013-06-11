<?php 
global $MM_Roots;

?>

<div class="span3">
  <h4 class="main-color-line"><i class="icon-comments-alt main-color"></i> <span>What Our Customers Say</span></h4>

<?php
	echo do_shortcode("[ListReviews orderby='rand' numberposts='1' /]");
?>
</div>