<?php
/**
 * Metadata for disable-jquery-migrate.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable jQuery migrate', 'zenpress'),
    'description' => __(
        'Removes jQuery Migrate from loading on the frontend while keeping it enabled in the admin. Improves frontend performance and reduces legacy overhead.',
        'zenpress'
    ),
    'category' => __('Performance 🚀', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
