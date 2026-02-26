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
    'title' => __('Disable jQuery Migrate script', 'zenpress'),
    'description' => __(
        'Loads jQuery Migrate only in the admin, not on the front. Improves front-end performance.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
