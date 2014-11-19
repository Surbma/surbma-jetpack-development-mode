<?php

/*
Plugin Name: Surbma - Jetpack Development Mode
Plugin URI: http://surbma.com/plugins/
Description: Enables Jetpack'a Development Mode, to use some modules without having a WordPress.com account
Version: 1.0.0
Author: Surbma
Author URI: http://surbma.com/
License: GPL2
*/

if ( class_exists( 'Jetpack' ) ) add_filter( 'jetpack_development_mode', '__return_true' );