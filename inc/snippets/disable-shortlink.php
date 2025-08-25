<?php
/**
 * Disable WordPress shortlink generation.
 *
 * Removes shortlink functionality by disabling both the header
 * and template redirect actions that output the shortlink.
 * This can improve performance slightly by reducing unnecessary
 * HTTP headers and meta tags.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('template_redirect', 'wp_shortlink_header', 11);
