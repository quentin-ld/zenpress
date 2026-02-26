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
        'Turns off application passwords for everyone. Turn this off if you use mobile apps or other apps that log in to WordPress.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];

