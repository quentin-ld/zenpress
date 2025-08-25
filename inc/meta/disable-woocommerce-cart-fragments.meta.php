<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable WooCommerce cart fragments script', 'zenpress'),
    'description' => __('Removes the WooCommerce cart fragments JavaScript, which is responsible for dynamically updating the cart contents on the page without reloading. Disabling this script can improve performance, especially for stores that do not require the dynamic cart updates on the frontend.', 'zenpress'),
    'category'    => __('WooCommerce', 'zenpress'),
];
