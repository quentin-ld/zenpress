<?php

if (!defined('ABSPATH')) {
    die();
}

return [
    'title'       => __('Disable PDF thumbnails', 'zenpress'),
    'description' => __('Disable the generation of PDF thumbnails by filtering out the fallback image sizes, which helps in improving performance by avoiding the creation of unnecessary image files for PDFs.', 'zenpress'),
    'category'    => __('Performance', 'zenpress'),
];
