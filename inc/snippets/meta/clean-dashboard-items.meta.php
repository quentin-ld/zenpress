<?php
/**
 * Metadata for clean-dashboard-items.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Clean up the WordPress Dashboard', 'zenpress'),
    'description' => __(
        'Removes unnecessary widgets and ads widgets from the dashboard. Declutters the admin area and improves usability.',
        'zenpress'
    ),
    'category' => __('User interface 💻️', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
