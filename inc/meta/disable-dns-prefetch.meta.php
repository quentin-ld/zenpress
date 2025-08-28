<?php
/**
 * Metadata for disable-dns-prefetch.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable DNS prefetch', 'zenpress'),
    'description' => __(
        'Removes DNS prefetch resource hints from wp_head avoids unnecessary DNS lookups and slightly improve performance on some sites.',
        'zenpress'
    ),
    'category' => __('Performance 🚀', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
