<?php
/**
 * Metadata for the "Disable DNS prefetch" snippet.
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable DNS prefetch', 'zenpress'),
    'description' => __(
        'Removes DNS prefetch resource hints from the wp_head, which can reduce unnecessary DNS lookups for some websites.',
        'zenpress'
    ),
    'category' => __('Performance', 'zenpress'),
];
