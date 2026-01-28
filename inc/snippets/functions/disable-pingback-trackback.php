<?php

if (!defined('ABSPATH')) {
    exit;
}

// Remove X-Pingback header from HTTP responses.
add_filter('wp_headers', static function (array $headers): array {
    unset($headers['X-Pingback']);

    return $headers;
});

// Disable pingbacks and trackbacks for new posts.
add_action('after_setup_theme', static function (): void {
    update_option('default_ping_status', 'closed');
    update_option('default_pingback_flag', 0);
});

// Prevent self-pingbacks.
add_action('pre_ping', static function (array &$links): void {
    $home = get_option('home');
    foreach ($links as $l => $link) {
        if (str_starts_with($link, $home)) {
            unset($links[$l]);
        }
    }
});
