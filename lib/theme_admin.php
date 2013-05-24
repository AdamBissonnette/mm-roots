<div class="mmpm_wrapper container">
	<div class="row">
		<div class="span12">
			<?php screen_icon(); ?>
			<h4>Theme Options</h4>
			
			
			<form id="<?php echo $this->_setting_prefix . '_settings_form'; ?>" name="<?php echo $this->_setting_prefix . '_settings_form'; ?>" onsubmit="javascript: SaveOptions(this);" class="form-horizontal" method="post">
			<fieldset>
				<div class="row">
					<div class="span12">										
					<legend>General Options</legend>
				
					<?php
						echo createFormField($this, '_brand_logo', 'Navbar / Brand Logo', 'text');
						echo createFormField($this, '_footer_logo', 'Footer Logo', 'text');
						echo createFormField($this, '_footer_text', 'Footer Text', 'textarea');
					?>
					</div>
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
					?>
					</div>
					<div class="span12">
					<legend>Contact Form Options</legend>

					<?php
						echo createFormField($this, '_contact_email', 'Contact Email', 'text');
						echo createFormField($this, '_confirmation_message_subject', 'Confirmation Message Subject', 'text');
						echo createFormField($this, '_confirmation_message', 'Confirmation Message Body', 'textarea');
					?>
					</div>
				</div>
				<div class="form-actions clearfix">
					<a href="#" id="btnOptionsSave" name="mm_pm_settings_saved" class="btn btn-primary">Save</a>
					<input type="reset" class="btn" />
				</div>
				</fieldset>
			</form>			
		</div>
	</div>
</div>