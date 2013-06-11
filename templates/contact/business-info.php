<?php 
global $MM_Roots;
$businessName = $MM_Roots->get_setting("business_name");
$businessAddress = $MM_Roots->get_setting("business_address");
$businessPhone = $MM_Roots->get_setting("business_phone");
$businessFax = $MM_Roots->get_setting("business_fax");
$businessEmail = $MM_Roots->get_setting("business_email");
$businessGithub = $MM_Roots->get_setting("business_github");
$businessTwitter = $MM_Roots->get_setting("business_twitter");

?>
	

<address>
<?php if ($businessName != '') { ?>
	<strong><?php echo $businessName; ?></strong><br>
<?php } ?>
<?php if ($businessAddress != '') { ?>
	<i class="icon-map-marker"></i> <?php echo $businessAddress; ?><br>
<?php } ?>
<?php if ($businessPhone != '') { ?>
	<i class="icon-phone-sign"></i> <?php echo $businessPhone; ?><br />
<?php } ?>
<?php if ($businessFax != '') { ?>
	<i class="icon-print"></i> <?php echo $businessFax; ?>
<?php } ?>
	<div class="foot-line"></div>         
</address>