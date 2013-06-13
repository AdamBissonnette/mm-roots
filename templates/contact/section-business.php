<?php 
global $MM_Roots;
$businessName = $MM_Roots->get_setting("business_name");
$businessAddress = $MM_Roots->get_setting("business_address");
$businessPhone = $MM_Roots->get_setting("business_phone");
$businessFax = $MM_Roots->get_setting("business_fax");
$businessEmail = $MM_Roots->get_setting("business_email");
$businessGithub = $MM_Roots->get_setting("business_github");
$businessTwitter = $MM_Roots->get_setting("business_twitter");
$businessHoursTitle = $MM_Roots->get_setting("hours_title");
$businessHours = $MM_Roots->get_setting("hours_content");

$emailTemplate = sprintf('<a href="mailto:%1$s">%1$s</a>', $businessEmail);

?>
	

<address>
	<strong><?php echo $businessName; ?></strong><br>
	<i class="icon-map-marker"></i> <?php echo $businessAddress; ?><br>
	<i class="icon-phone-sign"></i> <?php echo $businessPhone; ?><br />
	<i class="icon-print"></i> <?php echo $businessFax; ?><br />
	<i class="icon-envelope-alt"></i> <?php echo $emailTemplate; ?><br /><br />
		<strong><?php echo $businessHoursTitle; ?></strong><br />
		<?php echo $businessHours; ?>
	<div class="foot-line"></div>
</address>