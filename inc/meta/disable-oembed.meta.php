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
    'description' => __('Removes WordPress oEmbed features such as auto-discovery, REST API routes, TinyMCE integration, and the wp-embed script. Reduces API calls, improves performance, and limits unnecessary external requests.', 'zenpress'),
    'category' => __('Performance 🚀', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
