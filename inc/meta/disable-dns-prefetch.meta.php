<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable DNS prefetch', 'zenpress'),
    'description' => __('Removes DNS prefetch resource hints from the wp_head, which can reduce unnecessary DNS lookups for some websites.', 'zenpress'),
    'category'    => __('Performance', 'zenpress'),
];
