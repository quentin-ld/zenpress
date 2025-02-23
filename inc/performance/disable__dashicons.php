<?php

/*
Snippet Name: Disable Dashicons
Version: 1.0.0
Tag(s): Performance
Description:
*/

if (!defined('ABSPATH')) die();

// Dashicons
if ( ! is_user_logged_in ()) {
	wp_dequeue_style ( 'dashicons' );
	wp_deregister_style ( 'dashicons' );
}
