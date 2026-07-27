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
    'title' => __('Limit REST API to logged-in users', 'zenpress'),
    'description' => __(
        'Restricts REST API access to logged-in users only. Unauthenticated visitors receive an error response. This snippet provides three filters for advanced use: zenpress_disable_wp_rest_api_post_var and zenpress_disable_wp_rest_api_server_var allow specific POST keys or request paths to bypass the restriction (for webhooks or third-party integrations), and zenpress_disable_wp_rest_api_error customizes the error message. Use the bypass filters with values that are secret or not guessable, such as a random token passed via POST.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];
