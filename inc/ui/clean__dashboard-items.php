<?php

/**
 * Remove redundant items from the WordPress Dashboard
 *
 * This function removes various default and plugin-related widgets from the WordPress dashboard,
 * including the Quick Press widget, Incoming Links, and the Welcome Panel. This helps declutter
 * the Dashboard, improving both performance and usability.
 *
 * The dashboard is designed to display important information about your website, not to promote advertising.
 * I'll remove what I think is irrelevant for that purpose.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

// Clean Dashboard
add_action('wp_dashboard_setup', function () {

    /*
    ** CORE
    */
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side'); // Quick Press widget
    remove_meta_box('dashboard_primary', 'dashboard', 'side'); // WordPress.com Blog
    remove_meta_box('dashboard_secondary', 'dashboard', 'side'); // Other WordPress News
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); // Incoming Links
    remove_action('welcome_panel', 'wp_welcome_panel'); // Remove Welcome Panel

    /*
    ** PLUGINS
    */
    // TODO : Add unwanted plugins dashboard widget
    remove_meta_box('wpseo-dashboard-overview', 'dashboard', 'normal'); // Yoast SEO Widget
    remove_meta_box('wpseo-wincher-dashboard-overview', 'dashboard', 'normal'); // Wincher advertising widget
    remove_meta_box('wpa_dashboard_widget', 'dashboard', 'side'); // WP Armour Pro advertising widget
    remove_meta_box('wpexplorer_dashboard_widget', 'dashboard', 'normal'); // HSTSWP Donation widget
    remove_meta_box('dashboard_rediscache', 'dashboard', 'normal'); // Redis Object Cache Pro advertising widget
    remove_meta_box('arve_dashboard_widget', 'dashboard', 'normal'); // AARVE advertising widget
});
