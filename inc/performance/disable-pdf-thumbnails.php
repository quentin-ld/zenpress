<?php

/**
 * Disable PDF thumbnails
 *
 * This function Disable the generation of PDF thumbnails by filtering
 * out the fallback image sizes, which helps in improving performance
 * by avoiding the creation of unnecessary image files for PDFs.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

add_filter(
    'fallback_intermediate_image_sizes',
    function () {
        return [];
    }
);
