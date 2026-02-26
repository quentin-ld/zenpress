<?php
/**
 * Metadata for disable-adjacent-posts.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable prev/next post links in head', 'zenpress'),
    'description' => __(
        'Removes rel="prev" and rel="next" tags from wp_head. Reduces unnecessary HTML output and slightly improves performance.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'ecommerce'],
];
