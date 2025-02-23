<?php

/*
Snippet Name: Protect wp-login form
Version: 1.0.0
Tag(s): Security
Description: 
*/


if (!defined('ABSPATH')) die();

// Remove login error message
add_filter('login_errors', function() {
    return 'Erreur de connexion.';
});

// Limit login attempts based on IP
add_filter('authenticate', 'ripperdoc_login_protection', 30, 3);
function ripperdoc_login_protection(mixed $user, string $username, string $password): mixed {
    $MAX_LOGIN_ATTEMPTS = 5;
    $BLOCK_DURATION = 30; // 5 minutes
    $TRANSIENT_PREFIX = 'login_block_';

    $ipAddress = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP) ?? 'unknown';
    $transientKey = $TRANSIENT_PREFIX . $ipAddress;

    if ($user instanceof WP_User) {
        delete_transient($transientKey);
        return $user;
    }

    if (get_transient($transientKey)) {
        header('HTTP/1.0 403 Forbidden');
        die('Access Denied');
    }

    $attemptsData = get_transient('login_attempts_' . $ipAddress);
    $attempts = $attemptsData['count'] ?? 0;
    $attempts++;

    if ($attempts > $MAX_LOGIN_ATTEMPTS) {
        set_transient($transientKey, true, $BLOCK_DURATION);
        header('HTTP/1.0 403 Forbidden');
        die('Access Denied');
    }

    // Store attempts
    set_transient('login_attempts_' . $ipAddress, ['count' => $attempts], $BLOCK_DURATION);

    return $user;
}