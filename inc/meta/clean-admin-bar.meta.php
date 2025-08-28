<?php
/**
 * Metadata for clean-admin-bar.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Clean up the WordPress admin bar', 'zenpress'),
    'description' => __(
        'Removes unnecessary items from the admin bar in both backend and frontend. Reduces clutter and simplifies the interface.',
        'zenpress'
    ),
    'category' => __('User interface 💻️', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
