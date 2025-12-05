<?php
/**
 * Metadata for disable-default-pattern-categories.php
 *
 * @since 2.1.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable default pattern categories in site editor', 'zenpress'),
    'description' => __('Removes default pattern categories from the block pattern inserter in the site editor. Disables default categories: featured, about, audio, banner, buttons, call-to-action, columns, contact, footer, gallery, header, media, portfolio, posts, query, services, team, testimonials, text, videos, and any custom categories. This simplifies the interface by hiding category navigation while patterns remain accessible.', 'zenpress'),
    'category' => __('gutenberg', 'zenpress'),
    'subcategory' => __('user-interface', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];

