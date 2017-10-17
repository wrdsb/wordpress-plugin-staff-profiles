<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.wrdsb.ca
 * @since             0.0.1
 * @package           Wrdsb_Staff_Profiles
 *
 * @wordpress-plugin
 * Plugin Name:       WRDSB Staff Profiles
 * Plugin URI:        https://github.com/wrdsb/wordpress-plugin-staff-profiles
 * Description:       Profile tweaks, custom meta fields, user roles, and API endpoints for Users in our Staff Intranet.
 * Version:           0.0.1
 * Author:            WRDSB
 * Author URI:        https://www.wrdsb.ca
 * License:           GPLv3 or later
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       wrdsb-staff-profiles
 * Domain Path:       /languages
 * GitHub Plugin URI: wrdsb/wordpress-plugin-staff-profiles
 * GitHub Branch:     master
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wrdsb-staff-profiles-activator.php
 */
function activate_wrdsb_staff_profiles() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wrdsb-staff-profiles-activator.php';
	Wrdsb_Staff_Profiles_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wrdsb-staff-profiles-deactivator.php
 */
function deactivate_wrdsb_staff_profiles() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wrdsb-staff-profiles-deactivator.php';
	Wrdsb_Staff_Profiles_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wrdsb_staff_profiles' );
register_deactivation_hook( __FILE__, 'deactivate_wrdsb_staff_profiles' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wrdsb-staff-profiles.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.0.1
 */
function run_wrdsb_staff_profiles() {

	$plugin = new Wrdsb_Staff_Profiles();
	$plugin->run();

}
run_wrdsb_staff_profiles();
