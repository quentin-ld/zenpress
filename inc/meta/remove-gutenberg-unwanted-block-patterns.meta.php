<?php
/**
 * Metadata for remove-gutenberg-unwanted-block-patterns.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Remove WordPress default remote block patterns', 'zenpress'),
    'description' => __('Prevents WordPress from loading remote block patterns and removes the built-in core block patterns. Reduces editor clutter and improves performance by avoiding unnecessary data loading.', 'zenpress'),
    'category' => __('Performance 🚀', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
