<div class="mmpm_wrapper container">
	<div class="row">
		<div class="span12">
			<?php screen_icon(); ?>
			<h4>Theme Options</h4>
			
			
			<form id="<?php echo $this->_setting_prefix . '_settings_form'; ?>" name="<?php echo $this->_setting_prefix . '_settings_form'; ?>" onsubmit="javascript: SaveOptions(this);" class="form-horizontal" method="post">
			<fieldset>
				<legend>Homepage / General Options</legend>
				<div class="control-group">
					<label class="control-label" for="<?php echo $this->_setting_prefix . '_service_page'; ?>">Service Page</label>
					<div class="controls">
						<?php echo createSelectOptionsFromArray(getPagesSelectArray(), $this->_setting_prefix . '_service_page', $this->_settings[$this->_setting_prefix . '_service_page']); ?>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="<?php echo $this->_setting_prefix . '_service_category'; ?>">Service Category</label>
					<div class="controls">
						<?php echo createSelectOptionsFromArray(getCategorySelectArray(), $this->_setting_prefix . '_service_category', $this->_settings[$this->_setting_prefix . '_service_category']); ?>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="<?php echo $this->_setting_prefix . '_jumbotron_category'; ?>">Jumbotron Category</label>
					<div class="controls">
						<?php echo createSelectOptionsFromArray(getCategorySelectArray(), $this->_setting_prefix . '_jumbotron_category', $this->_settings[$this->_setting_prefix . '_jumbotron_category']); ?>
					</div>
				</div>
				
				<legend>Contact Page Options</legend>
				
				<div class="form-actions clearfix">
					<a href="#" id="btnOptionsSave" name="mm_pm_settings_saved" class="btn btn-primary">Save</a>
					<input type="reset" class="btn" />
				</div>
				</fieldset>
			</form>			
		</div>
	</div>
</div>

<?php
function createSelectOptionsFromArray($optionArray, $name, $selectedValue=0)
{
	$output = sprintf('<select id="%s" name="%s">', $name, $name);
	$optionTemplate = '<option value="%s"%s>%s</option>\n';
	$output .= sprintf($optionTemplate, "", "", "Select an Option");
	foreach ($optionArray as $key => $value)
	{
		if ($selectedValue == $key)
		{
			$output .= sprintf($optionTemplate, $key, ' selected', $value);
		}
		else
		{
			$output .= sprintf($optionTemplate, $key, '', $value);
		}
	}
	
	$output .= '</select>';
	
	return $output;
}

function getCategorySelectArray()
{
	$categories = get_categories(array('hide_empty' => 0));
	
	$catArray = array();
	foreach ($categories as $category)
	{
		$catArray[$category->term_id] = $category->cat_name;
	}
	
	return $catArray;
}

function getPagesSelectArray()
{
	$pages = get_pages();
	
	$pageArray = array();
	foreach ($pages as $pages)
	{
		$pageArray[$pages->ID] = $pages->post_title;
	}
	
	return $pageArray;
}

?>