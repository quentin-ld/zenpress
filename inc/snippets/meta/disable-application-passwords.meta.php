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
        'Disables WordPress application passwords for all users. Improves security; do not enable if you need API or app-based authentication (e.g. mobile apps, REST clients).',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];

