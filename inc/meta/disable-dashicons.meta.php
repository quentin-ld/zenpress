<?php
/**
 * Metadata for the "Disable Dashicons for non-logged-in users" snippet.
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable Dashicons for non-logged-in users', 'zenpress'),
    'description' => __(
        'Prevents WordPress from loading the Dashicons CSS for visitors who are not logged in, which can improve frontend performance.',
        'zenpress'
    ),
    'category' => __('Performance 🚀', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
