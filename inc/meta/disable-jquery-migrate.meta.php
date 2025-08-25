<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable jQuery Migrate on the frontend', 'zenpress'),
    'description' => __('Removes jQuery Migrate script from loading on the frontend of the website to improve performance while keeping it enabled in the admin area.', 'zenpress'),
    'category'    => __('Performance', 'zenpress'),
];
