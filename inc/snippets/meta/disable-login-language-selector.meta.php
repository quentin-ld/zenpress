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
    'title' => __('Disable login language selector', 'zenpress'),
    'description' => __('Removes the language dropdown from the WordPress login page. The login screen shows the site language without offering a language selection option.', 'zenpress'),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('user-interface', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
