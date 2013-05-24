<?php
function createFormField($obj, $label, $name, $type, $data=null)
{
	$output = '';
	$field = '';

	switch ($type)
	{
		case 'text':
			$field = createInput($obj, $label, $type);
		break;
		case 'textarea':
			$field = createTextArea($obj, $label);
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
	$output = sprintf('<textarea id="%s" rows="5" name="%s">%s</textarea>', 
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