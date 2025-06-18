<?php

/**
 * Blocks user enumeration via author query string
 *
 * This function prevents the user enumeration that can be exploited by attackers
 * to gather information about users on the WordPress site. It blocks both
 * the default and permalink-based user enumeration URLs that reveal user IDs
 * through author query strings, improving security.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

if (!is_admin()) {
    // Default URL format
    if (isset($_SERVER['QUERY_STRING']) && preg_match('/author=([0-9]*)/i', sanitize_text_field(wp_unslash($_SERVER['QUERY_STRING'])))) {
        die();
    }
    // Block permalink URL format
    add_filter('redirect_canonical', function ($redirect, $request) {
        if (preg_match('/\?author=([0-9]*)(\/*)/i', sanitize_text_field(wp_unslash($request)))) {
            die();
        }
        else {
            return $redirect;
        }
    }, 10, 2);
}
