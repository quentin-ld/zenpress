<?php
/**
 * Metadata for "Disable WooCommerce cart fragments script".
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable WooCommerce cart fragments script', 'zenpress'),
    'description' => __('Removes the WooCommerce cart fragments JavaScript responsible for dynamically updating cart contents, improving performance when live cart updates are unnecessary.', 'zenpress'),
    'category' => __('WooCommerce', 'zenpress'),
];
