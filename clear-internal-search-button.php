<?php
/*
Plugin Name: Clear Internal Search Button
Plugin URI: https://wordpress.org/plugins/clear-internal-search-button/
Description: Adds a button in admin area to clear text of search field for posts, pages, comments, users, media, categories, tags, plugins, and themes.
Version: 1.9
Requires at least: 6.0
Tested up to: 6.8
Requires PHP: 7.0
Tested up to PHP: 8.3
Author: Marc Armengou
Author URI: https://www.marcarmengou.com/
Text Domain: clear-internal-search-button
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function cisb_admin_enqueue_scripts($hook) {
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

    if ( in_array( $hook, $allowed_screens ) ) {
        wp_enqueue_script(
            'clear-internal-search-button-js',
            plugin_dir_url(__FILE__) . 'clear-internal-search-button.js',
            array('jquery'),
            '1.9',
            true
        );
        wp_enqueue_style(
            'clear-internal-search-button-css',
            plugin_dir_url(__FILE__) . 'styles.css',
            array(),
            '1.9'
        );
    }
}
add_action('admin_enqueue_scripts', 'cisb_admin_enqueue_scripts');
