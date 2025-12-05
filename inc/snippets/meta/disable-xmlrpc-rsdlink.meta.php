<?php
/**
 * Metadata for disable-xmlrpc-rsdlink.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable XML-RPC and remove RSD link', 'zenpress'),
    'description' => __('Disables XML-RPC (often targeted by brute force or DDoS attacks) and removes the RSD link from the HTML head to reduce exposure.', 'zenpress'),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
