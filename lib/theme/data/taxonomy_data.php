<?php
	global $taxonomies;

	/*
		Optional "options" variables
		note - Text displayed below the field
		data - typically a key value array for selects but could be anything
		class - classes to apply to the field
		placeholder - placeholder text
		rows - text area only rows attribute
	*/

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
											'not_found'           => 'No sections found',
											'not_found_in_trash'  => 'No sections found in Trash',
										),
				'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
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
								'name' => 'Home Section Options',
								'size' => '10',
								'fields' => array(
									array('id' => 'tagline',
										'label' => 'Tagline',
										'type' => 'text',
										'options' => array('note' => 'Note: This is the title of the section')),
									array('id' => 'keyword',
										'label' => 'Keyword',
										'type' => 'text',
										'options' => array('note' => 'Note: This is also title text displayed after the tagline in an emphasized color')),
									array('id' => 'sectionID',
										'label' => 'Section ID',
										'type' => 'text',
										'options' => array('note' => 'Note: This is the ID to use in conjunction with the navigation hashtag #SectionID')),
									array('id' => 'inline-styles',
										'label' => 'Inline Styles',
										'type' => 'textarea',
										'options' => array('note' => 'Note: This allows you to directly modify the inline css styles on the home section for a background or anything',
											'class' => 'span6')),
									)
						)
					)
				)
			)
		),
		array('slug' => 'review',
			  'registration-args' => array(
				'label' => 'review',
				'description'         => 'Reviews of the organization',
				'labels'              => array(
											'name'                => 'Reviews',
											'singular_name'       => 'Review',
											'menu_name'           => 'Reviews',
											'parent_item_colon'   => 'Parent Review:',
											'all_items'           => 'All Reviews',
											'view_item'           => 'View Review',
											'add_new_item'        => 'Add New Review',
											'add_new'             => 'New Review',
											'edit_item'           => 'Edit Review',
											'update_item'         => 'Update Review',
											'search_items'        => 'Search reviews',
											'not_found'           => 'No reviews found',
											'not_found_in_trash'  => 'No reviews found in Trash',
										),
				'supports'            => array( 'title', 'page-attributes' ),
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
			'options' => array(	array('name' => 'Review Options',
						'id' => 'reviews',
						'icon' => 'cog',
						'sections' => array(
							array(
								'name' => 'Review Options',
								'size' => '10',
								'fields' => array(
									array('id' => 'name',
										'label' => 'Reviewer Name',
										'type' => 'text'
										),
									array('id' => 'content',
										'label' => 'Review Content',
										'type' => 'editor'
										),
									array('id' => 'video-id',
										'label' => 'YoutTube Video ID',
										'type' => 'text',
										'options' => array('note' => 'Note: Add the id of the YouTube Video to link here (optional)')
										)
									)
								)
						)
					)
				)
		)
	);
?>