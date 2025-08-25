<?php
/**
 * Hide WooCommerce version from HTTP headers, scripts, and styles.
 *
 * Removes the WooCommerce version number from HTTP headers
 * and prevents it from being exposed in the URLs of scripts and styles.
 * Improves security by making it harder for attackers to identify
 * which WooCommerce version is in use.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

if (class_exists('WooCommerce') && !is_admin()) {
    // Remove WooCommerce version from HTTP headers
    add_filter('wp_headers', 'zenpress_remove_woocommerce_version');
    function zenpress_remove_woocommerce_version($headers) {
        if (isset($headers['X-WooCommerce-Version'])) {
            unset($headers['X-WooCommerce-Version']);
        }

        return $headers;
    }

    // Remove WooCommerce version from script and style URLs
    add_filter('style_loader_src', 'zenpress_remove_woocommerce_version_scripts_styles', 10);
    add_filter('script_loader_src', 'zenpress_remove_woocommerce_version_scripts_styles', 10);
    function zenpress_remove_woocommerce_version_scripts_styles($src) {
        if (strpos($src, 'ver=') !== false && strpos($src, 'woocommerce') !== false) {
            $src = remove_query_arg('ver', $src);
        }

        return $src;
    }
}
