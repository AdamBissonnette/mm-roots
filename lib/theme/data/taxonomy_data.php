<?php
	global $taxonomies;

	$taxonomies = array(
		array('slug' => 'post',
			  'options' => array(
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
			)
		),
		array('slug' => 'page',
			  'options' => array(
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
			)
		),
		array('slug' => 'home-section',
			  'registration-args' => array(
				'label' => 'home-section',
				'description'         => 'Sections of content to display on the homepage',
				'labels'              => array(
											'name'                => 'Home Sections',
											'singular_name'       => 'Home Section',
											'menu_name'           => 'Home Section',
											'parent_item_colon'   => 'Parent Section:',
											'all_items'           => 'All Sections',
											'view_item'           => 'View Section',
											'add_new_item'        => 'Add New Section',
											'add_new'             => 'New Section',
											'edit_item'           => 'Edit Section',
											'update_item'         => 'Update Section',
											'search_items'        => 'Search sections',
											'not_found'           => 'No sectionss found',
											'not_found_in_trash'  => 'No sections found in Trash',
										),
				'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
				//'taxonomies'          => array( 'category', 'post_tag' ),
				'hierarchical'        => false,
				'public'              => false,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_nav_menus'   => false,
				'show_in_admin_bar'   => true,
				'menu_position'       => 5,
				'menu_icon'           => '',
				'can_export'          => true,
				'has_archive'         => false,
				'exclude_from_search' => true,
				'publicly_queryable'  => true,
				'capability_type'     => 'page',),
			'options' => array(	array('name' => 'Home Section Options',
						'id' => 'home-section',
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
			)
		)
	);
?>