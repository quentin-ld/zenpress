<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable WordPress shortlink generation', 'zenpress'),
    'description' => __('Removes the shortlink functionality in WordPress by disabling both the header and template redirect actions that output the shortlink. This can improve performance slightly by reducing unnecessary HTTP headers and meta tags.', 'zenpress'),
    'category'    => __('Performance', 'zenpress'),
];
