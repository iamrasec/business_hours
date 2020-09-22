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
 */

define('BH__PLUGIN_DIR', plugin_dir_path(__FILE__));
define('BH__VERSION', '1.0');

require_once(BH__PLUGIN_DIR . 'includes/bh_admin.php');

function business_hours_install() {
    
}
register_activation_hook(__FILE__, 'business_hours_install');


function business_hours_add_scripts() {
    
}
add_action('admin_enqueue_scripts', 'business_hours_add_scripts');


function business_hours_admin_menu() {
    add_menu_page( 'Business Hours', 'Business Hours', 'edit_others_posts', 'business_hours', 'business_hours_admin', '', 2 );
}
add_action('admin_menu', 'business_hours_admin_menu');



function business_hours_admin() {

}











