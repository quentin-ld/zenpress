<?php
/**
 * Metadata for disable-pingback-trackback.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable pingback and trackback', 'zenpress'),
    'description' => __('Removes the X-Pingback header, disables pingbacks and trackbacks on new posts, and prevents self-pingbacks. reduces spam, blocks potential DDoS vectors, and slightly improves performance by avoiding useless requests.', 'zenpress'),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
