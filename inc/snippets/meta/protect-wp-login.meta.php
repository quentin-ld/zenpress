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
    'description' => __('Hides detailed login error messages and limits failed login attempts per IP address. After 5 failed attempts, the IP is blocked for 5 minutes.', 'zenpress'),
    'category' => __('tools', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
