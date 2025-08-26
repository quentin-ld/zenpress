<?php
/**
 * Metadata for "Disable WooCommerce widgets".
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable WooCommerce widgets', 'zenpress'),
    'description' => __('Unregisters default WooCommerce widgets such as cart, product filters, and product listings, improving performance by reducing unnecessary widget loading.', 'zenpress'),
    'category' => __('WooCommerce 🛒', 'zenpress'),
];
