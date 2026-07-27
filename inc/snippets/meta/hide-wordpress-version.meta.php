<?php
/**
 * Metadata for hide-wordpress-version.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Hide WordPress version', 'zenpress'),
    'description' => __('Removes the WordPress version number from the HTML head, RSS feeds, and asset URLs. Prevents the version from being visible in page source and enqueued file URLs.', 'zenpress'),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
