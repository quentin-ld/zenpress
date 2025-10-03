<?php
/**
 * Metadata for disable-application-passwords.php
 *
 * @since 2.0.3
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable application passwords', 'zenpress'),
    'description' => __(
        'Disables WordPress application passwords for all users, improving security. Only disable if API access is not needed.',
        'zenpress'
    ),
    'category' => __('Security 🔒️', 'zenpress'),
    'weight' => 0,
    'preset' => [''],
];

