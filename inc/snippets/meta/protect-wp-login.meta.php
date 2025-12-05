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
    'description' => __('Removes detailed login error messages and limits failed login attempts per IP address. Blocks further attempts for a set duration after too many failures. Improves security by mitigating brute force attacks.', 'zenpress'),
    'category' => __('tools', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
