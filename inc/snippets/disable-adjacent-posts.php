<?php
/**
 * Disable adjacent posts link tags in the header.
 *
 * Removes the rel="prev" and rel="next" link tags from the wp_head output,
 * which can slightly improve performance by reducing unnecessary HTML output.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

remove_action('wp_head', 'adjacent_posts_rel_link', 10);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
