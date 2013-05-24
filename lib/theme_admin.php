<div class="mmpm_wrapper">
	<div class="row">
		<div class="span12">
			<h3>MM Roots Options</h3>
		</div>
	</div>

	<div class="row">
		<form id="<?php echo $this->_setting_prefix . '_settings_form'; ?>" name="<?php echo $this->_setting_prefix . '_settings_form'; ?>" onsubmit="javascript: SaveOptions(this);" class="form-horizontal" method="post">
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
					echo createFormField($this, '_brand_logo', 'Navbar / Brand Logo', 'text');
					echo createFormField($this, '_footer_logo', 'Footer Logo', 'text');
					echo createFormField($this, '_footer_text', 'Footer Text', 'textarea');
				?>
				</div>
				<div class="tab-pane" id="home">
					<div class="span6">					
					<legend>Services Options</legend>
			
					<?php
						echo createFormField($this, '_service_page', 'Service Page', 'select', getPagesSelectArray());
						echo createFormField($this, '_service_category', 'Service Category', 'select', getCategorySelectArray());
						echo createFormField($this, '_service_icon_default', 'Default Services Icon', 'text');
					?>
					</div>
					<div class="span6">
					<legend>Jumbotron Options</legend>
					<?php
						echo createFormField($this, '_jumbotron_category', 'Jumbotron Category', 'select', getCategorySelectArray());
						echo createFormField($this, '_jumbotron_count', 'Number Jumbotron Slides to Display', 'text');
						echo createFormField($this, '_jumbotron_default', 'Default Image to Display', 'text');
					
						$transitionEffects = array("slide"=>"Slide", "fade"=>"Fade");
						echo createFormField($this, '_jumbotron_animation', 'Transition Effect', 'select', $transitionEffects);
					?>
					</div>
				</div>
				
				<div class="tab-pane" id="contact">
					<div class="span6">
					<legend>Business Information</legend>

					<?php
						echo createFormField($this, '_business_name', 'Business Name', 'text');
						echo createFormField($this, '_business_address', 'Business Address', 'textarea');
						echo createFormField($this, '_business_phone', 'Phone Number', 'text');
						echo createFormField($this, '_business_email', 'Email Address', 'text');
					?>
					</div>
					
					<div class="span6">
					<legend>Hours Information</legend>

					<?php
						echo createFormField($this, '_hours_title', 'Business Hours Title', 'text');
						echo createFormField($this, '_hours_content', 'Business Hours', 'textarea');
					?>
					</div>
				
					<div class="span6">
					<legend>Google Map Options</legend>

					<?php
						echo createFormField($this, '_map_position', 'Google Map Position', 'text');
						echo createFormField($this, '_zoom_level', 'Google Map Zoom', 'text');
					?>
					</div>
				
					<div class="span6">
					<legend>Contact Form Options</legend>

					<?php
						echo createFormField($this, '_contact_email', 'Contact Email', 'text');
						echo createFormField($this, '_confirmation_message_subject', 'Confirmation Message Subject', 'text');
						echo createFormField($this, '_confirmation_message', 'Confirmation Message Body', 'textarea');
					?>
					</div>
				</div>
			</div>
		</div> <!-- End Tabs stuff -->
		
		<div class="span12">
			<div class="form-actions clearfix">
				<a href="#" id="btnOptionsSave" name="mm_pm_settings_saved" class="btn btn-primary">Save</a>
				<input type="reset" class="btn" />
			</div>
		</div>
		</form>
	</div>
</div>