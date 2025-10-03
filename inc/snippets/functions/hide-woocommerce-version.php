<?php

if (!defined('ABSPATH')) {
    exit;
}

if (class_exists('WooCommerce') && !is_admin()) {
    // Remove WooCommerce version from HTTP headers
    add_filter('wp_headers', static function ($headers) {
        if (isset($headers['X-WooCommerce-Version'])) {
            unset($headers['X-WooCommerce-Version']);
        }

        return $headers;
    });

    // Remove WooCommerce version from style URLs
    add_filter('style_loader_src', static function ($src) {
        if (strpos($src, 'ver=') !== false && strpos($src, 'woocommerce') !== false) {
            $src = remove_query_arg('ver', $src);
        }

        return $src;
    }, 10);

    // Remove WooCommerce version from script URLs
    add_filter('script_loader_src', static function ($src) {
        if (strpos($src, 'ver=') !== false && strpos($src, 'woocommerce') !== false) {
            $src = remove_query_arg('ver', $src);
        }

        return $src;
    }, 10);
}
