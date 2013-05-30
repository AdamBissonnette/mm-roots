<?php
	/*
		Tabs
		Sections
		Fields
	*/

	$post_options = array(
		array('name' => 'Post Options',
			'id' => 'post',
			'icon' => 'cog',
			'sections' => array(
				array(
					'name' => 'General Options',
					'size' => '6',
					'fields' => array(
						array('id' => 'tagline',
							'label' => 'Tagline',
							'type' => 'text'),
						array('id' => 'icon',
							'label' => 'Icon',
							'type' => 'text'),
						array('id' => 'image',
							'label' => 'Image',
							'type' => 'text'),
						array('id' => 'blurb',
							'label' => 'Blurb',
							'type' => 'textarea',
							'options' => array( "note" => 'Note: Used instead of the excerpt in some cases', "class" => "span5" )),
						array('id' => 'readmoretext',
							'label' => 'Read More Text',
							'type' => 'text')
					)
				)
			)
		)
	);

	$page_options = array(
		array('name' => 'Page Options',
			'id' => 'page',
			'icon' => 'cog',
			'sections' => array(
				array(
					'name' => 'General Options',
					'size' => '6',
					'fields' => array(
						array('id' => 'tagline',
							'label' => 'Tagline',
							'type' => 'text'),
						array('id' => 'icon',
							'label' => 'Icon',
							'type' => 'text'),
						array('id' => 'image',
							'label' => 'Image',
							'type' => 'text'),
						array('id' => 'readmoreid',
							'label' => 'Read More Post ID',
							'type' => 'text'),
						array('id' => 'blurb',
							'label' => 'Blurb',
							'type' => 'textarea',
							'options' => array( "note" => 'Note: Used instead of the excerpt in some cases' ))
					)
				)
			)
		)
	);
?>