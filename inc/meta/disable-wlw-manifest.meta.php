<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable the Windows Live Writer (WLW) manifest link', 'zenpress'),
    'description' => __('Removes the WLW manifest link from the `<head>` section of WordPress pages. The WLW manifest is used by the Windows Live Writer application to connect to WordPress, and removing it can help reduce unnecessary metadata in the HTML head.', 'zenpress'),
    'category'    => __('Performance', 'zenpress'),
];
