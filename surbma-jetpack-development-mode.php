<?php

/*
Plugin Name: Surbma | Jetpack Offline Mode
Plugin URI: https://surbma.com/wordpress-plugins/
Description: Enables Jetpack's Offline Mode, to use some modules without having a WordPress.com account.

Version: 2.2

Author: Surbma
Author URI: https://surbma.com/

License: GPLv2

Text Domain: surbma-jetpack-development-mode
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) {
	die( 'Good try! :)' );
}

// Localization
add_action( 'plugins_loaded', function() {
	load_plugin_textdomain( 'surbma-jetpack-development-mode', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
} );

if ( class_exists( 'Jetpack' ) ) add_filter( 'jetpack_offline_mode', '__return_true' );
