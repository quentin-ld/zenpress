<?php

/**
 * Hide WordPress version from HTTP headers, scripts, and styles
 *
 * This function removes the WordPress version number from the HTML head (via
 * the `wp_generator` meta tag), the `the_generator` filter, and from
 * the URLs of scripts and styles. This helps improve security by preventing
 * attackers from easily identifying the version of WordPress you're using,
 * which could be targeted for known vulnerabilities.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

remove_action('wp_head', 'wp_generator');

add_filter('the_generator', 'zenpress_remove_wordpress_version');
function zenpress_remove_wordpress_version() {
    return '';
}

// Remove WordPress version from scripts and styles
add_filter('style_loader_src', 'zenpress_remove_version_from_style_js');
add_filter('script_loader_src', 'zenpress_remove_version_from_style_js');
function zenpress_remove_version_from_style_js($src) {
    if (strpos($src, 'ver=' . get_bloginfo('version'))) {
        $src = remove_query_arg('ver', $src);
    }

    return $src;
}
