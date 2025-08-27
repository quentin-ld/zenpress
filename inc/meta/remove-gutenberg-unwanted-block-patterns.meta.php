<?php
/**
 * Metadata for "Disable unwanted default block patterns in Gutenberg editor".
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable unwanted default block patterns in Gutenberg editor', 'zenpress'),
    'description' => __('Disables the loading of remote block patterns and removes the default core block patterns in WordPress, improving performance by preventing unnecessary block patterns from being loaded.', 'zenpress'),
    'category' => __('Performance 🚀', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
