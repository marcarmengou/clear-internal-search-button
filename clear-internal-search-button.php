<?php
/*
Plugin Name: Clear Internal Search Button
Plugin URI: https://wordpress.org/plugins/clear-internal-search-button/
Description: Adds a button in admin area to clear text of search field for posts, pages, comments, users, media, categories, tags, plugins, and themes.
Version: 2.1
Requires at least: 6.9
Tested up to: 6.9
Requires PHP: 8.2
Tested up to PHP: 8.3
Author: Marc Armengou
Author URI: https://www.marcarmengou.com/
Text Domain: clear-internal-search-button
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define( 'CISB_VERSION', '2.1' );

/**
 * Loads the plugin scripts and styles on the relevant admin screens.
 *
 * @since 2.1.0
 * @param string $hook The current admin page hook suffix.
 */
function cisb_admin_enqueue_scripts( $hook ) {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	$allowed_screens = array(
		'edit.php',
		'upload.php',
		'edit-comments.php',
		'users.php',
		'edit-tags.php',
		'plugin-install.php',
		'plugins.php',
		'theme-install.php',
		'themes.php',
	);

	if ( in_array( $hook, $allowed_screens, true ) ) {
		wp_register_script(
			'clear-internal-search-button-js',
			plugin_dir_url( __FILE__ ) . 'clear-internal-search-button.js',
			array( 'jquery' ),
			CISB_VERSION,
			true
		);
		wp_enqueue_script( 'clear-internal-search-button-js' );

		wp_register_style(
			'clear-internal-search-button-css',
			plugin_dir_url( __FILE__ ) . 'styles.css',
			array(),
			CISB_VERSION
		);
		wp_enqueue_style( 'clear-internal-search-button-css' );
	}
}
add_action( 'admin_enqueue_scripts', 'cisb_admin_enqueue_scripts' );
