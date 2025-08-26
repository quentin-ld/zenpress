<?php
/**
 * Metadata for "Hide WooCommerce version from HTTP headers, scripts, and styles".
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Hide WooCommerce version from HTTP headers, scripts, and styles', 'zenpress'),
    'description' => __('Removes the WooCommerce version number from HTTP headers and from script/style URLs, improving security by preventing version disclosure.', 'zenpress'),
    'category' => __('WooCommerce 🛒', 'zenpress'),
];
