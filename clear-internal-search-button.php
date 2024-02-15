<?php
/*
Plugin Name: Clear Internal Search Button
Plugin URI: https://wordpress.org/plugins/clear-internal-search-button/
Description: Adds a button to clear the text of the internal search field for posts and pages in the WordPress admin area.
Version: 1.1
Requires at least: 6.0
Tested up to: 6.5
Requires PHP: 7.0
Tested up to PHP: 8.3
Author: Marc Armengou
Author URI: https://www.marcarmengou.com/
Text Domain: clear-internal-search-button
License: GPL2
*/

function clear_search_admin_enqueue_scripts() {
    wp_enqueue_script('clear-internal-search-button-js', plugin_dir_url(__FILE__) . 'clear-internal-search-button.js', array('jquery'), '1.0', true);

    // Localize the script to pass translatable strings
    wp_localize_script('clear-internal-search-button-js', 'clearSearchData', array(
        'buttonText' => __('Clear', 'clear-internal-search-button'),
    ));

    wp_enqueue_style('clear-internal-search-button-css', plugin_dir_url(__FILE__) . 'styles.css');
}
add_action('admin_enqueue_scripts', 'clear_search_admin_enqueue_scripts');
