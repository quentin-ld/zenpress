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
    'title' => __('Clean up the admin bar', 'zenpress'),
    'description' => __(
        'Removes unnecessary items from the admin bar in both backend and frontend. Reduces clutter and simplifies the interface.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('user-interface', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
