<?php

namespace BusinessHours;

class class_business_hours {

	/**
	 * Start
	 */
	public function __construct() {
		add_action('admin_menu', array($this, 'add_plugin_page'));
		add_action('admin_init', array($this, 'page_init'));
	}

	/**
	 * Add options page
	 */
	public function business_hours_settings_page() {
		add_options_page(
			'Business Hours Settings',
			'Business Hours Settings',
			'manage_options',
			'bh-admin-settings',
			array($this, 'create_admin_page')
		);
	}

	/**
	 * Options page callback
	 */
	public function create_admin_page() {
		
	}
}