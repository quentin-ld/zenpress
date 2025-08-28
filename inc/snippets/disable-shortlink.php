<?php

if (!defined('ABSPATH')) {
    exit;
}

remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('template_redirect', 'wp_shortlink_header', 11);
