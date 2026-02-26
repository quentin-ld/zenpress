<?php
/**
 * Metadata for the disable-dashicons.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable Dashicons (admin icons)', 'zenpress'),
    'description' => __(
        'Stops Dashicons (admin icons) from loading for visitors. Logged-in users still see them.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
