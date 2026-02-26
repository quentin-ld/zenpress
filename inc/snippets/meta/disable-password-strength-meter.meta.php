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
    'title' => __('Disable password strength meter', 'zenpress'),
    'description' => __(
        'Stops the password strength meter from loading on login and profile pages. Saves about 400KB. Users won\'t see how strong their password is.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
