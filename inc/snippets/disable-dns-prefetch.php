<?php
/**
 * Disable DNS prefetch.
 *
 * Removes DNS prefetch resource hints from the <head> output,
 * which can reduce unnecessary DNS lookups for some websites.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

remove_action('wp_head', 'wp_resource_hints', 2);
