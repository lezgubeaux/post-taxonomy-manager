<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://erich.biz
 * @since             1.0.0
 * @package           Post_Taxonomy_Manager
 *
 * @wordpress-plugin
 * Plugin Name:       post taxonomy manager
 * Plugin URI:        https://post-taxonomy-manager.com
 * Description:       Find/replace any taxonomy of posts of any posttype. Backup current taxonomies. Restore taxonomies from an existing backup. 
 * Version:           1.0.0
 * Author:            Vladimir Eric
 * Author URI:        https://erich.biz/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       post-taxonomy-manager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('POST_TAGS_MANAGER_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-post-taxonomy-manager-activator.php
 */
function activate_post_taxonomy_manager()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-post-taxonomy-manager-activator.php';
	Post_Taxonomy_Manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-post-taxonomy-manager-deactivator.php
 */
function deactivate_post_taxonomy_manager()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-post-taxonomy-manager-deactivator.php';
	Post_Taxonomy_Manager_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_post_taxonomy_manager');
register_deactivation_hook(__FILE__, 'deactivate_post_taxonomy_manager');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-post-taxonomy-manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_post_taxonomy_manager()
{

	$plugin = new Post_Taxonomy_Manager();
	$plugin->run();
}
run_post_taxonomy_manager();
