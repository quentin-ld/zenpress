<?php

/**
 * Disable adjacent posts link tags in the header
 *
 * This function removes the rel="prev" and rel="next" link tags from the wp_head
 * output, which can improve performance by reducing unnecessary HTML in the header.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

remove_action('wp_head', 'adjacent_posts_rel_link', 10);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
