<?php

if (!defined('ABSPATH')) {
    exit;
}

if (!is_admin()) {
    // Block enumeration via query string (?author=1).
    if (
        isset($_SERVER['QUERY_STRING']) &&
        preg_match('/author=([0-9]+)/i', sanitize_text_field(wp_unslash($_SERVER['QUERY_STRING'])))
    ) {
        wp_die(esc_html__('Access denied.', 'zenpress'), '', ['response' => 403]);
    }

    // Block enumeration via permalink-style URLs.
    add_filter(
        'redirect_canonical',
        static function ($redirect, $request) {
            if (preg_match('/\?author=([0-9]+)(\/*)/i', sanitize_text_field(wp_unslash($request)))) {
                wp_die(esc_html__('Access denied.', 'zenpress'), '', ['response' => 403]);
            }

            return $redirect;
        },
        10,
        2
    );
}
