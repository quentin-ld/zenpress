<?php
/**
 * Clean up the WordPress Admin Bar.
 *
 * Removes redundant or unnecessary items from the WordPress Admin Bar,
 * both in the backend and frontend. This streamlines the admin experience
 * and can slightly improve performance.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

add_action(
    'admin_bar_menu',
    static function ($wp_admin_bar) {
        if (!($wp_admin_bar instanceof WP_Admin_Bar)) {
            return;
        }

        /**
         * Backend clean-up.
         */
        $wp_admin_bar->remove_node('new-content'); // "+ New" drop-down.
        $wp_admin_bar->remove_node('comments');    // Comments shortcut.
        $wp_admin_bar->remove_node('updates');     // Updates count.
        $wp_admin_bar->remove_node('wpseo-menu');  // Yoast SEO menu (if present).

        /**
         * Frontend clean-up.
         */
        $wp_admin_bar->remove_node('dashboard');   // Dashboard link.
        $wp_admin_bar->remove_node('appearance');  // Themes, Widgets, Menus, Header links.
    },
    99
);
