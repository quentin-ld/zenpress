<?php
/**
 * Metadata for disable-wordpress-default-lazy-loading.php
 *
 * @since 2.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable default lazy loading for images', 'zenpress'),
    'description' => __(
        'Stops WordPress from adding loading="lazy" to images and iframes. Use only if you rely on a theme, plugin, or CDN for lazy loading, or if you prefer to load all media immediately.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];
