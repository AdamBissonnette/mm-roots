<?php 
global $MM_Roots;

$businessFacebook = $MM_Roots->get_setting("business_facebook");
$businessGPlus = $MM_Roots->get_setting("business_gplus");
$businessYoutube = $MM_Roots->get_setting("business_youtube");
$businessTwitter = $MM_Roots->get_setting("business_twitter");

?>
	

<div class="text-center">
	<ul class="social-bottom">
<?php if ($businessFacebook != '') { ?>
	  <li><span class="badge badge-warning"><a href="<?php echo $businessFacebook; ?>" title="Facebook"><i class="icon-facebook"></i></a></span></li>
<?php } ?>
<?php if ($businessGPlus != '') { ?>
	  <li><span class="badge badge-warning"><a href="<?php echo $businessGPlus; ?>" title="Google Plus"><i class="icon-google-plus"></i></a></span></li>
<?php } ?>
<?php if ($businessYoutube != '') { ?>
	  <li><span class="badge badge-warning"><a href="<?php echo $businessYoutube; ?>" title="YoutTube"><i class="icon-youtube"></i></a></span></li>
<?php } ?>
<?php if ($businessTwitter != '') { ?>
	  <li><span class="badge badge-warning"><a href="<?php echo $businessTwitter; ?>" title="Twitter"><i class="icon-twitter"></i></a></span></li>
<?php } ?>
	</ul>
</div>