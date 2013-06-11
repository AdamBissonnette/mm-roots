<?php
function createFormField($label, $name, $value, $type, $options=null)
{
	$output = '';
	$field = '';
	$useField = true;

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
		case 'editor':
			$useField = false;
		break;
	}

	echo '<div class="control-group">' .
					'<label class="control-label" for="' . $label . '">' . $name . '</label>' .
					'<div class="controls">';

	if ($useField)
	{
		echo $field;
	}
	else
	{
		wp_editor( $value, $label, $settings = array() );
	}

	echo '</div></div>';
				
	//return $output;
}

function createInput($label, $value, $type="text", $options = null)
{
	if ($options) extract( $options );

	$output = sprintf('<input type="%s" id="%s" class="%s" name="%s" value="%s" placeholder="%s" />', $type,
		 $label, //id
		 $class,
		 $label, //name
		 stripslashes($value), //value
		 $placeholder
	);
	
	if ($note) {
		$output .= sprintf('<p class="help-block">%s</p>', $note);
	}
	
	return $output;
}

function createTextArea($label, $value, $options = null)
{
	if ($options) extract( $options );

	if (!$rows)
	{
		$rows = 3;
	}

	$output = sprintf('<textarea id="%s" class="%s" rows="%s" name="%s" placeholder="%s">%s</textarea>', 
		 $label, //id
		 $class,
 		 $rows,
		 $label, //name
		 $placeholder,
		 stripslashes($value) //value
	);
	
	if ($note) {
		$output .= sprintf('<p class="help-block">%s</p>', $note);
	}
	
	return $output;
}

function createSelect($label, $value, $options)
{
	return createSelectOptionsFromArray($options, $label, $value);
}

function createSelectOptionsFromArray($options, $name, $selectedValue=0)
{
	if ($options) extract( $options );
	
	$output = sprintf('<select id="%s" class="%s" name="%s">', $name, $class, $name);
	$optionTemplate = '<option value="%s"%s>%s</option>\n';
	$output .= sprintf($optionTemplate, "", "", $placeholder);
	foreach ($data as $key => $value)
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
	
	if ($note) {
		$output .= sprintf('<p class="help-block">%s</p>', $note);
	}
	
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
	return getTaxonomySelectArray('page');
}

function getPostsSelectArray()
{
	return getTaxonomySelectArray('post');
}

function getTaxonomySelectArray($taxonomy)
{
	$args = array('post_type' => $taxonomy);
	$posts = get_posts($args);
	
	$postArray = array();
	foreach ($posts as $post)
	{
		$postArray[$post->ID] = $post->post_title;
	}
	
	return $postArray;
}

?>