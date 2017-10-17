<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.wrdsb.ca
 * @since      0.0.1
 *
 * @package    Wrdsb_Staff_Profiles
 * @subpackage Wrdsb_Staff_Profiles/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      0.0.1
 * @package    Wrdsb_Staff_Profiles
 * @subpackage Wrdsb_Staff_Profiles/includes
 * @author     WRDSB <website@wrdsb.on.ca>
 */
class Wrdsb_Staff_Profiles_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    0.0.1
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wrdsb-staff-profiles',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
