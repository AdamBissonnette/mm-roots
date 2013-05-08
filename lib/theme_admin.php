<div class="mmpm_wrapper container">
	<div class="row">
		<div class="span12">
			<?php screen_icon(); ?>
			<h4>Theme Options</h4>
			
			
			<form id="<?php echo $this->_setting_prefix . '_settings_form'; ?>" name="<?php echo $this->_setting_prefix . '_settings_form'; ?>" onsubmit="javascript: SaveOptions(this);" class="form-horizontal" method="post">
			<fieldset>
				<legend>Options</legend>
				<div class="control-group">
					<label class="control-label" for="<?php echo $this->_setting_prefix . '_service_category'; ?>">Service Category</label>
					<div class="controls">
						<input id="<?php echo $this->_setting_prefix . '_service_category'; ?>" type="text" class="input-large req" name="<?php echo $this->_setting_prefix . '_service_category'; ?>" value="<?php echo($this->_settings[$this->_setting_prefix . '_service_category']); ?>" />
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="<?php echo $this->_setting_prefix . '_jumbotron_category'; ?>">Jumbotron Category</label>
					<div class="controls">
						<input id="<?php echo $this->_setting_prefix . '_jumbotron_category'; ?>" class="req" type="text" name="<?php echo $this->_setting_prefix . '_jumbotron_category'; ?>" value="<?php echo($this->_settings[$this->_setting_prefix . '_jumbotron_category']); ?>" />
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