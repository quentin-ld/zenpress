<?php


/**
 * Cleans up the WordPress Admin Bar
 *
 * This function removes redundant or unnecessary items from the WordPress Admin Bar,
 * both in the backend and frontend. By cleaning up the Admin Bar, you can streamline
 * the admin experience and improve performance.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) die();

add_action('admin_bar_menu', function ($wp_admin_bar) {
	global $wp_admin_bar;

	/**
	 * * BACKEND **
	 */
	// remove WP logo and subsequent drop-down menu
	// $wp_admin_bar->remove_node('wp-logo');

	// remove View Site text
	// $wp_admin_bar->remove_node('view-site');

	// remove "+ New" drop-down menu
	$wp_admin_bar->remove_node('new-content');

	// remove Comments
	$wp_admin_bar->remove_node('comments');

	// remove plugin updates count
	$wp_admin_bar->remove_node('updates');

	$wp_admin_bar->remove_node('wpseo-menu');

	/**
	 * * FRONTEND **
	 */
	// remove Dashboard link
	$wp_admin_bar->remove_node('dashboard');

	// remove Themes, Widgets, Menus, Header links
	$wp_admin_bar->remove_node('appearance');
}, 99);
