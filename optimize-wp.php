<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://en.gravatar.com/jiyalikesart29
 * @since             1.0.0
 * @package           Optimize_Wp
 *
 * @wordpress-plugin
 * Plugin Name:       Optimize WP
 * Plugin URI:        https://github.com/wajiharizvi001/Optimize-WP
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Wajiha Rizvi
 * Author URI:        https://en.gravatar.com/jiyalikesart29
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       optimize-wp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-optimize-wp-activator.php
 */
function activate_optimize_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-optimize-wp-activator.php';
	Optimize_Wp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-optimize-wp-deactivator.php
 */
function deactivate_optimize_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-optimize-wp-deactivator.php';
	Optimize_Wp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_optimize_wp' );
register_deactivation_hook( __FILE__, 'deactivate_optimize_wp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-optimize-wp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_optimize_wp() {

	$plugin = new Optimize_Wp();
	$plugin->run();

}
run_optimize_wp();
