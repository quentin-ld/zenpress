<?php

if (!defined('ABSPATH')) {
    exit;
}

add_filter('wp_revisions_to_keep', static function (int $num, WP_Post $post): int {
    return 10;
}, 10, 2);
