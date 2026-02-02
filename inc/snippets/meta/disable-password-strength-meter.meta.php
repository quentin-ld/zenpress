<?php
/**
 * Metadata for disable-password-strength-meter.php
 *
 * @since 2.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable Password Strength Meter', 'zenpress'),
    'description' => __(
        'Prevents the password strength meter and zxcvbn scripts from loading on profile, login, and similar pages. Saves roughly 400KB and reduces script parsing. Users will not see the strength indicator when choosing passwords.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
