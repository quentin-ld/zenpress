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
    'title' => __('Protect the wp-login form from brute force attacks', 'zenpress'),
    'description' => __('Removes detailed login error messages and limits failed login attempts per IP. Blocks further attempts for 5 minutes after 5 failed tries. Mitigates brute-force attacks.', 'zenpress'),
    'category' => __('tools', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
