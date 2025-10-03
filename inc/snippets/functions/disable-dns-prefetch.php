<?php

if (!defined('ABSPATH')) {
    exit;
}

remove_action('wp_head', 'wp_resource_hints', 2);
