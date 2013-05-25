<div class="mmpm_wrapper">
	<div class="row">
		<div class="span12">
			<h3>MM Roots Options</h3>
		</div>
	</div>

	<div class="row">
		<form id="theme_settings" name="<?php echo $this->_setting_prefix . '_settings_form'; ?>" onsubmit="javascript: SaveOptions(this);" class="form-horizontal" method="post">
		<div class="span12 tabbable">
			
			<ul class="nav nav-tabs">
			  <li class="active"><a href="#theme" data-toggle="tab"><i class="icon-cog"></i> Theme Options</a></li>
			  <li><a href="#home" data-toggle="tab"><i class="icon-home"></i> Homepage Options</a></li>
			  <li><a href="#contact" data-toggle="tab"><i class="icon-envelope"></i> Contact Options</a></li>
			</ul>
			
			<div class="row tab-content">
				<div class="tab-pane active span12" id="theme">										
				<legend>General Options</legend>
			
				<?php
					echo MMRootsField('brand_logo', 'Navbar / Brand Logo', 'text');
					echo MMRootsField('footer_logo', 'Footer Logo', 'text');
					echo MMRootsField('footer_text', 'Footer Text', 'textarea', array('placeholder' => 'ex. Made by Media Manifesto Inc'));
				?>
				</div>
				<div class="tab-pane" id="home">
					<div class="span6">					
					<legend>Services Options</legend>
			
					<?php
						echo MMRootsField('service_page', 'Service Page', 'select', array( "data" => getPagesSelectArray()));
						echo MMRootsField('service_category', 'Service Category', 'select',  array( "data" => getCategorySelectArray()));
						echo MMRootsField('service_icon_default', 'Default Services Icon', 'text', array('placeholder' => 'ex. cloud'));
					?>
					</div>
					<div class="span6">
					<legend>Jumbotron Options</legend>
					<?php
						echo MMRootsField('jumbotron_category', 'Jumbotron Category', 'select',  array( "data" => getCategorySelectArray()));
						echo MMRootsField('jumbotron_count', 'Number Jumbotron Slides to Display', 'text');
						echo MMRootsField('jumbotron_default', 'Default Image to Display', 'text');
					
						$transitionEffects = array("slide"=>"Slide", "fade"=>"Fade");
						echo MMRootsField('jumbotron_animation', 'Transition Effect', 'select', array("data" => $transitionEffects));
					?>
					</div>
				</div>
				
				<div class="tab-pane" id="contact">
					<div class="span6">
					<legend>Business Information</legend>

					<?php
						echo MMRootsField('business_name', 'Business Name', 'text');
						echo MMRootsField('business_address', 'Business Address', 'textarea');
						echo MMRootsField('business_phone', 'Phone Number', 'text');
						echo MMRootsField('business_email', 'Email Address', 'text');
						echo MMRootsField('business_facebook', 'Facebook', 'text', array("class" => "req"));
						echo MMRootsField('business_twitter', 'Twitter', 'text');
						echo MMRootsField('business_googleplus', 'Google Plus', 'text');
						echo MMRootsField('business_youtube', 'YouTube', 'text');
					?>
					</div>
					
					<div class="span6">
					<legend>Hours Information</legend>

					<?php
						echo MMRootsField('hours_title', 'Business Hours Title', 'text');
						echo MMRootsField('hours_content', 'Business Hours', 'textarea');
					?>
					</div>
				
					<div class="span6">
					<legend>Google Map Options</legend>

					<?php
						echo MMRootsField('map_position', 'Google Map Position', 'text',
						 array('placeholder' => 'ex. lattitude,longitude',
						 'note' => "Note: if you can't find your lattitude and longitude just ask google."));
						echo MMRootsField('zoom_level', 'Google Map Zoom', 'text', array('placeholder' => 'ex. 15'));
					?>
					</div>
				
					<div class="span6">
					<legend>Contact Form Options</legend>

					<?php
						echo MMRootsField('contact_email', 'Contact Email', 'text');
						echo MMRootsField('confirmation_message_subject', 'Confirmation Message Subject', 'text');
						echo MMRootsField('confirmation_message', 'Confirmation Message Body', 'textarea');
					?>
					</div>
				</div>
			</div>
		</div> <!-- End Tabs stuff -->
		
		<div class="row">
			<div class="span12">
				<div class="form-actions clearfix">
					<a href="#" id="btnOptionsSave" name="mm_pm_settings_saved" class="btn btn-primary">Save</a>
					<input type="reset" class="btn" />
				</div>
			</div>
		</div>
		</form>
	</div>
</div>

<?php
	function MMRootsField($name, $label, $type, $options=null)
	{
		global $MM_Roots;
		return createFormField($name, $label, $MM_Roots->get_setting($name), $type, $options);
	}
?>