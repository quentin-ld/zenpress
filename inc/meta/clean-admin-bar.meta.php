<?php
/**
 * Metadata for the "Clean up the WordPress Admin Bar" snippet.
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Clean up the WordPress Admin Bar', 'zenpress'),
    'description' => __(
        'Removes redundant or unnecessary items from the WordPress Admin Bar, both in the backend and frontend. This streamlines the admin experience and improves usability.',
        'zenpress'
    ),
    'category' => __('User interface 💻️', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
