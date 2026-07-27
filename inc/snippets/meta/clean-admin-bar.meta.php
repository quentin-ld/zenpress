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
        'Removes the new content, comments, updates, and Yoast SEO menu items from the admin bar. The WordPress logo menu and appearance menu are also removed on the front end.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('user-interface', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
