<?php
function createFormField($label, $name, $value, $type, $options=null)
{
	$output = '';
	$field = '';

	switch ($type)
	{
		case 'text':
			$field = createInput($label, $value, $type, $options);
		break;
		case 'textarea':
			$field = createTextArea($label, $value, $options);
		break;
		case 'select':
			$field = createSelect($label, $value, $options);
		break;
	}

	$output = '<div class="control-group">' .
					'<label class="control-label" for="' . $label . '">' . $name . '</label>' .
					'<div class="controls">' . 
						$field .
					'</div>' .
				'</div>';
				
	return $output;
}

function createInput($label, $value, $type="text", $options = null)
{
	$output = sprintf('<input type="%s" id="%s" name="%s" value="%s" />', $type,
		 $label, //id
		 $label, //name
		 stripslashes($value) //value
	);
	
	return $output;
}

function createTextArea($label, $value, $options = null)
{
	$output = sprintf('<textarea id="%s" rows="5" name="%s">%s</textarea>', 
		 $label, //id
		 $label, //name
		 stripslashes($value) //value
	);
	
	return $output;
}

function createSelect($label, $value, $options)
{
	return createSelectOptionsFromArray($options["data"], $label, $value);
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