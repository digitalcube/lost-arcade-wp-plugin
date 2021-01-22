<?php

/**
 * Lost Arcade
 *
 * @package LostArcade
 *
 * Plugin Name: Lost Arcade
 * Description: Arcade games, just for fun.
 * Plugin URI:  https://github.com/digitalcube/lost-arcade-wp-plugin
 * Version:     0.0.0
 * Author:      DigitalCube
 * Author URI:  https://www.digitalcube.jp
 * Text Domain: lost-arcade
 */

define('LOST_ARCADE', __FILE__);

/**
 * Include the Lost Arcade class.
 */
require plugin_dir_path(LOST_ARCADE) . 'class-lost-arcade.php';
