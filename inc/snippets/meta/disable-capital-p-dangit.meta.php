<?php
/**
 * Metadata for disable-capital-p-dangit.php
 *
 * @since 2.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable "WordPress" spelling correction', 'zenpress'),
    'description' => __(
        'Stops WordPress from changing "Wordpress" to "WordPress" in content. Saves a small amount of work on each page.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
