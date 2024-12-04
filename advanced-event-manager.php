<?php 
/**
 * Plugin Name: Advanced Event Manager
 * Description: Custom Plugin to manage events with weather intergration
 * Version: 1.0.0
 * Author: Abir
 */

// Define constants //
define('AEM_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('AEM_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include necessary files //
require_once AEM_PLUGIN_DIR . 'includes/post-types.php';
require_once AEM_PLUGIN_DIR . 'includes/admin-settings.php';
require_once AEM_PLUGIN_DIR . 'includes/meta-boxes.php';
require_once AEM_PLUGIN_DIR . 'includes/api-integration.php';
require_once AEM_PLUGIN_DIR . 'includes/shortcode.php';


/**
 * Activate the Custom Post Type called "Events" upon Plugin Activation
 * Activate the Settings page in the admin area upon plugin activation
 */
add_action('init', 'aem_register_event_post_type');
add_action('admin_menu', 'aem_create_settings_page');






