<?php

/*
Snippet Name: Clean admin bar
Version: 1.0.0
Tag(s): Performance
Description:
*/

if (!defined('ABSPATH')) die();

// removes redundant items from adminbar
add_action ( 'admin_bar_menu', function ($wp_admin_bar) {
	global $wp_admin_bar;

	/**
	 * * BACKEND **
	 */
	// remove WP logo and subsequent drop-down menu
	$wp_admin_bar->remove_node ( 'wp-logo' );

	// remove View Site text
	$wp_admin_bar->remove_node ( 'view-site' );

	// remove "+ New" drop-down menu
	$wp_admin_bar->remove_node ( 'new-content' );

	// remove Comments
	$wp_admin_bar->remove_node ( 'comments' );

	// remove plugin updates count
	$wp_admin_bar->remove_node ( 'updates' );

	/**
	 * * FRONTEND **
	 */
	// remove Dashboard link
	$wp_admin_bar->remove_node ( 'dashboard' );

	// remove Themes, Widgets, Menus, Header links
	$wp_admin_bar->remove_node ( 'appearance' );
}, 99 );
