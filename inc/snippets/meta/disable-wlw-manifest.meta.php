<?php
/**
 * Metadata for disable-wlw-manifest.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable Windows Live Writer link', 'zenpress'),
    'description' => __('Removes the old Windows Live Writer link from the page. Safe to disable.', 'zenpress'),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
