<?php

/*
Plugin Name: Custom Admin Bar
Plugin URI: https://scottsaunders.design
Description: Replaces the default WordPress admin bar with a simplified version.
Version: 1.0
Author: Scott Saunders
Author URI: https://scottsaunders.design
License: GPLv2 or later
Text Domain: scottsaunders.design
*/

add_action('wp_footer', 'add_admin_bar');
function add_admin_bar(){
	require_once( plugin_dir_path( __FILE__ ) . '/admin-bar.php');
};
