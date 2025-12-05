<?php
/**
 * Metadata for disable-woocommerce-widgets.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable WooCommerce widgets', 'zenpress'),
    'description' => __('Unregisters default WooCommerce widgets to reduce bloat in the widget screen and improve performance by removing unused features.', 'zenpress'),
    'category' => __('woocommerce', 'zenpress'),
    'weight' => 0,
    'preset' => ['ecommerce'],
];
