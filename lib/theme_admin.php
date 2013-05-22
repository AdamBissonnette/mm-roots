<div class="mmpm_wrapper container">
	<div class="row">
		<div class="span12">
			<?php screen_icon(); ?>
			<h4>Theme Options</h4>
			
			
			<form id="<?php echo $this->_setting_prefix . '_settings_form'; ?>" name="<?php echo $this->_setting_prefix . '_settings_form'; ?>" onsubmit="javascript: SaveOptions(this);" class="form-horizontal" method="post">
			<fieldset>
				<legend>Homepage / General Options</legend>
				
				<?php
					echo createFormField($this, getPagesSelectArray(), '_service_page', 'Service Page', 'select');
					echo createFormField($this, getCategorySelectArray(), '_service_category', 'Service Category', 'select');
					echo createFormField($this, getCategorySelectArray(), '_jumbotron_category', 'Jumbotron Category', 'select');
					echo createFormField($this, null, '_jumbotron_count', 'Number Jumbotron Slides to Display', 'text');
				?>
				
				<legend>Contact Form Options</legend>

				<?php
					echo createFormField($this, null, '_contact_email', 'Contact Email', 'text');
					echo createFormField($this, null, '_confirmation_message_subject', 'Confirmation Message Subject', 'text');
					echo createFormField($this, null, '_confirmation_message', 'Confirmation Message Body', 'textarea');
				?>
				
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
function createFormField($obj, $data=null, $label, $name, $type)
{
	$output = '';
	$field = '';

	switch ($type)
	{
		case 'text':
			$field = createInput($obj, $label, $type);
		break;
		case 'textarea':
			$field = createTextArea($obj, $label, $type);
		break;
		case 'select':
			$field = createSelect($obj, $data, $label);
		break;
	}

	$output = '<div class="control-group">' .
					'<label class="control-label" for="' . $obj->_setting_prefix . $label . '">' . $name . '</label>' .
					'<div class="controls">' . 
						$field .
					'</div>' .
				'</div>';
				
	return $output;
}

function createInput($obj, $label, $type="text")
{
	$output = sprintf('<input type="%s" id="%s" name="%s" value="%s" />', $type,
		 $obj->_setting_prefix . $label, //id
		 $obj->_setting_prefix . $label, //name
		 stripslashes($obj->_settings[$obj->_setting_prefix . $label]) //value
	);
	
	return $output;
}

function createTextArea($obj, $label)
{
	$output = sprintf('<textarea id="%s" name="%s">%s</textarea>', 
		 $obj->_setting_prefix . $label, //id
		 $obj->_setting_prefix . $label, //name
		 stripslashes($obj->_settings[$obj->_setting_prefix . $label]) //value
	);
	
	return $output;
}

function createSelect($obj, $array, $label)
{
	return createSelectOptionsFromArray($array, $obj->_setting_prefix . $label, $obj->_settings[$obj->_setting_prefix . $label]);
}

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