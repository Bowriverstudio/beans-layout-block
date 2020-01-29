<?php
/**
 * Register layouts and sections for the Layout block.
 *
 * @package AtomicBlocks
 */

namespace Beans\Layout\Block;

add_action( 'plugins_loaded', __NAMESPACE__ . '\register_components_sample', 10 );

/**
 * Registers section and layout components.
 *
 * @since 2.0
 */
function register_components_sample() {
    add_filter('layout_components_directories', __NAMESPACE__ . '\filter_layout_components_directories' );
}


function filter_layout_components_directories($directories){
    $directories[] = _get_plugin_directory() .'config/beans-layout-block/sections/';

    return $directories;
}
