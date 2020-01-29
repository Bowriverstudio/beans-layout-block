<?php
/**
 * Bean's Layout Block section.
 */
namespace Beans\Layout\Block;

$bow_url = _get_plugin_url().'beans-layout-block/images/bow.png';

$content = <<<CONTENT

<!-- wp:image {"align":"full","sizeSlug":"large"} -->
    <figure class="wp-block-image alignfull size-large"><img src="$bow_url" alt=""/></figure>
<!-- /wp:image -->

CONTENT;

return array(
    'type' => 'section',
    'key' => explode('.', basename(__FILE__))[0],  // Filename
    'name' => esc_html__('SAMPLE Full Image Width of Bow', 'tm-beans'),
    'content' => $content,
    'category' => [esc_html__('Images', 'tm-beans')],
    'keywords' => [
        esc_html__('images', 'tm-beans'),
        esc_html__('full width', 'tm-beans'),
    ],
    'image' => _get_plugin_url().'beans-layout-block/images/bow.png',
);

return $content;
