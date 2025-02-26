<?php

/**
 * Disables Dashicons for non-logged-in users
 *
 * This function prevents WordPress from loading the Dashicons CSS for visitors
 * who are not logged in, which can improve frontend performance.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) die();

add_action('wp_enqueue_scripts', 'zenpress_disable_dashicons');
function zenpress_disable_dashicons()
{
	if (!is_user_logged_in()) {
		wp_dequeue_style('dashicons');
		wp_deregister_style('dashicons');
	}
}
