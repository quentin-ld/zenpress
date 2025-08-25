<?php
/**
 * Metadata for the "Disable jQuery Migrate on the frontend" snippet.
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable jQuery Migrate on the frontend', 'zenpress'),
    'description' => __(
        'Removes jQuery Migrate script from loading on the frontend of the website to improve performance while keeping it enabled in the admin area.',
        'zenpress'
    ),
    'category' => __('Performance', 'zenpress'),
];
