<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Remove all default pattern categories from the site editor.
 *
 * This prevents pattern categories from appearing in the block pattern inserter,
 * simplifying the interface and reducing clutter.
 */
add_action('init', static function (): void {
    if (!class_exists('WP_Block_Pattern_Categories_Registry')) {
        return;
    }

    $registry = WP_Block_Pattern_Categories_Registry::get_instance();

    $default_categories = [
        'featured',
        'about',
        'audio',
        'banner',
        'buttons',
        'call-to-action',
        'columns',
        'contact',
        'footer',
        'gallery',
        'header',
        'media',
        'portfolio',
        'posts',
        'query',
        'services',
        'team',
        'testimonials',
        'text',
        'videos',
    ];

    foreach ($default_categories as $category) {
        if ($registry->is_registered($category)) {
            unregister_block_pattern_category($category);
        }
    }

    $all_categories = $registry->get_all_registered();
    foreach ($all_categories as $category_slug => $category_data) {
        if ($registry->is_registered($category_slug)) {
            unregister_block_pattern_category($category_slug);
        }
    }
}, 20);

