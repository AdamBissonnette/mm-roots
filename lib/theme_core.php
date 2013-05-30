<?php
/**
 * Core Theme Object
 */

include_once('theme/functions.php');

class MM_Roots
{
	var $_settings;
    var $_options_pagename = 'mm_roots';
    var $_settings_key = 'mm_roots';
    //var $_setting_prefix = 'mm_roots_';
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
    	
    	//Get default values from the theme data file if there are none
		//$this->_set_standart_values($themeSettings);
		
		add_option($_settings_key . "_versionnum", $_versionnum);
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
        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-1.9.1.min.js', false, null);
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/plugins.js', false, null);
  		wp_enqueue_script('formtools', get_template_directory_uri() . '/assets/js/formtools.js', false, null);
  		wp_enqueue_script('admin', get_template_directory_uri() . '/assets/js/mm_roots_admin.js', false, null);
        
        include_once('theme/admin_data.php');
		include_once('theme/admin_ui.php');
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
					
					$this->_save_settings_todb($values);
				break;
			}
		}

		switch($_REQUEST['fn']){
		case 'contact':
			
			$data_back = $_REQUEST['contact'];
					
			$data = array();
			$i = 0;
			foreach ($data_back as $field)
			{
				$data[$field['name']] = $field['value'];
			}

			if ($data['honey'] == '1' && $data['terms'] == '')
			{
				$emailTemplate = "%s says:<br /> %s<br /><br />- %s";

				$name = $data['name'];
				$contact = $data['contact'];
				$message = $data['message'];

				$emailBody = sprintf($emailTemplate, $name, $message, $contact);

				$toEmail = $this->get_setting('business_email');
				$subject = "Website Message";


				SendMail($toEmail, $subject, $toEmail, $emailBody);
			}
		break;
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
		return stripslashes($this->_settings[$name]);
	}

}

register_activation_hook(__FILE__,array('MM_Roots', 'MM_Roots_install'));

add_action( 'init', 'MM_Roots_Init', 5 );
function MM_Roots_Init()
{
    global $MM_Roots;
    $MM_Roots = new MM_Roots();
}

function page_metabox(){
	add_meta_box("mm_page_tagline", "Page Meta", "page_meta", "page");
}

function page_meta(){
	global $post;

	$tagline = get_post_meta($post->ID,'tagline',true);
	$readmoreid = get_post_meta($post->ID,'readmoreid',true);
	$blurb = get_post_meta($post->ID,'blurb',true);
	$icon = get_post_meta($post->ID,'icon',true);
	$image = get_post_meta($post->ID,'image',true);

	?>

	<?php wp_nonce_field( 'mm_nonce', 'mm_nonce' ); ?>

	<div style="margin: 13px 0 11px 4px;">
		<label for="tagline" style="color: #000; font-weight: bold;">Tagline</label>
		<input type="text" value="<?php echo esc_attr( $tagline ); ?>" id="tagline" name="tagline" size="20" />
	</div>

	<div style="margin: 13px 0 11px 4px;">
		<label for="readmoreid" style="color: #000; font-weight: bold;">Read More ID</label>
		<input type="text" value="<?php echo esc_attr( $readmoreid ); ?>" id="readmoreid" name="readmoreid" size="20" />
	</div>

	<div style="margin: 13px 0 11px 4px;">
		<label for="blurb" style="color: #000; font-weight: bold;">Blurb</label>
		<input type="text" value="<?php echo esc_attr( $blurb ); ?>" id="blurb" name="blurb" size="20" />
	</div>

	<div style="margin: 13px 0 11px 4px;">
		<label for="icon" style="color: #000; font-weight: bold;">Icon</label>
		<input type="text" value="<?php echo esc_attr( $icon ); ?>" id="icon" name="icon" size="20" />
	</div>

	<div style="margin: 13px 0 11px 4px;">
		<label for="image" style="color: #000; font-weight: bold;">Image Url</label>
		<input type="text" value="<?php echo esc_attr( $image ); ?>" id="image" name="image" size="20" />
		<p>Note: Use this if you want to link to an external URL as the featured image</p>
	</div>

	<?php
}

add_action("admin_init", "page_metabox");


function post_metabox(){
	add_meta_box("mm_post_tagline", "Post Meta", "post_meta", "post");
}

function post_meta(){
	global $post;

	$tagline = get_post_meta($post->ID,'tagline',true);
	$blurb = get_post_meta($post->ID,'blurb',true);
	$icon = get_post_meta($post->ID,'icon',true);
	$image = get_post_meta($post->ID,'image',true);

	?>

	<?php wp_nonce_field( 'mm_nonce', 'mm_nonce' ); ?>

	<div style="margin: 13px 0 11px 4px;">
		<label for="tagline" style="color: #000; font-weight: bold;">Tagline</label>
		<input type="text" value="<?php echo esc_attr( $tagline ); ?>" id="tagline" name="tagline" size="20" />
	</div>

	<div style="margin: 13px 0 11px 4px;">
		<label for="blurb" style="color: #000; font-weight: bold;">Blurb</label>
		<input type="text" value="<?php echo esc_attr( $blurb ); ?>" id="blurb" name="blurb" size="20" />
	</div>

	<div style="margin: 13px 0 11px 4px;">
		<label for="icon" style="color: #000; font-weight: bold;">Icon</label>
		<input type="text" value="<?php echo esc_attr( $icon ); ?>" id="icon" name="icon" size="20" />
	</div>

	<div style="margin: 13px 0 11px 4px;">
		<label for="image" style="color: #000; font-weight: bold;">Image Url</label>
		<input type="text" value="<?php echo esc_attr( $image ); ?>" id="image" name="image" size="20" />
		<p>Note: Use this if you want to link to an external URL as the featured image</p>
	</div>

	<?php
}

add_action("admin_init", "post_metabox");

function mm_save_post_meta( $post_id, $post ){
	global $pagenow;
	
	if ( 'post.php' != $pagenow ) return $post_id;
	
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
		return $post_id;

	if ( ! isset( $_POST['mm_nonce'] ) || ! wp_verify_nonce( $_POST['mm_nonce'], 'mm_nonce' ) )
        return $post_id;

	switch ($post->post_type) {
		case 'post':
			update_post_meta( $post_id, "blurb", $_POST["blurb"] );
			update_post_meta( $post_id, "tagline", $_POST["tagline"] );
			update_post_meta( $post_id, "icon", $_POST["icon"] );
			update_post_meta( $post_id, "image", $_POST["image"] );

			break;
		case 'page':
			update_post_meta( $post_id, "blurb", $_POST["blurb"] );
			update_post_meta( $post_id, "tagline", $_POST["tagline"] );
			update_post_meta( $post_id, "icon", $_POST["icon"] );
			update_post_meta( $post_id, "image", $_POST["image"] );
			update_post_meta( $post_id, "readmoreid", $_POST["readmoreid"] );

			break;
		default:
			//Do Nothing
			break;
	}
}

add_action( 'save_post', 'mm_save_post_meta', 10, 2 );