<?php

if (!defined('ABSPATH')) {
    exit;
}

if (!is_admin()) {
    // Block enumeration via query string (?author=1).
    $zenpress_query_string = isset($_SERVER['QUERY_STRING']) ? sanitize_text_field(wp_unslash($_SERVER['QUERY_STRING'])) : '';
    if (preg_match('/author=([0-9]+)/i', $zenpress_query_string)) {
        wp_die(esc_html__('Access denied.', 'zenpress'), '', ['response' => 403]);
    }

    // Block enumeration via permalink-style URLs.
    add_filter(
        'redirect_canonical',
        static function (string|false $redirect, string $request): string|false {
            if (preg_match('/\?author=([0-9]+)(\/*)/i', sanitize_text_field(wp_unslash($request)))) {
                wp_die(esc_html__('Access denied.', 'zenpress'), '', ['response' => 403]);
            }

            return $redirect;
        },
        10,
        2
    );
}
