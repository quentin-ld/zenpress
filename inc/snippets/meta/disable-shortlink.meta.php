<?php
/**
 * Metadata for disable-shortlink.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable WordPress shortlink', 'zenpress'),
    'description' => __('Removes shortlink functionality from both the HTML head and HTTP headers. Reduces unnecessary output, improves performance and SEO clarity.', 'zenpress'),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
