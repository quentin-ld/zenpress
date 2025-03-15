<?php

/**
 * Disable oEmbed
 *
 * This function removes all features related to oEmbed, including
 * auto-discovery, embedding of external content, and the wp-embed script,
 * to improve site performance by eliminating unnecessary API calls and scripts.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

add_action('init', 'zenpress_disable_oembed');
function zenpress_disable_oembed() {
    // Remove oEmbed from query vars
    global $wp;
    $wp->public_query_vars = array_diff($wp->public_query_vars, [
        'embed'
    ]);

    // Remove REST API endpoint
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');

    // Remove oEmbed-specific JavaScript from the front-end
    add_filter('embed_oembed_discover', '__return_false');

    // Remove filter of the oEmbed result before any HTTP requests are made
    remove_filter('pre_oembed_result', 'wp_filter_pre_oembed_result', 10);

    // Remove the wpembed TinyMCE plugin
    add_filter('tiny_mce_plugins', function ($plugins) {
        return array_diff($plugins, [
            'wpembed'
        ]);
    });

    // Remove embed-related rewrite rules
    add_filter('rewrite_rules_array', function ($rules) {
        foreach ($rules as $rule => $rewrite) {
            if (strpos($rewrite, 'embed=true') !== false) {
                unset($rules[$rule]);
            }
        }

        return $rules;
    });

    // De-register the wp-embed script
    if (!is_admin()) {
        wp_deregister_script('wp-embed');
    }
}
