<?php

if (!defined('ABSPATH')) {
    exit;
}

add_filter('fallback_intermediate_image_sizes', static function () {
    return [];
});
