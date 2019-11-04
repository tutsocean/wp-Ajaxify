<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://tutsocean.com/about-me/
 * @since      1.0.0
 *
 * @package    Wp_Ajaxify
 * @subpackage Wp_Ajaxify/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Ajaxify
 * @subpackage Wp_Ajaxify/includes
 * @author     Deepak anand <anand.deepak9988@gmail.com>
 */
class Wp_Ajaxify_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-ajaxify',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
