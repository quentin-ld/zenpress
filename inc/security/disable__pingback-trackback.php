<?php

/**
 * Disable pingback and trackback
 *
 * This function removes the X-Pingback header, Disable pingbacks and trackbacks
 * for new posts, and prevents self-pingbacks (where WordPress pings its own site).
 * This can help improve security and performance by preventing unnecessary requests
 * and reducing the risk of spam and DDoS attacks.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) die();

// Remove X-Pingback headers
add_filter('wp_headers', 'zenpress_remove_x_pingback');
function zenpress_remove_x_pingback($headers)
{
	unset($headers['X-Pingback']);
	return $headers;
}

// Disable pingbacks and trackbacks for new articles
add_action('after_setup_theme', 'zenpress_disable_pingback_and_trackback');
function zenpress_disable_pingback_and_trackback()
{
	update_option('default_ping_status', 'closed');
	update_option('default_pingback_flag', 0);
}

// Self Pingbacks
add_action('pre_ping', function (&$links) {
	$home = get_option('home');
	foreach ($links as $l => $link) {
		if (strpos($link, $home) === 0) {
			unset($links[$l]);
		}
	}
});
