<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register option to store active snippets.
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
                    'items' => ['type' => 'string']
                ]
            ]
        ]
    );
}
