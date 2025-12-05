<?php
/**
 * Metadata for disable-author-archives.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable author archives', 'zenpress'),
    'description' => __(
        'Forces author archive pages to return a 404 error. Prevents user enumeration and hides unnecessary author pages.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'ecommerce'],
];
