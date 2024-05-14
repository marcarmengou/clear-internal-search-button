<?php
/*
Plugin Name: Clear Internal Search Button
Plugin URI: https://wordpress.org/plugins/clear-internal-search-button/
Description: Adds a button in admin area to clear text of search field for posts, pages, comments, users, media, categories, tags, plugins, and themes.
Version: 1.6
Requires at least: 6.0
Tested up to: 6.5
Requires PHP: 7.0
Tested up to PHP: 8.3
Author: Marc Armengou
Author URI: https://www.marcarmengou.com/
Text Domain: clear-internal-search-button
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function cisb_admin_enqueue_scripts() {
    wp_enqueue_script('clear-internal-search-button-js', plugin_dir_url(__FILE__) . 'clear-internal-search-button.js', array('jquery'), '1.0', true);
    wp_enqueue_style('clear-internal-search-button-css', plugin_dir_url(__FILE__) . 'styles.css', array(), '1.0');
}
add_action('admin_enqueue_scripts', 'cisb_admin_enqueue_scripts');
