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
    'title' => __('Disable REST API for visitors not logged into WordPress', 'zenpress'),
    'description' => __(
        'Restricts the WP REST API to logged-in users only; unauthenticated requests receive an error. Bypass filters (zenpress_disable_wp_rest_api_post_var, zenpress_disable_wp_rest_api_server_var) allow specific integrations (e.g. webhooks); use non-guessable values only.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];
