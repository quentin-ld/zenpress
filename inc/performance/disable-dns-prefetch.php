<?php

/**
 * Disable DNS prefetch
 *
 * This function removes DNS prefetch resource hints from the wp_head,
 * which can reduce unnecessary DNS lookups for some websites.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

remove_action('wp_head', 'wp_resource_hints', 2);
