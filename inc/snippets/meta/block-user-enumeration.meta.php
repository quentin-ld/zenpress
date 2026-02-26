<?php
/**
 * Metadata for block-user-enumeration.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Block user enumeration', 'zenpress'),
    'description' => __(
        'Stops visitors from discovering usernames via author URLs. Reduces brute-force risk.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
