<?php

/**
 * Disable XML-RPC and removes the RSD (Really Simple Discovery) link
 *
 * This function Disable XML-RPC functionality, which is commonly targeted
 * for attacks such as brute force login attempts or DDoS. It also removes the
 * RSD link from the HTML head, which can provide unnecessary exposure of
 * your WordPress setup to external services.
 *
 * @return void
 *
 * @since 1.0.0
 */
if (!defined('ABSPATH')) die();

add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head', 'rsd_link');
