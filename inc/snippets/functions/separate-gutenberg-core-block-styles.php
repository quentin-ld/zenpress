<?php

if (!defined('ABSPATH')) {
    exit;
}

add_filter('should_load_separate_core_block_assets', '__return_true');
