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
    'description' => __('Removes REST API discovery links from the HTML head section. The REST API itself remains functional; only the link tags that advertise its URL are removed.', 'zenpress'),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
