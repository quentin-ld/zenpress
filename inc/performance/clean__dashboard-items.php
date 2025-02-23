<?php

/*
Snippet Name: Remove Dashboard Items
Version: 1.0.0
Tag(s): Performance
Description:
*/

if (!defined('ABSPATH')) die();

// Clean Dashboard
add_action ( 'wp_dashboard_setup', function () {
	remove_meta_box ( 'dashboard_quick_press', 'dashboard', 'side' ); // Quick Press widget
	remove_meta_box ( 'dashboard_recent_drafts', 'dashboard', 'side' ); // Recent Drafts
	remove_meta_box ( 'dashboard_primary', 'dashboard', 'side' ); // WordPress.com Blog
	remove_meta_box ( 'dashboard_secondary', 'dashboard', 'side' ); // Other WordPress News
	remove_meta_box ( 'dashboard_incoming_links', 'dashboard', 'normal' ); // Incoming Links
	remove_meta_box ( 'dashboard_plugins', 'dashboard', 'normal' ); // Plugins
	remove_meta_box ( 'dashboard_right_now', 'dashboard', 'normal' ); // Right Now
	// remove_meta_box ( 'dashboard_activity', 'dashboard', 'normal' ); // Activity
	// remove_meta_box ( 'dashboard_site_health', 'dashboard', 'normal' ); // Site Health
	remove_meta_box ( 'dashboard_php_nag', 'dashboard', 'normal' ); // PHP nag
	remove_action ( 'welcome_panel', 'wp_welcome_panel' ); // Remove Welcome Panel

	// plugins
	unset($wp_meta_boxes['dashboard']['normal']['core']['yoast_db_widget']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['wpseo-dashboard-overview']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['zerospam_dashboard_widget']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['simple_history_dashboard_widget']);
	unset($wp_meta_boxes['dashboard']['side']['high']['wpa_dashboard_widget']);

	// TODO : Add unwated plugins
} );
