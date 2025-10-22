<?php

/**
 * Metadata for disable-rest-api.php
 *
 * @since 2.0.4
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable REST API', 'zenpress'),
    'description' => __(
        'Disable the WP REST API for visitors not logged into WordPress.',
        'zenpress'
    ),
    'category' => __('Security 🔒️', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];
