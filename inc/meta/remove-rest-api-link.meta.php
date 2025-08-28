<?php
/**
 * Metadata for remove-rest-api-link.php
 *
 * @since 1.0.4
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Remove REST API links', 'zenpress'),
    'description' => __('Prevents WordPress from adding REST API discovery links to the head section of the site. reduces unnecessary HTML output and slightly improves performance while keeping REST API functionality available.', 'zenpress'),
    'category' => __('Performance 🚀', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
