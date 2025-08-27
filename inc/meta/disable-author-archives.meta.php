<?php
/**
 * Metadata for the "Disable author archives and redirect to 404" snippet.
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable author archives and redirect to 404', 'zenpress'),
    'description' => __(
        'Disable author archive pages by redirecting them to a 404 page. This helps improve security by preventing attackers from gathering information about authors and their posts.',
        'zenpress'
    ),
    'category' => __('Security 🔒️', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'ecommerce'],
];
