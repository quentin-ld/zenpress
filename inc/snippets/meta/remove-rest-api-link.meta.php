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
    'title' => __('Remove REST API links from page source', 'zenpress'),
    'description' => __('Prevents WordPress from adding REST API discovery links to the head section of the site. Reduces unnecessary HTML output and slightly improves performance while keeping REST API functionality available.', 'zenpress'),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
