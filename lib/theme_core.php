<?php
/**
 * Core Theme Object
 */

include_once('theme_tools/functions.php');

class MM_Roots
{
	var $_settings;
    var $_options_pagename = 'mm_roots';
    var $_settings_key = 'mm_roots';
    var $_setting_prefix = 'mm_roots_';
    var $_save_key = '';
    var $_versionnum = 0.1;
	var $menu_page;
	
	function MM_Roots()
	{
		return $this->__construct();
	}
	
    function __construct()
    {
        $this->_settings = get_option($this->_settings_key) ? get_option($this->_settings_key) : array();

        add_action( 'admin_menu', array(&$this, 'create_menu_link') );
		date_default_timezone_set(get_option('timezone_string'));
		
		//Ajax Posts
		add_action('wp_ajax_nopriv_do_ajax', array(&$this, '_save') );
		add_action('wp_ajax_do_ajax', array(&$this, '_save') );
    }
    
    static function MM_Roots_install() {
    	global $wpdb;
    	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    	
    	$themeSettings = array (
			  0 => 
			  array (
				'name' => 'mm_roots_brand_logo',
				'value' => 'http://localhost:8888/Wordpress/assets/img/brand-logo.png',
			  ),
			  1 => 
			  array (
				'name' => 'mm_roots_footer_logo',
				'value' => 'http://localhost:8888/Wordpress/assets/img/footer-logo.png',
			  ),
			  2 => 
			  array (
				'name' => 'mm_roots_footer_text',
				'value' => 'Made by Media Manifesto Inc',
			  ),
			  3 => 
			  array (
				'name' => 'mm_roots_service_page',
				'value' => '34',
			  ),
			  4 => 
			  array (
				'name' => 'mm_roots_service_category',
				'value' => '4',
			  ),
			  5 => 
			  array (
				'name' => 'mm_roots_service_icon_default',
				'value' => 'cloud',
			  ),
			  6 => 
			  array (
				'name' => 'mm_roots_jumbotron_category',
				'value' => '5',
			  ),
			  7 => 
			  array (
				'name' => 'mm_roots_jumbotron_count',
				'value' => '3',
			  ),
			  8 => 
			  array (
				'name' => 'mm_roots_jumbotron_default',
				'value' => 'http://localhost:8888/Wordpress/assets/img/ipad.png',
			  ),
			  9 => 
			  array (
				'name' => 'mm_roots_jumbotron_animation',
				'value' => 'slide',
			  ),
			  10 => 
			  array (
				'name' => 'mm_roots_business_name',
				'value' => 'Company xyz inc',
			  ),
			  11 => 
			  array (
				'name' => 'mm_roots_business_address',
				'value' => '123 Street,<br />
			City',
			  ),
			  12 => 
			  array (
				'name' => 'mm_roots_business_phone',
				'value' => '1.234.456.7890',
			  ),
			  13 => 
			  array (
				'name' => 'mm_roots_business_email',
				'value' => 'contact@companyxyz.com',
			  ),
			  14 => 
			  array (
				'name' => 'mm_roots_business_facebook',
				'value' => '',
			  ),
			  15 => 
			  array (
				'name' => 'mm_roots_business_twitter',
				'value' => '',
			  ),
			  16 => 
			  array (
				'name' => 'mm_roots_business_googleplus',
				'value' => '',
			  ),
			  17 => 
			  array (
				'name' => 'mm_roots_business_youtube',
				'value' => '',
			  ),
			  18 => 
			  array (
				'name' => 'mm_roots_hours_title',
				'value' => 'Hours of Operation',
			  ),
			  19 => 
			  array (
				'name' => 'mm_roots_hours_content',
				'value' => '<p>Monday Through Friday:</p>
			<p>9am - 5pm
			</p>
			<p>Closed Weekends.</p>',
			  ),
			  20 => 
			  array (
				'name' => 'mm_roots_map_position',
				'value' => '-13.434324,-234',
			  ),
			  21 => 
			  array (
				'name' => 'mm_roots_zoom_level',
				'value' => '15',
			  ),
			  22 => 
			  array (
				'name' => 'mm_roots_contact_email',
				'value' => '',
			  ),
			  23 => 
			  array (
				'name' => 'mm_roots_confirmation_message_subject',
				'value' => '',
			  ),
			  24 => 
			  array (
				'name' => 'mm_roots_confirmation_message',
				'value' => '',
			  ),
			);
    	
		$this->_set_standart_values($themeSettings);
		
		add_option("mm_roots_versionnum", $_versionnum);
	}
    
	function create_menu_link()
    {
        $this->menu_page = add_options_page('Theme Options', 'Theme Options',
        'manage_options',$this->_options_pagename, array(&$this, 'build_settings_page'));
    }
    
    function build_settings_page()
    {
        if (!$this->check_user_capability()) {
            wp_die( __('You do not have sufficient permissions to access this page.') );
        }
        
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', false, null);
        wp_enqueue_style('admin', get_template_directory_uri() . '/assets/css/mm_roots_admin.css', false, null);
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', false, null);
  		wp_enqueue_script('admin', get_template_directory_uri() . '/assets/js/mm_roots_admin.js', false, null);
        
		include_once('theme_admin_ui.php');
    }
    
    function check_user_capability()
    {
        if ( is_super_admin() || current_user_can('manage_options') ) return true;

        return false;
    }
    
    
    function _save()
	{
		if ($this->check_user_capability())
		{
			switch($_REQUEST['fn']){
				case 'settings':
					$data_back = $_REQUEST['settings'];
					
					//var_export($data_back); enable if you want to copy the settings
					
					$values = array();
					$i = 0;
					foreach ($data_back as $data)
					{
						
						$values[$data['name']] = $data['value'];
					}
					
					$this->_save_settings_todb($values);
				break;
			}
		}
	}
    
    function get_option($setting)
    {
        return $this->_settings[$setting];
    }
    
    function _save_settings_todb($form_settings = '')
	{
		if ( $form_settings <> '' ) {
			unset($form_settings[$this->_settings_key . '_saved']);

			$this->_settings = $form_settings;

			#set standart values in case we have empty fields
			$this->_set_standart_values($form_settings);
		}
		
		update_option($this->_settings_key, $this->_settings);
	}

	function _set_standart_values($standart_values)
	{
		global $shortname;

		foreach ($standart_values as $key => $value){
			if ( !array_key_exists( $key, $this->_settings ) )
				$this->_settings[$key] = '';
		}

		foreach ($this->_settings as $key => $value) {
			if ( $value == '' ) $this->_settings[$key] = $standart_values[$key];
		}
	}
	
	function get_setting($name)
	{
		return $this->_settings[$this->_setting_prefix . $name];
	}

}

register_activation_hook(__FILE__,array('MM_Roots', 'MM_Roots_install'));

add_action( 'init', 'MM_Roots_Init', 5 );
function MM_Roots_Init()
{
    global $MM_Roots;
    $MM_Roots = new MM_Roots();
}