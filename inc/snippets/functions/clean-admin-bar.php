<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action(
    'admin_bar_menu',
    static function (WP_Admin_Bar $wp_admin_bar): void {
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
