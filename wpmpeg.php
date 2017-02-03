<?php
/*
 * Plugin Name: wpmpeg
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: wpmpeg
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-wpmpeg.php' );
require_once( 'includes/class-wpmpeg-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-wpmpeg-admin-api.php' );
require_once( 'includes/lib/class-wpmpeg-post-type.php' );
require_once( 'includes/lib/class-wpmpeg-taxonomy.php' );

/**
 * Returns the main instance of wpmpeg to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object wpmpeg
 */
function wpmpeg () {
	$instance = wpmpeg::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = wpmpeg_Settings::instance( $instance );
	}

	return $instance;
}

wpmpeg();