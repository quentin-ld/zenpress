<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable WooCommerce widgets', 'zenpress'),
    'description' => __('Disable various WooCommerce widgets that are typically registered by default. By unregistering these widgets, you can improve site performance by preventing the loading of unnecessary widgets on the frontend.', 'zenpress'),
    'category'    => __('WooCommerce', 'zenpress'),
];
