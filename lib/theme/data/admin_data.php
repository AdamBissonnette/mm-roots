<?php
	/*
		Tabs
		Sections
		Fields
	*/
	global $theme_options;
	$theme_options = array(
		array('name' => 'Theme Options',
			'id' => 'theme',
			'icon' => 'cog',
			'sections' => array(
				array(
					'name' => 'General Options',
					'size' => '6',
					'fields' => array(
						array('id' => 'brand_logo',
							'label' => 'Navbar / Brand Logo',
							'type' => 'text'),
						array('id' => 'icon_default',
							'label' => 'Default Site Icon',
							'type' => 'text',
							'options' => array( "placeholder" => 'ex. cloud', "note" => 'Note: This will be used for any unset icons on posts that use them.' ))
					)
				),
				array(
					'name' => 'Footer Options',
					'size' => '6',
					'fields' => array(
						array('id' => 'footer_logo',
							'label' => 'Logo',
							'type' => 'text'),
						array('id' => 'footer_background_color',
							'label' => 'Background Color',
							'type' => 'text')
					)
				)
			)
		),
		array('name' => 'Homepage Options',
			'id' => 'home',
			'icon' => 'home',
			'sections' => array(
				array(
					'name' => 'Title Bar',
					'size' => 6,
					'fields' => array(
						array('id' => 'homepage-logo',
							'label' => 'Homepage Logo',
							'type' => 'text'),
						array('id' => 'primary-tagline',
							'label' => 'Primary Tagline',
							'type' => 'text'),
						array('id' => 'secondary-tagline',
							'label' => 'Secondary Tagline',
							'type' => 'text'),
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
						array('id' => 'business_gplus',
							'label' => 'Google Plus',
							'type' => 'text'
						),
						array('id' => 'business_youtube',
							'label' => 'YouTube',
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
?>