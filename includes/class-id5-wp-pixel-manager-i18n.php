<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://id5.io
 * @since      1.0.0
 *
 * @package    Id5_Wp_Pixel_Manager
 * @subpackage Id5_Wp_Pixel_Manager/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Id5_Wp_Pixel_Manager
 * @subpackage Id5_Wp_Pixel_Manager/includes
 * @author     Scott Menzer  <smenzer@id5.io>
 */
class Id5_Wp_Pixel_Manager_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'id5-wp-pixel-manager',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
