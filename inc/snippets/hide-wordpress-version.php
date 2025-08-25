<?php
/**
 * Hide WordPress version from HTTP headers, scripts, and styles.
 *
 * Removes the WordPress version number from the HTML head (via the
 * wp_generator meta tag), the the_generator filter, and from the URLs
 * of scripts and styles. This improves security by preventing attackers
 * from easily identifying the WordPress version in use.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
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
