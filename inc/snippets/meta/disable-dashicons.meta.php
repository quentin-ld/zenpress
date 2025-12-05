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
    'title' => __('Disable dashicons', 'zenpress'),
    'description' => __(
        'Prevents WordPress from loading the Dashicons CSS for visitors who are not logged in. Improves frontend performance by reducing unnecessary styles.',
        'zenpress'
    ),
    'category' => __(' core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
