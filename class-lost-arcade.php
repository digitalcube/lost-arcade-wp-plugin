<?php

/**
 * Lost Arcade class.
 *
 * @category   Class
 * @package    LostArcade
 * @subpackage WordPress
 * @author     DigitalCube <info@digitalcube.jp>
 * @license    https://opensource.org/licenses/GPL-3.0 GPL-3.0-only
 * @link       link(https://github.com/digitalcube/lost-arcade-wp-plugin, Lost Arcade)
 * @since      0.0.0
 * php version 7.3.9
 */

if (!defined('ABSPATH')) {
	// Exit if accessed directly.
	exit;
}

/**
 * Main Lost Arcade Class
 *
 * The init class that runs the Lost Arcade plugin.
 * Intended To make sure that the plugin's minimum requirements are met.
 *
 * You should only modify the constants to match your plugin's needs.
 *
 * Any custom code should go inside Plugin Class in the plugin.php file.
 */
final class LostArcade
{

	/**
	 * Plugin Version
	 *
	 * @since 0.0.0
	 * @var string The plugin version.
	 */
	const VERSION = '0.0.0';

	/**
	 * Constructor
	 *
	 * @since 0.0.0
	 * @access public
	 */
	public function __construct()
	{
		// Load the translation.
		add_action('init', array($this, 'i18n'));

		// Initialize the plugin.
		add_action('plugins_loaded', array($this, 'init'));
	}

	/**
	 * Load Textdomain
	 *
	 * Load plugin localization files.
	 * Fired by `init` action hook.
	 *
	 * @since 0.0.0
	 * @access public
	 */
	public function i18n()
	{
		load_plugin_textdomain('lost-arcade');
	}

	/**
	 * Initialize the plugin
	 * 
	 * @since 0.0.0
	 * @access public
	 */
	public function init()
	{
		// Scripts.
		wp_register_script('lost-arcade', plugins_url('/lib/lost-arcade.js', LOST_ARCADE), array(), '0.0.0', true);
		wp_enqueue_script('lost-arcade');

		// Styles.
		wp_register_style('lost-arcade', plugins_url('/style.css', LOST_ARCADE), array(), '0.0.0');
		wp_enqueue_style('lost-arcade');
	}
}

// Instantiate Lost Arcade.
new LostArcade();
