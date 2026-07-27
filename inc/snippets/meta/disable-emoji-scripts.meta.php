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
        'Removes emoji detection script, styles, and filters from the front end, back end, feeds, emails, and TinyMCE. Reduces the number of assets loaded on each page.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
