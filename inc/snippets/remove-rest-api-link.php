<?php

if (!defined('ABSPATH')) {
    exit;
}

remove_action('wp_head', 'rest_output_link_wp_head', 10);
