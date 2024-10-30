<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://id5.io
 * @since             1.0.0
 * @package           Id5_Wp_Pixel_Manager
 *
 * @wordpress-plugin
 * Plugin Name:       ID5 Pixel Manager
 * Description:       Easily add the ID5 cookie syncing pixel on your website with this plugin. For more information, please visit our website.
 * Version:           1.0.8
 * Author:            ID5 Technology
 * Author URI:        http://id5.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       id5-wp-pixel-manager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ID5_WP_PIXEL_MANAGER', '1.0.8' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-id5-wp-pixel-manager-activator.php
 */
function activate_id5_wp_pixel_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-id5-wp-pixel-manager-activator.php';
	Id5_Wp_Pixel_Manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-id5-wp-pixel-manager-deactivator.php
 */
function deactivate_id5_wp_pixel_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-id5-wp-pixel-manager-deactivator.php';
	Id5_Wp_Pixel_Manager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_id5_wp_pixel_manager' );
register_deactivation_hook( __FILE__, 'deactivate_id5_wp_pixel_manager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-id5-wp-pixel-manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_id5_wp_pixel_manager() {

	$plugin = new Id5_Wp_Pixel_Manager();
	$plugin->run();

}
run_id5_wp_pixel_manager();
