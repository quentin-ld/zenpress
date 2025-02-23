<?php

/*
Snippet Name: Disable Pingback & Trackback
Version: 1.0.0
Tag(s): Security, Performance
Description: 
*/

if (!defined('ABSPATH')) die();

// Remove X-Pingback headers
add_filter('wp_headers', 'ripperdoc_remove_x_pingback');
function ripperdoc_remove_x_pingback($headers) {
    unset($headers['X-Pingback']);
    return $headers;
}

// Disable pingbacks and trackbacks for new articles
add_action('after_setup_theme', 'ripperdoc_disable_pingback_and_trackback');
function ripperdoc_disable_pingback_and_trackback() {
    update_option('default_ping_status', 'closed');
    update_option('default_pingback_flag', 0);
}

// Self Pingbacks
add_action ( 'pre_ping', function (&$links) {
    $home = get_option ( 'home' );
    foreach ( $links as $l => $link ) {
        if (strpos ( $link, $home ) === 0) {
            unset ( $links [$l] );
        }
    }
} );