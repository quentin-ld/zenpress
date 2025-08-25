<?php
/**
 * Disable XML-RPC and remove the RSD (Really Simple Discovery) link.
 *
 * Disables XML-RPC functionality, which is often targeted in brute force
 * login attempts or DDoS attacks. Also removes the RSD link from the HTML
 * head, reducing unnecessary exposure of WordPress setup details.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head', 'rsd_link');
