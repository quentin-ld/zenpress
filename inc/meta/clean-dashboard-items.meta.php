<?php
/**
 * Metadata for the "Remove redundant items from the WordPress Dashboard" snippet.
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Remove redundant items from the WordPress Dashboard', 'zenpress'),
    'description' => __(
        'Removes various default and plugin-related widgets from the WordPress dashboard, including the Quick Draft widget, Incoming Links, and the Welcome Panel. This helps declutter the Dashboard, improving both performance and usability. The Dashboard should display important information about your website, not plugin advertising.',
        'zenpress'
    ),
    'category' => __('User interface 💻️', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
