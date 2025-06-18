<?php

/**
 * Remove REST API Links from the <head>
 *
 * This function removes the links to the REST API from the <head> section
 * of the site. This is useful for improving performance and reducing
 * unnecessary output in the HTML source, while still keeping the REST API
 * functionality available for use.
 *
 * @return void
 *
 * @since 1.0.4
 */

if (!defined('ABSPATH')) {
    die();
}

remove_action('wp_head', 'rest_output_link_wp_head', 10);
