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
    $directories[] = _get_plugin_directory() .'beans-layout-block/sections/';

    return $directories;
}





//    ddd($layout_components_directories);

//	atomic_blocks_register_layout_component(
//		[
//			'type'     => 'section',
//			'key'      => 'full-width-image',
//			'name'     => esc_html__( 'Full Image Width', 'atomic-blocks' ),
//			'content'  => include _get_plugin_directory().'lib/layouts/full-width-image.php',
//			'category' => [ esc_html__( 'Images', 'atomic-blocks' ) ],
//			'keywords' => [
//				esc_html__( 'business', 'atomic-blocks' ),
//				esc_html__( 'service', 'atomic-blocks' ),
//				esc_html__( 'product', 'atomic-blocks' ),
//			],
//			'image'    => 'https://atomicblocks.com/wp-content/uploads/2019/06/ab-layout-business-1.jpg',
//		]
//	);
//
//    atomic_blocks_register_layout_component(
//        [
//            'type'     => 'section',
//            'key'      => 'full-left-1-3-image-1-3-image-1-3-text',
//            'name'     => esc_html__( 'Full Left - Image Image Text ', 'atomic-blocks' ),
//            'content'  => include _get_plugin_directory().'lib/layouts/full-left-1-3-image-1-3-image-1-3-text.php',
//            'category' => [ esc_html__( '3 columns, 2 images full left', 'atomic-blocks' ) ],
//            'keywords' => [
//                esc_html__( 'business', 'atomic-blocks' ),
//                esc_html__( 'service', 'atomic-blocks' ),
//                esc_html__( 'product', 'atomic-blocks' ),
//            ],
//            'image'    => _get_plugin_url().'lib/layouts/images/full-left-1-3-image-1-3-image-1-3-text.png',
//        ]
//    );
//
//    atomic_blocks_register_layout_component(
//        [
//            'type'     => 'section',
//            'key'      => 'full-right-1-3-text-1-3-image-1-3-image',
//            'name'     => esc_html__( 'Full Right Text Image Image', 'atomic-blocks' ),
//            'content'  => include _get_plugin_directory().'lib/layouts/full-right-1-3-text-1-3-image-1-3-image.php',
//            'category' => [ esc_html__( '3 columns, 2 images full left', 'atomic-blocks' ) ],
//            'keywords' => [
//                esc_html__( 'business', 'atomic-blocks' ),
//                esc_html__( 'service', 'atomic-blocks' ),
//                esc_html__( 'product', 'atomic-blocks' ),
//            ],
//            'image'    => _get_plugin_url().'lib/layouts/images/full-left-1-3-image-1-3-image-1-3-text.png',
//        ]
//    );
//
//
//    atomic_blocks_register_layout_component(
//        [
//            'type'     => 'section',
//            'key'      => 'full-width-1-3-image-1-3-image-1-3-image',
//            'name'     => esc_html__( 'Full Width Image Image Image', 'atomic-blocks' ),
//            'content'  => include _get_plugin_directory().'lib/layouts/full-width-1-3-image-1-3-image-1-3-image.php',
//            'category' => [ esc_html__( '3 columns, 2 images full left', 'atomic-blocks' ) ],
//            'keywords' => [
//                esc_html__( 'business', 'atomic-blocks' ),
//                esc_html__( 'service', 'atomic-blocks' ),
//                esc_html__( 'product', 'atomic-blocks' ),
//            ],
//            'image'    => _get_plugin_url().'lib/layouts/images/full-left-1-3-image-1-3-image-1-3-text.png',
//        ]
//    );
//
//
//    atomic_blocks_register_layout_component(
//        [
//            'type'     => 'layout',
//            'key'      => 'layout-lda-project',
//            'name'     => esc_html__( 'LDA PRoject', 'atomic-blocks' ),
//            'content'  => include _get_plugin_directory().'lib/layouts/layout-lda-project.php',
//            'category' => [ esc_html__( '3 columns, 2 images full left', 'atomic-blocks' ) ],
//            'keywords' => [
//                esc_html__( 'business', 'atomic-blocks' ),
//                esc_html__( 'service', 'atomic-blocks' ),
//                esc_html__( 'product', 'atomic-blocks' ),
//            ],
//            'image'    => _get_plugin_url().'lib/layouts/images/full-left-1-3-image-1-3-image-1-3-text.png',
//        ]
//    );
