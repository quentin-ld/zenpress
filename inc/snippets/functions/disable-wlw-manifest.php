<?php

if (!defined('ABSPATH')) {
    exit;
}

remove_action('wp_head', 'wlwmanifest_link');
