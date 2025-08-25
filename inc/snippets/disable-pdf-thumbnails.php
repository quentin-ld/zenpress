<?php

/**
* Title : Disable PDF thumbnails
* Category : Performance
* Description : Disable the generation of PDF thumbnails by filtering out the fallback image sizes, which helps in improving performance by avoiding the creation of unnecessary image files for PDFs.
*
* @return void
* @since 1.0.0
*/

if (!defined('ABSPATH')) {
    die();
}

$snippet_metadata = [
    'title' => __('Disable PDF thumbnails', 'zenpress'),
    'description' => __('Disable the generation of PDF thumbnails by filtering out the fallback image sizes, which helps in improving performance by avoiding the creation of unnecessary image files for PDFs.', 'zenpress'),
    'category' => __('Performance', 'zenpress')
];

add_filter(
    'fallback_intermediate_image_sizes',
    function () {
        return [];
    }
);
