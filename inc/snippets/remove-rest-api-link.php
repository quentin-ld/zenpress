<?php

/**
* Title : Remove REST API Links from the <head>
* Category : Performance
* Description : Removes the links to the REST API from the <head> section of the site. This is useful for improving performance and reducing unnecessary output in the HTML source, while still keeping the REST API functionality available for use.
*
* @return void
* @since 1.0.4
*/

if (!defined('ABSPATH')) {
    die();
}

$snippet_metadata = [
    'title' => __('Remove REST API Links from the <head>', 'zenpress'),
    'description' => __('Removes the links to the REST API from the <head> section of the site. This is useful for improving performance and reducing unnecessary output in the HTML source, while still keeping the REST API functionality available for use.', 'zenpress'),
    'category' => __('Performance', 'zenpress')
];

remove_action('wp_head', 'rest_output_link_wp_head', 10);
