<?php
/**
 * Metadata for disable-author-archives.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable author archives', 'zenpress'),
    'description' => __(
        'Author archive URLs show "Page not found." Helps prevent listing usernames.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'ecommerce'],
];
