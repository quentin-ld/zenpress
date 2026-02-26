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
    'title' => __('Clean up the Dashboard', 'zenpress'),
    'description' => __(
        'Removes unnecessary and promotional widgets from the Dashboard.',
        'zenpress'
    ),
    'category' => __('ads-blocker', 'zenpress'),
    'subcategory' => __('user-interface', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
