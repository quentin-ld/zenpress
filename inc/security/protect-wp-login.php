<?php

/**
 * Protect the wp-login form from brute force attacks
 *
 * This function adds a layer of protection to the WordPress login form by:
 * - Removing detailed login error messages to prevent attackers from knowing if the username or password is incorrect.
 * - Limiting login attempts per IP address and blocking further attempts after a certain number of failed logins,
 *   for a specified duration (e.g., 5 minutes). After this time, the IP address is allowed to attempt logging in again.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

add_filter('login_errors', function () {
    return __('Login error.', 'zenpress');
});

add_filter('authenticate', 'zenpress_login_protection', 30, 3);
function zenpress_login_protection(mixed $user, string $username, string $password): mixed {
    $MAX_LOGIN_ATTEMPTS = 5;
    $BLOCK_DURATION = 30; // 5 minutes

    $ipAddress = isset($_SERVER['REMOTE_ADDR']) ?
        filter_var(wp_unslash($_SERVER['REMOTE_ADDR']), FILTER_VALIDATE_IP) : 'unknown';

    $transientKey = 'zenpress_login_block_' . $ipAddress;
    if ($user instanceof WP_User) {
        delete_transient($transientKey);

        return $user;
    }
    if (get_transient($transientKey)) {
        header('HTTP/1.0 403 Forbidden');
        die('Access Denied');
    }
    $attemptsData = get_transient('zenpress_login_attempts_' . $ipAddress);
    $attempts = $attemptsData['count'] ?? 0;
    $attempts++;
    if ($attempts > $MAX_LOGIN_ATTEMPTS) {
        set_transient($transientKey, true, $BLOCK_DURATION);
        header('HTTP/1.0 403 Forbidden');
        die('Access Denied');
    }
    set_transient('zenpress_login_attempts_' . $ipAddress, ['count' => $attempts], $BLOCK_DURATION);

    return $user;
}
