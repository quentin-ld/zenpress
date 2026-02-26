<?php
/**
 * Metadata for protect-wp-login.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Protect login from brute force', 'zenpress'),
    'description' => __('Hides detailed login errors and limits failed attempts per IP. After 5 failed tries, blocks that IP for 5 minutes.', 'zenpress'),
    'category' => __('tools', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
