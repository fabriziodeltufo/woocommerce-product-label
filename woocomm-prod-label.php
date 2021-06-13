<?php
/*
Plugin Name: WooCommerce Product Label
Plugin URI: https://github.com/fabriziodeltufo
Description: Input text (Name To Print) to customize a product's label.
Version: 2.0.0
Contributors:
Author: Fabrizio Del Tufo
Author URI: https://github.com/fabriziodeltufo
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wooprolab
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );

include( plugin_dir_path( __FILE__ ) . 'includes/wooprolab-style.php');

include( plugin_dir_path( __FILE__ ) . 'includes/wooprolab-input-text-prod.php');
