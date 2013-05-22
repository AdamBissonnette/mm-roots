<?php
/**
 * Custom functions
 */
 
class MM_Roots_Optical
{
	var $_settings;
    var $_options_pagename = 'mm_roots_optical';
    var $_settings_key = 'mm_roots_optical';
    var $_setting_prefix = 'mm_op';
    var $_save_key = '';
    var $_versionnum = 0.1;
	var $menu_page;
	
	function MM_Roots_Optical()
	{
		return $this->__construct();
	}
	
    function __construct()
    {
        $this->_settings = get_option($this->_settings_key) ? get_option($this->_settings_key) : array();
        $this->_set_standart_values();       

        add_action( 'admin_menu', array(&$this, 'create_menu_link') );
		date_default_timezone_set(get_option('timezone_string'));		
		
		//Shortcodes
		//add_shortcode("MMProductGroup", array(&$this, "MMProductGroup") );
		
		//Ajax Posts
		add_action('wp_ajax_nopriv_do_ajax', array(&$this, '_save') );
		add_action('wp_ajax_do_ajax', array(&$this, '_save') );
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

        if (isset($_REQUEST['saved'])) {if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>Settings saved.</strong></p></div>';}
		if ( isset($_POST['mm_op_settings_saved']) )
            $this->_save_settings_todb($_POST);
        
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', false, null);
  		wp_enqueue_script('js', get_template_directory_uri() . '/assets/js/mm_op_admin.js', false, null);
        
		include_once('theme_admin.php');
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
					
					$values = array();
					$i = 0;
					foreach ($data_back as $data)
					{
						
						$values[$data['name']] = $data['value'];
					}
					
					//print_r($values);
					
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
			$this->_set_standart_values();
		}
		
		update_option($this->_settings_key, $this->_settings);
	}

	function _set_standart_values()
	{
		global $shortname; 

		$standart_values = array(
			$this->_setting_prefix . '_service_page' => '',
			$this->_setting_prefix . '_service_category' => '',
			$this->_setting_prefix . '_jumbotron_category' => '',
			$this->_setting_prefix . '_contact_email' => '',
			$this->_setting_prefix . '_confirmation_message' => '',
			$this->_setting_prefix . '_confirmation_message_subject' => '',
			$this->_setting_prefix . '_jumbotron_count' => '',
		);

		foreach ($standart_values as $key => $value){
			if ( !array_key_exists( $key, $this->_settings ) )
				$this->_settings[$key] = '';
		}

		foreach ($this->_settings as $key => $value) {
			if ( $value == '' ) $this->_settings[$key] = $standart_values[$key];
		}
	}

}

add_action( 'init', 'MM_Roots_Optical_Init', 5 );
function MM_Roots_Optical_Init()
{
    global $MM_Roots_Optical;
    $MM_Roots_Optical = new MM_Roots_Optical();
}