<?php
/**
 * Metadata for "Protect the wp-login form from brute force attacks".
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Protect the wp-login form from brute force attacks', 'zenpress'),
    'description' => __('Adds brute force protection to the WordPress login form by hiding detailed error messages, limiting failed login attempts per IP, and temporarily blocking further attempts after repeated failures.', 'zenpress'),
    'category' => __('Security', 'zenpress'),
];
