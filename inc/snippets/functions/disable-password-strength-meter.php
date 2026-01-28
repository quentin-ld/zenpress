<?php

if (!defined('ABSPATH')) {
    exit;
}

$zenpress_dequeue_password_strength = static function (): void {
    wp_dequeue_script('password-strength-meter');
    wp_dequeue_script('zxcvbn-async');
};

add_action('wp_enqueue_scripts', $zenpress_dequeue_password_strength, 100);
add_action('admin_enqueue_scripts', $zenpress_dequeue_password_strength, 100);
add_action('login_enqueue_scripts', $zenpress_dequeue_password_strength, 100);
