<?php

/*
Snippet Name: Disable oembed
Version: 1.0.0
Tag(s): Performance
Description:
*/

if (!defined('ABSPATH')) die();

global $wp;
$wp->public_query_vars = array_diff ( $wp->public_query_vars, array (
		'embed'
) );
remove_action ( 'rest_api_init', 'wp_oembed_register_route' );
remove_filter ( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
remove_action ( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action ( 'wp_head', 'wp_oembed_add_host_js' );
remove_filter ( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10 );
add_filter ( 'embed_oembed_discover', '__return_false' );
add_filter ( 'tiny_mce_plugins', function ($plugins) {
	return array_diff ( $plugins, array (
			'wpembed'
	) );
} );
add_filter ( 'rewrite_rules_array', function ($rules) {
	foreach ( $rules as $rule => $rewrite ) {
		if (strpos ( $rewrite, 'embed=true' ) !== false) {
			unset ( $rules [$rule] );
		}
	}
	return $rules;
} );
