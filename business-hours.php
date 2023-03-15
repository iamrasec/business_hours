<?php

/** 
 * @package Business_Hours
 */

/**
 * Plugin Name: Business Hours
 * Plugin URI: https://github.com/iamrasec/business_hours
 * Description: Display Business Hours on your page.  Automatically switches between opening and closing times.
 * Version: 1.0
 * Author: Cesar Yamuta Jr.
 * Author URI: https://github.com/iamrasec
 * License: GPL2
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'BUSINESS_HOURS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_business_hours() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-business-hours-activator.php';
	Business_Hours_Activator::activate();
}
register_activation_hook( __FILE__, 'activate_business_hours' );

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_business_hours() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-business-hours-deactivator.php';
	Business_Hours_Deactivator::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_business_hours' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-business-hours.php';


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_business_hours() {

	$plugin = new Business_Hours();
	$plugin->run();

}
run_business_hours();












