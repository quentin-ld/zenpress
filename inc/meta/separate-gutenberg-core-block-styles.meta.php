<?php
/**
 * Metadata for "Enable separate loading of core block styles".
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Enable separate loading of core block styles', 'zenpress'),
    'description' => __('Forces WordPress to load core block styles separately, improving performance by only loading the styles required for the blocks used on a page.', 'zenpress'),
    'category' => __('Performance 🚀', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
