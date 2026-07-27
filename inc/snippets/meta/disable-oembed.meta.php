<?php
/**
 * Metadata for disable-oembed.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable oEmbed', 'zenpress'),
    'description' => __('Removes WordPress oEmbed features: auto-discovery links, REST API route, TinyMCE integration, rewrite rules, and the wp-embed script. Embedded content from external sites will no longer display inline.', 'zenpress'),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
