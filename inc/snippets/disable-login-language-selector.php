<?php

if (!defined('ABSPATH')) {
    exit;
}

add_filter('login_display_language_dropdown', '__return_false');
