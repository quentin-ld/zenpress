<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable WooCommerce scripts and styles on non-WooCommerce pages', 'zenpress'),
    'description' => __('Dequeues the WooCommerce scripts and styles on pages where WooCommerce functionality is not required, such as the homepage, blog posts, or other custom pages. This helps improve site performance by preventing the unnecessary loading of WooCommerce assets.', 'zenpress'),
    'category'    => __('WooCommerce', 'zenpress'),
];
