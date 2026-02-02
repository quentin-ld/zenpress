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
    'title' => __('Disable capital_P_dangit filter', 'zenpress'),
    'description' => __(
        'Removes the filter that forces "Wordpress" to "WordPress" in titles, content, comments, and widget text. Saves a small amount of processing on each page load.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
