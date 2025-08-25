<?php
/**
 * Disable pingback and trackback.
 *
 * Removes the X-Pingback header, disables pingbacks and trackbacks on new posts,
 * and prevents self-pingbacks (when WordPress pings its own site). This helps
 * improve both security and performance by reducing unnecessary requests and
 * limiting spam/DDoS attack vectors.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

/**
 * Remove X-Pingback header from HTTP responses.
 */
add_filter('wp_headers', function ($headers) {
    unset($headers['X-Pingback']);

    return $headers;
});

/**
 * Disable pingbacks and trackbacks for new posts.
 */
add_action('after_setup_theme', function () {
    update_option('default_ping_status', 'closed');
    update_option('default_pingback_flag', 0);
});

/**
 * Prevent self-pingbacks.
 */
add_action('pre_ping', function (&$links) {
    $home = get_option('home');
    foreach ($links as $l => $link) {
        if (strpos($link, $home) === 0) {
            unset($links[$l]);
        }
    }
});
