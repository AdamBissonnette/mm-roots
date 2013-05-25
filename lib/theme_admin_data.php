<?php
	/*
		Tabs
		Sections
		Fields
	*/

	$options = array(
		array('name' => 'Theme Options',
			'id' => 'theme',
			'icon' => 'cog',
			'sections' => array(
				array(
					'name' => 'General Options',
					'size' => '12',
					'fields' => array(
						array('id' => 'brand_logo',
							'label' => 'Navbar / Brand Logo',
							'type' => 'text'),
						array('id' => 'footer_logo',
							'label' => 'Footer Logo',
							'type' => 'text'),
						array('id' => 'footer_text',
							'label' => 'Footer Text',
							'type' => 'textarea')
					)
				)
			)
		),
		array('name' => 'Homepage Options',
			'id' => 'home',
			'icon' => 'home',
			'sections' => array(
				array(
					'name' => 'Services Options',
					'size' => 6,
					'fields' => array(
						array('id' => 'service_page',
							'label' => 'Service Page',
							'type' => 'select',
							'options' => array( "data" => getPagesSelectArray())),
						array('id' => 'service_category',
							'label' => 'Service Category',
							'type' => 'select',
							'options' => array( "data" => getCategorySelectArray())),
						array('id' => 'service_icon_default',
							'label' => 'Default Services Icon',
							'type' => 'text',
							'options' => array( "placeholder" => 'ex. cloud' ))
					)
				),
				array(
					'name' => 'News Options',
					'size' => 6,
					'fields' => array(
						array('id' => 'news_page',
							'label' => 'News Page',
							'type' => 'select',
							'options' => array( "data" => getPagesSelectArray())),
						array('id' => 'news_category',
							'label' => 'News Category',
							'type' => 'select',
							'options' => array( "data" => getCategorySelectArray())),
						array('id' => 'news_icon_default',
							'label' => 'Default News Icon',
							'type' => 'text',
							'options' => array( "placeholder" => 'ex. cloud' ))
					)
				),
				array(
					'name' => 'Jumbotron Options',
					'size' => 6,
					'fields' => array(
						array('id' => 'jumbotron_category',
							'label' => 'Jumbotron Category',
							'type' => 'select',
							'options' => array( "data" => getCategorySelectArray())),
						array('id' => 'jumbotron_count',
							'label' => 'Number Jumbotron Slides to Display',
							'type' => 'text'),
						array('id' => 'jumbotron_default',
							'label' => 'Default Image to Display',
							'type' => 'text'),
						array('id' => 'jumbotron_animation',
							'label' => 'Transition Effect',
							'type' => 'select',
							'options' => array( "data" => array("slide"=>"Slide", "fade"=>"Fade"))
							)
					)
				)
			)
		),
		array('name' => 'Contact Options',
			'id' => 'contact',
			'icon' => 'envelope',
			'sections' => array(
				array(
					'name' => 'Business Information',
					'size' => 6,
					'fields' => array(
						array('id' => 'business_name',
							'label' => 'Business Name',
							'type' => 'text'
						),
						array('id' => 'business_address',
							'label' => 'Business Address',
							'type' => 'textarea'
						),
						array('id' => 'business_phone',
							'label' => 'Phone Number',
							'type' => 'text'
						),
						array('id' => 'business_email',
							'label' => 'Email Address',
							'type' => 'text'
						),
						array('id' => 'business_facebook',
							'label' => 'Facebook',
							'type' => 'text'
						),
						array('id' => 'business_twitter',
							'label' => 'Twitter',
							'type' => 'text'
						)
					)
				),
				array(
					'name' => 'Hours Information',
					'size' => 6,
					'fields' => array(
						array('id' => 'hours_title',
							'label' => 'Business Hours Title',
							'type' => 'text'
						),
						array('id' => 'hours_content',
							'label' => 'Business Hours',
							'type' => 'textarea'
						)
					)
				),
				array(
					'name' => 'Google Map Information',
					'size' => 6,
					'fields' => array(
						array('id' => 'map_position',
							'label' => 'Google Map Position',
							'type' => 'text',
							'options' => array(
								array('placeholder' => 'ex. lattitude,longitude',
								'note' => "Note: if you can't find your lattitude and longitude just ask google.")
							)
						),
						array('id' => 'zoom_level',
							'label' => 'Google Map Zoom',
							'type' => 'text'
						)
					)				
				)
			)
		)
	);

	function OutputThemeSettings($tabs)
	{
		$isFirst = true;
		$output = '<div class="span12 tabbable"><ul class="nav nav-tabs">';
		
		foreach ($tabs as $tab)
		{			
			$output .= OutputTabNav($tab["id"], $tab["name"], $tab["icon"], $isFirst);
			
			if ($isFirst)
			{
				$isFirst = false;
			}
		}
		
		$output .= '</ul>'; //Done with nav
		
		$output .= '<div class="row tab-content">';
		
		$isFirst = true;
		
		foreach ($tabs as $tab)
		{
			$output .= OutputTabContent($tab["id"], $tab["sections"], $isFirst);
			
			if ($isFirst)
			{
				$isFirst = false;
			}
		}
		
		$output .= '</div>'; //Done with tab content
		
		return $output;
	}

	function OutputTabNav($id, $name, $icon, $isFirst)
	{
		 $tabTemplate = '<li%s><a href="#%s" data-toggle="tab"><i class="icon-%s"></i> %s</a></li>';
		 
		 $class = "";
		 
		 if ($isFirst)
		 {
		 	$class = ' class="active"';
		 }
		 
		 return sprintf($tabTemplate, $class, $id, $icon, $name);
	}

	function OutputTabContent($id, $sections, $isFirst)
	{
		$tabContentTemplate = '<div class="tab-pane%s" id="%s">';
	
		$class = "";
		 
		if ($isFirst)
		{
		 	$class = ' active';
		}
	
		$output .= sprintf($tabContentTemplate, $class, $id);
		
		foreach ($sections as $section)
		{
			$output .= OutputSection($section["name"], $section["size"], $section["fields"]);
		}
	
		$output .= "</div>";
			
		return $output;
	}

	function OutputSection($name, $size, $fields)
	{
		$sectionTemplate = '<div class="span%s"><legend>%s</legend>';
		$output = sprintf($sectionTemplate, $size, $name);
		
		foreach ($fields as $field)
		{
			//$output .= var_export($field["options"], true);
			$output .= MMRootsField($field["id"], $field["label"], $field["type"], $field["options"]);
		}
		
		$output .= "</div>";
	
		return $output;
	}

	function MMRootsField($id, $label, $type, $options=null)
	{
		global $MM_Roots;
		return createFormField($id, $label, $MM_Roots->get_setting($id), $type, $options);
	}
?>