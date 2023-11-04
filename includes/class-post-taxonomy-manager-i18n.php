<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://erich.biz
 * @since      1.0.0
 *
 * @package    Post_Taxonomy_Manager
 * @subpackage Post_Taxonomy_Manager/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Post_Taxonomy_Manager
 * @subpackage Post_Taxonomy_Manager/includes
 * @author     Vladimir Eric <murallez@gmail.com>
 */
class Post_Taxonomy_Manager_i18n
{


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain()
	{

		load_plugin_textdomain(
			'post-taxonomy-manager',
			false,
			dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
		);
	}
}
