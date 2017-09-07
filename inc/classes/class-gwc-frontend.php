<?php
/**
 * Fired public and other codes and methods
 *
 * @link       http://mahdiyazdi.com
 * @since      1.0.0
 *
 * @package    Plugin-Name
 * @subpackage Plugin-Name/inc
 * @author     Mahdi Yazdi <info@mahdiyazdi.com>
 */

class GWC_Frontend {
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
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		add_action( 'wp_enqueue_scripts', array( $this, 'load_scripts_styles' ) );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function load_scripts_styles() {

		/**
		 * This function is provided for loading scripts only.
		 **
		 * These scripts that loaded in this section wil be loaded
		 * only in the Frontend area of the Wordpress
		 **/

		wp_enqueue_style(
							'yzes-public-styles',
							YZES_URL . 'assets/css/pl-public-styles.css',
							array(),
							$this->version,
							'all'
		);

		wp_enqueue_script(
							'yzes-public-styles',
							YZES_URL . 'assets/js/pl-public-styles.js',
							array( 'jquery' ),
							$this->version,
							false
		);
	}
}
