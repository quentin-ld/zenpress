<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable Dashicons for non-logged-in users', 'zenpress'),
    'description' => __('Prevents WordPress from loading the Dashicons CSS for visitors who are not logged in, which can improve frontend performance.', 'zenpress'),
    'category'    => __('Performance', 'zenpress'),
];
