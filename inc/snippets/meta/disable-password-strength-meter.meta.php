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
        'Removes the password strength meter script and styles from the login and profile pages. Users will not see the password strength indicator when creating or changing their password.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
