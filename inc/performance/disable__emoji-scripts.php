<?php

/**
 * Disable WordPress emoji scripts and styles
 *
 * This function removes all emoji-related scripts, styles, and filters
 * from both frontend and admin areas to improve performance.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

// Remove emoji detection script
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');

// Remove emoji styles
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Remove emoji filters
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

// Disable emoji SVG URL
add_filter('emoji_svg_url', '__return_false');

// Remove emoji from TinyMCE
add_filter('tiny_mce_plugins', function ($plugins) {
    return array_diff($plugins, ['wpemoji']);
});
