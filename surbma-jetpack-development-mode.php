<?php

/*
Plugin Name: Surbma - Jetpack Development Mode
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Enables Jetpack's Development Mode, to use some modules without having a WordPress.com account.

Version: 1.1.4

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-jetpack-development-mode
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) {
	die( 'Good try! :)' );
}

// Localization
function surbma_jetpack_development_mode_init() {
	load_plugin_textdomain( 'surbma-jetpack-development-mode', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'surbma_jetpack_development_mode_init' );

if ( class_exists( 'Jetpack' ) ) add_filter( 'jetpack_development_mode', '__return_true' );