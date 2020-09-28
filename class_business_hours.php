<?php

namespace BusinessHours;

class class_business_hours {
	private $options;

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
		$this->options = get_option('business_hours');
		?>
		<div class="wrap">
			<h1>Business Hours Admin Settings</h1>
			<form method="post" action="options.php">
				<?php
				settings_fields('business_hours');
				do_settings_sections('bh-admin-settings');
				?>
			</form>
		</div>
		<?php
	}

	/**
	 * Register and add settings
	 */
	public function page_init() {
		register_setting(
			'business_hours',
			'business_hours',
			array($this, 'sanitize')
		);

		add_settings_section(
			'settings_section_id',
			'Business Hours Admin Settings',
			array($this, 'print_section_info'),
			'bh-admin-settings'
		);

		add_settings_field(
			'bh_timezone',
			'Time zone',
			array($this, 'bh_timezone_callback'),
			'bh-admin-settings',
			'bh_timezone_section'
		);

		add_settings_field(
			'bh_timeformat',
			'Time format',
			array($this, 'bh_timeformat_callback'),
			'bh-admin-settings',
			'bh_timeformat_section'
		);
	}
}