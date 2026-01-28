<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_bar_menu', static function (WP_Admin_Bar $wp_admin_bar): void {
    $wp_admin_bar->remove_node('wp-logo');
}, 99);
