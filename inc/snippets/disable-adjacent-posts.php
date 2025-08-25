<?php

/**
 * Title : Disable adjacent posts link tags in the header
 * Category : Performance
 * Description : Removes the rel="prev" and rel="next" link tags from the wp_head output, which can improve performance by reducing unnecessary HTML in the header.
 *
 * @return void
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

$snippet_metadata = [
    'title' => __('Disable adjacent posts link tags in the header', 'zenpress'),
    'description' => __('Removes the rel="prev" and rel="next" link tags from the wp_head output, which can improve performance by reducing unnecessary HTML in the header.', 'zenpress'),
    'category' => __('Performance', 'zenpress')
];

remove_action('wp_head', 'adjacent_posts_rel_link', 10);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
