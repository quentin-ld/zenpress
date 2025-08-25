<?php
/**
 * Disable the Windows Live Writer (WLW) manifest link.
 *
 * Removes the WLW manifest link from the <head> section of WordPress pages.
 * The WLW manifest is used by the Windows Live Writer application to connect
 * to WordPress. Removing it reduces unnecessary metadata in the HTML head.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

remove_action('wp_head', 'wlwmanifest_link');
