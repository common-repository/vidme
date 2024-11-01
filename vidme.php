<?php
/*
Plugin Name: Vidme
Plugin URI:  https://wordpress.org/plugins/vidme/
Description: Embed videos from vid.me into your WordPress site.
Version:     1.3
Author:      Rami Yushuvaev
Author URI:  https://GenerateWP.com/
Text Domain: vidme
*/



/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Include plugin files
 */
include_once ( plugin_dir_path( __FILE__ ) . 'includes/i18n.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/embed.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/shortcode.php' );
