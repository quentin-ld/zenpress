<?php
/**
 * Metadata for disable-emoji-scripts.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable WordPress emoji scripts and styles', 'zenpress'),
    'description' => __(
        'Removes emoji scripts, styles, and filters from frontend, backend, feeds, emails, and TinyMCE. Reduces unnecessary assets and improves performance.',
        'zenpress'
    ),
    'category' => __(' core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
