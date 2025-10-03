<?php

if (!defined('ABSPATH')) {
    exit;
}

// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');

// Remove WordPress version from generator
add_filter('the_generator', static function () {
    return '';
});

// Remove WordPress version from script URLs
add_filter('script_loader_src', static function ($src) {
    if (strpos($src, 'ver=' . get_bloginfo('version')) !== false) {
        $src = remove_query_arg('ver', $src);
    }

    return $src;
});

// Remove WordPress version from style URLs
add_filter('style_loader_src', static function ($src) {
    if (strpos($src, 'ver=' . get_bloginfo('version')) !== false) {
        $src = remove_query_arg('ver', $src);
    }

    return $src;
});
