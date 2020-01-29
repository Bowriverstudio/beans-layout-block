<?php
/**
 * Register layouts and sections for the Layout block.
 *
 * @package AtomicBlocks
 */

namespace Beans\Layout\Block;


add_action( 'plugins_loaded', __NAMESPACE__ . '\register_components', 20 );
/**
 * Registers section and layout components defined.
 *
 * @since 2.0
 */
function register_components() {
    $layout_components_directories = apply_filters('layout_components_directories', array());
    if( $layout_components_directories ){
        foreach( $layout_components_directories as $directory ){
            if( file_exists($directory) ){
                $files = array_slice(scandir($directory), 2);
                $data = array();
                foreach ($files as $file) {
                    $_file = $directory . '/' . $file;
                    list($slug, $extension) = explode('.', $file) ;
                    if (is_readable($_file)) {
                        $data = require $_file;
                    }
                    atomic_blocks_register_layout_component($data);
                }
            }
        }
    }
}



