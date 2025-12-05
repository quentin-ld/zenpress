<?php
/**
 * Metadata for hide-woocommerce-version.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Hide WordPress version', 'zenpress'),
    'description' => __('Removes WordPress version info from the head, generator, and asset URLs. Reduces exposure of version number and makes it harder for attackers to target specific WordPress versions.', 'zenpress'),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
