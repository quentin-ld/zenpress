<?php
/**
 * Metadata for disable-shortlink.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable shortlink', 'zenpress'),
    'description' => __('Removes the shortlink tag from the HTML head and the Link HTTP header. Shortlinks (example.com/?p=123) are no longer advertised.', 'zenpress'),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
