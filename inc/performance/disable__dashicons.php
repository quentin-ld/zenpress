<?php

/*
Snippet Name: Disable Dashicons
Version: 1.0.0
Tag(s): Performance
Description:
*/

if (!defined('ABSPATH')) die();

// Dashicons
add_action('wp_enqueue_scripts', 'ripperdoc_disabledashicons');
function ripperdoc_disabledashicons()
{
	if (!is_user_logged_in()) {
		wp_dequeue_style('dashicons');
		wp_deregister_style('dashicons');
	}
}
