<?php

if (!defined('ABSPATH')) {
    exit;
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
