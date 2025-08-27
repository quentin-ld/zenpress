<?php
/**
 * Metadata for the "Block user enumeration" snippet.
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Block user enumeration', 'zenpress'),
    'description' => __(
        'Prevents attackers from enumerating users via query-string and permalink-style author URLs.',
        'zenpress'
    ),
    'category' => __('Security 🔒️', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
