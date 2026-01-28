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
    'title' => __('Remove WordPress logo', 'zenpress'),
    'description' => __(
        'Removes the WordPress logo and its dropdown from the admin bar. Cleans up the interface for a more neutral or branded look.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('user-interface', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];
