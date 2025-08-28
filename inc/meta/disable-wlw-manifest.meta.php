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
    'title' => __('Disable the Windows Live Writer link', 'zenpress'),
    'description' => __('Removes the WLW manifest link from the head, which was only used by the deprecated Windows Live Writer app. Reduces unnecessary metadata and improves performance.', 'zenpress'),
    'category' => __('Performance 🚀', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
