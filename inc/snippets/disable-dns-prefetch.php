<?php

/**
* Title : Disable DNS prefetch
* Category : Performance
* Description : Removes DNS prefetch resource hints from the wp_head, which can reduce unnecessary DNS lookups for some websites.
*
* @return void
* @since 1.0.0
*/

if (!defined('ABSPATH')) {
    die();
}

$snippet_metadata = [
    'title' => __('Disable DNS prefetch', 'zenpress'),
    'description' => __('Removes DNS prefetch resource hints from the wp_head, which can reduce unnecessary DNS lookups for some websites.', 'zenpress'),
    'category' => __('Performance', 'zenpress')
];

remove_action('wp_head', 'wp_resource_hints', 2);
