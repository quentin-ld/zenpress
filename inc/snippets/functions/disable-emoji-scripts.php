<?php

if (!defined('ABSPATH')) {
    exit;
}

// Remove emoji detection script.
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');

// Remove emoji styles.
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Remove emoji filters.
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

// Disable emoji SVG URL.
add_filter('emoji_svg_url', '__return_false');

// Remove emoji support from TinyMCE editor.
add_filter('tiny_mce_plugins', static function (array $plugins): array {
    return array_diff($plugins, ['wpemoji']);
});
