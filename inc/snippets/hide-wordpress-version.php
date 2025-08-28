<?php

if (!defined('ABSPATH')) {
    exit;
}

// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');

// Remove WordPress version from generator
add_filter('the_generator', 'zenpress_remove_wordpress_version');
function zenpress_remove_wordpress_version() {
    return '';
}

// Remove WordPress version from script and style URLs
add_filter('style_loader_src', 'zenpress_remove_version_from_assets');
add_filter('script_loader_src', 'zenpress_remove_version_from_assets');
function zenpress_remove_version_from_assets($src) {
    if (strpos($src, 'ver=' . get_bloginfo('version')) !== false) {
        $src = remove_query_arg('ver', $src);
    }

    return $src;
}
