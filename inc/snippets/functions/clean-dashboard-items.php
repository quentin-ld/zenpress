<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action(
    'wp_dashboard_setup',
    static function (): void {
        /**
         * Core widgets.
         */
        remove_meta_box('dashboard_quick_press', 'dashboard', 'side');    // Quick Draft.
        remove_meta_box('dashboard_primary', 'dashboard', 'side');        // WordPress.com Blog.
        remove_meta_box('dashboard_secondary', 'dashboard', 'side');      // Other WordPress News.
        remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); // Incoming Links.
        remove_meta_box('dashboard_site_health', 'dashboard', 'normal');  // Site Health.
        remove_action('welcome_panel', 'wp_welcome_panel');               // Welcome Panel.

        /**
         * Plugin widgets.
         */
        remove_meta_box('wpseo-dashboard-overview', 'dashboard', 'normal');         // Yoast SEO.
        remove_meta_box('wpseo-wincher-dashboard-overview', 'dashboard', 'normal'); // Wincher ads.
        remove_meta_box('wpa_dashboard_widget', 'dashboard', 'side');               // WP Armour Pro.
        remove_meta_box('wpexplorer_dashboard_widget', 'dashboard', 'normal');      // HSTSWP donation.
        remove_meta_box('dashboard_rediscache', 'dashboard', 'normal');             // Redis Object Cache Pro.
        remove_meta_box('arve_dashboard_widget', 'dashboard', 'normal');            // ARVE.
        remove_meta_box('wpforms_reports_widget_lite', 'dashboard', 'normal');      // WPForms Lite.
        remove_meta_box('wp_mail_smtp_reports_widget_lite', 'dashboard', 'normal'); // WP Mail SMTP Lite.
        remove_meta_box('wc_admin_dashboard_setup', 'dashboard', 'normal');         // WooCommerce setup.
        remove_meta_box('sb_dashboard_widget', 'dashboard', 'normal');              // Unknown plugin widget.
    },
    99
);
