<?php
/**
 * Bean's Layout Block section.
 */
namespace UIKIT3\Gutenberg\Blocks;

$content = <<<CONTENT

<!-- wp:image {"align":"full","sizeSlug":"large","enableLightbox":true} -->
    <figure class="wp-block-image alignfull size-large"><img src="http://via.placeholder.com/2880x1972?text=2880x1972" alt=""/></figure>
<!-- /wp:image -->

CONTENT;

return array(
    'type' => 'section',
    'key' => explode('.', basename(__FILE__))[0],  // Filename
    'name' => esc_html__('Full Image Width', 'tm-beans'),
    'content' => $content,
    'category' => [esc_html__('Images', 'tm-beans')],
    'keywords' => [
        esc_html__('images', 'tm-beans'),
        esc_html__('full width', 'tm-beans'),
    ],
    'image' => _get_plugin_url().'bean-layout-block/images/bow.png',
);

return $content;
