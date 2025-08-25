<?php

/**
* Title : Disable XML-RPC and removes the RSD (Really Simple Discovery) link
* Category : Performance
* Description : Disable XML-RPC functionality, which is commonly targeted for attacks such as brute force login attempts or DDoS. It also removes the RSD link from the HTML head, which can provide unnecessary exposure of your WordPress setup to external services.
*
* @return void
* @since 1.0.0
*/

if (!defined('ABSPATH')) {
    die();
}

$snippet_metadata = [
    'title' => __('Disable XML-RPC and removes the RSD (Really Simple Discovery) link', 'zenpress'),
    'description' => __('Disable XML-RPC functionality, which is commonly targeted for attacks such as brute force login attempts or DDoS. It also removes the RSD link from the HTML head, which can provide unnecessary exposure of your WordPress setup to external services.', 'zenpress'),
    'category' => __('Performance', 'zenpress')
];

add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head', 'rsd_link');
