<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://en.gravatar.com/jiyalikesart29
 * @since      1.0.0
 *
 * @package    Optimize_Wp
 * @subpackage Optimize_Wp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Optimize_Wp
 * @subpackage Optimize_Wp/includes
 * @author     Wajiha Rizvi <jiyarizvi18@gmail.com>
 */
class Optimize_Wp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'optimize-wp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
