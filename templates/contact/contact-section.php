<?php 
global $MM_Roots;
$businessName = $MM_Roots->get_setting("business_name");
$businessAddress = $MM_Roots->get_setting("business_address");
$businessPhone = $MM_Roots->get_setting("business_phone");
$businessEmail = $MM_Roots->get_setting("business_email");
$businessGithub = $MM_Roots->get_setting("business_github");
$businessTwitter = $MM_Roots->get_setting("business_twitter");

$collabTitle = $MM_Roots->get_setting("collab_title");
$collabContent = $MM_Roots->get_setting("collab_content");

?>

<section class="section-content section-contact section-color-graylighter">
<div class="container">
  <div class="row">
	<div class="span4">
	  <?php get_template_part('templates/contact/business', 'info'); ?>
	</div>
	<div class="span4">
	  <h5>Contact us</h5>
	  <form class="form-vertical" id="mail">
		<div class="control-group">
		  <label for="name"></label>
		  <input class="span3" id="name" name="name" placeholder="your name" type="text">
		</div>
		<div class="control-group">
		  <label for="contact"></label>
		  <input class="span3" id="contact" name="contact" placeholder="your phone # or email address" type="text">
		</div>
		<label for="message"></label>
		<textarea class="span4" id="message" name="message" placeholder="your message, question, comment, query or qualm" rows="5"></textarea>
		
		<input type="text" name="terms" id="terms" />

		<script type="text/javascript">
	  		document.write('<input type="text" name="honey" value="1" id="honey" />');
	    </script>

		<button class="btn btn-primary" id="send">Send message</button>
	  </form>
	</div>
	<div class="span4">
	  <h5><?php echo $collabTitle; ?></h5>
	  <p>
	  	<?php echo $collabContent; ?>
	  </p>
	</div>
  </div>
</div>
</section>