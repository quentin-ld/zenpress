<?php

/**
 * Hide WooCommerce version from HTTP headers, scripts, and styles
 *
 * This function removes the WooCommerce version number from the HTTP headers,
 * and prevents the version from being exposed in the URLs of scripts and styles.
 * This helps improve security by preventing attackers from easily identifying
 * the version of WooCommerce you're using, which could be targeted for exploits.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

if (class_exists('woocommerce') && !is_admin()) {
    // Hide WooCommerce version from HTTP headers
    add_filter('wp_headers', 'zenpress_remove_woocommerce_version');
    function zenpress_remove_woocommerce_version($headers) {
        if (isset($headers['X-WooCommerce-Version'])) {
            unset($headers['X-WooCommerce-Version']);
        }

        return $headers;
    }

    // Remove WooCommerce version from scripts and styles URLs
    add_filter('style_loader_src', 'zenpress_remove_woocommerce_version_scripts_styles', 10);
    add_filter('script_loader_src', 'zenpress_remove_woocommerce_version_scripts_styles', 10);
    function zenpress_remove_woocommerce_version_scripts_styles($src) {
        if (strpos($src, 'ver=') && strpos($src, 'woocommerce')) {
            $src = remove_query_arg('ver', $src);
        }

        return $src;
    }
}
