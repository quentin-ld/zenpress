<?php
/**
 * Metadata for disable-login-language-selector.php
 *
 * @since 1.0.9
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable the Login Language Selector', 'zenpress'),
    'description' => __('Removes the language dropdown from the WordPress login page. Simplifies login screen and reduces distractions.', 'zenpress'),
    'category' => __('User interface 💻️', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
