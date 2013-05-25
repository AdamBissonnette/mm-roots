<div class="mmpm_wrapper">
	<div class="row">
		<div class="span12">
			<h3>MM Roots Options</h3>
		</div>
	</div>

	<div class="row">
		<form id="theme_settings" name="<?php echo $this->_setting_prefix . '_settings_form'; ?>" onsubmit="javascript: SaveOptions(this);" class="form-horizontal" method="post">
		
		<?php echo OutputThemeSettings($options); ?>
		
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