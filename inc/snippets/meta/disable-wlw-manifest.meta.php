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
    'description' => __('Removes the Windows Live Writer manifest link from the HTML head. This link was used by the deprecated Windows Live Writer desktop application.', 'zenpress'),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
