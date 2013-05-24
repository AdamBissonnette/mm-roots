<?php 
global $MM_Roots;
$businessName = $MM_Roots->_settings["mm_roots_business_name"];
$businessAddress = $MM_Roots->_settings["mm_roots_business_address"];
$businessPhone = $MM_Roots->_settings["mm_roots_business_phone"];
$businessEmail = $MM_Roots->_settings["mm_roots_business_email"];

?>

<section class="section-content section-contact section-color-graylighter">
<div class="container">
  <div class="row">
	<div class="span4">
	  <h5><?php echo $businessName; ?></h5>
	  <address>
		<?php echo $businessAddress; ?>
	  </address>
	  <p>
		<i class="icon-envelope"></i>
		<a href="mailto:<?php echo $businessEmail; ?>"><?php echo $businessEmail; ?></a>
		<br>
		<i class="icon-phone"></i>
		<a href="tel:<?php echo $businessPhone; ?>"><?php echo $businessPhone; ?></a>
	  </p>
	</div>
	<div class="span4">
	  <h5>Mail us</h5>
	  <form class="form-vertical" id="mail-form">
		<div class="control-group">
		  <label for="mail-name-surname"></label>
		  <input class="span3" id="mail-name-surname" placeholder="name surname" type="text">
		  <span class="help-inline" style="display: none;">Insert name and surname</span>
		</div>
		<div class="control-group">
		  <label for="mail-email"></label>
		  <input class="span3" id="mail-email" placeholder="email" type="email">
		  <span class="help-inline" style="display: none;">Insert valid email</span>
		</div>
		<label for="mail-message"></label>
		<textarea class="span4" id="mail-message" name="message" placeholder="message" rows="5"></textarea>
		<button class="btn btn-primary" type="submit">Send message</button>
	  </form>
	</div>
	<div class="span4">
	  <h5>Work with us!</h5>
	  <p>Blanditiis nobis voluptatem placeat ullam eum deleniti tenetur optio omnis facere incidunt quibusdam modi pariatur saepe maxime ab ipsum labore nihil tempore.</p>
	  <p>
		<a class="btn btn-small btn-primary" href="#">Send Resume</a>
	  </p>
	</div>
  </div>
</div>
</section>