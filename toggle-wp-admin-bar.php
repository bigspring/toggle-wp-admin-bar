<?php
/*
Plugin Name: Toggle WP Admin Bar
Plugin URI: http://watch.this/space
Description: Hide the pesky WP Admin Bar with Ctrl+Shift+L. Show it again if you really, really want.
Author: DM Seaton
Version: 1.0.0
Author URI: http://bigspring.co.uk
*/

if (!function_exists('twpab_load_script')) {
    add_action('wp_enqueue_scripts', 'twpab_load_script');
    function twpab_load_script() {
        wp_register_script('toggle-wp-admin-bar-js', plugins_url('assets/main.js', __FILE__), array('jquery'), false, true);
        wp_localize_script('toggle-wp-admin-bar-js', 'css', twpab_get_css());
        wp_enqueue_script( 'toggle-wp-admin-bar-js' );
    }
}

if (!function_exists('twpab_get_css')) {
    function twpab_get_css()
    {
        return file_get_contents(plugin_dir_path(__FILE__).'assets/main.css');
    }
}
