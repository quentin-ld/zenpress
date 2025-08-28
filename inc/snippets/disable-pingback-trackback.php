<?php

if (!defined('ABSPATH')) {
    exit;
}

// Remove X-Pingback header from HTTP responses.
add_filter('wp_headers', function ($headers) {
    unset($headers['X-Pingback']);

    return $headers;
});

// Disable pingbacks and trackbacks for new posts.
add_action('after_setup_theme', function () {
    update_option('default_ping_status', 'closed');
    update_option('default_pingback_flag', 0);
});

// Prevent self-pingbacks.
add_action('pre_ping', function (&$links) {
    $home = get_option('home');
    foreach ($links as $l => $link) {
        if (strpos($link, $home) === 0) {
            unset($links[$l]);
        }
    }
});
