<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://en.gravatar.com/jiyalikesart29
 * @since      1.0.0
 *
 * @package    Optimize_Wp
 * @subpackage Optimize_Wp/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Optimize_Wp
 * @subpackage Optimize_Wp/public
 * @author     Wajiha Rizvi <jiyarizvi18@gmail.com>
 */
class Optimize_Wp_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $optimize_wp    The ID of this plugin.
	 */
	private $optimize_wp;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $optimize_wp       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $optimize_wp, $version ) {

		$this->plugin_name = $optimize_wp;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Optimize_Wp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Optimize_Wp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->optimize_wp, plugin_dir_url( __FILE__ ) . 'css/optimize-wp-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Optimize_Wp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Optimize_Wp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/optimize-wp-public.js', array( 'jquery' ), $this->version, false );

	}

}
