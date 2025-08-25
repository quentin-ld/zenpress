<?php
/**
 * Remove REST API links from the <head>.
 *
 * Removes REST API discovery links from the <head> section of the site.
 * Improves performance and reduces unnecessary HTML output,
 * while keeping REST API functionality available for use.
 *
 * @since 1.0.4
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

remove_action('wp_head', 'rest_output_link_wp_head', 10);
