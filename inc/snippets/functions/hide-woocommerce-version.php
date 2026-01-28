<?php

if (!defined('ABSPATH')) {
    exit;
}

if (class_exists('WooCommerce') && !is_admin()) {
    // Remove WooCommerce version from HTTP headers
    add_filter('wp_headers', static function (array $headers): array {
        unset($headers['X-WooCommerce-Version']);

        return $headers;
    });

    // Remove WooCommerce version from style URLs
    add_filter('style_loader_src', static function (string $src): string {
        if (str_contains($src, 'ver=') && str_contains($src, 'woocommerce')) {
            $src = remove_query_arg('ver', $src);
        }

        return $src;
    }, 10);

    // Remove WooCommerce version from script URLs
    add_filter('script_loader_src', static function (string $src): string {
        if (str_contains($src, 'ver=') && str_contains($src, 'woocommerce')) {
            $src = remove_query_arg('ver', $src);
        }

        return $src;
    }, 10);
}
