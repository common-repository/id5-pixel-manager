<?php

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @link       http://id5.io
 * @since      1.0.0
 *
 * @package    Id5_Wp_Pixel_Manager
 * @subpackage Id5_Wp_Pixel_Manager/public
 * @author     Scott Menzer  <smenzer@id5.io>
 */
class Id5_Wp_Pixel_Manager_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Options for this plugin
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      array     $id5_options    The array of options for this plugin
	 */
	private $id5_options;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param    string    $plugin_name     The name of the plugin.
	 * @param    string    $version    		The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->id5_options = get_option($this->plugin_name);
	}

	/**
	 * This function will simply enqueue our JS file and pass the ID5 account number
	 * from the options array to the JS script.
	 *
	 * @since.   1.0.0
	 */
	public function id5_pixel() {
		if (isset($this->id5_options['id5_account_number'])
			&& intval($this->id5_options['id5_account_number'])
			&& !is_admin()
		) {
			$options = array(
				'id' => $this->id5_options['id5_account_number'],
			);

			// enqueue the script
			wp_enqueue_script(
				$this->plugin_name,
				plugin_dir_url( __FILE__ ) . 'js/id5-wp-pixel-manager-public.js',
				array(),
				$this->version,
				true
			);

			// pass our php variables to the js script
			wp_localize_script(
				$this->plugin_name,
				'o',
				$options
			);
		}
	}

}
