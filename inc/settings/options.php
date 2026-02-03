<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Registers zenpress_active_snippets and zenpress_admin_bar_enabled (REST + sanitize).
 */
add_action('init', 'zenpress_register_snippet_settings');
function zenpress_register_snippet_settings(): void {
    register_setting(
        'options',
        'zenpress_active_snippets',
        [
            'type' => 'array',
            'default' => [],
            'sanitize_callback' => 'zenpress_sanitize_snippets_option',
            'show_in_rest' => [
                'schema' => [
                    'type' => 'array',
                    'items' => ['type' => 'string'],
                ],
            ],
        ]
    );

    register_setting(
        'options',
        'zenpress_admin_bar_enabled',
        [
            'type' => 'boolean',
            'default' => false,
            'sanitize_callback' => 'zenpress_sanitize_admin_bar_enabled',
            'show_in_rest' => [
                'schema' => ['type' => 'boolean'],
            ],
        ]
    );
}

/**
 * Sanitizes zenpress_admin_bar_enabled to bool.
 */
function zenpress_sanitize_admin_bar_enabled(mixed $value): bool {
    return (bool) $value;
}
