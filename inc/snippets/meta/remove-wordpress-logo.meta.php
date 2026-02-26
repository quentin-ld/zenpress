<?php
/**
 * Metadata for remove-wordpress-logo.php
 *
 * @since 2.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Remove WordPress logo from admin bar', 'zenpress'),
    'description' => __(
        'Removes the WordPress logo and its menu from the admin bar.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('user-interface', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];
