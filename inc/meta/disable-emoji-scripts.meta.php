<?php
/**
 * Metadata for the "Disable WordPress emoji scripts and styles" snippet.
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable WordPress emoji scripts and styles', 'zenpress'),
    'description' => __(
        'Removes all emoji-related scripts, styles, and filters from both frontend and admin areas to improve performance.',
        'zenpress'
    ),
    'category' => __('Performance', 'zenpress'),
];
