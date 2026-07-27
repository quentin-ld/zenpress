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
        'Author archive URLs show a 404 Page Not Found response. Prevents listing all posts by a specific author and hides usernames from the URL structure.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'ecommerce'],
];
