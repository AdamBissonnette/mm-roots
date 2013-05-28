<?php 
global $MM_Roots;
$businessName = $MM_Roots->get_setting("business_name");
$businessAddress = $MM_Roots->get_setting("business_address");
$businessPhone = $MM_Roots->get_setting("business_phone");
$businessEmail = $MM_Roots->get_setting("business_email");
$businessGithub = $MM_Roots->get_setting("business_github");
$businessTwitter = $MM_Roots->get_setting("business_twitter");

?>

<?php if ($businessName != '') { ?>
<h5><?php echo $businessName; ?></h5>
<?php } ?>

<?php if ($businessAddress != '') { ?>
<address>
<?php echo $businessAddress; ?>
</address>
<?php } ?>

<p>
	<?php if ($businessEmail != '') { ?>
<i class="icon-envelope"></i>
<a href="mailto:<?php echo $businessEmail; ?>"><?php echo $businessEmail; ?></a>
<br>
<?php } ?>
<?php if ($businessPhone != '') { ?>
<i class="icon-phone"></i>
<a href="tel:<?php echo $businessPhone; ?>"><?php echo $businessPhone; ?></a>
<?php } ?>
</p>
<br />
<h5>Follow Us</h5>	  
<p>
	<?php if ($businessTwitter != '') { ?>
<a class="btn btn-squared" href="<?php echo $businessGithub; ?>">
  <i class="icon-github"></i>
</a>
<?php } ?>
<?php if ($businessGithub != '') { ?>
<a class="btn btn-squared" href="<?php echo $businessTwitter; ?>">
  <i class="icon-twitter"></i>
</a>
<?php } ?>
</p>
	