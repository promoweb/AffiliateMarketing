<?php
/**
 * Plugin Name: Affiliate Marketing Plugin
 * Plugin URI: https://example.com/affiliate-marketing-plugin
 * Description: A WordPress plugin for managing affiliate marketing with integrations for Amazon, eBay, AliExpress, and more. Includes a custom post type for product reviews.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://example.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: affiliate-marketing-plugin
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Define plugin constants
define( 'AFFILIATE_MARKETING_PLUGIN_VERSION', '1.0.0' );
define( 'AFFILIATE_MARKETING_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'AFFILIATE_MARKETING_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include necessary files
require_once AFFILIATE_MARKETING_PLUGIN_DIR . 'includes/class-affiliate-marketing-plugin.php';

/**
 * Begins execution of the plugin.
 */
function run_affiliate_marketing_plugin() {
    $plugin = new Affiliate_Marketing_Plugin();
    $plugin->run();
}
run_affiliate_marketing_plugin();
