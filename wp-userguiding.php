<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://jflagarde.com
 * @since             1.0.0
 * @package           WPUserGuiding
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress UserGuiding Integration
 * Plugin URI:        https://jflagarde.com/plugin-name-uri/
 * Description:       Integrate UserGuiding in WordPress admin area.
 * Version:           1.0.0
 * Author:            Jean-François Lagarde
 * Author URI:        https://jflagarde.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-userguiding
 * Domain Path:       /languages
 */

// Code greatly inspired by Daniel Nordmark (THANKS!)

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * LOAD USERGUIDING ON ADMIN AREA
 */
add_action( 'admin_enqueue_scripts', function() {
	wp_enqueue_script( 'userguiding', plugin_dir_url( __FILE__ ) . '/assets/js/userguiding.js', false );
} );

/**
 * LOAD USERGUIDING ON FRONT-END
 */
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_script( 'userguiding', plugin_dir_url( __FILE__ ) . '/assets/js/userguiding.js', false );
} );
