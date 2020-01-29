<?php
/**
 * Beans\Layout\Block
 *
 * @package      Beans\Layout\Block
 * @author       Maurice Tadros, Yaidel Ferralize, Disnel Rodriguez
 * @license      GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:       Bean Layout Block
 * Plugin URI:        na
 * Description:       This plugin sim
 * Version:           1.0.0
 * Author:            Maurice Tadros, Yaidel Ferralize, Disnel Rodriguez
 * Author URI:        https://bowriverstudio.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: na
 * Requires PHP:      7.1
 * Requires WP:       5.3
 */


namespace Beans\Layout\Block;

if (!defined('ABSPATH')) {
    exit('Hello, Hello, Hello, what\'s going on here then?');
}

/**
 * Gets this plugin's absolute directory path.
 *
 * @since  1.0.0
 * @ignore
 * @access private
 *
 * @return string
 */
function _get_plugin_directory() {
    return wp_normalize_path( trailingslashit(dirname( __FILE__ )));
}

/**
 * Gets this plugin's URL.
 *
 * @since  1.0.0
 * @ignore
 * @access private
 *
 * @return string
 */
function _get_plugin_url() {
    static $plugin_url;

    if ( empty( $plugin_url ) ) {
        $plugin_url = plugins_url( null, __FILE__ ) .'/';
    }

    return $plugin_url;
}

// Enqueue JS and CSS.
 include __DIR__ . '/lib/register-scripts.php';


require_once __DIR__ . '/lib/layout-functions.php';
require_once __DIR__ . '/lib/class-component-registry.php';
require_once __DIR__ . '/lib/register-layout-components.php';

/**
 * REST API Endpoints for Layouts.
 */
require_once __DIR__ . '/lib/layout-endpoints.php';


//Sample uncomment for testing only.
//require_once __DIR__ . '/config/beans-layout-block/register-layout-components.php';
