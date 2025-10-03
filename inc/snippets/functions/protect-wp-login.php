<?php

if (!defined('ABSPATH')) {
    exit;
}

// Remove detailed login errors
add_filter('login_errors', static function () {
    return __('Login error.', 'zenpress');
});

// Limit login attempts
add_filter('authenticate', static function (mixed $user, string $username, string $password): mixed {
    $MAX_LOGIN_ATTEMPTS = 5;
    $BLOCK_DURATION = 300; // 5 minutes

    $ipAddress = isset($_SERVER['REMOTE_ADDR'])
        ? filter_var(wp_unslash($_SERVER['REMOTE_ADDR']), FILTER_VALIDATE_IP)
        : 'unknown';

    $blockKey = 'zenpress_login_block_' . $ipAddress;
    $attemptKey = 'zenpress_login_attempts_' . $ipAddress;

    // Successful login clears attempts
    if ($user instanceof WP_User) {
        delete_transient($blockKey);
        delete_transient($attemptKey);

        return $user;
    }

    // Check if blocked
    if (get_transient($blockKey)) {
        wp_die(
            esc_html__('Too many failed login attempts. Try again later.', 'zenpress'),
            403
        );
    }

    // Track failed attempts
    $attemptsData = get_transient($attemptKey);
    $attempts = $attemptsData['count'] ?? 0;
    $attempts++;

    if ($attempts > $MAX_LOGIN_ATTEMPTS) {
        set_transient($blockKey, true, $BLOCK_DURATION);
        wp_die(
            esc_html__('Too many failed login attempts. Try again later.', 'zenpress'),
            403
        );
    }

    set_transient($attemptKey, ['count' => $attempts], $BLOCK_DURATION);

    return $user;
}, 30, 3);
