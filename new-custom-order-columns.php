<?php
/**
 * Plugin Name: New Custom Order Columns
 * Description: Add new custom order columns at admin side: in shop order list in WooCommerce to show custom order meta or WooCommerce default order meta.
 * Version: 1.0.0
 * Author: yakacj
 * Author URI: https://profiles.wordpress.org/yakacj/
 * 
 * Requires at least: 6.1
 * Tested up to: 6.4.3
 *
 * Requires PHP: 7.4
 * WC requires at least: 6.0
 * WC tested up to: 8.5.2
 * 
 * Text Domain: new-custom-order-columns
 * License: GPLv3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */
 
    defined('ABSPATH') or exit;
    
    /**
     * Check WooCommerce is active
     */
    if ( ! in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        return;
    }
    
    defined( 'YCOCW_FILE' ) or define( 'YCOCW_FILE', __FILE__ );
    
   /**
    * The core plugin class that is used to define load actions,
    * admin-specific hooks, and public-facing site hooks.
    */
	
	require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-init.php';
	
	function ycocw_instance() {
		$plugin = new \YCPlugins\YcOrderColumns\Plugin_Init;
		$plugin->run();
	}
	
	ycocw_instance();
	